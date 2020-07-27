@foreach($orderBy as $product)
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
                                            <ins>{{number_format($product->__get("product_price"))}} đ</ins>
                                        </span>
            </a>
        </div>
    </div>
@endforeach
