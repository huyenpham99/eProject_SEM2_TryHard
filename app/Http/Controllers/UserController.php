<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listUser(){
        $users = User::paginate(10);
        return view('user.list', [
            "users"=>$users,
        ]);
    }
    public function newManager(){
        return view("user.new");
    }
    public function saveManager(Request $request){
        try{
            User::create([
                "user_name"=>$request->get("name"),
                "password"=>$request->get("password"),
            ]);
        }catch(\Exception $exception){
            dd("loi roi");
        }
    }
}
