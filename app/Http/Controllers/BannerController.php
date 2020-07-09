<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function listBanner(){
        $banner = Banner::all();//nạp sẵn phần cần nạp trong collection
        return view("banner.list",
            ["banner"=>$banner]); // string la mang cac banner bien duoc gui sang lam bien dau tien cua forech
    }
    public function newBanner(){
        // phai lay du lieu tu cac bang phu
        $banner = Banner::all();
        return view("banner.new",[
                "banner"=>$banner
            ]
        );
    }
    public function saveBanner(Request $request){ // tạo biến request lưu dữ liệu người dùng gửi lên ở body
        // đầu tiên phải validate dữ liệu cả bên html và bên sever
        // cách validate
        if($request->get("thu_tu") == 4){
            $request->validate([
                "banner_name"=>"required",
            ]);
        }else{
            $request->validate([
                "banner_name"=>"required",
                "thu_tu"=>"required|unique:banner,thu_tu",
            ]);
        }
        $request->validate([
            "banner_name"=>"required|min:3|unique:banner,banner_name",
        ]);
        try {
            Banner::create([
                "banner_name"=>$request->get("banner_name"),
                "banner_image"=>$request->get("banner_image"),
                "banner_image2"=>$request->get("banner_image2"),
                "status"=>$request->get("status"),
                "thu_tu"=>$request->get("thu_tu"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-banner");
    }

    public function editBanner($id){
        $banner = Banner::all();
        $banner = Banner::findOrFail($id);
        return view("banner.edit",[
            "banner"=>$banner,
           ]);
    }
    public function updateBanner($id,Request $request){
        $banners = Banner::findOrFail($id);
        try {
            $banners->update([
                "banner_name"=>$request->get("banner_name"),
                "banner_image"=>$request->get("banner_image"),
                "banner_image2"=>$request->get("banner_image2"),
                "status"=>$request->get("status"),
                "thu_tu"=>$request->get("thu_tu"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-banner");
    }
    public function deleteBanner($id){
        $banners = Banner::findorFail($id);
        try {
            $banners->delete();
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-banner");
    }
}
//v
