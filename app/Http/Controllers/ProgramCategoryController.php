<?php

namespace App\Http\Controllers;

use App\ProgramCategory;
use Illuminate\Http\Request;

class ProgramCategoryController extends Controller
{
    public function listProgramCategory()
    {
        //lay tat ca
//        $category = Category::withCount("Products")->paginate(20);
        $programcategory = ProgramCategory::all();
        return view("programcategory.list", [
            "programcategory" => $programcategory]);
        //
    }

    public function newProgramCategory()
    {
        return view("programcategory.new");
    }

    public function saveProgramCategory(Request $request)
    {
        //validate du lieu
        $request->validate([
            "progam_category_name" => "required|string|min:3|unique:programcategory"
        ]);
        try {
            ProgramCategory::create([
                "progam_category_name" => $request->get("progam_category_name"),
                "program_category_image"=>$request->get("program_category_image"),
            ]);

        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return redirect()->back();
        }
//        return redirect()->to("/admin/list-programcategory");

    }

    public function editProgramCategory($id)
    {
        $programcategory = ProgramCategory::findOrFail($id);
        return view("programcategory.edit", ["programcategory" => $programcategory]);
    }

    public function updateProgramCategory($id, Request $request)
    {
        $programcategory = ProgramCategory::findOrFail($id);
        $request->validate([
            "progam_category_name" => "required|min:3|unique:programcategory,progam_category_name,{$id}"
        ]);
        // die("loi");
        //      dd($request->all());
        try {
            $programcategory->update([
                "progam_category_name" => $request->get("progam_category_name"),
                "program_category_image"=>$request->get("programcategory_image"),
            ]);
        } catch (\Exception $exception) {
//            dd($exception->getMessage());
            return redirect()->back();
        }
        return redirect()->to("/admin/list-programcategory");
    }

    public function deleteProgramCategory($id)
    {
        $programcategory = ProgramCategory::findOrFail($id);
        try {
            $programcategory->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/admin/list-programcategory");
    }
}
