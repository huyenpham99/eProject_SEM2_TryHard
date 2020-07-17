<!doctype html>
<html lang="en">
<head>
    <x-frontend.head/>
</head>
<body>
<div class="noo-spinner">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<div id="menu-slideout" class="slideout-menu hidden-md-up">
    <div class="mobile-menu">
        <ul id="mobile-menu" class="menu">
            <li class="dropdown">
                <a href="#">Home</a>
                <i class="sub-menu-toggle fa fa-angle-down"></i>
                <ul class="sub-menu">
                    <li class="active"><a href="index.html">Organik Main</a></li>
                    <li><a href="index-fresh.html">Organik Fresh</a></li>
                    <li><a href="index-shop.html">Organik Shop</a></li>
                    <li><a href="index-store.html">Organik Store</a></li>
                    <li><a href="index-farm.html">Organik Farm</a></li>
                    <li><a href="index-house.html">Organik House</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Pages</a>
                <i class="sub-menu-toggle fa fa-angle-down"></i>
                <ul class="sub-menu">
                    <li class="dropdown">
                        <a href="#">About Us</a>
                        <i class="sub-menu-toggle fa fa-angle-down"></i>
                        <ul class="sub-menu">
                            <li><a href="about-us.html">About us 01</a></li>
                            <li><a href="about-us-2.html">About us 02</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery-freestyle.html">Gallery Freestyle</a></li>
                    <li><a href="gallery-grid.html">Gallery Grid</a></li>
                    <li><a href="404.html">404</a></li>
                </ul>
            </li>
            <li>
                <a href="shortcodes.html">Shortcodes</a>
            </li>
            <li class="dropdown">
                <a href="#">Shop</a>
                <i class="sub-menu-toggle fa fa-angle-down"></i>
                <ul class="sub-menu">
                    <li><a href="my-account.html">My Account</a></li>
                    <li><a href="cart-empty.html">Empty Cart</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Check Out</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="shop-list.html">Shop List</a></li>
                    <li><a href="shop-detail.html">Single Product</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Blog</a>
                <i class="sub-menu-toggle fa fa-angle-down"></i>
                <ul class="sub-menu">
                    <li><a href="blog.html">Blog List</a></li>
                    <li><a href="blog-classic.html">Blog Classic</a></li>
                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                    <li><a href="blog-detail.html">Blog Single</a></li>
                </ul>
            </li>
            <li>
                <a href="contact-us.html">Contact</a>
            </li>
        </ul>
    </div>
</div>
    <x-frontend.header/>

    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <form action="{{url("update-user/{$currentUser->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--            // method"POST" dùng để báo route--}}
                    @csrf
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" value="{{$currentUser->__get("name")}}" name="name" class="form-control @error("name") is-invalid @enderror">
                                    @error("name")
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>User Image</label>
                                    <input type="file" name="image" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-lg-6" style="display: none">
                                <div class="form-group">
                                    <label>User Role</label>
                                    <input type="text" value="{{$currentUser->__get("role")}}" name="role" class="form-control @error("role") is-invalid @enderror">
                                    @error("role")
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6" style="display: none">
                                <label>User Password</label>
                                <input type="password" value="{{$currentUser->__get("password")}}" name="password" class="form-control @error("password") is-invalid @enderror">
                                @error("password")
                                <span class="error invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label>User Email</label>
                                    <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->__get("email")}}" name="email" class="form-control @error("email") is-invalid @enderror">
                                    @error("email")
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>User Address</label>
                                    <input type="text" value="{{$currentUser->__get("address")}}" name="address" class="form-control @error("address") is-invalid @enderror">
                                    @error("address")
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>User Telephone</label>
                                    <input type="text" value="{{$currentUser->__get("telephone")}}" name="telephone" class="form-control @error("telephone") is-invalid @enderror">
                                    @error("telephone")
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Description -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-sm">Change</button>
                </form>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Đơn hàng số
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($orders as $order)
                            <tr>
                                <td>Số: {{$order->__get("id")}}</td>
                                @if($order->__get("status") == 1)
                                    <td><a style="color: white" class="btn btn-danger">Chờ xác nhận</a></td>
                                @elseif($order->__get("status") == 2) <td><a style="color: white" class="btn btn-primary">Đang giao hàng</a></td>
                                @elseif($order->__get("status") == 3) <td><a style="color: white" class="btn btn-success">Đã hoàn thành</a></td>
                                @elseif($order->__get("status") == 4) <td><a style="color: white" class="btn btn-dark">Đã hủy đơn</a></td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    </div>

    <x-frontend.footer/>
<x-frontend.scripts/>
</body>
</html>






