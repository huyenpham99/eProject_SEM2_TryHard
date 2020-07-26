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
                            @foreach($program as $pro )
                            <div class="blog-list-item">
                                <div class="col-md-6">
                                    <div class="post-thumbnail">
                                        <a href="{{asset('programdetail/'.$pro->id)}}">
                                            <img src="{{$pro->program_detail_image}}" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="post-content">
                                        <a href="{{asset('programdetail/'.$pro->id)}}">
                                            <h1 class="entry-title">{{$pro->program_detail_name}}</h1>
                                        </a>
                                        <div class="entry-content">
                                       {{$pro->program_detail_desc}}
                                        </div>
                                        <div class="entry-more">
                                            <a href="{{asset('programdetail/'.$pro->id)}}">Đọc thêm</a>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
{{----}}
