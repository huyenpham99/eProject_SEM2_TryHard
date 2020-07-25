@extends("frontend.layout")
@section("content")

    <link href="{{asset("css/styledonate.css")}}" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{asset("css/styledonate.css")}}"/>--}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center">Donate</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumbs">
                            <li><a href="{{url("/home")}}">Home</a></li>
                            <li>Ủng Hộ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="environment-main-content" style="background-color: white!important;">

            <div class="environment-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="environment-cause environment-related-cause">
                                <ul class="row">
                                        @foreach($donates as $donate)
                                        <li class="col-md-6">
                                        <figure>
                                            <a href="{{$donate->getDonateUrl()}}"><img src="{{$donate->__get("donate_image")}}" alt=""></a>
                                            <figcaption></figcaption>
                                        </figure>
                                        <section>
                                            <h5><a href="{{$donate->getDonateUrl()}}">{{$donate->__get("donate_desc")}}</a></h5>
                                            @if($donate->__get("raisermoney") > $donate->__get("goalmoney"))
                                                <div class="skillst">
                                                    <span class="color">{{number_format($donate->__get("goalmoney"))."VNĐ"}}</span>
                                                    <span style="color: red">{{number_format($donate->__get("raisermoney"))."VNĐ"}}</span>
                                                    <span style="color: red">Số tiền ủng hộ vượt mức</span>
                                                    <div class="progressbar1" data-width="{{$donate->__get("raisermoney")}}" data-target="{{$donate->__get("goalmoney")}}"></div>
                                                </div>
                                            @else
                                                <div class="skillst">
                                                    <span class="color">{{number_format($donate->__get("goalmoney"))."VNĐ"}}</span>
                                                    <span>{{number_format($donate->__get("raisermoney"))."VNĐ"}}</span>
                                                    <div class="progressbar1" data-width="{{$donate->__get("raisermoney")}}" data-target="{{$donate->__get("goalmoney")}}"></div>
                                                </div>
                                                @endif
                                        </section>
                                        @endforeach
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
