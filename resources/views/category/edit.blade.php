@extends("layout")
@section("title", "Update CategoryRepository List")
@section("contentHeader", "Update CategoryRepository")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Update Category</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("admin/update-category/{$category->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--                    // method"POST" dùng để báo route--}}
                    @csrf
                    {{--                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" value="{{$category->__get("category_name")}}" name="category_name" class="form-control @error("category_name") is-invalid @enderror" placeholder="New Category">
                            @error("category_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div><label for="exampleInputEmail1">Category Image</label></div>
                        <img src="{{$category->get("category_image")}}" style="width: 70px; height: 70px;"/>
                        <input class="form-control @error("category_image") is-invalid @enderror" type="text" name="category_image" />
                        @error("product_image")
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
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
