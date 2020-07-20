<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Blog;
use App\BlogCategory;
use App\Cart;
use App\Category;
use App\Comment;
use App\Event;
use App\Events\OrderCreated;
use App\Order;
use App\Product;
use App\Program;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use MicrosoftAzure\Storage\Blob\Models\Blob;

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
        $blogcategory = BlogCategory::all();

        $products = Product::all();
        $banner   = Banner::all();
        $event    = Event::all();
//         tao slug cho cac truong
        foreach ($category as $p) {
            $slug    = \Illuminate\Support\Str::slug($p->__get("category_name"));
            $p->slug = $slug . $p->__get("id");// luu lai vao DB
            $p->save();
        }
        foreach ($blogcategory as $p) {
            $slug    = \Illuminate\Support\Str::slug($p->__get("blog_category_name"));
            $p->slug = $slug . $p->__get("id");// luu lai vao DB
            $p->save();
        }
//        Tạo slug Blog
        foreach ($blog as $p) {
            $slug    = \Illuminate\Support\Str::slug($p->__get("title"));
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
        // dung trong model de lay tat ca\
        return view("frontend.shop", [
            "category" => $category,
//            "categories"=>$categories// tra ve category trong front end
            "products" => $products
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

    public function programs()
    {
        $program = Program::paginate(5);
        return view("frontend.programs", [
            "program" => $program,
        ]);
    }

    public function programs_detail()
    {
        return view("frontend.programs-detail");
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
//        dd($request->all());
        $request->validate([
//            "username" => "required",
//            "address" => "required",
//            "telephone" => "required",
        ]);
        $cart       = Cart::where("user_id", Auth::id())
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
//            die("done");
            foreach ($cart->getItems as $item) {
                DB::table("orders_products")->insert([
                    "order_id" => $order->__get("id"),
                    "product_id" => $item->__get("id"),
                    "product_price" => $item->__get("product_price"),
                    "qty" => $item->pivot->__get("qty")
                ]);
            }
//            die("done");
//            $currentUser = Auth::user();
//            $order = OrderController::where("user_id", Auth::id())->firstOrFail();
//            Mail::send('mail.checkout-form', ["cart" => $cart->getItems, "user" => $currentUser, "order" => $order], function ($message) {
//                $message->to(Auth::user()->__get("email"), Auth::user()->__get("name"))->subject('Healthy Food Đơn Hàng Khách Hàng ' . Auth::user()->__get("name"));
//            });
            event(new OrderCreated($order));
        } catch (\Exception $exception) {
//            return $exception->getMessage();
        }
        return redirect()->to("/home");
    }

    public function Error(Request $request)
    {
        return view("frontend.404Error");
    }
}
