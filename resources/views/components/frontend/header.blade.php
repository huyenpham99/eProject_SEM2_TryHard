<div class="topbar" style="background-color: #f5f5f5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="topbar-text">
                    <span>Work time: Monday - Friday: 08AM-06PM</span>
                    <span>Saturday - Sunday: 10AM-06PM</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="topbar-menu">
                    <ul class="topbar-menu">
                        <div class="logout" style="position: relative">
                            @guest
                                <li class="float-right" style="list-style: none;"><a href="{{url("/login")}}"
                                                                                     style="border-radius: 20px; width: 100px; height: 40px"
                                                                                     type="button"
                                                                                     class="btn btn-secondary">Login</a>
                                </li>
                            @else
                                <li class="dropdown mega-menu">
                                    <p data-toggle="dropdown"><img style="position:absolute; top: -15px;left: -45px; border-radius: 50%; width: 50px;height: 50px; overflow: hidden"src="{{\Illuminate\Support\Facades\Auth::user()->__get("image")}}" alt="">

                                         {{\Illuminate\Support\Facades\Auth::user()->name}}<i
                                            class="fa fa-angle-down ml-1 opacity-8"></i></p>
                                    <ul class="sub-menu" style="background-color: #f5f5f5!important;width: 160px;">
                                        <li style="padding: 10px 0">
                                            @php
                                                $id =  \Illuminate\Support\Facades\Auth::user()->__get("id");
                                            @endphp
                                            <a href="{{url("/view-user/{$id}")}}" tabindex="0" class="dropdown-item">Profile</a>
                                        </li>
                                        <li style="padding: 10px 0">
                                            <a href="{{url("/change-password")}}" tabindex="0" class="dropdown-item">Change
                                                Password</a>
                                        </li>
                                        <li style=": 10px 0">
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-item ">
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>

                                </li>
                                {{--                                    <a href="{{url("#")}}" tabindex="0" class="dropdown-item">Profile</a>--}}
                                {{--                                    --}}
                                {{--                                    <a class="dropdown-item "--}}
                                {{--                                       href="{{ route('logout') }}"--}}
                                {{--                                       onclick="event.preventDefault();--}}
                                {{--                            document.getElementById('logout-form').submit();">--}}
                                {{--                                        <li class="float-right" style="list-style: none;">--}}
                                {{--                                            Logout--}}
                                {{--                                        </li>--}}
                                {{--                                    </a>--}}

                            @endguest
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<header id="header" class="header header-desktop header-2">
    <div class="top-search">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form>
                        <input type="search"  onkeyup="searchHome(this)" class="top-search-input" name="search" placeholder="What are you looking for?"/>
                        <p id="count"></p>
                    </form>
                    <div class="table__search">
                        <table id="table-search"  style="background-color: #5fbd74" class="table table-borderless table-striped">
                            <thead id="head-search">

                            </thead>
                            <tbody style="background-color: #5fbd74" id="tbody">

                            </tbody>
                            <tbody style="background-color: white" id="tbody2">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="{{url("/")}}" id="logo">
                    <img class="logo-image" src="/frontend/images/logohealthyfood1.png"
                         style="width: 150px;margin-top: 15px" alt="Organik Logo"/>
                </a>
            </div>
            <div class="col-md-9">
                <div class="header-right">
                    <nav class="menu">
                        <ul class="main-menu">
                            <li>
                                <a href="{{url("/")}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url("/about")}}">About Us</a>
                            </li>

                            <li>
                                <a href="{{url("/programcategory")}}">Programs</a>
                            </li>
                            <li class="dropdown mega-menu">
                                <a href="{{url("/shop")}}">Shop</a>
                                <ul class="sub-menu">
                                    <li>
                                        <div class="mega-menu-content col-sm-12">
                                            <div class="row">
                                                @foreach(\App\Category::orderBy("category_name","ASC")->limit(4)->get() as $category)
                                                    <div class="col-sm-3">
                                                        <div class="pt-4 pb-4">
                                                            <h3 href="">{{$category->__get("category_name")}}</h3>
                                                            <ul>
                                                                @foreach(\App\Product::with("Category")->where("category_id","like",$category->__get("id"))->get() as $pro )
                                                                    <li>
                                                                        <a href="{{$pro->getProductUrl()}}">{{$pro->__get("product_name")}}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url("/blog")}}">Blog</a>
                            </li>
                            <li>
                                <a href="{{url("/donate")}}">Donate</a>
                            </li>
                            <li>
                                <a href="{{url("/contact")}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="btn-wrap">
                        <div class="mini-cart-wrap">
                            <div class="mini-cart">
                                @php
                                    $count = 0 ;
                                $myCart = session()->has("my_cart")?session("my_cart"):[];
                                $dem  = count($myCart);
                                @endphp
                                <div class="mini-cart-icon" data-count="{{$dem}}">
                                    <i class="ion-bag"></i>
                                </div>
                            </div>
                            <div class="widget-shopping-cart-content">
                                <p class="buttons">
                                    <a href="{{url("/shopping-cart")}}" class="view-cart">View cart</a>
                                    <a href="{{url("/checkout")}}" class="checkout">Checkout</a>
                                </p>
                            </div>
                        </div>
                        <div class="top-search-btn-wrap">
                            <div class="top-search-btn">
                                <a href="javascript:void(0);">
                                    <i class="ion-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="header header-mobile">
    <div class="container">
        <div class="row">
            <div class="col-xs-2">
                <div class="header-left">
                    <div id="open-left"><i class="ion-navicon"></i></div>
                </div>
            </div>
            <div class="col-xs-8">
                <div class="header-center">
                    <a href="index.html" id="logo-2">
                        <img class="logo-image" src="public/frontend/images/logohealthyfood1.png" style="width: 85px"
                             alt=""/>
                    </a>
                </div>
            </div>
            <div class="col-xs-2">
                <div class="header-right">
                    <div class="mini-cart-wrap">
                        <a href="cart.html">
                            <div class="mini-cart">
                                @php
                                    $myCart = session()->has("my_cart")?session("my_cart"):[];
                                    $productIds = [];
                                    foreach ($myCart as $item){
                                        $productIds[] = $item["product_id"];
                                    }
                                    $grandTotal = 0;
                                    $products = \App\Product::find($productIds);
                                    foreach ($products as $p){
                                        foreach ($myCart as $item){
                                            if($p->__get("id") == $item["product_id"])
                                                $grandTotal += ($p->__get("product_price")*$item["qty"]);
                                        }
                                    }
                                @endphp
                                <div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
