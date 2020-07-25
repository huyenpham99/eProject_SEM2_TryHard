@extends("layout")
@section("tieude","Sửa danh mục sản phẩm")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <!-- Light table -->
                <form role="form" action="{{url("admin/update-category/{$category->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--                    // method"POST" dùng để báo route--}}
                    @csrf
                    {{--                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên Danh Mục</label>
                            <input type="text" value="{{$category->__get("category_name")}}" name="category_name" class="form-control @error("category_name") is-invalid @enderror">
                            @error("category_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div><label for="exampleInputEmail1">Ảnh Danh Mục</label></div>
                            <img src="{{$category->get("category_image")}}" style="width: 70px; height: 70px"/>
                            <input style="padding-left: 20px!important;" class="form-control @error("category_image") is-invalid @enderror" type="text" name="category_image" />
                            @error("category_image")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
{{--hhhhhhh--}}
