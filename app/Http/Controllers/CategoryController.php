<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listCategory()
    {
        //lay tat ca
        $category = Category::withCount("Products")->paginate(20);
        //show validation theo ten D%
        //  $category =Category::where ("category_name", "LIKE", "D%")->get();
        return view("category.list", [
            "categories" => $category
        ]);
    }

    public function newCategory()
    {
        return view("category.new");
    }

    public function saveCategory(Request $request)
    {
        //validate du lieu
        $request->validate([
            "category_name" => "required|string|min:6|unique:categories"
        ]);

        return redirect()->to("/admin/list-category");
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
//        if (is_null($category))
//            abort(404); =findOrFail
        return view("category.edit", ["category" => $category]);
    }

    public function updateCategory($id, Request $request)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            "category_name" => "required|min:6|unique:categories,category_name,{$id}"
        ]);
        //die("loi");
        //dd($request->all());
        return redirect()->to("/admin/list-category");
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        try {
            $category->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/admin/list-category");
    }
}
