<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function listOrder(){
        $orders = Order::all();//nạp sẵn phần cần nạp trong collection
        return view("order.list",["orders"=>$orders]); // string la mang cac product bien duoc gui sang lam bien dau tien cua forech
    }
    public function editOrder($id){
        $user = User::all();
        $order = Order::findOrFail($id);
        return view("order.edit",[
            "order"=>$order,
            "user" => $user]);
    }
    public function updateOrder($id,Request $request){
        $order = Order::findOrFail($id);
        $request->validate([
            "username"=>"required|min:3|unique:products,product_name,($id)",
            "telephone"=>"required",
            "note"=>"required",
        ]);
        try {
            $order->update([
                "username"=>$request->get("username"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone"),
                "note"=>$request->get("note"),
                "status"=>$request->get("status"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-order");
    }
//    public function deleteProduct($id){
//        $products = Product::findorFail($id);
//        try {
//            $products->delete();
//        }catch (\Exception $exception){
//            return redirect()->back();
//        }
//        return redirect()->to("/admin/list-product");
//    }
}
