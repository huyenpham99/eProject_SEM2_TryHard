<?php

namespace App\Http\Controllers;

use App\BuyTickets;
use App\Cart;
use App\Donate;
use App\Event;
use App\Events\OrderCreated;
use App\ListDonate;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            $ordercuoicung = DB::table("orders")->select("id")->latest("id")->first();
             Order::where("id","=",$ordercuoicung->id)->update([
                "status" => 2,
                 "thanhtoan" => 0,
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
            $array = explode("-", $request->vnp_OrderInfo);
            $donate_id = $array[3];
            $donate      = Donate::findOrFail($donate_id);
            $money = $array[4];
            $donate->update([
                "raisermoney" => $donate->raisermoney + $money
            ]);
            ListDonate::create([
                "name" => $array[0],
                "sodienthoai" => $array[1],
                "email" => $array[2],
                "money" => $money,
                "donate_id" => $donate_id,
            ]);
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
            if (empty($buyer_ticket_id = DB::table("buy_tickets")->select("id")->latest("id")->first())){
                $buyer_ticket_id = 0;
            }else{
                $buyer_ticket_id = DB::table("buy_tickets")->select("id")->latest("id")->first();
                $buyer_ticket_id = $buyer_ticket_id->id;
            }
            $array = explode("-", $request->vnp_OrderInfo);
//            dd($array);
            $event_id = $array[7];
            $event = Event::findOrfail($event_id);

            $total_price = $event->__get("total_price") + $array[2];
            $people = $event->__get("event_people_count");
            $people++;
            $ticket_name = $array[8];
            $event->update([
                "total_price"=> $total_price,
                "event_people_count"=> $people,
            ]);
            $buyer_ticket_code = bcrypt($array[3] . "-" . $array[6] . "-" . $buyer_ticket_id); //mã code + email + ticket_id
            BuyTickets::create([
                "buyer_name"=>$array[0],
                "buyer_number"=>$array[4],
                "buyer_address"=>$array[5],
                "buyer_email"=>$array[6],
                "ticket_id"=>$array[1],
                "buyer_ticket_code"=>$buyer_ticket_code,
            ]);
            Mail::send('mail.ticketmail', ["name"=>$array[0],"ticketname"=>$array[8],"sdt"=>$array[4],"address" =>$array[5],"email"=>$array[6],"mave" => $buyer_ticket_code ], function ($message) {
                $message->to(Auth::user()->__get("email"), Auth::user()->__get("name"))->subject('Thông tin vé' . Auth::user()->__get("name"));
            });
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
