@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif;">{{$event->__get("event_name")}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumbs">
                            <li><a href="{{url("/")}}">Trang Chủ</a></li>
                            <li><a href="{{url("/event")}}">SỰ KIỆN</a></li>
                            <li>CHI TIẾT SỰ KIỆN</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="single-blog">
                            <div class="entry-meta">
										<span class="posted-on">
											<i class="ion-calendar"></i>
											<span>{{$event->__get("event_date_start")}}</span>
										</span>
                                <span>-</span>
                                <span class="posted-on">
											<i class="ion-calendar"></i>
											<span>{{$event->__get("event_date_end")}}</span>
										</span>
                                <span class="comment">
                                    <i class="ion-chatbubble-working"></i> 0
                                </span>
                            </div>
                            <h1 class="entry-title">{{$event->__get("event_name")}}</h1>
                            <div class="post-thumbnail">
                                <a href="#">
                                    <img src="{{$event->__get("event_image")}}" alt=""/>
                                </a>
                            </div>

                            <div class="entry-content">
                                <p>{{$event->__get("event_desc")}}</p>
                                @php
                                    $doc = new DOMDocument();
                                    $doc->loadHTML('<?xml encoding="utf-8" ?>'.($event->__get("event_content")));
                                 echo $doc->saveHTML();
                                @endphp
                            </div>
                            <div class="entry-footer">
                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="share">
                                            <span> <i class="ion-android-share-alt"></i> Share this post </span>
                                            <span> <a target="_blank" href="#"><i
                                                        class="fa fa-facebook"></i></a> </span>
                                            <span> <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> </span>
                                            <span> <a target="_blank" href="#"><i
                                                        class="fa fa-google-plus"></i></a> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(\Illuminate\Support\Facades\Auth::user())
                                <div class="col-12">
                                    <div class="row">
                                        <h3 class="mb-3">Đăng ký tham gia ngay</h3>
                                        <h6 style="background-color: #232e36; opacity: 0.6; color: white; width: 18%;" class="mb-3 p-1">{{number_format($ticket[0]->__get("ticket_price"))}} đ</h6>
                                        <form action="{{url("/create-ticket-buyer")}}" method="post">
                                            @method("POST")
                                            @csrf
                                            <input type="hidden" name="ticket_price" value="{{$ticket[0]->__get("ticket_price")}}">
                                            <input type="hidden" name="ticket_id" value="{{$ticket[0]->__get("id")}}">
                                            <input type="hidden" name="ticket_code" value="{{$ticket[0]->__get("ticket_code")}}">
                                        <div class="form-group">
                                            <label for="buyer_name">Tên</label>
                                            <input type="text" id="buyer_name" name="buyer_name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="buyer_number">Số điện thoại</label>
                                            <input type="text" id="buyer_number" name="buyer_number" value="{{\Illuminate\Support\Facades\Auth::user()->telephone}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="buyer_address">Địa chỉ</label>
                                            <input type="text" id="buyer_address" name="buyer_address" value="{{\Illuminate\Support\Facades\Auth::user()->address}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="buyer_email">Email</label>
                                            <input type="text" id="buyer_email" name="buyer_email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Mua vé</button>
                                            <input type="hidden" name="event_id" value="{{$event->__get("id")}}">
                                        </form>
                                    </div>
                                </div>
                                @else
                                <div class="col-12">
                                    <div class="row">
                                        <h3 class="mb-3">Đăng ký tham gia ngay</h3>
                                        <h6 style="background-color: #232e36; opacity: 0.6; color: white; width: 18%;" class="mb-3 p-1">{{number_format($ticket[0]->__get("ticket_price"))}} đ</h6>
                                        <form action="{{url("/create-ticket-buyer")}}" method="POST" >
                                            @method("POST")
                                            @csrf
                                            <input type="hidden" name="ticket_price" value="{{$ticket[0]->__get("ticket_price")}}">
                                            <input type="hidden" name="ticket_id" value="{{$ticket[0]->__get("id")}}">
                                            <input type="hidden" name="ticket_code" value="{{$ticket[0]->__get("ticket_code")}}">
                                            <div class="form-group">
                                                <label for="buyer_name">Tên</label>
                                                <input type="text" id="buyer_name" name="buyer_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="buyer_number">Số điện thoại</label>
                                                <input type="text" id="buyer_number" name="buyer_number">
                                            </div>
                                            <div class="form-group">
                                                <label for="buyer_address">Địa chỉ</label>
                                                <input type="text" id="buyer_address" name="buyer_address">
                                            </div>
                                            <div class="form-group">
                                                <label for="buyer_email">Email</label>
                                                <input type="text" id="buyer_email" name="buyer_email">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                                            <input type="hidden" name="event_id" value="{{$event->__get("id")}}">
                                        </form>
                                    </div>
                                </div>
                                @endif
                            <div class="col-12" id="map">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            <div class="widget widget_posts_widget">
                                <h3 class="widget-title">Sự kiện liên quan</h3>
                                @foreach(\App\Event::all() as $event)
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="{{$event->__get("event_image")}}" alt=""/>
                                        </div>
                                        <div class="info">
												<span class="title">
													<a href="{{$event->getEventUrl()}}">{{$event->__get("event_name")}}</a>
												</span>
                                            <span class="date">{{$event->__get("event_date_start")}}</span>
                                            <span class="date">{{$event->__get("event_date_end")}}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--<script>--}}
{{--    var map;--}}
{{--    function initMap() {--}}
{{--        var address = {lat:21.0288772, lng: 105.7795577};--}}
{{--        map = new google.maps.Map(document.getElementById('map'), {--}}
{{--            center: address,--}}
{{--            zoom: 16--}}
{{--        });--}}
{{--        var maker = new google.maps.Marker({position: address, map: map, label: "Try hard"});--}}
{{--    }--}}
{{--</script>--}}

{{--<script src="https://maps.googleapis.com/maps/api/js?&amp;callback=initMap" async="" defer=""></script>--}}
