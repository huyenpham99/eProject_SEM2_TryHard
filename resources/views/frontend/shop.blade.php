@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center">Shop</h2>
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
                            <li><a href="{{url("/shop")}}">Shop</a></li>
                            <li>Product Grid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-push-3">
                        <div class="shop-filter">
                            <div class="col-md-6">
                                <p class="result-count"> Showing 1–12 of 23 results</p>
                            </div>
                            <div class="col-md-6">
                                <div class="shop-filter-right">
                                    <div class="switch-view">
                                        <a href="shop-list.html" class="switcher" data-toggle="tooltip" data-placement="top" title="" data-original-title="List"><i class="ion-navicon"></i></a>
                                        <a href="shop.html" class="switcher active" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid"><i class="ion-grid"></i></a>
                                    </div>
                                    <form class="commerce-ordering">
                                        <select name="orderby" class="orderby">
                                            <option value="">Sort by popularity</option>
                                            <option value="">Sort by average rating</option>
                                            <option value="" selected="selected">Sort by newness</option>
                                            <option value="">Sort by price: low to high</option>
                                            <option value="">Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="category-carousel-2 mb-3" data-auto-play="true" data-desktop="3" data-laptop="3" data-tablet="2" data-mobile="1">
                            @foreach(\App\Category::all() as $category)
                            <div class="cat-item">
                                <div class="cats-wrap" data-bg-color="#f8c9c2">
                                    <a href="#">
                                        <img src="{{$category->__get("category_image")}}" alt="" />
                                        <h2 class="category-title">
                                            {{$category->__get("category_name")}}
                                        </h2>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="product-grid">
                                @foreach(\App\Product::all() as $product)
                            <div class="col-md-4 col-sm-6 product-item text-center mb-3">
                                <div class="product-thumb">
                                    <a href="{{$product->getProductUrl()}}">
                                        <div class="badges">
                                            <span class="hot">Hot</span>
                                        </div>
                                        <img src="{{$product->__get("product_image")}}" alt="" />
                                    </a>
                                    <div class="product-action">
												<span class="add-to-cart">
													<a href="javascript: void(0);"
                                                       onclick="addToCart({{$product->__get("id")}})" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
												</span>
                                        <span class="compare">
                                            <a href="{{$product->getProductUrl()}}" data-toggle="tooltip" data-placement="top" title="Detail"></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="{{$product->getProductUrl()}}">
                                        <h2 class="title">{{$product->__get("product_name")}}</h2>
                                        <span class="price">
                                            <ins>{{$product->__get("product_price")}}</ins>
                                        </span>
                                    </a>
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
                    <div class="col-md-3 col-md-pull-9">
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
                                    @foreach(\App\Category::all() as $category)
                                    <li><a href="#">{{$category->__get("category_name")}}</a></li>
                                        @endforeach
                                </ul>
                            </div>
                            <div class="widget widget_price_filter">
                                <h3 class="widget-title">Filter by price</h3>
                                <div class="price_slider_wrapper">
                                    <div class="price_slider" style="display:none;"></div>
                                    <div class="price_slider_amount">
                                        <input type="text" id="min_price" name="min_price" value="" data-min="0" placeholder="Min price"/>
                                        <input type="text" id="max_price" name="max_price" value="" data-max="150" placeholder="Max price"/>
                                        <button type="submit" class="button">Filter</button>
                                        <div class="price_label" style="display:none;">
                                            Price: <span class="from"></span> &mdash; <span class="to"></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-products">
                                <h3 class="widget-title">Products</h3>
                                <ul class="product-list-widget">
                                    @foreach(\App\Product::all() as $product)
                                    <li>
                                        <a href="{{$product->getProductUrl()}}">
                                            <img src="{{$product->__get("product_image")}}" alt="" />
                                            <span class="product-title">{{$product->__get("product_name")}}</span>
                                        </a>
                                        <ins>{{$product->__get("product_price")}}</ins>
                                    </li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
