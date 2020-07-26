@extends("frontend.layout")
@section("content")

    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif; ">Chương trình</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumbs">
                            <li><a href="{{url("/home")}}">Trang chủ</a></li>
                            <li><a href="{{url("/program")}}">chương trình</a></li>
{{--                            ???--}}
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
                            @foreach($programdetail as $pro)
                            <div class="blog-list-item">
                                <div class="col-md-6">
                                    <div class="post-thumbnail">
                                        <a href="{{$pro->getProgramDetailUrl()}}">
                                            <img src="{{$pro->__get("program_detail_image")}}" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="post-content">
                                        <a href="blog-detail.html">
                                            <h1 class="entry-title">{{$pro->__get("program_detail_name")}}</h1>
                                        </a>
                                        <div class="entry-content">
                                       {{$pro->__get("program_detail_desc")}}
                                        </div>
                                        <div class="entry-more">
                                            <a href="{{$pro->getProgramDetailUrl()}}">Đọc thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                        <div class="pagination">
                            <a class="prev page-numbers" href="#">Prev</a>
                            <a class="page-numbers" href="#">1</a>
                            <span class="page-numbers current">2</span>
                            <a class="page-numbers" href="#">3</a>
                            <a class="next page-numbers" href="#">Next</a>
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
                                    <li><a href="#">Cooking Tips</a> <span class="count">2</span></li>
                                    <li><a href="#">Nutrition Meal</a> <span class="count">5</span></li>
                                    <li><a href="#">Organic Planting</a> <span class="count">4</span></li>
                                    <li><a href="#">Recipes</a> <span class="count">4</span></li>
                                </ul>
                            </div>
                            <div class="widget widget_posts_widget">
                                <h3 class="widget-title">Popular Posts</h3>
                                <div class="item">
                                    <div class="thumb">
                                        <img src="images/blog/thumb/blog_1.jpg" alt="" />
                                    </div>
                                    <div class="info">
												<span class="title">
													<a href="blog-detail.html"> How to steam &amp; purée your sugar pie pumkin </a>
												</span>
                                        <span class="date"> August 9, 2016 </span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <img src="images/blog/thumb/blog_2.jpg" alt="" />
                                    </div>
                                    <div class="info">
												<span class="title">
													<a href="blog-detail.html"> How to steam &amp; purée your sugar pie pumkin </a>
												</span>
                                        <span class="date"> August 9, 2016 </span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="thumb">
                                        <img src="images/blog/thumb/blog_1.jpg" alt="" />
                                    </div>
                                    <div class="info">
												<span class="title">
													<a href="blog-detail.html"> How can salmon be raised organically in fish farms? </a>
												</span>
                                        <span class="date"> August 9, 2016 </span>
                                    </div>
                                </div>
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
{{----}}
