@extends("layout")
@section("tieude", "Thêm mới danh mục")
@section("contentHeader", "New ProgramCategoryRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("admin/save-programcategory")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input type="text" name="progam_category_name" class="form-control @error("progam_category_name") is-invalid @enderror" placeholder="">
                    @error("progam_category_name")
                    <span class="error invalid-feedback"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Ảnh danh mục</label>
                    <input type="text" name="program_category_image" class="form-control @error("program_category_image") is-invalid @enderror">
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
