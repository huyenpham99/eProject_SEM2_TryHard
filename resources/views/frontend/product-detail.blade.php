@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center">Shop Detail</h2>
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
                            <li>Shop Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-push-3">
                        <div class="single-product">
                            <div class="col-md-6">
                                <div class="image-gallery">
                                    <div class="image-gallery-inner">
                                        <div>
                                            <div class="image-thumb">
                                                <a href="frontend/images/shop/large/shop_1.jpg" data-rel="prettyPhoto[gallery]">
                                                    <img  src="{{$product->__get("product_image")}}" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-thumb">
                                                <a href="frontend/images/shop/large/shop_2.jpg" data-rel="prettyPhoto[gallery]">
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-thumb">
                                                <a href="frontend/images/shop/large/shop_3.jpg" data-rel="prettyPhoto[gallery]">

                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-gallery-nav">
                                    <div class="image-nav-item">
                                        <div class="image-thumb">
                                            <img src="{{$product->__get("product_image1")}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="image-nav-item">
                                        <div class="image-thumb">
                                            <img src="{{$product->__get("product_image2")}}" alt="" />
                                        </div>
                                    </div>
                                    <div class="image-nav-item">
                                        <div class="image-thumb">
                                            <img src="{{$product->__get("product_image")}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="summary">
                                    <h1 class="product-title">{{$product->__get("product_name")}}</h1>
                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <span style="width:100%"></span>
                                        </div>
                                        <i>(2 customer reviews)</i>
                                    </div>
                                    <div class="product-price">
                                        <ins> {{$product->getPrice()}}</ins>
                                    </div>
                                    <div class="mb-3">
                                        <p>{{$product->__get("product_desc")}}</p>
                                    </div>
                                    <form class="cart" method="POST" action="{{url("/cart/add/{$product->__get("id")}")}}">
                                        @method("POST")
                                        @csrf
                                        <div class="quantity-chooser">
                                            <div class="quantity">
                                                <span class="qty-minus" data-min="1"><i class="ion-ios-minus-outline"></i></span>
                                                <input type="text" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                                                <span class="qty-plus" data-max=""><i class="ion-ios-plus-outline"></i></span>
                                            </div>
                                        </div>
                                        <button type="submit" class="single-add-to-cart">ADD TO CART</button>
                                    </form>

                                    <div class="product-tool">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"> Browse Wishlist </a>
                                        <a class="compare" href="#" data-toggle="tooltip" data-placement="top" title="Add to compare"> Compare </a>
                                    </div>
                                    <div class="product-meta">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="label">Category</td>
                                                <td><a href="#">Juice</a></td>
                                            </tr>
                                            <tr>
                                                <td class="label">Share</td>
                                                <td class="share">
                                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="commerce-tabs tabs classic">
                                    <ul class="nav nav-tabs tabs">
                                        <li class="active">
                                            <a data-toggle="tab" href="#tab-description" aria-expanded="true">Description</a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#tab-reviews" aria-expanded="false">Reviews</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab-description">
                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                            </p>
                                        </div>
                                        <div id="tab-reviews" class="tab-pane fade">
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
                                            <div class="single-comment-form mt-0">
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
                                <div class="related">
                                    <div class="related-title">
                                        <div class="text-center mb-1 section-pretitle fz-34">Related</div>
                                        <h2 class="text-center section-title mtn-2 fz-24">Products</h2>
                                    </div>
                                    <div class="product-carousel p-0" data-auto-play="true" data-desktop="3" data-laptop="2" data-tablet="2" data-mobile="1">
                                        <div class="product-item text-center">
                                            <div class="product-thumb">
                                                <a href="shop-detail.html">
                                                    <div class="badges">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                    <img src="frontend/images/shop/shop_5.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
															<span class="add-to-cart">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
															</span>
                                                    <span class="wishlist">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
															</span>
                                                    <span class="quickview">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
															</span>
                                                    <span class="compare">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
															</span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="shop-detail.html">
                                                    <h2 class="title">Carrot</h2>
                                                    <span class="price">$12.00</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-item text-center">
                                            <div class="product-thumb">
                                                <a href="shop-detail.html">
                                                    <span class="outofstock"><span>Out</span>of stock</span>
                                                    <img src="frontend/images/shop/shop_6.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
                                                    <span class="add-to-cart">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
                                                    </span>
                                                    <span class="wishlist">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
                                                    </span>
                                                    <span class="quickview">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
                                                    </span>
                                                    <span class="compare">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="shop-detail.html">
                                                    <h2 class="title">Sprouting Broccoli</h2>
                                                    <span class="price">$6.00</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-item text-center">
                                            <div class="product-thumb">
                                                <a href="shop-detail.html">
                                                    <img src="frontend/images/shop/shop_7.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
															<span class="add-to-cart">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
															</span>
                                                    <span class="wishlist">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
															</span>
                                                    <span class="quickview">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
															</span>
                                                    <span class="compare">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
															</span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="shop-detail.html">
                                                    <h2 class="title">Chinese Cabbage</h2>
                                                    <span class="price">$9.00</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-item text-center">
                                            <div class="product-thumb">
                                                <a href="shop-detail.html">
                                                    <div class="badges">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                    <img src="frontend/images/shop/shop_8.jpg" alt="" />
                                                </a>
                                                <div class="product-action">
															<span class="add-to-cart">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
															</span>
                                                    <span class="wishlist">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
															</span>
                                                    <span class="quickview">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
															</span>
                                                    <span class="compare">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
															</span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="shop-detail.html">
                                                    <h2 class="title">Tieton Cherry</h2>
                                                    <span class="price">$9.00</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            <div class="widget widget-products">
                                <h3 class="widget-title">Products</h3>
                                <ul class="product-list-widget">
                                    <li>
                                        <a href="shop-detail.html">
                                            <img src="{{$product->__get("product_image")}}" alt="" />
                                            <span class="product-title">{{$product->__get("product_name")}}</span>
                                        </a>
                                        <ins> {{$product->getPrice()}}</ins>
                                    </li>
                                    <li>
                                        <a href="shop-detail.html">
                                            <img src="{{$product->__get("product_image1")}}" alt="" />
                                            <span class="product-title">Aurore Grape</span>
                                        </a>
                                        <ins>$9.00</ins>
                                    </li>
                                    <li>
                                        <a href="shop-detail.html">
                                            <img src="{{$product->__get("product_image2")}}" alt="" />
                                            <span class="product-title">Blueberry Jam</span>
                                        </a>
                                        <ins>$15.00</ins>
                                    </li>
                                    <li>
                                        <a href="shop-detail.html">
                                            <img src="frontend/images/shop/thumb/shop_4.jpg" alt="" />
                                            <span class="product-title">Passionfruit</span>
                                        </a>
                                        <ins>$35.00</ins>
                                    </li>
                                    <li>
                                        <a href="shop-detail.html">
                                            <img src="frontend/images/shop/thumb/shop_5.jpg" alt="" />
                                            <span class="product-title">Carrot</span>
                                        </a>
                                        <ins>$12.00</ins>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-tags">
                                <h3 class="widget-title">Product Tags</h3>
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
