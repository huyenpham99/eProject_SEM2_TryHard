@extends("layout")
@section("tieude","Danh Mục Blog")
@section("content")
    <div class="card card-primary mt-4">
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("admin/save-blogcategory")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Tên Danh Mục Blog</label>
                    <input type="text" name="blog_category_name" class="form-control @error("blog_category_name")  is-invalid @enderror" >
                    @error("blog_category_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
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
