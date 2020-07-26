@extends("frontend.layout")
@section("content")
    <link rel="stylesheet" href="{{asset("css/styledonate.css")}}"/>
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif; ">Donate Detail</h2>
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
                            <li><a href="{{url("/blog")}}">Donate</a></li>
                            <li>Donate Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-blog">
                            <div class="post-thumbnail">
                                <a href="#">
                                    <img src="{{$donate->__get("donate_image")}}" alt=""/>
                                </a>
                            </div>
                            <div class="entry-meta">
										<span class="posted-on">
											<i class="ion-calendar"></i>
										</span>
                                <span class="comment">
                                    <i class="ion-chatbubble-working"></i> 0
                                </span>
                            </div>
                            <h1 class="entry-title">{{$donate->__get("donate_title")}}</h1>
                            <div class="entry-content">
                                <p>{{$donate->__get("donate_desc")}}</p>
                                @php
                                    $doc = new DOMDocument();
                                    $doc->loadHTML('<?xml encoding="utf-8" ?>'.($donate->__get("donate_content")));
                                 echo $doc->saveHTML();
                                @endphp
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="environment-main-content" style="background-color: white!important;">
                            <div class="environment-main-section">
                                <div class="container">
                                    <div class="row">
                                        <form action="{{url("/update-money/{$donate->__get("id")}")}}" method="post">
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
                                                                <input type="text" class="form-control" name="sotienunghokhac">
                                                                <label>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-7">
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
                                                    <input type="email" style="background-color: white" class="form-control" name="emailnguoiungho" placeholder="Email"/>

                                                </div>
                                                <div class="form-group">
                                                    <input type="text" style="background-color: white" class="form-control" name="sodienthoai" placeholder="Số điện thoại"/>

                                                </div>
                                            </ul>
                                        </div>
                                        <input type="hidden" name="donate_id" value="{{$donate->__get("id")}}">
                                        <button type="submit">Ủng Hộ Ngay</button>
                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
