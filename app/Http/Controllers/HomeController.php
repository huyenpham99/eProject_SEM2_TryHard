<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Blog;
use App\BlogCategory;
use App\Cart;
use App\Category;
use App\Comment;
use App\Donate;
use App\Event;
use App\Events\OrderCreated;
use App\Order;
use App\Product;
use App\Program;
use App\ProgramCategory;
use App\ProgramDetail;
use Carbon\Carbon;
use http\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use MicrosoftAzure\Storage\Blob\Models\Blob;
use function GuzzleHttp\Promise\all;
use function GuzzleHttp\Psr7\uri_for;
use function Symfony\Component\String\u;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category     = Category::all();
        $blog         = Blog::orderBy("view_count", 'desc')->limit(3)->get();
        $blogs = Blog::all();
        $blogcategory = BlogCategory::all();

        $products = Product::all();
        $banner   = Banner::all();
        $event    = Event::all();
        foreach ($event as $p) {
            $slug    = \Illuminate\Support\Str::slug($p->__get("event_name"));
            $p->slug = $slug . $p->__get("id");// luu lai vao DB
            $p->save();
        }
        $donate = Donate::all();
//         tao slug cho cac truong
        foreach ($category as $p) {
            $slug    = \Illuminate\Support\Str::slug($p->__get("category_name"));
            $p->slug = $slug . $p->__get("id");// luu lai vao DB
            $p->save();
        }
        foreach ($donate as $p) {
            $slug    = \Illuminate\Support\Str::slug($p->__get("donate_title"));
            $p->slug = $slug . $p->__get("id");// luu lai vao DB
            $p->save();
        }
        foreach ($blogcategory as $p) {
            $slug    = \Illuminate\Support\Str::slug($p->__get("blog_category_name"));
            $p->slug = $slug . $p->__get("id");// luu lai vao DB
            $p->save();
        }
//        Tạo slug Blog
        foreach ($blogs as $p){
            $slug    = \Illuminate\Support\Str::slug($p->__get("blog_title"));
            $p->slug = $slug . $p->__get("id");// luu lai vao DB
            $p->save();
        }
        //Tạo slug product
//        $most_viewer = Product::orderBy("view_count", "DESC")->limit(8)->get();
        foreach ($products as $p) {
            $slug    = \Illuminate\Support\Str::slug($p->__get("product_name"));
            $p->slug = $slug . $p->__get("id");// luu lai vao DB
            $p->save();
        }
