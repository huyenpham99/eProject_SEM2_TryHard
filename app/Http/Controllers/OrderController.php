<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function listOrder(){
        $orders = Order::all();//nạp sẵn phần cần nạp trong collection
        $ordersDone = Order::where('status', '=', 3)->get();
        $ordersCount = $ordersDone->count();
        return view("order.list",["orders"=>$orders, "ordersCount"=>$ordersCount]); // string la mang cac product bien duoc gui sang lam bien dau tien cua forech
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
        if ($order->__get("status") == 2 && $request->get("status")==4){
            redirect()->to('/')->with('message', 'Thay đổi thất bại vì đơn hàng đang giao không hủy được!');
        }elseif($order->__get("status") == 2 && $request->get("status") == 1){
            redirect()->to('/')->with('message', 'Thay đổi thất bại vì đơn hàng đang giao không thể trở thành đang xác nhận được!');
        }elseif($order->__get("status") == 3 && $request->get("status") == 4){
            redirect()->to('/')->with('message', 'Thay đổi thất bại vì đơn hàng đã hoàn thành nên không hủy được!');
        }elseif ($order->__get("status") == 3 && $request->get("status") == 2){
            redirect()->to('/')->with('message', 'Thay đổi thất bại vì đơn hàng đã hoàn thành nên không chuyển thành đang giao được!');
        }elseif ($order->__get("status") == 3 && $request->get("status") == 1){
            redirect()->to('/')->with('message', 'Thay đổi thất bại vì đơn hàng đã hoàn thành nên không chuyển thành trạng thái đang xác nhận được!');
        }elseif ($order->__get("status") == 1 && $request->get("status") == 3){
            redirect()->to('/')->with('message', 'Thay đổi thất bại vì đơn hàng đang chờ chỉ đổi thành đang giao, không hoàn thành luôn được!');
        }else{
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
        }
        return redirect()->to("/admin/list-order");
    }
    public function deleteOrder($id){
        $order = Order::findorFail($id);
        if ($order->__get("status")==4){
            try {
                $order->delete();
            }catch (\Exception $exception){
                return redirect()->back();
            }
        }else{
            redirect()->to('/')->with('message', 'Chỉ xóa được đơn hàng khi đơn hàng ở trạng thái hủy đơn!');

        }
        return redirect()->to("/admin/list-order");
    }
    public function cancelOrder($id){
        $order = Order::findorFail($id);

        if ($order->status == 1){
            try {
                $order->update([
                    "status"=>4,
                ]);
            }catch (\Exception $exception){
                redirect()->back()->with('message', 'Chỉ có thể hủy khi đơn hàng đang ở trạng thái chờ xác nhận!');
            }
        }else{
            return redirect()->back()->with('message', 'Chỉ có thể hủy khi đơn hàng đang ở trạng thái chờ xác nhận!');
        }
        return redirect()->back()->with('message', 'Hủy đơn hàng thành công!');
    }
}
