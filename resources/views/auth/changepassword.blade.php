
@extends('layouts.app')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <body class="bg-gradient-primary register" style="background-color: #4e73df;
    background-image: linear-gradient(180deg,#fee06e 10%,#bbdd7f 100%);
    background-size: cover;">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0" style="display: flex; flex-direction: row">
                        <!-- Nested Row within Card Body -->
                        <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background: url({{asset("frontend/images/oranges.png")}});
                            background-position: center;
                            background-size: cover; width: 450px; height: 560px"></div>
                        <div class="col-lg-6">
                            <div class="card-header">{{ __('Thay Đổi Mật khẩu') }}</div>
                            <div class="card-body">
                                <form id="form-change-password" role="form" method="POST" action="{{ url('change-password') }}" novalidate class="form-horizontal">
                                    <div class="user col-12">
                                        <p class="btn btn-primary" style="margin-left: 86px">Tên Người Dùng : {{\Illuminate\Support\Facades\Auth::user()->__get("name")}}</p>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="current-password" class="col-sm-12 control-label">Mật Khẩu Hiện Tại</label>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Nhập Mật Khẩu">
                                            </div>
                                        </div>
                                        <label for="password" class="col-sm-12 control-label">Mật Khẩu Mới</label>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập Mật Khẩu Mới">
                                            </div>
                                        </div>
                                        <label for="password_confirmation" class="col-sm-12 control-label">Nhập Lại Mật Khẩu</label>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Nhập Lại Mật Khẩu Mới">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-5 col-sm-6">
                                            <button type="submit" class="btn btn-success" style="margin-left: 130px;width: 100px">Thay Đổi</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
{{--    <body class="bg-gradient-primary register" style="background-color: #4e73df;--}}
{{--    background-image: linear-gradient(180deg,#fee06e 10%,#bbdd7f 100%);--}}
{{--    background-size: cover;">--}}

{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                    <div class="card col-md-12">--}}
{{--                        <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background: url({{asset("frontend/images/oranges.png")}});--}}
{{--                            background-position: center;--}}
{{--                            background-size: cover; width: 450px; height: 560px"></div>--}}
{{--                        --}}
{{--                    </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    <body/>--}}
@endsection

