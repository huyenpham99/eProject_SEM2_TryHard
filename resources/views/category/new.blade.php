@extends("layout")
@section("tieude","Thêm Mới Loại Hàng")
@section("content")
    <div class="card card-primary mt-4">
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("admin/save-category")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Tên Loại Hàng</label>
                    <input type="text" name="category_name" class="form-control @error("category_name")  is-invalid @enderror">
                    @error("category_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Ảnh Loại Hàng</label>
                    <input type="text" name="category_image" class="form-control @error("category_image") is-invalid @enderror">
                </div>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm Mới</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