//        dd($banner);
        return view("frontend.home", [
            "categories" => $category,
            "products" => $products,
            "blogs" => $blog,
            "banner" => $banner,
            "event" => $event,
        ]);
    }

    public function blog()
    {
        $blogs        = Blog::paginate(4);
        $blogcategory = BlogCategory::all();
        return view("frontend.blog", [
            "blogs" => $blogs,
            "blogcategory" => $blogcategory,
        ]);
    }

    public function blogdetail(Blog $blog)
{
    if (!session()->has("view_count_{$blog->__get("id")}")) {// kiểm tra xem sesion  nếu chưa có sẽ đăng lên
        $blog->increment("view_count");     // tự tăng lên 1 mỗi lần user ấn vào xem sản phẩm
        session(["view_count{$blog->__get("id")} => true"]);// lấy session ra 1 session sẽ có giá trị lưu giữ trong vòng 2 tiếng
    }
    $comments = Comment::with('blog')->simplePaginate(4);
    return view("frontend.blog-detail", [
        "blog" => $blog,
        "comments" => $comments,
    ]);
}

    public function saveComment(Request $request)
    {
        $id          = $request->get("id");
        $content     = $request->get("comment");
        $blog        = Blog::find($id);
        $currentUser = Auth::user();
        $name        = $currentUser->name;
        try {
            $comment = new Comment([
                'content' => $content,
                'comment_date' => Carbon::now('Asia/Ho_Chi_Minh'),
                'comment_user' => $name,
                'blog_id' => $request->get("blog_id"),
            ]);
            $blog->comments()->save($comment);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
        if ($request->ajax()) {

            $comments = $blog->comments;
            $output   = '';
            if ($comments) {
                $output = '
                    <li class="comment-add">
                        <div class="comment-container">
                        <div class="comment-author-vcard">
                    <img alt="" src="https://icdn.dantri.com.vn/thumb_w/640/2019/10/21/nu-sinh-bac-ninh-mac-dong-phuc-hut-anh-nhin-vi-nhan-sac-kha-aidocx-1571614826507.jpeg">
                     </div>
                     <div class="comment-author-info">
                     <span class="comment-author-name">' . $comment->comment_user . '</span>
                     <span class="comment-date">' . $comment->comment_date . '</span>
                     <p style="font-size: 16px">' . $comment->content . '</p>
                     </div></div>
                             </li>';

            }
        }
        return Response($output);
    }

    public function about()
    {
        return view("frontend.about");
    }

    public function shop(Category $category)
    {
        $products = $category->Products()->paginate(9);
        return view("frontend.shop", [
            "category" => $category,
            "products" => $products
        ]);
    }
    public function allShop(){
        $allshop = Product::paginate(9);
        return view("frontend.shopall",[
           "allshop" => $allshop,
        ]);
    }

    public function contact()
    {
        return view("frontend.contact");
    }

    public function productdetail(Product $product)
    {
        $products   = Product::paginate(4);
        $categories = Category::all();
        if (!session()->has("view_count_{$product->__get("id")}")) {// kiểm tra xem sesion  nếu chưa có sẽ đăng lên
            $product->increment("view_count");     // tự tăng lên 1 mỗi lần user ấn vào xem sản phẩm
            session(["view_count{$product->__get("id")} => true"]);// lấy session ra 1 session sẽ có giá trị lưu giữ trong vòng 2 tiếng
        }
        return view("frontend.product-detail", [
            "categories" => $categories,
            "product" => $product,
            "products" => $products,
        ]);
    }

    public function programcategory()
    {
        $programcategory = ProgramCategory::paginate(5);
        return view("frontend.programcategory", [
            "programcategory" => $programcategory,
        ]);
    }
    public function program($id)
    {
        $programcategory =ProgramCategory::limit(5)->get();
       $program = DB::table('program_detail')
                    ->select(DB::raw('program_detail.* '))
                    ->join('program', 'program.id', '=', 'program_detail.program_id')
                    ->join('programcategory', 'programcategory.id', '=', 'program.program_category_id')
                    ->where('programcategory.id','=', $id)
                    ->get();
        return view("frontend.program", [
            "program" => $program,
            "programcategory"=>$programcategory,
        ]);
    }
    public function programs_detail($id)
    {
        $programdetail = ProgramDetail::where('id',$id)->get();
        return view("frontend.programs-detail",[
            "programdetail"=>$programdetail
        ]);
    }

    public function program_detail(ProgramDetail $programDetail)
    {
        if (!session()->has("view_count_{$programDetail->__get("id")}")) {// kiểm tra xem sesion  nếu chưa có sẽ đăng lên
            $programDetail->increment("view_count");     // tự tăng lên 1 mỗi lần user ấn vào xem sản phẩm
            session(["view_count{$programDetail->__get("id")} => true"]);// lấy session ra 1 session sẽ có giá trị lưu giữ trong vòng 2 tiếng
        }
        return view("frontend.programs-detail", [
            "programDetail" => $programDetail,
        ]);
    }

//    public function sendMail(){
//        // function mail tạo sẵn sẽ làm sau khi render xong giao diện front-end blog và event
////        $currentUser = Auth::user(); // lấy user đăng nhập hiện tại
////        Mail::send('view mail chứa thông tin event',[array chứa dữ liệu render lấy dữ liệu event],function ($message){
////            $message->to(Auth::user()->__get("email"),Auth::user()->__get("name"))->subject('Thông báo về sự kiện ...  '.Auth::user()->__get("name"));
////        });
//    }
//    public function product(Product $product)
//    {
//        $category = Category::all();
//        $relativeProducts = Product::with("Category")->paginate(4);//nạp sẵn phần cần nạp trong collection, lấy theo kiểu quan hệ
//
//        return view("frontend.product-detail", [
//            "category" => $category,
//            "product" => $product,
//            "relativeProduct" => $relativeProducts,
//
//        ]);
//    }
//
    public function addToCart(Product $product, Request $request)
    {
        $qty     = $request->has("qty") && (int)$request->get("qty") > 0 ? (int)$request->get("qty") : 1;
        $myCart  = session()->has("my_cart") && is_array(session("my_cart")) ? session("my_cart") : [];
        $contain = false;
        if (Auth::check()) {
            if (Cart::where("user_id", Auth::id())->where("is_checkout", true)->exists()) {
                $cart = Cart::where("user_id", Auth::id())->where("is_checkout", true)->first();
            } else {
                $cart = Cart::create([
                    "user_id" => Auth::id(),
                    "is_checkout" => true
                ]);
            }
        }
        foreach ($myCart as $key => $item) {
            if ($item["product_id"] == $product->__get("id")) {
                $myCart[$key]["qty"] += $qty;
                $contain             = true;
                if (Auth::check()) {
                    DB::table("cart_products")->where("cart_id", $cart->__get("id"))
                        ->where("product_id", $item["product_id"])
                        ->update(["qty" => $myCart[$key]["qty"]]);
                }
                break;
            }
        }
        if (!$contain) {
            $myCart[] = [
                "product_id" => $product->__get("id"),
                "qty" => $qty
            ];
            if (Auth::check()) {
                DB::table("cart_products")->insert([
                    "qty" => $qty,
                    "cart_id" => $cart->__get("id"),
                    "product_id" => $product->__get("id")
                ]);
            }
        }
        session(["my_cart" => $myCart]);

        return redirect()->to("/shopping-cart");
    }

    public function shoppingCart()
    {
        $myCart     = session()->has("my_cart") && is_array(session("my_cart")) ? session("my_cart") : [];
        $productIds = [];
        foreach ($myCart as $item) {
            $productIds[] = $item["product_id"];
        }
        $grandTotal = 0;
        $products   = Product::find($productIds);
        foreach ($products as $p) {
            foreach ($myCart as $item) {
                if ($p->__get("id") == $item["product_id"]) {
                    $grandTotal  += ($p->__get("product_price") * $item["qty"]);
                    $p->cart_qty = $item["qty"];
                }
            }
        }
        return view("frontend.cart", [
            "products" => $products,
            "grandTotal" => $grandTotal
        ]);
    }

    public function checkout()
    {
        $cart = Cart::where("user_id", Auth::id())
            ->where("is_checkout", true)
            ->with("getItems")
            ->firstOrFail();
        return view("frontend.checkout", [
            "cart" => $cart
        ]);
    }

    public function placeOrder(Request $request)
    {
        $currentID = Auth::user()->id;
        $currentName = Auth::user()->name;
//        dd($request->all());
        $request->validate([
//            "username" => "required",
//            "address" => "required",
//            "telephone" => "required",
        ]);
        $cart = Cart::where("user_id", Auth::id())
            ->where("is_checkout", true)
            ->with("getItems")
            ->firstOrFail();
        $grandTotal = 0;
        foreach ($cart->getItems as $item) {
            $grandTotal += $item->pivot->__get("qty") * $item->__get("product_price");
        }
        try {
            $order = Order::create([
                "user_id" => Auth::id(),
                "username" => $request->get("username"),
                "address" => $request->get("address"),
                "telephone" => $request->get("telephone"),
                "email" => $request->get("email"),
                "note" => $request->get("note"),
                "grand_total" => $grandTotal,
                "status" => Order::PROCESS
            ]);
            foreach ($cart->getItems as $item) {
                DB::table("orders_products")->insert([
                    "order_id" => $order->__get("id"),
                    "product_id" => $item->__get("id"),
                    "product_price" => $item->__get("product_price"),
                    "qty" => $item->pivot->__get("qty")
                ]);
            }
            $myCart     = session()->has("my_cart") && is_array(session("my_cart")) ? session("my_cart") : [];
            $productIds = [];
            foreach ($myCart as $item) {
                $productIds[] = $item["product_id"];
            }
            $grandTotal = 0;
            $products   = Product::find($productIds);
            foreach ($products as $p) {
                foreach ($myCart as $item) {
                    if ($p->__get("id") == $item["product_id"]) {
                        $grandTotal  += ($p->__get("product_price") * $item["qty"]);
                        $p->cart_qty = $item["qty"];
                    }
                }
            }
            if($request->get("payment") === "vnpay"){
                session(['url_prev' => url()->previous()]);
                $vnp_TmnCode = "1P3HV4G2"; //Mã website tại VNPAY
                $vnp_HashSecret = "CICMOGOUKDUBWVSHPDSORUZMNWOXFLYJ"; //Chuỗi bí mật
                $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                $vnp_Returnurl = url("/return-vnpay");
                $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                $vnp_OrderInfo = "Khách Hàng ".$currentName." Thanh Toán Hóa Đơn Hàng HealthyFoods";
                $vnp_OrderType = 'billpayment';
                $vnp_Amount = $grandTotal * 100;
                $vnp_Locale = 'vn';
                $vnp_IpAddr = request()->ip();
                $inputData = array(
                    "vnp_Version" => "2.0.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => $vnp_OrderType,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef,
                );

                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }
                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . $key . "=" . $value;
                    } else {
                        $hashdata .= $key . "=" . $value;
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
                    $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
                    $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;

                }
                return redirect($vnp_Url);
            }
            $ordercuoicung = DB::table("orders")->select("id")->latest("id")->first();
            if($request->get("payment") === "tructiep"){
                foreach ($cart->getItems as $item) {
                    $productcart = Product::where("id","=",$item->id)->get();
                    try {
                        for($i=0;$i<count($productcart);$i++){
                            if($productcart[$i]->qty > 1){
                                $productcart[$i]->update([
                                    "qty" => $productcart[$i]->qty - $item->pivot->__get("qty"),
                                ]);
                            }
                            if($productcart[$i]->qty <= 1) {
                                return redirect("/")->with("message","Đã Hết Hàng Không Thể Đặt Thêm Mời Hủy Đơn Hàng Để Tiếp Tục Mua Sắm");
                                    }
                        }
                    }catch (\Exception $exception){
                        dd($exception->getMessage());
                    }

                }
                $currentUser = Auth::user()->name;
                Order::where("id","=",$ordercuoicung->id)->update([
                    "status" => 1,
                    "thanhtoan" => 1,
                ]);
                Mail::send('mail.checkout-form1',["cart" => $cart->getItems,"user" => $currentUser,"order" => $order],function ($message){
                    $message->to(Auth::user()->__get("email"),Auth::user()->__get("name"))->subject('Đơn Hàng HealthyFoods '.Auth::user()->__get("name"));
                });
                event(new OrderCreated($order));
                return redirect("/")->with("message","Mua Thành Công Check Email Để Xem Thông Tin Chuyển Khoản");
            }
        } catch (\Exception $exception) {
//            return $exception->getMessage();
        }
        return redirect()->to("/home");
    }
    public function Error()
    {
        return view("frontend.404Error");
    }
    public function searchHome(Request $request){
        if ($request->ajax()) {
            $output = '';
            $products = Product::where('product_name', 'like', '%'.$request->search.'%')
                ->orwhere('product_price',"like", '%'.$request->search.'%')->get();
            $blogs = Blog::where('blog_title', 'like', '%'.$request->search.'%')
                ->orwhere('blog_content',"like", '%'.$request->search.'%')->get();
//

            $countBlog = count($blogs);
            $countProduct = count($products);
//            $countEvent = count($events);
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr style="color: black; background-color: white;">
                    <td><a href="'. $product->getProductUrl() . '"> ' . $product->product_name . '</a></td>
                    <td><img style="width: 50px; height: 50px;" src="' . $product->getImage() . '" ></td>
                    <td>' . $product->getPrice() . '</td>
                    <td>Product</td>
                    <td><a href="' . $product->getProductUrl() . '">Xem chi tiết </a></td>
                    </tr>';
                }
            }
            if ($blogs){
                foreach ($blogs as $key => $blog) {
                    $output .= '<tr style="color: black; background-color: white">
                    <td><a href="'. $blog->getBlogUrl() . '"> ' . $blog->blog_title . '</a></td>
                    <td><img style="width: 50px; height: 50px;" src="' . $blog->getImage() . '" ></td>
                    <td>' . $blog->blog_desc . '</td>
                    <td>Blog</td>
                    <td><a href="' . $blog->getBlogUrl() . '">Xem chi tiết </a></td>
                    </tr>';
                }
            }
