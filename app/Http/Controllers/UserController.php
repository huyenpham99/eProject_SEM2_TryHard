<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use JD\Cloudder\CloudderServiceProvider;
use JD\Cloudder\Facades\Cloudder;

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
        $curentRole = $user->role;
        if(!($curentRole == User::ADMIN_ROLE)){
            return view("user.edit", [
                "user" => $user
            ]);
        }else{
            return abort(404);
        }
    }
    public function updateAccess($id, Request $request){
        $currentUser = User::findorFail($id);

        try{
            $currentUser->update([
                "account_status" =>  $request->get("status"),
            ]);
            if($currentUser->__get("account_status") == "2"){
                $currentUser->update([
                    "role" =>  2,
                ]);
            }
            elseif ($currentUser->__get("account_status") == "4"){
                $currentUser->update([
                    "role" =>  4,
                ]);
            }
            elseif ($currentUser->__get("account_status") == "3"){
                $currentUser->update([
                    "role" =>  3,
                ]);
            }
            elseif ($currentUser->__get("account_status") == "5"){
                $currentUser->update([
                    "role" =>  5,
                ]);
            }
            elseif ($currentUser->__get("account_status") == "0"){
                $currentUser->update([
                    "role" =>  0,
                ]);
            }
            elseif ($currentUser->__get("account_status") == "6"){
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
    public function updateUser($id, Request $request){
        $user = User::findOrFail($id);
        try {
            $user->update([
                "name"=>$request->get("name"),
                "image"=>$request->get("image"),
                "email"=>$request->get("email"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to('/admin')->with('message', 'Change profile successfully!');
    }
    public function viewUser1($id){
        if (Auth::user()->id==$id){
            $currentUser = User::findorFail($id);
            $orders = DB::table("orders_products")->leftJoin("orders", "orders.id", "=", "orders_products.order_id")
                ->leftJoin("products","products.id","=","orders_products.product_id")->where("orders.user_id","=",$id)->get();
            return view("user.userProfile",[
                "currentUser" => $currentUser,
                "orders"=> $orders,
            ]);
        }else{
            return redirect()->to("/404");
        }

    }
    public function updateUser1($id, Request $request){
        if (Auth::user()->id==$id) {
            $user = User::findOrFail($id);
            $this->validate($request,[
                'image'=>'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
            ]);
            if ($request->hasFile('image')) {
                //get name image
                $filename = $request->file('image');
                //upload image
                Cloudder::upload($filename, 'uploads/' . $filename->getClientOriginalName(), array(["width"=>"1000"]));
            }
            Cloudder::show('uploads/'.$filename->getClientOriginalName());
            try {
                $user->update([
                    "name"=>$request->get("name"),
                    "image"=>Cloudder::show('uploads/'. $filename->getClientOriginalName()),
                    "email"=>$request->get("email"),
                    "address"=>$request->get("address"),
                    "telephone"=>$request->get("telephone"),
                ]);
            }catch (\Exception $exception){
                return redirect()->back();
            }
            return redirect()->to('/')->with('message', 'Change profile successfully!');
        }else{
            return redirect()->to("/404");
        }

    }
    public function searchUser($value){
        if ($value == "all"){
            $users = User::all();
        }elseif($value== "admin"){
            $users = User::where('role', "=", 1)->get();
        }elseif($value== "blog"){
            $users = User::where('role', "=", 2)->get();
        }elseif($value== "event"){
            $users = User::where('role', "=", 3)->get();
        }elseif($value== "product"){
            $users = User::where('role', "=", 4)->get();
        }elseif($value== "program"){
            $users = User::where('role', "=", 5)->get();
        }elseif($value== "dead"){
            $users = User::where('role', "=", 6)->get();
        }elseif($value== "user"){
            $users = User::where('role', "=", 0)->get();
        }else{
            $users = User::where('name', 'like', '%'.$value.'%')->
            orwhere('email', 'like', '%'.$value.'%')->get();
        }
        return view(("user.searchUser"), [
            "users" => $users,
        ]);
    }

}

