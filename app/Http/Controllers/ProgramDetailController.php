<?php

namespace App\Http\Controllers;
use App\ProgramDetail;
use App\Program;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramDetailController extends Controller
{
    //
    public function listProgramDetail(){
        $program_detail = ProgramDetail::with("Program")->paginate(20);//nạp sẵn phần cần nạp trong collection
        return view("program_detail.list",["program_detail"=>$program_detail]); // string la mang cac product bien duoc gui sang lam bien dau tien cua forech
//        $program_detail = \App\ProgramDetail::paginate(2);
//        return view ('program_detail.list', compact('program_detail'));
    }
    public function newProgramDetail(){
        // phai lay du lieu tu cac bang phu
        $program = Program::all();
        return view("program_detail.new",[
                "program"=>$program
            ]
        );
    }
    public function saveProgramDetail(Request $request){ // tạo biến request lưu dữ liệu người dùng gửi lên ở body
        // đầu tiên phải validate dữ liệu cả bên html và bên sever
        // cách validate
        $request->validate([
            "program_detail_name"=>"required",
            "program_detail_image"=>"required",
            "program_detail_desc"=>"required",
            "program_detail_content"=>"required",
            "program_id"=>"required"
        ]);
        try {

            ProgramDetail::create([
                "program_detail_name"=>$request->get("program_detail_name"),
                "program_detail_image"=>$request->get("program_detail_image"),
                "program_detail_desc"=>$request->get("program_detail_desc"),
                "program_detail_content"=>$request->get("program_detail_content"),
                "program_id"=>$request->get("program_id"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-program-detail");
    }

    public function editProgramDetail($id){
        $program = Program::all();
        $program_detail = ProgramDetail::findOrFail($id);
        return view("program_detail.edit",[
            "program"=>$program,
            "program_detail" => $program_detail]);
    }
    public function updateProgramDetaul($id,Request $request){
        $program_detail = ProgramDetail::findOrFail($id);
        $request->validate([
            "program_detail_name"=>"required|min:3|unique:program_detail,program_detail_name,($id)",
            "program_detail_image"=>"required",
            "program_detail_desc"=>"required|numeric|min:0",
            "program_detail_content"=>"required|numeric|min:1",
            "program_id"=>"required",
        ]);
        try {


            $program_detail->update([
                "program_detail_name"=>$request->get("program_detail_name"),
                "program_detail_image"=>$request->get("program_detail_image"),
//                "product_image1"=>$request->get("product_image1"),
//                "product_image2"=>$request->get("product_image2"),
//                "product_image3"=>$request->get("product_image3"),
//                "product_image4"=>$request->get("product_image4"),
                "program_detail_desc"=>$request->get("program_detail_desc"),
                "program_detail_content"=>$request->get("program_detail_content"),
                "program_id"=>$request->get("program_id"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-program-detail");
    }
    public function deleteProgramDetail($id){
        $program_detail = ProgramDetail::findorFail($id);
        try {
            $program_detail->delete();
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-program-detail");
    }
}