//            if ($events){
//                foreach ($events as $key => $event) {
//                    $output .= '<tr style="color: black; background-color: white">
//                    <td><a href="'. $event->getEventUrl() . '"> ' . $event->blog_title . '</a></td>
//                    <td><img style="width: 50px; height: 50px;" src="' . $event->getImage() . '" ></td>
//                    <td>' . $event->blog_desc . '</td>
//                    <td>Blog</td>
//                    <td><a href="' . $event->getBlogUrl() . '">Xem chi tiết </a></td>
//                    </tr>';
//                }
//            }
            return [
                "response"=>$output,
                "count"=>$countProduct,
                "countBlog"=>$countBlog,
                "blogs"=>$blogs,
            ];
        }
    }
    public function searchSelected(Request $request){
        $output = '';
            if ($request->search == "Blog"){
                $blogs = Blog::where('blog_title', 'like', '%'.$request->value.'%')
                    ->orwhere('blog_content',"like", '%'.$request->value.'%')->get();
                $countBlog = count($blogs);
                foreach ($blogs as $key => $blog) {
                    $output .= '<tr style="color: black; background-color: white">
                    <td><a href="'. $blog->getBlogUrl() . '"> ' . $blog->blog_title . '</a></td>
                    <td><img style="width: 50px; height: 50px;" src="' . $blog->getImage() . '" ></td>
                    <td>' . $blog->blog_desc . '</td>
                    <td>Blog</td>
                    <td><a href="' . $blog->getBlogUrl() . '">Xem chi tiết </a></td>
                    </tr>';
                }
                return [
                    "count"=>$countBlog,
                    "response"=>$output,
                ];
            }else{
                $products = Product::where('product_name', 'like', '%'.$request->value.'%')
                    ->orwhere('product_price',"like", '%'.$request->value.'%')->get();
                $countProduct = count($products);
                foreach ($products as $key => $product) {
                    $output .= '<tr style="color: black; background-color: white;">
                    <td><a href="'. $product->getProductUrl() . '"> ' . $product->product_name . '</a></td>
                    <td><img style="width: 50px; height: 50px;" src="' . $product->getImage() . '" ></td>
                    <td>' . $product->getPrice() . '</td>
                    <td>Product</td>
                    <td><a href="' . $product->getProductUrl() . '">Xem chi tiết </a></td>
                    </tr>';
                }
                return [
                    "response"=>$output,
                    "count"=>$countProduct,
                ];
            }
        }
        public function donate(){
            return view("frontend.donate");
        }
        public function shopOrderby(Request $request){
        $orderBy = $request->order;

        if ($orderBy == 1){
            //$searchOrderBy = DB::table("products")->latest("id")->first();
            $searchOrderBy = Product::orderBy('view_count', 'DESC')->get();
            return view("frontend.shop.ordershop", ["orderBy"=>$searchOrderBy]);
        }elseif ($orderBy == 2){
            $searchOrderBy = Product::orderBy('created_at', 'DESC')->get();
            return view("frontend.shop.ordershop", ["orderBy"=>$searchOrderBy]);
        }elseif ($orderBy == 3){
            $searchOrderBy = Product::orderBy('product_price', 'ASC')->get();
            return view("frontend.shop.ordershop", ["orderBy"=>$searchOrderBy]);
        }elseif ($orderBy ==4 ){
            $searchOrderBy = Product::orderBy('product_price', 'DESC')->get();
            return view("frontend.shop.ordershop", ["orderBy"=>$searchOrderBy]);
        }else{
            $searchOrderBy = Product::all();
            return view("frontend.shop.ordershop", ["orderBy"=>$searchOrderBy]);
        }
        }
        public function shopOrderbyDetail(Request $request){
            $orderBy = $request->order;
            if ($orderBy == 1){
                $searchOrderBy = Product::with("category")->where("category_id", "=", $request->id)->orderBy('view_count', 'DESC')->get();
                return view("frontend.shop.ordershop", ["orderBy"=>$searchOrderBy]);
            }elseif ($orderBy == 2){
                $searchOrderBy = Product::with("category")->where("category_id", "=", $request->id)->orderBy('created_at', 'DESC')->get();
                return view("frontend.shop.ordershop", ["orderBy"=>$searchOrderBy]);
            }elseif ($orderBy == 3){
                $searchOrderBy = Product::with("category")->where("category_id", "=", $request->id)->orderBy('product_price', 'ASC')->get();
                return view("frontend.shop.ordershop", ["orderBy"=>$searchOrderBy]);
            }elseif ($orderBy ==4 ){
                $searchOrderBy = Product::with("category")->where("category_id", "=", $request->id)->orderBy('product_price', 'DESC')->get();
                return view("frontend.shop.ordershop", ["orderBy"=>$searchOrderBy]);
            }else{
                $searchOrderBy = Product::all();
                return view("frontend.shop.ordershop", ["orderBy"=>$searchOrderBy]);
            }
        }
}

