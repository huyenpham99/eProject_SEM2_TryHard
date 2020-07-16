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
                                <a class="organik-btn brown" href="{{url("/shop")}}">Join now</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-center floating">
                                <img src="frontend/images/can.png" alt=""/>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="section section-bg-3 pt-6 pb-6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">A friendly</div>
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
                            <div class="title">Always Fresh</div>
                        </div>
                        <p>Cur tantas regiones barbarorum peat dibus obiit, tregiones barbarorum peat dibus obiit, tot
                            mariata</p>
                        <div class="mb-8"></div>
                        <div class="organik-special-title">
                            <div class="number">02</div>
                            <div class="title">Keep You Healthy</div>
                        </div>
                        <p>Cur tantas regiones barbarorum peat dibus obiit, tregiones barbarorum peat dibus obiit, tot
                            mariata</p>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-8"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="organik-special-title align-right">
                            <div class="number">03</div>
                            <div class="title">Safe From Pesticides</div>
                        </div>
                        <p>Cur tantas regiones barbarorum peat dibus obiit, tregiones barbarorum peat dibus obiit, tot
                            mariata</p>
                        <div class="mb-8"></div>
                        <div class="organik-special-title align-right">
                            <div class="number">04</div>
                            <div class="title">Keep You Healthy</div>
                        </div>
                        <p>Cur tantas regiones barbarorum peat dibus obiit, tregiones barbarorum peat dibus obiit, tot
                            mariata</p>
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
                                <div class="title">Free shipping</div>
                                <div class="text">All order over $100</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 organik-process-small-icon-step">
                            <div class="icon">
                                <i class="organik-hours-support"></i>
                            </div>
                            <div class="content">
                                <div class="title">Customer support</div>
                                <div class="text">Support 24/7</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 organik-process-small-icon-step">
                            <div class="icon">
                                <i class="organik-credit-card"></i>
                            </div>
                            <div class="content">
                                <div class="title">Secure payments</div>
                                <div class="text">Confirmed</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 organik-process-small-icon-step">
                            <div class="icon">
                                <i class="organik-lettuce"></i>
                            </div>
                            <div class="content">
                                <div class="title">Made with love</div>
                                <div class="text">Best services</div>
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
                        <div class="text-center mb-1 section-pretitle">Discover</div>
                        <h2 class="text-center section-title mtn-2">Our products</h2>
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
                                <li><a href="{{url("/shop")}}">All</a>
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
                                    <a href="shop-detail.html">
                                        <div class="badges">
                                            <span class="hot">View: </span>
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
                        <a class="organik-btn small" href="#"> Load more </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bg-light pt-10 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Why choose</div>
                        <h2 class="text-center section-title mtn-2">Healthy Food products?</h2>
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
                                        Benefit from more nutrients
                                    </a>
                                    <span class="icon"><i class="ion-heart"></i></span>
                                </div>
                                <div id="collapse1" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>
                                            Healthy Food grown foods have more nutrients—vitamins, minerals, enzymes,
                                            and
                                            micronutrients—than commercially grown foods because the soil is managed and
                                            nourished with sustainable practices by responsible standards. Organic
                                            farming supports eco-sustenance, or farming in harmony with nature.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group toggle">
                                <div class="accordion-heading toggle_title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="collapse2"
                                       href="#collapse2">
                                        Reduce pollution and protect water and soil
                                    </a>
                                    <span class="icon"><i class="ion-chatboxes"></i></span>
                                </div>
                                <div id="collapse2" class="accordion-body toggle_content collapse">
                                    <div class="accordion-inner">
                                        <p>
                                            Organic agriculture considers the medium- and long-term effect of
                                            agricultural interventions on the agro-ecosystem. It aims to produce food
                                            while establishing an ecological balance to prevent soil fertility or pest
                                            problems. Organic agriculture takes a proactive approach as opposed to
                                            treating problems after they emerge.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-group toggle">
                                <div class="accordion-heading toggle_title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="collapse3"
                                       href="#collapse3">
                                        Preserve agricultural diversity
                                    </a>
                                    <span class="icon"><i class="ion-lightbulb"></i></span>
                                </div>
                                <div id="collapse3" class="accordion-body toggle_content collapse">
                                    <div class="accordion-inner">
                                        <p>
                                            Organic farmers are both custodians and users of biodiversity at all levels.
                                            At the gene level, traditional and adapted seeds and breeds are preferred
                                            for their greater resistance to diseases and their resilience to climatic
                                            stress. At the species level, diverse combinations of plants and animals
                                            optimize nutrient and energy cycling for agricultural production.
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
                        <div class="text-center mb-1 section-pretitle">Latest</div>
                        <h2 class="text-center section-title mtn-2">From our blog</h2>
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
                                    <h1 class="entry-title">{{$blog->__get("blog_title")}}</h1>
                                </a>
                                <div class="entry-content">
                                    {{$blog->__get("blog_desc")}}
                                </div>
                                <div class="entry-more">
                                    <a href="{{$blog->getBlogUrl()}}">Read more</a>
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
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=618524112104934";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-comments" data-href="https://www.facebook.com/df.jerry" data-numposts="5"
             data-colorscheme="light">
        </div>
    </div>
@endsection
{{----}}
