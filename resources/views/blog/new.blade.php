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
                    <label>Blog_Image</label>
                    <input type="text" name="blog_image" class="form-control" placeholder="New Blog Image">
                </div>
                <div class="form-group">
                    <label>Blog_Desc</label>
                    <input type="text" name="blog_desc" class="form-control @error("blog_desc")  is-invalid @enderror" placeholder="New Desc">
                    @error("blog_desc")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Blog_Date</label>
                    <input type="text" name="blog_date" class="form-control" placeholder="New Blog Date">
                </div>
                <div class="form-group">
                    <label>Blog_Content</label>
                    <textarea name="blog_content" id="editor1" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Blog Category</label>
                    <select name="blog_category_id" class="form-control">
                        @foreach($blogcategory as $category)
                            <option value="{{$category->__get("id")}}">{{$category->__get("blog_category_name")}}</option>
                        @endforeach
                    </select>
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
