@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center">Product Detail</h2>
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
                            <li>Product Detail</li>
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
                                                    <img src="{{$product->__get("product_image")}}" alt="" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-thumb">
                                                    <img src="{{$product->__get("product_image1")}}" alt="" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="image-thumb">
                                                    <img src="{{$product->__get("product_image2")}}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-gallery-nav">
                                    <div class="image-nav-item">
                                        <div class="image-thumb">
                                            <img src="{{$product->__get("product_image")}}" alt="" />
                                        </div>
                                    </div>
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
                                        <ins>${{$product->__get("product_price")}}</ins>
                                    </div>
                                    <div class="mb-3">
                                        <p>{{$product->__get("product_desc")}}</p>
                                    </div>
                                    <form method="POST" action="{{url("/cart/add/{$product->__get("id")}")}}">
                                        @method("POST")
                                        @csrf
                                        <div class="quantity-chooser">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="quantity">
                                                        <input type="number" name="qty" value="1" min="1" title="qty">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-success">Add To Card</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                                                {{$product->__get("product_desc")}}
                                            </p>
                                        </div>
                                        <div id="tab-reviews" class="tab-pane fade">
                                            <div class="single-comments-list mt-0">
                                                <div class="mb-2">
                                                    <h2 class="comment-title"> Reviews {{$product->__get("product_name")}}</h2>
                                                </div>
{{--                                                <ul class="comment-list">--}}
{{--                                                    <li>--}}
{{--                                                        <div class="comment-container">--}}
{{--                                                            <div class="comment-author-vcard">--}}
{{--                                                                <img alt="" src="images/avatar/avatar.png" />--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment-author-info">--}}
{{--                                                                <span class="comment-author-name">admin</span>--}}
{{--                                                                <a href="#" class="comment-date">July 27, 2016</a>--}}
{{--                                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="reply">--}}
{{--                                                                <a class="comment-reply-link" href="#">Reply</a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <ul class="children">--}}
{{--                                                            <li>--}}
{{--                                                                <div class="comment-container">--}}
{{--                                                                    <div class="comment-author-vcard">--}}
{{--                                                                        <img alt="" src="images/avatar/avatar.png" />--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="comment-author-info">--}}
{{--                                                                        <span class="comment-author-name">admin</span>--}}
{{--                                                                        <a href="#" class="comment-date">July 27, 2016</a>--}}
{{--                                                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="reply">--}}
{{--                                                                        <a class="comment-reply-link" href="#">Reply</a>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="comment-container">--}}
{{--                                                            <div class="comment-author-vcard">--}}
{{--                                                                <img alt="" src="images/avatar/avatar.png" />--}}
{{--                                                            </div>--}}
{{--                                                            <div class="comment-author-info">--}}
{{--                                                                <span class="comment-author-name">admin</span>--}}
{{--                                                                <a href="#" class="comment-date">July 27, 2016</a>--}}
{{--                                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="reply">--}}
{{--                                                                <a class="comment-reply-link" href="#">Reply</a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
                                            </div>
                                            <div class="comments-area">
                                                <div class="single-comments-list mt-0">
                                                    <div class="mb-2">
                                                        {{--                                        <h2 class="comment-title fa fa-comment-o"> {{count($comments)}} Comment</h2>--}}
                                                    </div>
                                                </div>
                                                <div class="single-comment-form">
                                                    <div class="mb-2">
                                                        <h2 class="comment-title">LEAVE A Comment</h2>
                                                    </div>
                                                    {{--                                    <form action="{{url("/blog/comment")}}" method="post" class="comment-form">--}}
                                                    {{--                                        @method("POST")--}}
                                                    {{--                                        @csrf--}}
                                                    <input type="hidden" id="blog_id" name="blog_id" value="{{$product->id}}}"
                                                           data-id="{{$product->id}}"/>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                            <textarea id="comment" onkeypress="postComment1()" name="content" cols="45" rows="5"
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
                                </div>
                                <div class="related">
                                    <div class="related-title">
                                        <div class="text-center mb-1 section-pretitle fz-34">Related</div>
                                        <h2 class="text-center section-title mtn-2 fz-24">Products</h2>
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
                                <h3 class="widget-title">Categories List</h3>
                                <ul class="product-categories">
                                    <x-frontend.sidebar_item/>
                                </ul>
                            </div>
                            <div class="widget widget-products">
                                <h3 class="widget-title">Most Viewer Product</h3>
                                <ul class="product-list-widget">
                                    @foreach($products as $p)
                                    <li>
                                        <a href="{{$p->getProductUrl()}}">
                                            <img src="{{$p->__get("product_image")}}" alt="" />
                                            <span class="product-title">{{$p->__get("product_name")}}</span>
                                        </a>
                                        <ins>${{$p->__get("product_price")}}</ins>
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
    <script type="text/javascript">
        function postComment1() {
            var key = window.event.keyCode;
            if (key === 13) {
                var id = $("#product_id").attr('data-id');
                var comment = $("#comment").val();
                $.ajax({
                    method: "post",
                    url: '{{url("/product/comment")}}',
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
@endsection
