<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Omnipay\VNPay\Gateway;

class VNPayController extends Controller
{
    public function createPayment(){
        $myCart     = session()->has("my_cart") && is_array(session("my_cart")) ? session("my_cart") : [];
        $productIds = [];
        foreach ($myCart as $item) {
            $productIds[] = $item["product_id"];
        }
        $grandTotal = 0;
        $products   = Product::find($productIds);
        foreach ($products as $p) {
            foreach ($myCart as $item) {
                if ($p->__get("id") == $item["product_id"]) {
                    $grandTotal  += ($p->__get("product_price") * $item["qty"]);
                    $p->cart_qty = $item["qty"];
                }
            }
        }
//        session(['cost_id' => $productIds);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "1P3HV4G2"; //Mã website tại VNPAY
        $vnp_HashSecret = "CICMOGOUKDUBWVSHPDSORUZMNWOXFLYJ"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/return-vnpay";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh Toán Hóa Đơn Hàng HealthyFoods";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $grandTotal * 100;
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
    public function return(Request $request)
    {
        $currentID = Auth::user()->id;
        $url = session('url_prev','/');
//        dd($request->all());
        if($request->vnp_ResponseCode == "00") {
             Order::where("user_id","=",$currentID)->update([
                "status" => 3,
            ]);
            return redirect("/home")->with("success")->with('message', 'Complete Order!');
        }
        session()->forget('url_prev');
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
}
