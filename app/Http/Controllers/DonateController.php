<?php

namespace App\Http\Controllers;

use App\Donate;
use App\ListDonate;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;
use function GuzzleHttp\Psr7\_parse_request_uri;

class DonateController extends Controller
{
    public function listDonate()
    {
        $donates = Donate::leftjoin("users", "donates.user_id", "=", "users.id")
            ->get();
        return view("donate.list", [
            "donates" => $donates
        ]);
    }

    public function editDonate($id)
    {
        $donate = Donate::findOrFail($id);
        return view("donate.edit", [
            "donate" => $donate,
        ]);
    }

    public function newDonate()
    {
        $user = User::all();
        return view("donate.new", [
            "user" => $user,
        ]);
    }

    public function saveDonate(Request $request)
    {
        $date = $request->get("songaydienra");
        try {
            Donate::create([
                "donate_title" => $request->get("donate_title"),
                "donate_image" => $request->get("donate_image"),
                "donate_desc" => $request->get("donate_desc"),
                "donate_content" => $request->get("donate_content"),
                "start_at" => Carbon::now()->toDateString(),
                "end_at" => date('Y-m-d',strtotime(Carbon::now()->toDateString()."+$date"."days")),
                "goalmoney" => $request->get("goalmoney"),
                "user_id" => $request->get("user_id")
            ]);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
        return redirect()->to("admin/list-donate");
    }

    public function donateDetail(Donate $donate)
    {
        // dung trong model de lay tat ca\
        return view("frontend.donate-detail", [
            "donate" => $donate,
        ]);
    }

    public function donate()
    {
        $donates = Donate::paginate(4);
        $peopleList =ListDonate::leftjoin("donates","listdonate.donate_id","=","donates.id")
            ->orderBy('listdonate.money ASC')
            ->limit(10)
            ->get();
        return view("frontend.donate", [
            "donates" => $donates,
            "listDonates" => $peopleList,
        ]);
    }

    public function saveMoney($id, Request $request)
    {
        $money = 0;
        if($request->has("sotienunghokhac")){
            $money += $request->get("sotienunghokhac");
        }if ($request->get("sotienunghokhac") === null){
            $money += $request->get("sotienungho");
        }
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode    = "1P3HV4G2"; //Mã website tại VNPAY
        $vnp_HashSecret = "CICMOGOUKDUBWVSHPDSORUZMNWOXFLYJ"; //Chuỗi bí mật
        $vnp_Url        = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl  = url("/return-donate");
        $vnp_TxnRef     = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo  = $request->get("tennguoiungho")."-".$request->get("sodienthoai")."-".$request->get("emailnguoiungho")."-".$request->get("donate_id")."-".$money."-";
        $vnp_OrderType  = 'billpayment';
        $vnp_Amount     = $money * 100;
        $vnp_Locale     = 'vn';
        $vnp_IpAddr     = request()->ip();

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
        $query    = "";
        $i        = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i        = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url       .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }
}
