@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center">Blog Detail</h2>
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
                            <li><a href="{{url("/blog")}}">Blog</a></li>
                            <li>Blog Detail</li>
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
                                    <img src="{{$blog->__get("blog_image")}}" alt=""/>
                                </a>
                            </div>
                            <div class="entry-meta">
										<span class="posted-on">
											<i class="ion-calendar"></i>
											<span>{{$blog->__get("blog_date")}}</span>
										</span>
                                <span class="comment">
                                    <i class="ion-chatbubble-working"></i> 0
                                </span>
                            </div>
                            <h1 class="entry-title">{{$blog->__get("blog_title")}}</h1>
                            <div class="entry-content">
                                <p>{{$blog->__get("blog_desc")}}</p>
                                @php
                                    $doc = new DOMDocument();
                                    $doc->loadHTML('<?xml encoding="utf-8" ?>'.($blog->__get("blog_content")));
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
                                            <span> <a target="_blank" href="#"><i
                                                        class="fa fa-facebook"></i></a> </span>
                                            <span> <a target="_blank" href="#"><i class="fa fa-twitter"></i></a> </span>
                                            <span> <a target="_blank" href="#"><i
                                                        class="fa fa-google-plus"></i></a> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            <div id="fb-root"></div>--}}
                            {{--                            <script>(function(d, s, id) {--}}
                            {{--                                    var js, fjs = d.getElementsByTagName(s)[0];--}}
                            {{--                                    if (d.getElementById(id)) return;--}}
                            {{--                                    js = d.createElement(s); js.id = id;--}}
                            {{--                                    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=618524112104934";--}}
                            {{--                                    fjs.parentNode.insertBefore(js, fjs);--}}
                            {{--                                }(document, 'script', 'facebook-jssdk'));</script>--}}
                            {{--                            <div class="fb-comments" data-href="https://www.facebook.com/df.jerry" data-numposts="5" data-colorscheme="light"></div>--}}
                            <div class="comments-area">
                                <div class="single-comments-list mt-0">
                                    <div class="mb-2">
                                        {{--                                        <h2 class="comment-title fa fa-comment-o"> {{count($comments)}} Comment</h2>--}}
                                    </div>
                                    <ul class="comment-list">
                                        @foreach($comments as $comment)
                                            @if($comment->__get("comment_status")==0)
                                                <li class="comment-add">
                                                    <div class="comment-container">
                                                        <div class="comment-author-vcard">
                                                            <img alt=""
                                                                 src="{{url("https://icdn.dantri.com.vn/thumb_w/640/2019/10/21/nu-sinh-bac-ninh-mac-dong-phuc-hut-anh-nhin-vi-nhan-sac-kha-aidocx-1571614826507.jpeg")}}">
                                                        </div>
                                                        <div class="comment-author-info">
                                                            <span
                                                                class="comment-author-name">{{$comment->comment_user}}</span>
                                                            <span class="comment-date">{{$comment->comment_date}}</span>
                                                            <p style="font-size: 16px">{{$comment->content}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @elseif($comment->__get("comment_status")==1)
                                                <li class="comment-add">
                                                    <div class="comment-container" style="display: none">
                                                        <div class="comment-author-vcard">
                                                            <img alt=""
                                                                 src="{{url("https://icdn.dantri.com.vn/thumb_w/640/2019/10/21/nu-sinh-bac-ninh-mac-dong-phuc-hut-anh-nhin-vi-nhan-sac-kha-aidocx-1571614826507.jpeg")}}">
                                                        </div>
                                                        <div class="comment-author-info">
                                                            <span
                                                                class="comment-author-name">{{$comment->comment_user}}</span>
                                                            <span class="comment-date">{{$comment->comment_date}}</span>
                                                            <p style="font-size: 16px">{{$comment->content}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @elseif($comment->__get("comment_status")==2)
                                                <li class="comment-add">
                                                    <div class="comment-container">
                                                        <div class="comment-author-vcard">
                                                            <img alt=""
                                                                 src="{{url("https://icdn.dantri.com.vn/thumb_w/640/2019/10/21/nu-sinh-bac-ninh-mac-dong-phuc-hut-anh-nhin-vi-nhan-sac-kha-aidocx-1571614826507.jpeg")}}">
                                                        </div>
                                                        <div class="comment-author-info">
                                                            <span
                                                                class="comment-author-name">{{$comment->comment_user}}</span>
                                                            <span class="comment-date">{{$comment->comment_date}}</span>
                                                            <p style="color: red;font-size: 16px;">
                                                                <strike>Comments are locked by the administrator please
                                                                    contact for more details</strike></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="single-comment-form">
                                    <div class="mb-2">
                                        <h2 class="comment-title">LEAVE A Comment</h2>
                                    </div>
                                    {{--                                    <form action="{{url("/blog/comment")}}" method="post" class="comment-form">--}}
                                    {{--                                        @method("POST")--}}
                                    {{--                                        @csrf--}}
                                    <input type="hidden" id="blog_id" name="blog_id" value="{{$blog->id}}}"
                                           data-id="{{$blog->id}}"/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea id="comment" name="content" cols="45" rows="5"
                                                      placeholder="Send A Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <button type="button" id="buttonsave" onclick="postComment()"
                                                    class="btn btn-success">Send
                                            </button>
                                        </div>
                                    </div>
                                    {{--                                    </form>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            <div class="widget widget-product-search">
                                <form class="form-search">
                                    <input type="text" class="search-field" placeholder="Search products…" value=""
                                           name="s"/>
                                    <input type="submit" value="Search"/>
                                </form>
                            </div>
                            <div class="widget widget-product-categories">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="product-categories">
                                    @foreach(\App\BlogCategory::all() as $category)
                                        <li>{{$category->__get("blog_category_name")}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_posts_widget">
                                <h3 class="widget-title">Popular Posts</h3>
                                @foreach(\App\Blog::all() as $blog)
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="{{$blog->__get("blog_image")}}" alt=""/>
                                        </div>
                                        <div class="info">
												<span class="title">
													<a href="{{$blog->getBlogUrl()}}">{{$blog->__get("blog_title")}}</a>
												</span>
                                            <span class="date">{{$blog->__get("blog_date")}}</span>
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
    <script type="text/javascript">
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
                }
            })
        }
    </script>
@endsection
