<?php

namespace App\Http\Controllers;

use App\BuyTickets;
use App\Event;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Omnipay\VNPay\Gateway;
use PHPViet\Laravel\Omnipay\Facades\MoMo\AllInOneGateway;
use PHPViet\Laravel\Omnipay\Facades\OnePay\DomesticGateway;
use PHPViet\Laravel\Omnipay\Facades\OnePay\InternationalGateway;

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
    public function return1(Request $request)
    {
        $currentID = Auth::user()->id;
        $url = session('url_prev','/');
        if($request->vnp_ResponseCode == "00") {
            return redirect("/donate")->with("success")->with('message', 'Ủng Hộ Thành Công!');
        }
        session()->forget('url_prev')
        ;
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
    public function return3(Request $request)
    {
        $url = session('url_prev','/');
        if($request->vnp_ResponseCode == "00") {
            $buyer_ticket_id = DB::table("buy_tickets")->select("id")->latest("id")->first();
//            dd($request->vnp_OrderInfo);
            $array = explode("-", $request->vnp_OrderInfo);
//            dd($array);
            $event_id = $array[7];
            $event = Event::findOrfail($event_id);

            $total_price = $event->__get("total_price") + $array[2];
            $event->update([
                "total_price"=> $total_price,
            ]);
            $buyer_ticket_code = $array[3] . "-" . $array[6] . "-" . $buyer_ticket_id->id; //mã code + email + ticket_id
            BuyTickets::create([
                "buyer_name"=>$array[0],
                "buyer_number"=>$array[4],
                "buyer_address"=>$array[5],
                "buyer_email"=>$array[6],
                "ticket_id"=>$array[7],
                "buyer_ticket_code"=>$buyer_ticket_code,
            ]);
            return redirect("/event")->with("success")->with('message', 'Mua vé thành công!');
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
