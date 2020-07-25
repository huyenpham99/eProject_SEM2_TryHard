<?php

namespace App\Http\Controllers;

use App\Donate;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;
use function GuzzleHttp\Psr7\_parse_request_uri;

class DonateController extends Controller
{
    public function listDonate(){
        $donates = Donate::leftjoin("users","donates.user_id","=","users.id")->get();
        return view("donate.list",[
            "donates" => $donates
        ]);
    }
    public function editDonate($id){
        $donate = Donate::findOrFail($id);
        return view("donate.edit",[
            "donate" => $donate,
        ]);
    }
    public function newDonate(){
        $user = User::all();
        return view("donate.new",[
            "user" => $user,
        ]);
    }
    public function saveDonate(Request $request){
        try{
            Donate::create([
                "donate_title" => $request->get("donate_title"),
                "donate_image" => $request->get("donate_image"),
                "donate_desc" => $request->get("donate_desc"),
                "donate_content" => $request->get("donate_content"),
                "goalmoney" => $request->get("goalmoney"),
                "user_id" => $request->get("user_id")
            ]);
        }catch (\Exception $exception){
            dd($exception->getMessage());
        }
//        return redirect()->to("admin/list-donate");
    }
    public function donateDetail(Donate $donate)
    {
        // dung trong model de lay tat ca\
        return view("frontend.donate-detail", [
            "donate" => $donate,
        ]);
    }
    public function donate(){
        $donates = Donate::paginate(4);
        return view("frontend.donate",[
            "donates" => $donates,
        ]);
    }
    public function saveMoney($id,Request $request){
        dd($request->all());
        $donate = Donate::findOrFail($id);

    }
}
