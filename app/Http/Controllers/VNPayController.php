<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Events\OrderCreated;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Omnipay\VNPay\Gateway;
use PHPViet\Laravel\Omnipay\Facades\MoMo\AllInOneGateway;
use PHPViet\Laravel\Omnipay\Facades\OnePay\DomesticGateway;
use PHPViet\Laravel\Omnipay\Facades\OnePay\InternationalGateway;

class VNPayController extends Controller
{
    public function return(Request $request)
    {
        $currentID = Auth::user()->id;
        $currentUser = Auth::user()->name;
        $cart = Cart::where("user_id", Auth::id())
            ->where("is_checkout", true)
            ->with("getItems")
            ->firstOrFail();
        $grandTotal = 0;
        foreach ($cart->getItems as $item) {
            $grandTotal += $item->pivot->__get("qty") * $item->__get("product_price");
        }
        $url = session('url_prev','/');
        if($request->vnp_ResponseCode == "00") {
             Order::where("user_id","=",$currentID)->update([
                "status" => 2,
            ]);
            $order = Order::where("user_id", Auth::id())->firstOrFail();
            Mail::send('mail.checkout-form',["cart" => $cart->getItems,"user" => $currentUser,"order" => $order],function ($message){
                $message->to(Auth::user()->__get("email"),Auth::user()->__get("name"))->subject('Đơn Hàng HealthyFoods '.Auth::user()->__get("name"));
            });
            event(new OrderCreated($order));
            return redirect("/")->with("success")->with('message', 'Mua Hàng Thành Công Thông Tin Vận Chuyển Gửi Qua Email!');
        }
        session()->forget('url_prev')
        ;
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
    public function return1(Request $request)
    {
        $url = session('url_prev','/');
        if($request->vnp_ResponseCode == "00") {


            return redirect("/donate")->with("success")->with('message', 'Ủng Hộ Thành Công!');
        }
        session()->forget('url_prev')
        ;
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
//    public function createonepay(){
//        $response = InternationalGateway::purchase([
//            'AgainLink' => url("/checkout"),
//            'vpcMerchant' => 'TESTONEPAY',
//            'vpcAccessCode' => '6BEB2546',
//            'vpcHashKey' => '6D0870CDE5F24F34F3915FB0045120DB',
//            'vpc_MerchTxnRef' => microtime(false),
//            'vpc_ReturnURL' => url("/thanhtoan"),
//            'Title' => 'Thich thi thanh toan',
//            'vpc_TicketNo' => '127.0.0.1',
//            'vpc_Amount' => '200000',
//            'vpc_OrderInfo' => 456,
//        ])->send();
//
//        if ($response->isRedirect()) {
//            $redirectUrl = $response->getRedirectUrl();
//            return redirect($redirectUrl);
//        }
//    }
//    public function returnonepay(){
//        $response = InternationalGateway::completePurchase()->send();
//
//        if ($response->isSuccessful()) {
//            return redirect("/home")->with("message","hehe");
//
////            var_dump($response->getData()); // toàn bộ data do OnePay gửi sang.
//
//        } else {
//
//            print $response->getMessage();
//        }
//    }
}
