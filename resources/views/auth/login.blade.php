
@extends('layouts.app')
@section('content')
    <body class="bg-gradient-primary">
    <body class="bg-gradient-primary login">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"> Đăng Nhập</h1>
                                    </div>
                                    <form method="POST" action="{{route('login')}}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" placeholder="Enter Your Email Address" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password"placeholder="Enter Your Password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Nhớ Mật Khẩu') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group pl--4">
                                            <button type="submit" class="btn btn-primary" style="width: 100%">
                                                {{ __('Đăng Nhập') }}
                                            </button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link"  style="width: 100%" href="{{ route('password.request') }}">
                                                    {{ __('Quên Mật khẩu?') }}
                                                </a>
                                            @endif
                                            <a class="btn btn-link"  style="width: 100%" href="{{ route('register') }}">
                                                {{ __('Đăng Ký Ngay?') }}
                                            </a>
                                        </div>
                                        <hr>
                                        <a href="{{ url('/auth/redirect/google') }}" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Đăng Nhập Bằng Google
                                        </a>
                                        <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Đăng Nhập Bằng Facebook
                                        </a>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
