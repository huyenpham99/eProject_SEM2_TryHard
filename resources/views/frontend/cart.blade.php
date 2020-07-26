@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif; ">Giỏ Hàng</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumbs">
                            <li><a href="index.html">Trang Chủ</a></li>
                            <li><a href="shortcodes.html">Cửa Hàng</a></li>
                            <li>Giỏ Hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <table class="table shop-cart">
                            <tbody>
                            @foreach($products as $p)
                            <tr class="cart_item">
                                <td class="product-remove">
                                    <a href="#" class="remove">×</a>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="shop-detail.html">
                                        <img src="{{$p->__get("product_image")}}"  alt="">
                                    </a>
                                </td>
                                <td class="product-info">
                                    <a href="{{url("/product-detail")}}">{{$p->__get("product_name")}}</a>
                                    <span class="amount">{{$p->getPrice()}}</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity">
                                        <input id="qty-1" type="number" min="0" name="number" value="{{$p->cart_qty}}" class="input-text qty text" size="4">
                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    <span class="amount"> ${{$p->cart_qty * $p->__get("product_price")}}</span>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5" class="actions">
                                    <a class="continue-shopping" href="{{url("/shop")}}"> Tiếp tục mua sắm</a>
                                    <input type="submit" class="update-cart" name="update_cart" value="Cập nhật giỏ hàng" />
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <div class="cart-totals">
                            <table>
                                <tbody>
                                <tr class="cart-subtotal">
                                    <th>Tổng</th>
                                    <td>${{$grandTotal}}</td>
                                </tr>
                                <tr class="shipping">
                                    <th>Vận chuyển</th>
                                    <td>Miễn Phí Vận Chuyển</td>
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td><strong>${{$grandTotal}}</strong></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="proceed-to-checkout">
                                <a href="{{url("/checkout")}}">Thanh Toán</a>
                            </div>
                        </div>
                        <div class="coupon-shipping">
                            <div class="coupon">
                                <form>
                                    <input type="text" name="coupon_code" class="coupon-code" id="coupon_code" value="" placeholder="Mã giảm giá" />
                                    <input type="submit" class="apply-coupon" name="apply_coupon" value="phiếu giảm giá" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
