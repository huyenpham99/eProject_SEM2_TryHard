@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif; ">Chương trình chi tiết</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumbs">
                            <li><a href="{{url("/")}}">Trang chủ</a></li>
                            <li><a href="#">Chương trình chi tiết</a></li>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar">
                            <div class="widget widget-product-search">
                                <form class="form-search">
                                    <input type="text" class="search-field" placeholder="Tìm kiếm sản phẩm..." value="" name="s" />
                                    <input type="submit" value="Search" />
                                </form>
                            </div>
                            <div class="widget widget-product-categories">
                                <h3 class="widget-title">Danh mục chương trình</h3>
                                <ul class="product-categories">
                                    @foreach(\App\ProgramCategory::all() as $g)
                                        <li><a href="{{asset('program/'.$g->id)}}">{{$g->__get(("progam_category_name"))}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_posts_widget">
                                <h3 class="widget-title">Những bài viết gần đây</h3>
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

