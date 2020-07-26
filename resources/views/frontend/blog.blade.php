@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif; ">Danh Sách Bài Viết</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumbs">
                            <li><a href="{{url("/home")}}">Trang Chủ</a></li>
                            <li><a href="{{url("/blog")}}">Bài Viết</a></li>
                            <li>Danh Sách Bài Viết</li>
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
                            @foreach($blogs as $blog)
                            <div class="blog-list-item">
                                <div class="col-md-6">
                                    <div class="post-thumbnail">
                                        <a href="{{$blog->getBlogUrl()}}">
                                            <img src="{{$blog->__get("blog_image")}}" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="post-content">
                                        <div class="entry-meta">
													<span class="posted-on">
														<i class="ion-calendar"></i>
														<span>{{$blog->__get("blog_date")}}</span>
													</span>
                                            <span class="comment">
                                                <i class="ion-chatbubble-working"></i> 0
                                            </span>
                                        </div>
                                        <a href="{{$blog->getBlogUrl()}}">
                                            <h1 class="entry-title">{{$blog->__get("blog_title")}}</h1>
                                        </a>
                                        <div class="entry-content">
                                            {{$blog->__get("blog_desc")}}
                                        </div>
                                        <div class="entry-more">
                                            <a href="{{$blog->getBlogUrl()}}" class="btn btn-success" style="color: white">Đọc Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            <div class="widget widget-product-search">
                                <form class="form-search">
                                    <input type="text" class="search-field" placeholder="Tìm kiếm bài viết…" value="" name="s" />
                                    <input type="submit" value="Search" />
                                </form>
                            </div>
                            <div class="widget widget-product-categories">
                                <h3 class="widget-title">Thể loại bài viết</h3>
                                @foreach($blogcategory as $category)
                                <ul class="product-categories">
                                    <a href="{{$category->getBlogCategoryUrl()}}">
                                        <li>{{$category->__get("blog_category_name")}}</li>
                                    </a>
                                </ul>
                                @endforeach
                            </div>
                            <div class="widget widget_posts_widget">
                                <h3 class="widget-title">Bài viết gần đây</h3>
                                @foreach($blogs as $blog)
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{$blog->__get("blog_image")}}" alt="" />
                                    </div>
                                    <div class="info">
												<span class="title">
													<a href="{{$blog->getBlogUrl()}}"> {{$blog->__get("blog_title")}} </a>
												</span>
                                        <span class="date">{{$blog->__get("blog_date")}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                {!! $blogs->links() !!}
            </div>
        </div>
    </div>
@endsection
