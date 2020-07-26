<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Omnipay\VNPay\Gateway;

class VNPayController extends Controller
{
    public function return(Request $request)
    {
        $currentID = Auth::user()->id;
        $url = session('url_prev','/');
        if($request->vnp_ResponseCode == "00") {
             Order::where("user_id","=",$currentID)->update([
                "status" => 2,
            ]);
            return redirect("/home")->with("success")->with('message', 'Complete Order!');
        }
        session()->forget('url_prev')
        ;
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
}
