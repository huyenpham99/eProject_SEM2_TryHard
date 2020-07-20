<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\Charts\BlogChart;
use App\Charts\BlogChart2;
use App\Event;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function dashboard()
    {
        $topBlog = DB::table('blog')->limit(10)->orderBy('view_count','desc')->get();
        $blog             = Blog::all();
        $countBlog        = count($blog);
        $sumViewCount     = Blog::select("view_count")->sum('view_count');
        $products         = Product::all();
        $countProduct     = count($products);
        $productViewCount = Product::select("view_count")->sum('view_count');
        $order            = Order::all();
        $countorder       = count($order);
        $order_product    = DB::table("orders_products")->count();
        $completecount    = count($order);
        $totalMoney       = number_format(Order::select("grand_total")->sum('grand_total'));
        $event            = Event::all();
        $countEvent       = count($event);
        $totalPeople      = Event::select("event_people_count")->sum('event_people_count');
        $blogcount = BlogCategory::leftjoin('blog', 'blogcategory.id', "=", "blog.blog_category_id")
            ->selectRaw('blogcategory.id,count(blog.id) as countBlogs')
            ->groupByRaw("blogcategory.id")
            ->orderByDescRaw('countBlogs')
            ->get();
        $viewcount = DB::table('blog')
            ->select('blog.view_count as view', 'blog.blog_title', 'blog.id')
            ->groupBy('blog.id')
            ->orderByDesc('view')
            ->limit(10)
            ->get();
        $label1    = $blogcount->pluck('blog_category_name');
        $values    = $blogcount->pluck('countBlogs');
        $chart     = new BlogChart();
        $chart->labels($label1);
        $dataset = $chart->dataset('Blog Count Each Category', 'bar', $values);
        $dataset->backgroundColor(collect(['#ff6397', '#3ae374', '#ff3838', '#7158e2']));
        $chart2  = new BlogChart2();
        $label2  = $viewcount->pluck('id');
        $values2 = $viewcount->pluck('view');
        $chart2->labels($label2);
        $dataset = $chart2->dataset('View Count Each Blog', 'line', $values2);
        $dataset->backgroundColor(collect(['#ff6397', '#3ae374', '#ff3838', '#7158e2']));
        $blogcount =DB::table('blogcategory')->leftJoin('blog','blog.blog_category_id',"=","blogcategory.id")
            ->selectRaw('blogcategory.*,count(blog.id) as countBlogs')
            ->groupByRaw("blogcategory.id")
            ->orderByRaw("countBlogs DESC")
            ->get();
        $viewcount = DB::table('blog')
            ->select('blog.view_count as view', 'blog.blog_title', 'blog.id')
            ->groupByRaw('blog.id')
            ->orderByRaw('view DESC')
            ->limit(10)
            ->get();
        $label1 = $blogcount->pluck('blog_category_name');
        $values = $blogcount->pluck('countBlogs');
        $chart  = new BlogChart();
        $chart->labels($label1);
        $dataset = $chart->dataset('Blog Count Each Category', 'bar', $values);
        $dataset->backgroundColor(collect(['#ff6397', '#3ae374', '#ff3838', '#7158e2']));
        $chart2  = new BlogChart2();
        $label2  = $viewcount->pluck('id');
        $values2 = $viewcount->pluck('view');
        $chart2->labels($label2);
        $dataset = $chart2->dataset('View Count Each Blog', 'line', $values2);
        $dataset->backgroundColor(collect(['#ff6397', '#3ae374', '#ff3838', '#7158e2']));

        return view("dashboard", [
            'countblog' => $countBlog,
            'viewcountblog' => $sumViewCount,
            'countproduct' => $countProduct,
            'viewcountproduct' => $productViewCount,
            'totalmoney' => $totalMoney,
            'countevent' => $countEvent,
            'totalpeople' => $totalPeople,
            'pendingcount' => $order_product,
            'completecount' => $completecount,
            'chart' => $chart,
            'chart2' => $chart2,
            'topBlog' => $topBlog,
        ]);
    }
}
