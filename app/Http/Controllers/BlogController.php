<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function listBlog(){
        $blog = Blog::all();
        return view("blog.list",[
            "blogs" => $blog
        ]);
    }
    public function editBlog($id){
        $blog = Blog::findOrFail($id);
        return view("blog.edit",[
            "blog" => $blog
        ]);
    }
    public function newBlog(){
        return view("blog.new");
    }
    public function saveBlog(Request $request){
        $request->validate([
           "blog_title" => "required|string|min:6",
            "blog_desc" => "required|string|min:12",
        ]);
        try{
            Blog::create([
                "blog_title" => $request->get("blog_title"),
                "blog_desc" => $request->get("blog_desc"),
                "blog_content" => $request->get("blog_content"),
            ]);
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
        return redirect()->to("/list-blog");
    }
    public function updateBlog(Request $request, $id){
        $category = Blog::findOrFail($id);
        $request->validate([
            "blog_title" => "required|min:6",
        ]);
        // die("loi");
        //      dd($request->all());
        try {

            $category->update([
                "blog_title" => $request->get("blog_title"),
                "blog_desc" => $request->get("blog_desc"),
                "blog_content" => $request->get("blog_content"),
            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
        return redirect()->to("/list-blog");
    }
    public function deleteBlog($id){
        $blog = Blog::findOrFail($id);
        try {
            $blog->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/list-blog");
    }
}
