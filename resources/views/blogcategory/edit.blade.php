@extends("layout")
@section("title", "Update BlogCategoryRepository List")
@section("contentHeader", "Update BlogCategoryRepository")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Update Blog Category</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("admin/update-blogcategory/{$blogcategory->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--                    // method"POST" dùng để báo route--}}
                    @csrf
                    {{--                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Blog Category Name</label>
                            <input type="text" value="{{$blogcategory->__get("blog_category_name")}}" name="blog_category_name" class="form-control @error("blog_category_name") is-invalid @enderror" placeholder="New Blog Category">
                            @error("blog_category_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
{{--hhhhhhh--}}
