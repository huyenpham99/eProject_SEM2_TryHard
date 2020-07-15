<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function listBlog(){
        $blogs = Blog::with("BlogCategory")->paginate(20);
        return view("blog.list",[
            "blogs" => $blogs
        ]);
    }
    public function editBlog($id){
        $blogcategory = BlogCategory::all();
        $blog = Blog::findOrFail($id);
        return view("blog.edit",[
            "blog" => $blog,
            "blogcategory" => $blogcategory
        ]);
        //
    }
    public function newBlog(){
        $blogcategory = BlogCategory::all();
        return view("blog.new",[
            "blogcategory" => $blogcategory,
        ]);
    }
    public function saveBlog(Request $request){
        $request->validate([
           "blog_title" => "required|string|min:6",
            "blog_desc" => "required|string|min:12",
        ]);
        try{
            Blog::create([
                "blog_title" => $request->get("blog_title"),
                "blog_image" => $request->get("blog_image"),
                "blog_desc" => $request->get("blog_desc"),
                "blog_date" => $request->get("blog_date"),
                "blog_content" => $request->get("blog_content"),
                "blog_category_id" => $request->get("blog_category_id"),
            ]);
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
        return redirect()->to("admin/list-blog");
    }
    public function updateBlog(Request $request, $id){
        $category = Blog::findOrFail($id);
        $request->validate([
            "blog_title" => "required|min:6",
        ]);
        try {

            $category->update([
                "blog_title" => $request->get("blog_title"),
                "blog_image" => $request->get("blog_image"),
                "blog_desc" => $request->get("blog_desc"),
                "blog_date" => $request->get("blog_date"),
                "blog_content" => $request->get("blog_content"),
                "blog_category_id" => $request->get("blog_category_id"),
            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
        return redirect()->to("admin/list-blog");
    }
    public function deleteBlog($id){
        $blog = Blog::findOrFail($id);
        try {
            $blog->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("admin/list-blog");
    }
}
