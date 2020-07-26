@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center">Donate Detail</h2>
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
                    <div class="col-md-9">
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
                </div>
            </div>
        </div>
    </div>
@endsection
