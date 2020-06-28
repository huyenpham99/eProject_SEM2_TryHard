<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
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
    public function index(){
        // tao slug cho cac truong
//        $category = Category::all();
//        foreach ($category as $p){
//            $slug = \Illuminate\Support\Str::slug($p->__get("category_name"));
//            $p->slug = $slug.$p->__get("id");// luu lai vao DB
//            $p->save();
//            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
//        }
//        $u = Auth::user();
//        $u->role =User::ADMIN_ROLE;
//        $u->save();
//        die("done");

        //Tạo slug product
//        $products = Product::all();
//        $most_viewer = Product::orderBy("view_count", "DESC")->limit(8)->get();
//        foreach ($products as $p){
//            $slug = \Illuminate\Support\Str::slug($p->__get("product_name"));
//            $p->slug = $slug.$p->__get("id");// luu lai vao DB
//            $p->save();
////            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
                return view("home");
        }


        //Tạo slug Blog
//        $blog= Blog::all();
//        foreach ($blog as $p){
//            $slug = \Illuminate\Support\Str::slug($p->__get("title"));
//            $p->slug = $slug.$p->__get("id");// luu lai vao DB
//            $p->save();
//            // tuong duong $p->update(["slug"=>$slug.$p->__get("id")]);
//        }
//    }
    public function blog(Blog $blog)
    {

        if (!session()->has("view_count_{$blog->__get("id")}")) {// kiểm tra xem sesion  nếu chưa có sẽ đăng lên
            $blog->increment("view_count");     // tự tăng lên 1 mỗi lần user ấn vào xem sản phẩm
            session(["view_count{$blog->__get("id")} => true"]);// lấy session ra 1 session sẽ có giá trị lưu giữ trong vòng 2 tiếng
        }
        return view("frontend.blog");
    }

    public function about(Request $request)
    {
        return view("frontend.about");
    }


}
