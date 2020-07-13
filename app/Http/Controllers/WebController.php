<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Event;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function dashboard (){
        $blog = Blog::all();
        $countBlog = count($blog);
        $sumViewCount = Blog::select("view_count")->sum('view_count');
        $products = Product::all();
        $countProduct = count($products);
        $productViewCount  = Product::select("view_count")->sum('view_count');
        $order = Order::all();
        $countorder = count($order);
        $order_product = DB::table("orders_products")->count();
        $completecount = count($order);
        $totalMoney = number_format(Order::select("grand_total")->sum('grand_total'))."$";
        $event = Event::all();
        $countEvent = count($event);
        $totalPeople = Event::select("event_people_count")->sum('event_people_count');
        return view("dashboard",[
           'countblog' => $countBlog,
           'viewcountblog' => $sumViewCount,
           'countproduct' => $countProduct,
            'viewcountproduct' => $productViewCount,
            'totalmoney' => $totalMoney,
            'countevent' => $countEvent,
            'totalpeople' => $totalPeople,
            'pendingcount' => $order_product,
            'completecount' => $completecount,
        ]);
    }
}
