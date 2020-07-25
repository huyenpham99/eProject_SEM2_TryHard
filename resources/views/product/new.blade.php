@extends("layout")
@section("tieude","Thêm Mới Sản Phẩm")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <form role="form" action="{{url("admin/save-product")}}" method="post" enctype="multipart/form-data">
                    @method("POST")
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên Sản Phẩm</label>
                            <input type="text" name="product_name" class="form-control @error("product_name") is-invalid @enderror">
                            @error("product_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ảnh Sản Phẩm 1</label>
                            <input type="text" name="product_image" class="form-control @error("product_image") is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Ảnh Sản Phẩm 1</label>
                            <input type="text" name="product_image1" class="form-control @error("product_image1") is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Ảnh Sản Phẩm 1</label>
                            <input type="text" name="product_image2" class="form-control @error("product_image2") is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Mô Tả Ngắn</label>
                            <textarea name="product_desc" class="form-control @error("product_desc") is-invalid @enderror" ></textarea>
                            @error("product_desc")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Giá Tiền</label>
                            <input type="text" name="product_price" class="form-control @error("product_price") is-invalid @enderror" >
                            @error("product_price")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Số Lượng</label>
                            <input type="text" name="qty" class="form-control @error("qty") is-invalid @enderror" >
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
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Nhập Hàng</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
{{--g--}}
