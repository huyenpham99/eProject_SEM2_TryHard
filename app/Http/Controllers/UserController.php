<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $request->get('password');
        $newPass = bcrypt($request->get("password"));
        try{
            if($request->get("password") === $request->get("password_confirmation")){
                User::create([
                    "name"=>$request->get("name"),
                    "email"=>$request->get("email"),
                    "password"=>$newPass,
                    "role"=>$request->get("role"),
                ]);
            }
        }catch(\Exception $exception){
            dd($exception->getMessage());
        }
        return redirect()->to("admin/list-user");
    }
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view("user.edit", [
            "user" => $user
        ]);
    }
    public function updateAccess($id, Request $request){
        $currentUser = User::findorFail($id);

        try{
            $currentUser->update([
                "account_status" =>  $request->get("status"),
            ]);
            if($currentUser->__get("account_status") == "blogmanager"){
                $currentUser->update([
                    "role" =>  2,
                ]);
            }
            elseif ($currentUser->__get("account_status") == "productmanager"){
                $currentUser->update([
                    "role" =>  4,
                ]);
            }
            elseif ($currentUser->__get("account_status") == "eventmanager"){
                $currentUser->update([
                    "role" =>  3,
                ]);
            }
            elseif ($currentUser->__get("account_status") == "programmanager"){
                $currentUser->update([
                    "role" =>  5,
                ]);
            }
            elseif ($currentUser->__get("account_status") == "user"){
                $currentUser->update([
                    "role" =>  0,
                ]);
            }
            elseif ($currentUser->__get("account_status") == "deadactive"){
                $currentUser->update([
                    "role" =>  6,
                ]);
            }
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("admin/list-user");
    }
    public function viewUser($id){
        $currentUser = User::findorFail($id);
        return view("user.viewuser",[
            "currentUser" => $currentUser,
        ]);
    }
}
