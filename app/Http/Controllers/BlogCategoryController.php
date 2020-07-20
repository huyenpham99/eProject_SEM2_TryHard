<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function listBlogCategory()
    {
        $blogcategory = BlogCategory::all();
        return view("blogcategory.list", [
            "blogcategories" => $blogcategory]);

    }

    public function newBlogCategory()
    {
        return view("blogcategory.new");
    }

    public function saveBlogCategory(Request $request)
    {
        //validate du lieu
        $request->validate([
            "blog_category_name" => "required|string|min:3|unique:blogcategory"
        ]);
        try {
            BlogCategory::create([
                "blog_category_name" => $request->get("blog_category_name"),
            ]);

        } catch (\Exception $exception) {
           dd($exception->getMessage());
        }
        return redirect()->to("/admin/list-blogcategory");
    }

    public function editBlogCategory($id)
    {
        $blogcategory = BlogCategory::findOrFail($id);
        return view("blogcategory.edit", ["blogcategory" => $blogcategory]);
    }

    public function updateBlogCategory($id, Request $request)
    {
        $blogcategory = BlogCategory::findOrFail($id);
        $request->validate([
            "blog_category_name" => "required|min:3|unique:blogcategory,blog_category_name,{$id}"
        ]);
        try {
            $blogcategory->update([
                "blog_category_name" => $request->get("blog_category_name"),
            ]);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
        return redirect()->to("/admin/list-blogcategory");
    }

    public function deleteBlogCategory($id)
    {
        $blogcategory = BlogCategory::findOrFail($id);
        try {
            $blogcategory->delete();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
        return redirect()->to("/admin/list-blogcategory");
    }
}
