<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Program;
use App\User;
use Illuminate\Http\Request;
use App\Program_Detail;
class ProgramDetailController extends Controller
{
    public function listProgram_Detail()
    {
        //lay tat ca
        $program_detail = Program_Detail::with("Program")->paginate(20);
//        dd($program);
        return view("program_detail.list", [
            "program_detail" => $program_detail]);
        //
    }

    public function newProgram_Detail()
    {
        $program =Program::all();
//        dd($program);

        return view("program_detail.new",[
            "program"=>$program
        ]);
    }

    public function saveProgram_Detail(Request $request)
    {
        //validate du lieu
        $request->validate([
            "program_detail_name"=>"required",
            "program_detail_image"=>"required",
            "program_detail_desc"=>"required|numeric|min:0",
            "program_detail_content"=>"required|numeric|min:1",
            "program_id"=>"required"
        ]);
        try {
            Program_Detail::create([
                "program_detail_name" => $request->get("program_detail_name"),
                "program_detail_image" => $request->get("program_detail_image"),
                "program_detail_desc" => $request->get("program_detail_desc"),
                "program_detail_content" => $request->get("program_detail_content"),
                "program_id" => $request->get("program_id"),
            ]);

        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/list-program-detail");
    }

    public function editProgram_Detail($id)
    {
        $program = Program::all();
        $program_detail = Program_Detail::findOrFail($id);
        return view("program_detail.edit",
            ["program_detail" => $program_detail,
                "program"=>$program
            ]);
    }

    public function updateProgram_Detail($id, Request $request)
    {
        $program_detail = Program_Detail::findOrFail($id);
        $request->validate([
            "program_detail_name"=>"required",
            "program_detail_image"=>"required",
            "program_detail_desc"=>"required|numeric|min:0",
            "program_detail_content"=>"required|numeric|min:1",
            "program_id"=>"required"
        ]);
        // die("loi");
        //      dd($request->all());
        try {
            $program_detail->update([
                "program_detail_name" => $request->get("program_detail_name"),
                "program_detail_image" => $request->get("program_detail_image"),
                "program_detail_desc" => $request->get("program_detail_desc"),
                "program_detail_content" => $request->get("program_detail_content"),
                "program_id" => $request->get("program_id"),
            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return redirect()->back();
        }
        return redirect()->to("/list-program-detail");
    }

    public function deleteProgram_Detail($id)
    {
        $program_detail = Program_Detail::findOrFail($id);
        try {
            $program_detail->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/list-program-detail");
    }
}
