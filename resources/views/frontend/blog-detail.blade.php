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
                                    <img src="{{$blog->__get("blog_image")}}" alt="" />
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
                            <div class="comments-area">
                                <div class="single-comments-list mt-0">
                                    <div class="mb-2">
                                        <h2 class="comment-title">2 reviews for Orange Juice</h2>
                                    </div>
                                    <ul class="comment-list">
                                        <li>
                                            <div class="comment-container">
                                                <div class="comment-author-vcard">
                                                    <img alt="" src="frontend/images/avatar/avatar.png" />
                                                </div>
                                                <div class="comment-author-info">
                                                    <span class="comment-author-name">admin</span>
                                                    <a href="#" class="comment-date">July 27, 2016</a>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                                </div>
                                                <div class="reply">
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li>
                                                    <div class="comment-container">
                                                        <div class="comment-author-vcard">
                                                            <img alt="" src="frontend/images/avatar/avatar.png" />
                                                        </div>
                                                        <div class="comment-author-info">
                                                            <span class="comment-author-name">admin</span>
                                                            <a href="#" class="comment-date">July 27, 2016</a>
                                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                                        </div>
                                                        <div class="reply">
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comment-container">
                                                <div class="comment-author-vcard">
                                                    <img alt="" src="frontend/images/avatar/avatar.png" />
                                                </div>
                                                <div class="comment-author-info">
                                                    <span class="comment-author-name">admin</span>
                                                    <a href="#" class="comment-date">July 27, 2016</a>
                                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                                </div>
                                                <div class="reply">
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-comment-form">
                                    <div class="mb-2">
                                        <h2 class="comment-title">LEAVE A REPLY</h2>
                                    </div>
                                    <form class="comment-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea id="comment" name="comment" cols="45" rows="5" placeholder="Message *"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input id="author" name="author" type="text" value="" size="30" placeholder="Name *" class="mb-2">
                                            </div>
                                            <div class="col-md-4">
                                                <input id="email" name="email" type="email" value="" size="30" placeholder="Email *" class="mb-2">
                                            </div>
                                            <div class="col-md-4">
                                                <input id="url" name="url" type="text" value="" placeholder="Website">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input name="submit" type="submit" id="submit" class="btn btn-alt btn-border" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                                        <img src="{{$blog->__get("blog_image")}}" alt="" />
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
@endsection
