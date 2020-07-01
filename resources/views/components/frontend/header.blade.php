<div class="topbar">
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
                        <li class="dropdown">
                            <a href="#">Languages</a>
                            <ul class="sub-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Français</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url("/login")}}">Login</a></li>
                        <li><a href="{{url("/register")}}">Register</a></li>
                        <div class="logout" style="position: relative">
                            @guest
                                <li class="float-right" style="list-style: none;"><a href="{{url("/login")}}"
                                                                                     style="border-radius: 20px; width: 100px; height: 40px"
                                                                                     type="button"
                                                                                     class="btn btn-secondary">Login</a>
                                </li>
                            @else
                                <a class="dropdown-item"
                                   href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                    <li class="float-right" style="list-style: none;">
                                        <button class="btn btn-outline-danger"  style="border-radius: 20px; width: 100px; height: 40px" type="button" >Logout
                                        </button>
                                    </li>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endguest
                        </div>
=                    </ul>
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
                        <input type="search" class="top-search-input" name="s" placeholder="What are you looking for?" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="index.html" id="logo">
                    <img class="logo-image" src="frontend/images/logo.png" alt="Organik Logo" />
                </a>
            </div>
            <div class="col-md-9">
                <div class="header-right">
                    <nav class="menu">
                        <ul class="main-menu">
                            <li>
                                <a href="{{url("/home")}}">Home</a>
                            </li>
                              <li>
                                  <a href="{{url("/about")}}">About Us</a>
                              </li>

                            <li>
                                <a href="{{url("/programs")}}">Programs</a>
                            </li>
                            <li class="dropdown mega-menu">
                                <a href="{{url("/shop")}}">Shop</a>
                                <ul class="sub-menu">
                                    <li>
                                        <div class="mega-menu-content col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    @foreach(\App\Category::orderBy("category_name","ASC")->limit(4)->get() as $category)
                                                    <div class="pt-4 pb-4">
                                                        <h3 href="">{{$category->__get("category_name")}}</h3>
                                                        <ul>
                                                            @foreach(\App\Product::with("Category")->where("category_id","like",$category->__get("id"))->get() as $pro )
                                                                <li><a href="{{$pro->getProductUrl()}}">{{$pro->__get("product_name")}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li >
                                <a href="{{url("/blog")}}">Blog</a>
                            </li>
                            <li>
                                <a href="{{url("/contact")}}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="btn-wrap">
                        <div class="mini-cart-wrap">
                            <div class="mini-cart">
                                <div class="mini-cart-icon" data-count="2">
                                    <i class="ion-bag"></i>
                                </div>
                            </div>
                            <div class="widget-shopping-cart-content">
                                <ul class="cart-list">
                                    <li>
                                        <a href="#" class="remove">×</a>
                                        <a href="shop-detail.html">
                                            <img src="frontend/images/shop/thumb/shop_1.jpg" alt="" />
                                            Orange Juice&nbsp;
                                        </a>
                                        <span class="quantity">1 × $12.00</span>
                                    </li>
                                    <li>
                                        <a href="#" class="remove">×</a>
                                        <a href="shop-detail.html">
                                            <img src="frontend/images/shop/thumb/shop_2.jpg" alt="" />
                                            Aurore Grape&nbsp;
                                        </a>
                                        <span class="quantity">1 × $9.00</span>
                                    </li>
                                </ul>
                                <p class="total">
                                    <strong>Subtotal:</strong>
                                    <span class="amount">$21.00</span>
                                </p>
                                <p class="buttons">
                                    <a href="cart.html" class="view-cart">View cart</a>
                                    <a href="checkout.html" class="checkout">Checkout</a>
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
                        <img class="logo-image" src="images/logo.png" alt="Organik Logo" />
                    </a>
                </div>
            </div>
            <div class="col-xs-2">
                <div class="header-right">
                    <div class="mini-cart-wrap">
                        <a href="cart.html">
                            <div class="mini-cart">
                                <div class="mini-cart-icon" data-count="2">
                                    <i class="ion-bag"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
