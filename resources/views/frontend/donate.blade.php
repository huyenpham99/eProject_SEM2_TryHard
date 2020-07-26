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
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif; ">Donate</h2>
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
                        <div class="col-md-6" style="padding-top: 30px">
                            <div class="environment-cause environment-related-cause">
                                <ul class="row">
                                        @foreach($donates as $donate)
                                        <li class="col-md-6">
                                            @php
                                                $datenow = \Carbon\Carbon::now()->toDateString();
                                                $datenowvalue = strtotime($datenow);
                                                $dateend = $donate->__get("end_at");
                                                $dateendvalue = strtotime($dateend);
                                            @endphp
                                            @if ($dateendvalue < $datenowvalue)
                                                <figure>
                                                    <a onclick="alert('Chiến dịch ủng hộ đã kết thúc');"><img src="{{$donate->__get("donate_image")}}" alt=""></a>
                                                    <figcaption></figcaption>
                                                </figure>
                                                <section>
                                                    <h5><a onclick="alert('Chiến dịch ủng hộ đã kết thúc');">{{$donate->__get("donate_desc")}}</a></h5>
                                                    @if($donate->__get("raisermoney") > $donate->__get("goalmoney"))
                                                        <div class="skillst">
                                                            <span class="color">{{number_format($donate->__get("goalmoney"))."VNĐ"}}</span>
                                                            <span style="color: red">{{number_format($donate->__get("raisermoney"))."VNĐ"}}</span>
                                                           <span style="font-size: 12px;color: red;text-decoration: line-through">Start:{{$donate->__get("start_at")}} | End: {{$donate->__get("end_at")}}</span>
                                                            <div class="progressbar1" data-width="{{$donate->__get("raisermoney")}}" data-target="{{$donate->__get("goalmoney")}}"></div>
                                                        </div>
                                                    @else
                                                        <div class="skillst">
                                                            <span class="color">{{number_format($donate->__get("goalmoney"))."VNĐ"}}</span>
                                                            <span style="color: #f8e863">{{number_format($donate->__get("raisermoney"))."VNĐ"}}</span>
                                                            <span style="font-size: 12px;color: red;text-decoration: line-through">Start:{{$donate->__get("start_at")}} | End: {{$donate->__get("end_at")}}</span>
                                                            <div class="progressbar1" data-width="{{$donate->__get("raisermoney")}}" data-target="{{$donate->__get("goalmoney")}}"></div>
                                                        </div>
                                                    @endif
                                                </section>
                                            @else
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
                                                            <span style="font-size: 12px;color: blue">Start:{{$donate->__get("start_at")}} | End: {{$donate->__get("end_at")}}</span>
                                                            <div class="progressbar1" data-width="{{$donate->__get("raisermoney")}}" data-target="{{$donate->__get("goalmoney")}}"></div>
                                                        </div>
                                                    @else
                                                        <div class="skillst">
                                                            <span class="color">{{number_format($donate->__get("goalmoney"))."VNĐ"}}</span>
                                                            <span style="color: #f8e863">{{number_format($donate->__get("raisermoney"))."VNĐ"}}</span>
                                                            <span style="font-size: 12px;color: blue">Start:{{$donate->__get("start_at")}} | End: {{$donate->__get("end_at")}}</span>
                                                            <div class="progressbar1" data-width="{{$donate->__get("raisermoney")}}" data-target="{{$donate->__get("goalmoney")}}"></div>
                                                        </div>
                                                    @endif
                                                </section>
                                                @endif
                                        @endforeach
                                        </li>
                                </ul>
                                {!! $donates->links() !!}
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-top: 30px">
                            <h4 class="text-center" style="padding-bottom: 20px">Top 10 Người Ủng Hộ</h4>
                            <table class="table table-responsive table-hover">
                                <thead>
                                <tr class="table-danger">
                                    <th>STT</th>
                                    <th>Họ Và Tên</th>
                                    <th>Điện Thoại</th>
                                    <th>Số Tiền Ủng Hộ</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i = 1; @endphp
                                @foreach($listDonates as $list)
                                <tr class="table-success">
                                    <td>{{$i++}}</td>
                                    <td>{{$list->__get("name")}}</td>
                                    <td>{{$list->__get("sodienthoai")}}</td>
                                    <td>{{number_format($list->__get("money"))."VNĐ"}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
