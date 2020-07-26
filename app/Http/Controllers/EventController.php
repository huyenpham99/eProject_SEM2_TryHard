<?php

namespace App\Http\Controllers;

use App\Banner;
use App\BuyTickets;
use App\Event;
use App\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function listEvent(){
        $event = Event::with("User")->paginate(10);
        $user =User::all();
        $banner =Banner::all();
        return view("event.list",[
            "event" => $event,
            "user"=>$user,
            "banner"=>$banner,
        ]);
    }
    public function editEvent($id){
        $users = User::all();
        $events =Event::with("User")->paginate(10);
        $event = Event::findOrFail($id);
        return view("event.edit",[
            "event" => $event,
            "users"=>$users,
        ]);
    }
    public function newEvent(){
        $user = User::all();
        return view("event.new",[
            "user"=>$user,
        ]);
    }

    public function saveEvent(Request $request){
        $request->validate([
            "event_name" => "required|string|min:6",
            "event_date_start" => "required|string",
            "event_date_end" => "required|string",
            "event_address" => "required|string",
            "event_content" => "required|string|min:12",
            "event_desc" =>"required|string|min:12",
            "user_id" => "required",
        ]);
        try{
            Event::create([
                "event_name" => $request->get("event_name"),
                "event_date_start" => $request->get("event_date_start"),
                "event_date_end" => $request->get("event_date_end"),
                "event_address" => $request->get("event_address"),
                "event_content" => $request->get("event_content"),
                "event_desc" => $request->get("event_desc"),
                "user_id" => $request->get("user_id"),
                "event_image" => $request->get("event_image"),
                "status" => $request->get("status"),
            ]);
        }catch (\Exception $exception){
            return dd($exception->getMessage());
        }
        return redirect()->to("/admin/list-event");
    }
    public function updateEvent(Request $request, $id){
        $event = Event::findOrFail($id);
        $request->validate([
            "event_name" => "required",
            "event_date_start" => "required",
            "event_date_end" => "required",
            "event_people_count" => "required",
            "event_address" => "required",
            "event_content" => "required|string|min:12",
            "event_desc" =>"required",
            "user_id" => "required",
        ]);
        try {
            $event->update([
                "event_name" => $request->get("event_name"),
                "event_date_start" => $request->get("event_date_start"),
                "event_date_end" => $request->get("event_date_end"),
                "event_address" => $request->get("event_address"),
                "event_content" => $request->get("event_content"),
                "event_desc" => $request->get("event_desc"),
                "user_id" => $request->get("user_id"),
                "event_image" => $request->get("event_image"),
                "status" => $request->get("status"),
                "total_price" => $request->get("total_price"),
            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
        return redirect()->to("/admin/list-event");
    }
    public function deleteEvent($id){
        $event = Event::findOrFail($id);
        try {
            $event->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("/admin/list-event");
    }

    public function listEventFrontEnd(){
        $events = Event::all();
        return view("frontend.event.listFrontEnd",[
            "events"=>$events,
        ]);
    }
    public function eventDetails(Event $event){
        $id = $event->__get("id");
       $ticket = Ticket::where("event_id", "=", $id)->get();
        return view("frontend.event.event-detail",[
            "event"=>$event,
            "ticket"=>$ticket,
        ]);
    }
    public function createTicketBuyer(Request $request){
        $name = $request->get("buyer_name");
        $moneyprice = $request->get("ticket_price");
        $vnp_TmnCode = "1P3HV4G2"; //Mã website tại VNPAY
        $vnp_HashSecret = "CICMOGOUKDUBWVSHPDSORUZMNWOXFLYJ"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = url("/return-event");
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $name."-".$request->ticket_id."-".$request->ticket_price."-".$request->ticket_code."-".$request->buyer_number."-".$request->buyer_address."-".$request->buyer_email."-".$request->event_id."-";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $moneyprice * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();
        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }
}
