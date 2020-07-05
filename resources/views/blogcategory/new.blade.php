@extends("layout")
@section("title", "New Blog CategoryRepository Listing")
@section("contentHeader", "New Blog CategoryRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Create A New Blog Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("admin/save-blogcategory")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Blog Category Name</label>
                    <input type="text" name="blog_category_name" class="form-control @error("blog_category_name")  is-invalid @enderror" placeholder="New Blog Category">
                    @error("blog_category_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
