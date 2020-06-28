<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view("frontend.home");
    }

    public function about(Request $request)
    {
        return view("frontend.about");
    }



    public function shop(Request $request)
    {
        return view("frontend.shop");
    }

    public function programs(Request $request)
    {
        return view("frontend.programs");
    }
}
