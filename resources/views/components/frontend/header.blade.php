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
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
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
                            <li class="active dropdown">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Organik Main</a></li>
                                    <li><a href="index-fresh.html">Organik Fresh</a></li>
                                    <li><a href="index-shop.html">Organik Shop</a></li>
                                    <li><a href="index-store.html">Organik Store</a></li>
                                    <li><a href="index-farm.html">Organik Farm</a></li>
                                    <li><a href="index-house.html">Organik House</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="{{url("/about")}}">About Us</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{url("/about")}}">About us 01</a></li>
                                            <li><a href="{{url("/about2")}}">About us 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery-freestyle.html">Gallery Freestyle</a></li>
                                    <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="shortcodes.html">Programs</a>
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
                                                <div class="col-sm-3">
                                                    <div class="pt-4 pb-4">
                                                        <img src="frontend/images/megamenu_ads.jpg" alt="" />
                                                    </div>
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
