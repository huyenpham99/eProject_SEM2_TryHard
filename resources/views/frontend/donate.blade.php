@extends("frontend.layout")
@section("content")
    <link rel="stylesheet" href="{{asset("css/styledonate.css")}}"/>
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
                        <form action="{{url("/update-money/")}}" method="post">
                            @method("POST")
                            @csrf
                        <div class="col-md-7">
                            <div class="environment-donation-section">
                                <div class="environment-section-heading"><h2><span>Lựa Chọn Mức Ủng Hộ</span></h2></div>

                                <ul>
                                    <li class="current">
                                        <span><input type="radio" name="sotienungho" value="10000"></span><span style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 1:</b> 10,000 VNĐ</span>
                                    </li>
                                    <li>
                                        <span><input type="radio" name="sotienungho" value="20000"></span><span style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 2:</b> 20,000 VNĐ</span>
                                    </li>
                                    <li>
                                        <span><input type="radio" name="sotienungho" value="50000"></span><span style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 3:</b> 50,000 VNĐ</span>
                                    </li>
                                    <li>
                                        <span><input type="radio" name="sotienungho" value="100000"></span><span style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 4:</b> 100,000 VNĐ</span>

                                    </li>
                                    <li>
                                        <span><input type="radio" name="sotienungho" value="200000"></span><span style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 5:</b> 200,000 VNĐ</span>

                                    </li>
                                    <li>
                                        <span><input type="radio" name="sotienungho" value="500000"></span><span style="padding-left: 20px;font-size: 18px;color: #2c2a28;font-family: 'Helvetica Neue',Sans-Serif"><b>Mức 6:</b> 500,000 VNĐ</span>

                                    </li>
                                    <li class="add-amount">
                                        <div class="environment-section-heading"><h2><span>Số tiền khác</span></h2></div>
                                        <div class="environment-add-amount">
                                            <input type="text" name="sotienungho">
                                            <label>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="environment-section-heading"><h2><span>Danh Sách Donate Hiện Tại</span></h2></div>
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
                                            <div class="skillst">
                                                <span class="color">{{number_format($donate->__get("goalmoney"))."VNĐ"}}</span>
                                                <span>{{number_format($donate->__get("raisermoney"))."VNĐ"}}</span>
                                                <div class="progressbar1" data-width="{{$donate->__get("raisermoney")}}" data-target="{{$donate->__get("goalmoney")}}"></div>
                                            </div>
                                        </section>
                                        @endforeach
                                        </li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-5">
                            <div class="environment-section-heading"><h2><span>Thông tin người ủng hộ</span></h2></div>
                            <div class="environment-Donation-form" style="background-color: whitesmoke">
                                    <ul>
                                        <p>Thông tin :</p>
                                        <div class="form-group">
                                            <input type="text"  style="background-color: white" class="form-control" name="tennguoiungho" placeholder="Họ Và Tên"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" style="background-color: white" class="form-control" name="diachinguoiungho" placeholder="Địa chỉ"/>

                                        </div>
                                        <div class="form-group">
                                            <input type="text" style="background-color: white" class="form-control" name="emailnguoiungho" placeholder="Email"/>

                                        </div>
                                        <div class="form-group">
                                            <input type="text" style="background-color: white" class="form-control" name="sodienthoai" placeholder="Số điện thoại"/>

                                        </div>
                                    </ul>
                            </div>
                            <button type="submit">Ủng Hộ Ngay</button>
                        </div>
                    </div>
                            </form>
                </div>
            </div>

        </div>
@endsection
