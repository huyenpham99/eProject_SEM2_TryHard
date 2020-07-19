<?php

namespace App\Http\Controllers;

use App\Program;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //Category Controller
    public function listProgram()
    {
        //lay tat ca
        $program = Program::with("User")->paginate(20);
//        dd($program);
        return view("program.list", [
            "program" => $program]);
        //
    }

    public function newProgram()
    {
        $user =User::all();
//        dd($user);

        return view("program.new",[
            "user"=>$user
        ]);
    }

    public function saveProgram(Request $request)
    {
        //validate du lieu
        $request->validate([
            "program_name" => "required|string|min:6|unique:program",
             "user_id"=>"required"
        ]);
        try {
            Program::create([
                "program_name" => $request->get("program_name"),
                "program_image"=>$request->get("program_image"),
                "user_id"=>$request->get("user_id"),
            ]);

        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/admin/list-program");
        //
    }

    public function editProgram($id)
    {
        $user = User::all();
        $program = Program::findOrFail($id);
        return view("program.edit",
            ["program" => $program,
                "user"=>$user
                ]);
    }

    public function updateProgram($id, Request $request)
    {
        $program = Program::findOrFail($id);
        $request->validate([
            "program_name" => "required|min:6|unique:program,program_name,{$id}",
            "user_id"=>"required",
        ]);
        // die("loi");
        //      dd($request->all());
        try {
            $program->update([
                "program_name" => $request->get("program_name"),
                "program_image"=>$request->get("program_image"),
                "user_id"=>$request->get("user_id"),
            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return redirect()->back();
        }
        return redirect()->to("/admin/list-program");
    }

    public function deleteProgram($id)
    {
        $program = Program::findOrFail($id);
        try {
            $program->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/admin/list-program");
    }
}
