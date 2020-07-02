
@extends('layouts.app')
@section('content')
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
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">MaDang Login</h1>
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
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group pl--4">
                                                <button type="submit" class="btn btn-primary" style="width: 100%">
                                                    {{ __('Login') }}
                                                </button>
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link"  style="width: 100%" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                                <a class="btn btn-link"  style="width: 100%" href="{{ route('register') }}">
                                                    {{ __('Dont Have Account Regiser Now?') }}
                                                </a>
                                            </div>
                                            <hr>
                                            <a href="{{url("/")}}" class="btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Login with Google
                                            </a>
                                            <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>

                                        </form>
                                        <hr>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
