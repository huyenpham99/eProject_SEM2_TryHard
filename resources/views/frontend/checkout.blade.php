@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif; ">Thanh Toán</h2>
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
                            <li><a href="{{url("/shop")}}">Cửa hàng</a></li>
                            <li>Thanh Toán</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-checkout pt-7 pb-7">
            <div class="container">
                <form action="{{url("/checkout")}}" method="post">
                    @method("POST")
                    @csrf
                <div class="row">
                    <div class="col-md-6">
                        <h3>Hóa Đơn Chi tiết</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Tên Người Mua <span class="required">*</span></label>
                                    <div class="form-wrap">
                                        <input type="text" name="username" value="{{\Illuminate\Support\Facades\Auth::user()->__get("name")}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Địa Chỉ <span class="required">*</span></label>
                                    <div class="form-wrap">
                                        <input type="text" name="address" value="" size="40" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Số Điện Thoại</label>
                                    <div class="form-wrap">
                                        <input type="text" name="telephone" value="" size="40" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Email <span class="required">*</span></label>
                                    <div class="form-wrap">
                                        <input type="email" name="email" value="" size="40" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Ghi Chú</label>
                                    <div class="form-wrap">
                                        <input type="text" name="note" value="" size="40" />
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Hóa Đơn</h3>
                        <div class="order-review">
                            <table class="checkout-review-order-table">
                                <thead>
                                <tr>
                                    <th class="product-name">Sản Phẩm</th>
                                    <th class="product-total">Tổng Tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $grandTotal = 0 @endphp
                                @foreach($cart->getItems as $item)
                                <tr>
                                    <td class="product-name">
                                        {{$item->__get("product_name")}}&nbsp;<strong class="product-quantity"> x {{$item->pivot->__get("qty")}}</strong>
                                    </td>
                                    <td class="product-total">
                                        {{"$".number_format($item->__get("product_price"))}}
                                    </td>
                                </tr>
                                @php $grandTotal += ($item->__get("product_price")* $item->pivot->__get("qty")) @endphp
                                @endforeach
                                <tr>
                                    <th>Vận Chuyển</th>
                                    <td>
                                        <ul id="shipping_method">
                                            <li>
                                                <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_free_shipping1" value="free_shipping:1" class="shipping_method" checked="checked">
                                                <span>Miễn Phí Vận Chuyển</span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Tổng Tiền</th>
                                    <td><strong>{{number_format($grandTotal)}} đ</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkout-payment">
                            <ul class="payment-method">
                                <h3>Phương Thức Thanh Toán</h3>
                                <li>
                                    <input type="radio" value="vnpay" name="payment"/>
                                    <span>
                                        <img src="https://1office.vn/wp-content/uploads/2020/02/1564381662138-unnamed-1.jpg"/>
                                    </span>
                                    <div class="payment-box">
                                        <p>Cổng thanh toán VNPAY.</p>
                                    </div>
                                    <input type="radio" value="tructiep" name="payment"/>
                                    <span>
                                        <i class="fas fa-apple-pay">Thanh Toán Trực Tiếp</i>
                                    </span>
                                    <div class="payment-box">
                                        <p>Thanh Toán Trực Tiếp</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-right text-center-sm">
                                <button type="submit" class="organik-btn">Thanh Toán Ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
