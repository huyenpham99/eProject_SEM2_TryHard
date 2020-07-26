@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif; ">SẢN PHẨM</h2>
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
                            <li><a href="{{url("/shop")}}">Cửa Hàng</a></li>
                            <li>Sản Phẩm</li>
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
                                <p class="result-count">Hiển thị 1 - 12 kết quả</p>
                            </div>
                            <div class="col-md-6">
                                <div class="shop-filter-right">
                                    <form class="commerce-ordering">
                                        <select name="orderby" class="orderby">
                                            <option value="">Mức Độ Phổ Biến</option>
                                            <option value="">Mức Độ Đánh Giá</option>
                                            <option value="" selected="selected">Mức Độ Mới</option>
                                            <option value="">Giá : Từ Thấp đến Cao</option>
                                            <option value="">Giá : Từ Cao đến Thấp</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="category-carousel-2 mb-3" data-auto-play="true" data-desktop="3" data-laptop="3" data-tablet="2" data-mobile="1">
                            @foreach(\App\Category::all() as $category)
                            <div class="cat-item">
                                <div class="cats-wrap" data-bg-color="#f8c9c2">
                                    <a href="{{$category->getCategoryUrl()}}">
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
                            @forelse($products as $product)
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
                            @empty
                                <p>Sản Phẩm Không Tồn Tại</p>
                            @endforelse
                        </div>
                            {!! $products->links() !!}
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
                                <h3 class="widget-title">Loại Sản Phẩm</h3>
                                <x-frontend.sidebar_item/>
                            </div>
                            <div class="widget widget_price_filter">
                                <h3 class="widget-title">Theo Giá</h3>
                                <div class="price_slider_wrapper">
                                    <div class="price_slider" style="display:none;"></div>
                                    <div class="price_slider_amount">
                                        <<input type="text" id="min_price" name="min_price" value="" data-min="0" placeholder="Giá Thấp Nhất"/>
                                        <input type="text" id="max_price" name="max_price" value="" data-max="150" placeholder="Giá Cao Nhất"/>
                                        <button type="submit" class="button">Tìm Kiếm</button>
                                        <div class="price_label" style="display:none;">
                                            Price: <span class="from"></span> &mdash; <span class="to"></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="widget widget-products">--}}
{{--                                <h3 class="widget-title">Products</h3>--}}
{{--                                <ul class="product-list-widget">--}}
{{--                                    @foreach(\App\Product::orderBy("product_name")->limit(4) as $product)--}}
{{--                                    <li>--}}
{{--                                        <a href="{{$product->getProductUrl()}}">--}}
{{--                                            <img src="{{$product->__get("product_image")}}" alt="" />--}}
{{--                                            <span class="product-title">{{$product->__get("product_name")}}</span>--}}
{{--                                        </a>--}}
{{--                                        <ins>{{$product->__get("product_price")}}</ins>--}}
{{--                                    </li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
