@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif; ">Blog Detail</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumbs">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Program Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @foreach($programdetail as $pd)
                        <div class="single-blog">
                            <div class="post-thumbnail">
                                <a href="#">
                                    <img src="{{$pd->program_detail_image}}" alt="" />
                                </a>
                            </div>
                            <div class="entry-meta">
                                <span class="categories">
											<i class="ion-folder"></i>
											<a href="#">Nutrition Meal</a>, <a href="#">Organic Planting</a>, <a href="#">Recipes</a>
										</span>
                                <span class="comment">
											<i class="ion-chatbubble-working"></i> 0
										</span>
                            </div>
                            <h1 class="entry-title">{{$pd->program_detail_name}}</h1>
                            <div class="entry-content">
                                @php
                                    $doc = new DOMDocument();
                                    $doc->loadHTML('<?xml encoding="utf-8" ?>'.($pd->__get("program_detail_content")));
                                 echo $doc->saveHTML();
                                @endphp
                            </div>
                            <div class="entry-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="tags">
                                            <a href="#">green</a> <a href="#">natural</a> <a href="#">organic store</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="share">
                                            <span> <i class="ion-android-share-alt"></i> Share this post </span>
                                            <span> <a target="_blank" href="#"><i class="fa fa-facebook"></i></a> </span>
                                            <span> <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> </span>
                                            <span> <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-author">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img alt="" src="frontend/images/avatar/avatar.png" class="avatar" />
                                    </div>
                                    <div class="col-md-10">
                                        <h3 class="name">TM Organik</h3>
                                        <div class="desc">We are online market of organic fruits, vegetables, juices and dried fruits. We bring fresh, seasonal products from our family farm right to your doorstep.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-nav">
                                <div class="row">
                                    <div class="col-md-5 left">
                                        <i class="fa fa-angle-double-left"></i>
                                        <a href="#">How can salmon be raised organically in fish farms?</a>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <i class="ion-grid"></i>
                                    </div>
                                    <div class="col-md-5 right">
                                        <a href="#">How to steam &amp; purée your sugar pie pumkin</a>
                                        <i class="fa fa-angle-double-right"></i>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function postComment1() {
                                    var key = window.event.keyCode;
                                    if (key === 13) {
                                        var id = $("#blog_id").attr('data-id');
                                        var comment = $("#comment").val();
                                        $.ajax({
                                            method: "post",
                                            url: '{{url("/programdetail/comment")}}',
                                            data: {
                                                id: id,
                                                comment: comment,
                                                _token: "{{csrf_token()}}"
                                            },
                                            success: function (response) {
                                                $('.comment-list').append(response);
                                                $("#comment").val('');
                                            }
                                        })
                                        return false;
                                    }
                                    else {
                                        return true;
                                    }
                                }
                                function postComment() {
                                    var id = $("#blog_id").attr('data-id');
                                    var comment = $("#comment").val();
                                    $.ajax({
                                        method: "post",
                                        url: '{{url("/blog/comment")}}',
                                        data: {
                                            id: id,
                                            comment: comment,
                                            _token: "{{csrf_token()}}"
                                        },
                                        success: function (response) {
                                            $('.comment-list').append(response);
                                            $("#comment").val('');
                                        }
                                    })
                                }
                            </script>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            <div class="widget widget-product-search">
                                <form class="form-search">
                                    <input type="text" class="search-field" placeholder="Search products…" value="" name="s" />
                                    <input type="submit" value="Search" />
                                </form>
                            </div>
                            <div class="widget widget-product-categories">
                                <h3 class="widget-title">Program Categories</h3>
                                <ul class="product-categories">
                                    @foreach(\App\ProgramCategory::all() as $g)
                                        <li><a href="{{asset('program/'.$g->id)}}">{{$g->__get(("progam_category_name"))}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_posts_widget">
                                <h3 class="widget-title">Recent Posts</h3>
                                @foreach(\App\ProgramDetail::limit(5)->get() as $program)
                                    <div class="item">
                                        <div class="thumb">
                                            <img src={{$program->program_detail_image}} alt="" />
                                        </div>
                                        <div class="info">
												<span class="title">
													    <a href="{{asset('programdetail/'.$program->id)}}"> {{$program->program_detail_name}} </a>
												</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="widget widget-tags">
                                <h3 class="widget-title">Search by Tags</h3>
                                <div class="tagcloud">
                                    <a href="#">bread</a> <a href="#">food</a> <a href="#">fruits</a> <a href="#">green</a> <a href="#">healthy</a> <a href="#">natural</a> <a href="#">organic store</a> <a href="#">vegatable</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

