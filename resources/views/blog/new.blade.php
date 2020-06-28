@extends("layout")
@section("title", "New CategoryRepository Listing")
@section("contentHeader", "New CategoryRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Create A New Blog</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("admin/save-blog")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Blog_Title</label>
                    <input type="text" name="blog_title" class="form-control @error("blog_title")  is-invalid @enderror" placeholder="New Title">
                    @error("blog_title")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Blog_Desc</label>
                    <input type="text" name="blog_desc" class="form-control @error("blog_desc")  is-invalid @enderror" placeholder="New Desc">
                    @error("blog_desc")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Blog_Content</label>
                    <textarea name="blog_content" id="editor1" class="form-control"></textarea>
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
