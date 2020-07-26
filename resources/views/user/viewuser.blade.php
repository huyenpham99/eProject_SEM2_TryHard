@extends("layout")
@section("title","View User")
@section("contentHeader","View User")
@section("content")
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">

                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
{{--                                <img src="{{$currentUser->getImage()}}" class="rounded-circle">--}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-info  mr-4 ">Kết nối</a>
                        <a href="#" class="btn btn-sm btn-default float-right">Tin nhắn</a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading">22</span>
                                    <span class="description">Bạn bè</span>
                                </div>
                                <div>
                                    <span class="heading">10</span>
                                    <span class="description">Ảnh</span>
                                </div>
                                <div>
                                    <span class="heading">89</span>
                                    <span class="description">Bình luận</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                        </ul>
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tên tài khoản: </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$currentUser->__get("name")}}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Địa chỉ Email: </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$currentUser->__get("email")}}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Tên người dùng: </label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$currentUser->__get("telephone")}}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Địa chỉ:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$currentUser->__get("address")}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Trải nghiệm</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Hourly Rate</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>10$/hr</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Total Projects</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>230</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>English Level</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Availability</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>6 months</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h5 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>Chief Office Manager
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>University of Computer Science
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0">Thay đổi thông tin</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{url("admin/update-user/{$currentUser->__get("id")}")}}" method="post" enctype="multipart/form-data">
                        @method("PUT")
                        {{--            // method"POST" dùng để báo route--}}
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin người dùng</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tên người dùng</label>
                                        <input type="text" value="{{$currentUser->__get("name")}}" name="name" class="form-control @error("name") is-invalid @enderror">
                                        @error("name")
                                        <span class="error invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Ảnh người dùng</label>
                                        <input type="text" name="image" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-lg-6" style="display: none">
                                    <div class="form-group">
                                        <label>Phân quyền người dùng</label>
                                        <input type="text" value="{{$currentUser->__get("role")}}" name="role" class="form-control @error("role") is-invalid @enderror">
                                        @error("role")
                                        <span class="error invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6" style="display: none">
                                    <label>Mật khẩu người dùng</label>
                                    <input type="password" value="{{$currentUser->__get("password")}}" name="password" class="form-control @error("password") is-invalid @enderror">
                                    @error("password")
                                    <span class="error invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Thông tin liên hệ</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label>Email người dùng</label>
                                        <input type="text" value="{{$currentUser->__get("email")}}" name="email" class="form-control @error("email") is-invalid @enderror">
                                        @error("email")
                                        <span class="error invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Địa chỉ người dùng</label>
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
                                        <label>Điện thoại</label>
                                        <input type="text" value="{{$currentUser->__get("telephone")}}" name="telephone" class="form-control @error("telephone") is-invalid @enderror">
                                        @error("telephone")
                                        <span class="error invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <button type="submit" class="btn btn-primary btn-lg btn-block btn-sm">Thay đổi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
