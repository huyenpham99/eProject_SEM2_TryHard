@extends("frontend.layout")
@section("content")
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div id="main">
        <div class="section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div id="rev_slider" class="rev_slider fullscreenbanner">
                            <ul>
                                @foreach($banner as $b)
                                    @if($b->__get("thu_tu") == 1)
                                        @if($b->__get("status") ==1)
                                            <li data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                                                data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default"
                                                data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                                                data-title="Slide">
                                                <img src="{{$b->getImage("banner_image")}}" alt=""
                                                     data-bgposition="center center" data-bgfit="cover"
                                                     data-bgrepeat="no-repeat"
                                                     data-bgparallax="off" class="rev-slidebg"/>
                                                <div class="tp-caption rs-parallaxlevel-1"
                                                     data-x="center" data-hoffset=""
                                                     data-y="center" data-voffset="-80"
                                                     data-width="['none','none','none','none']"
                                                     data-height="['none','none','none','none']"
                                                     data-type="image" data-responsive_offset="on"
                                                     data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                                     data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="{{$b->getImage("banner_image2")}}" alt=""/>
                                                </div>
                                                <a class="tp-caption btn-2 hidden-xs" href="#"
                                                   data-x="['center','center','center','center']"
                                                   data-y="['center','center','center','center']"
                                                   data-voffset="['260','260','260','260']"
                                                   data-width="['auto']" data-height="['auto']"
                                                   data-type="button" data-responsive_offset="on"
                                                   data-responsive="off"
                                                   data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(95,189,116);bg:rgba(51, 51, 51, 0);"}]'
                                                   data-textAlign="['inherit','inherit','inherit','inherit']"
                                                   data-paddingtop="[16,16,16,16]" data-paddingright="[30,30,30,30]"
                                                   data-paddingbottom="[16,16,16,16]" data-paddingleft="[30,30,30,30]">Shop
                                                    Now
                                                </a>
                                            </li>
                                        @else
                                            <li data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                                                data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default"
                                                data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                                                data-title="Slide">
                                                <img src="frontend/images/slider/slide_bg_5.jpg" alt=""
                                                     data-bgposition="center center" data-bgfit="cover"
                                                     data-bgrepeat="no-repeat"
                                                     data-bgparallax="off" class="rev-slidebg"/>
                                                <div class="tp-caption rs-parallaxlevel-1"
                                                     data-x="center" data-hoffset=""
                                                     data-y="center" data-voffset="-120"
                                                     data-width="['none','none','none','none']"
                                                     data-height="['none','none','none','none']"
                                                     data-type="image" data-responsive_offset="on"
                                                     data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                                     data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="frontend/images/slider/slide_8.png" alt=""/>
                                                </div>
                                            </li>
                                        @endif
                                    @elseif($b->__get("thu_tu") == 2)
                                        @if($b->__get("status") == 1)
                                            <li data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                                                data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default"
                                                data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                                                data-title="Slide">
                                                <img src="{{$b->getImage("banner_image")}}" alt=""
                                                     data-bgposition="center center" data-bgfit="cover"
                                                     data-bgrepeat="no-repeat"
                                                     data-bgparallax="off" class="rev-slidebg"/>
                                                <div class="tp-caption rs-parallaxlevel-1"
                                                     data-x="center" data-hoffset=""
                                                     data-y="center" data-voffset="-80"
                                                     data-width="['none','none','none','none']"
                                                     data-height="['none','none','none','none']"
                                                     data-type="image" data-responsive_offset="on"
                                                     data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                                     data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="{{$b->getImage("banner_image2")}}" alt=""/>
                                                </div>

                                                <a class="tp-caption btn-2 hidden-xs" href="#"
                                                   data-x="['center','center','center','center']"
                                                   data-y="['center','center','center','center']"
                                                   data-voffset="['260','260','260','260']"
                                                   data-width="['auto']" data-height="['auto']"
                                                   data-type="button" data-responsive_offset="on"
                                                   data-responsive="off"
                                                   data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(95,189,116);bg:rgba(51, 51, 51, 0);"}]'
                                                   data-textAlign="['inherit','inherit','inherit','inherit']"
                                                   data-paddingtop="[16,16,16,16]" data-paddingright="[30,30,30,30]"
                                                   data-paddingbottom="[16,16,16,16]" data-paddingleft="[30,30,30,30]">Shop
                                                    Now
                                                </a>
                                            </li>
                                        @else
                                            <li data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                                                data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default"
                                                data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                                                data-title="Slide">
                                                <img src="frontend/images/slider/slide_bg_5.jpg" alt=""
                                                     data-bgposition="center center" data-bgfit="cover"
                                                     data-bgrepeat="no-repeat"
                                                     data-bgparallax="off" class="rev-slidebg"/>
                                                <div class="tp-caption rs-parallaxlevel-1"
                                                     data-x="center" data-hoffset=""
                                                     data-y="center" data-voffset="-120"
                                                     data-width="['none','none','none','none']"
                                                     data-height="['none','none','none','none']"
                                                     data-type="image" data-responsive_offset="on"
                                                     data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                                     data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="frontend/images/slider/slide_8.png" alt=""/>
                                                </div>
                                            </li>
                                        @endif
                                    @elseif($b->__get("thu_tu") == 3)
                                        @if($b->__get("status") == 1)
                                            <li data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                                                data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default"
                                                data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                                                data-title="Slide">
                                                <img src="{{$b->getImage("banner_image")}}" alt=""
                                                     data-bgposition="center center" data-bgfit="cover"
                                                     data-bgrepeat="no-repeat"
                                                     data-bgparallax="off" class="rev-slidebg"/>
                                                <div class="tp-caption rs-parallaxlevel-1"
                                                     data-x="center" data-hoffset=""
                                                     data-y="center" data-voffset="-80"
                                                     data-width="['none','none','none','none']"
                                                     data-height="['none','none','none','none']"
                                                     data-type="image" data-responsive_offset="on"
                                                     data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                                     data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="{{$b->getImage("banner_image2")}}" alt=""/>
                                                </div>

                                                <a class="tp-caption btn-2 hidden-xs" href="#"
                                                   data-x="['center','center','center','center']"
                                                   data-y="['center','center','center','center']"
                                                   data-voffset="['260','260','260','260']"
                                                   data-width="['auto']" data-height="['auto']"
                                                   data-type="button" data-responsive_offset="on"
                                                   data-responsive="off"
                                                   data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(95,189,116);bg:rgba(51, 51, 51, 0);"}]'
                                                   data-textAlign="['inherit','inherit','inherit','inherit']"
                                                   data-paddingtop="[16,16,16,16]" data-paddingright="[30,30,30,30]"
                                                   data-paddingbottom="[16,16,16,16]" data-paddingleft="[30,30,30,30]">Shop
                                                    Now
                                                </a>
                                            </li>
                                        @else
                                            <li data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                                                data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default"
                                                data-masterspeed="300" data-rotate="0" data-saveperformance="off"
                                                data-title="Slide">
                                                <img src="frontend/images/slider/slide_bg_5.jpg" alt=""
                                                     data-bgposition="center center" data-bgfit="cover"
                                                     data-bgrepeat="no-repeat"
                                                     data-bgparallax="off" class="rev-slidebg"/>
                                                <div class="tp-caption rs-parallaxlevel-1"
                                                     data-x="center" data-hoffset=""
                                                     data-y="center" data-voffset="-120"
                                                     data-width="['none','none','none','none']"
                                                     data-height="['none','none','none','none']"
                                                     data-type="image" data-responsive_offset="on"
                                                     data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                     data-textAlign="['inherit','inherit','inherit','inherit']"
                                                     data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                                    <img src="frontend/images/slider/slide_8.png" alt=""/>
                                                </div>
                                            </li>
                                        @endif
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-bg-1 section-cover pt-17 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mt-3 mb-3">
                            <img src="frontend/images/oranges.png" alt=""/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-1 section-pretitle default-left">Welcome to</div>
                        <h2 class="section-title mtn-2 mb-3">Healthy Food</h2>
                        <p class="mb-4">
                            Healthy Food opened its doors in 1990, it was Renée Elliott's dream to offer the best and
                            widest range of Healthy Food s available, and her mission to promote health in the community
                            and to bring a sense of discovery and adventure into food shopping.
                        </p>
                        <a class="organik-btn arrow" href="#">Our products</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-bg-2 section-cover pt-14">
            <div class="container">
                <div class="row">
                    @foreach($event as $e)
                        @if($e->__get("status")==1)
                            <div class="col-sm-6">
                                <div class="text-center">
                                    <div class="mb-1 section-pretitle white">{{$e->__get("event_name")}}</div>
                                    <h2 class="section-title mtn-2 mb-3">{{$e->__get("event_address")}}</h2>
                                    <p class="white mb-4">
                                        {{$e->__get("event_desc")}}
                                    </p>
                                    <div class="countdown-wrap mb-4">
                                        <div class="countdown-content">
                                            <div class="pl-clock countdown-bar"
                                                 data-time="{{$e->__get("event_date_end")}}"></div>
                                        </div>
                                    </div>
                                    <a class="organik-btn brown" href="{{$e->getEventUrl()}}">Tham gia</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-center floating">
                                    <img src="frontend/images/can.png" alt=""/>
                                </div>
                            </div>
                            @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="section section-bg-3 pt-6 pb-6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Thân Thiện Với Môi Trường</div>
                        <h2 class="text-center section-title mtn-2">Healthy Food</h2>
                        <div class="organik-seperator mb-9 center">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="organik-special-title">
                            <div class="number">01</div>
                            <div class="title">Tươi Sạch</div>
                        </div>
                        <p>Đối với cuộc sống thường nhật nhu cầu về thực phẩm các nguồn thực phẩm tươi sạch chúng tôi luôn dành cho bạn những điều tốt nhất</p>
                        <div class="mb-8"></div>
                        <div class="organik-special-title">
                            <div class="number">02</div>
                            <div class="title">Giúp Bạn Khỏe Mạnh</div>
                        </div>
                        <p>Các loại thực phẩm chúng tôi cung cấp luôn đảm bảo chất lượng và giữ cho bạn khỏe mạnh</p>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-8"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="organik-special-title align-right">
                            <div class="number">03</div>
                            <div class="title">Giúp Bạn Khỏe Mạnh</div>
                        </div>
                        <p>Trang trại chúng tôi được làm theo chương trình rau tươi sạch không thuốc trừ sâu, không hóa chất</p>
                        <div class="mb-8"></div>
                        <div class="organik-special-title align-right">
                            <div class="number">04</div>
                            <div class="title">Giúp Bạn Khỏe Mạnh</div>
                        </div>
                        <p>Trang trại chúng tôi luôn đặt sức khỏe và cuộc sống của bạn lên hàng đầu</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom mt-6 mb-5">
            <div class="container">
                <div class="row">
                    <div class="organik-process">
                        <div class="col-md-3 col-sm-6 organik-process-small-icon-step">
                            <div class="icon">
                                <i class="organik-delivery"></i>
                            </div>
                            <div class="content">
                                <div class="title">Miễn phí ship</div>
                                <div class="text">Cho tất cả đơn hàng trên 1 triệu</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 organik-process-small-icon-step">
                            <div class="icon">
                                <i class="organik-hours-support"></i>
                            </div>
                            <div class="content">
                                <div class="title">Tổng Đài</div>
                                <div class="text">Hỗ Trợ 24/7</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 organik-process-small-icon-step">
                            <div class="icon">
                                <i class="organik-credit-card"></i>
                            </div>
                            <div class="content">
                                <div class="title">Thanh Toán An Toàn</div>
                                <div class="text">Tiện Lợi</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 organik-process-small-icon-step">
                            <div class="icon">
                                <i class="organik-lettuce"></i>
                            </div>
                            <div class="content">
                                <div class="title">Bằng Hết Tấm Lòng</div>
                                <div class="text">Dịch vụ tốt nhất</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-12 pb-9">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Khám Phá</div>
                        <h2 class="text-center section-title mtn-2">Các Sản Phẩm</h2>
                        <div class="organik-seperator center">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="text-center">
                            <ul class="masonry-filter">
                                <li><a href="{{url("/shop")}}">Tất Cả</a>
                                </li>
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{$category->getCategoryUrl()}}">{{$category->__get("category_name")}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product-grid masonry-grid-post">
                        @foreach($products as $product)
                            <div class="col-md-3 col-sm-6 product-item masonry-item text-center">
                                <div class="product-thumb">
                                    <a href="{{$product->getProductUrl()}}">
                                        <div class="badges">
                                            <span class="hot">View: {{$product->__get("view_count")}}  </span>

                                        </div>
                                        <img src="{{$product->__get("product_image")}}" alt=""/>
                                    </a>
                                    <div class="product-action">
												<span class="add-to-cart">
													<a href="javascript: void(0);" class="ajax_add_to_cart"
                                                       onclick="addToCart({{$product->__get("id")}})"
                                                       data-toggle="tooltip" data-placement="top"
                                                       title="Add to cart"></a>
												</span>
                                        <span class="compare">
                                            <a href="{{$product->getProductUrl()}}" data-toggle="tooltip"
                                               data-placement="top" title="Detail"></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="{{$product->getProductUrl()}}">
                                        <h2 class="title">{{$product->__get("product_name")}}</h2>
                                        <span class="price">
                                            <ins>{{$product->__get("product_price")}}</ins>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="loadmore-contain">
                        <a class="organik-btn small" href="#">Xem Thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bg-light pt-10 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Tại Sao Chọn</div>
                        <h2 class="text-center section-title mtn-2">Sản Phẩm của Healthy Food?</h2>
                        <div class="organik-seperator center mb-6">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="accordion icon-left" id="accordion1">
                            <div class="accordion-group toggle">
                                <div class="accordion-heading toggle_title active">
                                    <a class="accordion-toggle" data-toggle="collapse" aria-expanded="true"
                                       aria-controls="collapse1" href="#collapse1">
                                        Lợi ích từ nhiều chất dinh dưỡng
                                    </a>
                                    <span class="icon"><i class="ion-heart"></i></span>
                                </div>
                                <div id="collapse1" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>
                                            Thực phẩm được trồng thực phẩm tốt cho sức khỏe có nhiều chất dinh dưỡng - vitamin,
                                            khoáng chất, enzyme và vi chất dinh dưỡng - hơn thực phẩm được trồng thương mại vì
                                            đất được quản lý và nuôi dưỡng bằng các thực hành bền vững theo tiêu chuẩn có trách nhiệm. Canh tác hữu cơ hỗ trợ sinh thái, hoặc canh tác hài hòa với thiên nhiên.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group toggle">
                                <div class="accordion-heading toggle_title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="collapse2"
                                       href="#collapse2">
                                        Giảm ô nhiễm và bảo vệ nước và đất
                                    </a>
                                    <span class="icon"><i class="ion-chatboxes"></i></span>
                                </div>
                                <div id="collapse2" class="accordion-body toggle_content collapse">
                                    <div class="accordion-inner">
                                        <p>
                                            Nông nghiệp hữu cơ xem xét hiệu quả trung và dài hạn của các can thiệp nông nghiệp đối với hệ sinh
                                            thái nông nghiệp. Nó nhằm mục đích sản xuất thực phẩm trong khi thiết lập một sự cân bằng sinh thái
                                            để ngăn ngừa độ phì nhiêu của đất hoặc các vấn đề sâu bệnh. Nông nghiệp hữu cơ có một cách tiếp cận
                                            chủ động thay vì xử lý các vấn đề sau khi chúng xuất hiện.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group toggle">
                                <div class="accordion-heading toggle_title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="collapse3"
                                       href="#collapse3">
                                        Bảo tồn đa dạng nông nghiệp
                                    </a>
                                    <span class="icon"><i class="ion-lightbulb"></i></span>
                                </div>
                                <div id="collapse3" class="accordion-body toggle_content collapse">
                                    <div class="accordion-inner">
                                        <p>
                                            Nông dân hữu cơ vừa là người giám sát vừa là người sử dụng đa dạng sinh học ở mọi cấp độ.
                                            Ở cấp độ gen, hạt giống và giống truyền thống và thích nghi được ưa thích
                                            cho khả năng kháng bệnh tốt hơn và khả năng chống chịu với khí hậu
                                            nhấn mạnh. Ở cấp độ loài, sự kết hợp khác nhau của thực vật và động vật
                                            tối ưu hóa chu trình dinh dưỡng và năng lượng cho sản xuất nông nghiệp.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-center app-desc floating">
                            <img src="frontend/images/app-desc.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-12">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Cập Nhật</div>
                        <h2 class="text-center section-title mtn-2">Mới Nhất Các Bài Viết</h2>
                        <div class="organik-seperator center mb-6">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="blog-grid-item">
                            <div class="post-thumbnail">
                                <a href="{{$blog->getBlogUrl()}}">
                                    <img src="{{$blog->__get("blog_image")}}" alt=""/>
                                </a>
{{--                                --}}
                            </div>
                            <div class="post-content">
                                <div class="entry-meta">
											<span class="posted-on">
												<i class="ion-calendar"></i>
												<span>{{$blog->__get("blog_date")}}}</span>
											</span>
                                    <span class="comment">View:{{$blog->__get("view_count")}}</span>
                                </div>
                                <a href="{{$blog->getBlogUrl()}}">
                                    <h1 class="entry-title" style="hover: #333333">{{$blog->__get("blog_title")}}</h1>
                                </a>
                                <div class="entry-content">
                                    {{$blog->__get("blog_desc")}}
                                </div>
                                <div class="entry-more">
                                    <a href="{{$blog->getBlogUrl()}}">Xem Thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <hr class="mt-7 mb-3"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-2 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="client-carousel" data-auto-play="true" data-desktop="5" data-laptop="3"
                             data-tablet="3" data-mobile="2">
                            <div class="client-item">
                                <a href="#" target="_blank">
                                    <img src="frontend/images/client/client_1.png" alt=""/>
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#" target="_blank">
                                    <img src="frontend/images/client/client_2.png" alt=""/>
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#" target="_blank">
                                    <img src="frontend/images/client/client_3.png" alt=""/>
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#" target="_blank">
                                    <img src="frontend/images/client/client_4.png" alt=""/>
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#" target="_blank">
                                    <img src="frontend/images/client/client_5.png" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
