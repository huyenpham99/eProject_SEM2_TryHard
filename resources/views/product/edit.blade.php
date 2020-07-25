@extends("layout")
@section("tieude","Sửa Sản Phẩm")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <form role="form" action="{{url("admin/update-product/{$product->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên Sản Phẩm</label>
                            <input type="text" value="{{$product->__get("product_name")}}" name="product_name" class="form-control @error("product_name") is-invalid @enderror" placeholder="New Product Name">
                            @error("product_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div><label for="exampleInputEmail1">Ảnh Sản Phẩm 1</label></div>
                            <img src="{{$product->get("product_image")}}" style="width: 70px; height: 70px;"/>
                            <input class="form-control @error("product_image") is-invalid @enderror" type="text" name="product_image" />
                            @error("product_image")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div><label for="exampleInputEmail1">Ảnh Sản Phẩm 2</label></div>
                            <img src="{{$product->get("product_image1")}}" style="width: 70px; height: 70px;"/>
                            <input class="form-control @error("product_image1") is-invalid @enderror" type="text" name="product_image1" />
                            @error("product_image1")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div><label for="exampleInputEmail1">Ảnh Sản Phẩm 3</label></div>
                            <img src="{{$product->get("product_image2")}}" style="width: 70px; height: 70px;"/>
                            <input class="form-control @error("product_image2") is-invalid @enderror" type="text" name="product_image2" />
                            @error("product_image2")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mô Tả Ngắn</label>
                            <textarea name="product_desc" value="{{$product->__get("product_desc")}}" class="form-control @error("product_desc") is-invalid @enderror" placeholder="New Product Desc"></textarea>
                            @error("product_desc")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Giá Tiền</label>
                            <input type="text" name="product_price"  value="{{$product->__get("product_price")}}" class="form-control @error("product_price") is-invalid @enderror" placeholder="New Product Price">
                            @error("product_price")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Số Lượng</label>
                            <input type="text" name="qty" value="{{$product->__get("qty")}}" class="form-control @error("qty") is-invalid @enderror" placeholder="New Product Qty">
                            @error("qty")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Danh Mục</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->__get("id")}}">{{$category->__get("category_name")}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

