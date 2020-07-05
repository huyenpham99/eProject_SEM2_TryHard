<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
//         tao slug cho cac truong
        $category = Category::all();
        foreach ($category as $p) {
            $slug = \Illuminate\Support\Str::slug($p->__get("category_name"));
            $p->slug = $slug . $p->__get("id");// luu lai vao DB
            $p->save();
            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
        }
//        $u = Auth::user();
//        $u->role =User::ADMIN_ROLE;
//        $u->save();
//        die("done");

        //Tạo slug product
        $products = Product::all();
//        $most_viewer = Product::orderBy("view_count", "DESC")->limit(8)->get();
        foreach ($products as $p) {
            $slug = \Illuminate\Support\Str::slug($p->__get("product_name"));
            $p->slug = $slug . $p->__get("id");// luu lai vao DB
            $p->save();
////            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
            return view("frontend.home");
        }


//        Tạo slug Blog
        $blog = Blog::all();
        foreach ($blog as $p) {
            $slug = \Illuminate\Support\Str::slug($p->__get("title"));
            $p->slug = $slug . $p->__get("id");// luu lai vao DB
            $p->save();
            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
        }
    }

    public function blog(Blog $blog)
    {

        if (!session()->has("view_count_{$blog->__get("id")}")) {// kiểm tra xem sesion  nếu chưa có sẽ đăng lên
            $blog->increment("view_count");     // tự tăng lên 1 mỗi lần user ấn vào xem sản phẩm
            session(["view_count{$blog->__get("id")} => true"]);// lấy session ra 1 session sẽ có giá trị lưu giữ trong vòng 2 tiếng
        }
        return view("frontend.blog");
    }

    public function blogdetail(Blog $blog)
    {
        return view("frontend.blog-detail");
    }

    public function about(Request $request)
    {
        return view("frontend.about");
    }

    public function shop(Request $request)
    {
        return view("frontend.shop");
    }

    public function contact(Request $request)
    {
        return view("frontend.contact");
    }

    public function productdetail(Request $request)
    {
        return view("frontend.product-detail");
    }

    public function programs(Request $request)
    {
        return view("frontend.programs");
    }
//    public function sendMail(){
//        // function mail tạo sẵn sẽ làm sau khi render xong giao diện front-end blog và event
////        $currentUser = Auth::user(); // lấy user đăng nhập hiện tại
////        Mail::send('view mail chứa thông tin event',[array chứa dữ liệu render lấy dữ liệu event],function ($message){
////            $message->to(Auth::user()->__get("email"),Auth::user()->__get("name"))->subject('Thông báo về sự kiện ...  '.Auth::user()->__get("name"));
////        });
//    }

    public function category(Category $category)
    {
//        $products = Product::where("category_id",$category->__get("id"))->paginate(12);
        $products = $category->Products()->simplePaginate(12);
        // dung trong model de lay tat ca\
        return view("frontend.category", [
            "category" => $category,
//            "categories"=>$categories// tra ve category trong front end
            "products" => $products
        ]);
    }

    public function product(Product $product)
    {
        $category = Category::all();
//        if (!session()->has("view_count_{$product->__get("id")}")) {
//            $product->increment("view_count");
//            session(["view_count{$product->__get("id")} => true"]);
        $relativeProducts = Product::with("Category")->paginate(4);//nạp sẵn phần cần nạp trong collection, lấy theo kiểu quan hệ

        return view("frontend.product-detail", [
            "category" => $category,
            "product" => $product,
            "relativeProduct" => $relativeProducts,

        ]);
    }
}
