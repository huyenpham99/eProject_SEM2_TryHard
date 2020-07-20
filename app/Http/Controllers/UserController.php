<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
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
        $currentUser = User::findorFail($id);
        $orders = DB::table("orders_products")->leftJoin("orders", "orders.id", "=", "orders_products.order_id")
        ->leftJoin("products","products.id","=","orders_products.product_id")->get();
//        dd($orders);
        return view("user.userProfile",[
            "currentUser" => $currentUser,
            "orders"=> $orders,
        ]);
    }
    public function updateUser1($id, Request $request){
        $user = User::findOrFail($id);
        $this->validate($request,[
            'image'=>'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
        ]);
        if ($request->hasFile('image')) {
            //get name image
            $filename = $request->file('image');
            //upload image
            Cloudder::upload($filename, 'uploads/' . $filename->getClientOriginalName());
        }
        Cloudder::show('uploads/'. $filename->getClientOriginalName());
        try {
            $user->update([
                "name"=>$request->get("name"),
                "image"=>Cloudder::show('uploads/'. $filename->getClientOriginalName()),
                "email"=>$request->get("email"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone"),
            ]);
        }catch (\Exception $exception){
//            return redirect()->back();
            dd($exception->getMessage());
        }
        return redirect()->to('/')->with('message', 'Change profile successfully!');
    }
//    public function searchUser(Request $request){
//        if ($request->ajax()) {
//            $usersFull = User::all();
//            $output = '';
//            $users = User::where('name', 'like', '%'.$request->search.'%')->
//            orwhere('email', '%'.$request->search.'%')->get();
//            if ($users) {
//                foreach ($users as $key => $user) {
//                    $output .= '<tr>
//                                <td>'. $user->__get("id"). '</td>
//                                <td>'. $user->__get("name"). '</td>
//                            </tr>';
//                }
//            }
//            return Response($output);
//        }
//    }

}
