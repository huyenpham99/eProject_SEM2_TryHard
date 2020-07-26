@extends("frontend.layout")
@section("content")
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
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif;">SỰ KIỆN</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumbs">
                            <li><a href="{{url("/")}}">TRANG CHỦ</a></li>
                            <li><a href="{{url("/event")}}">SỰ KIỆN</a></li>
                            <li>DANH SÁCH SỰ KIỆN</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-list">
                            @foreach($events as $event)
                                <div class="blog-list-item">
                                    <div class="col-md-6">
                                        <div class="post-thumbnail">
                                            <a href="{{$event->getEventUrl()}}">
                                                <img src="{{$event->__get("event_image")}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-content">
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
                                            </div>
                                            <a href="{{$event->getEventUrl()}}">
                                                <h1 class="entry-title">{{$event->__get("event_name")}}</h1>
                                            </a>
                                            <div class="entry-content">
                                                {{$event->__get("event_desc")}}
                                            </div>
                                            <div class="entry-more">
                                                <a href="{{$event->getEventUrl()}}" class="btn btn-success" style="color: white">Tìm hiểu thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
{{--                    <div class="col-md-3">--}}
{{--                        <div class="sidebar">--}}
{{--                            <div class="widget widget-product-categories">--}}
{{--                                <h3 class="widget-title">Blog Category</h3>--}}
{{--                                @foreach($eventcategory as $category)--}}
{{--                                    <ul class="product-categories">--}}
{{--                                        <a href="{{$category->getBlogCategoryUrl()}}">--}}
{{--                                            <li>{{$category->__get("blog_category_name")}}</li>--}}
{{--                                        </a>--}}
{{--                                    </ul>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                            <div class="widget widget_posts_widget">--}}
{{--                                <h3 class="widget-title">Recent Posts</h3>--}}
{{--                                @foreach($events as $event)--}}
{{--                                    <div class="item">--}}
{{--                                        <div class="thumb">--}}
{{--                                            <img src="{{$event->__get("blog_image")}}" alt="" />--}}
{{--                                        </div>--}}
{{--                                        <div class="info">--}}
{{--												<span class="title">--}}
{{--													<a href="{{$event->getBlogUrl()}}"> {{$event->__get("blog_title")}} </a>--}}
{{--												</span>--}}
{{--                                            <span class="date">{{$event->__get("blog_date")}}</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
                </div>
{{--                {!! $events->links() !!}--}}
            </div>
        </div>
    </div>
@endsection
