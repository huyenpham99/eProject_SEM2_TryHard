@extends("layout")
@section("title", "Update BlogRepository List")
@section("contentHeader", "Update BlogRepository")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Update Blog</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("/update-blog/{$blog->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--                    // method"POST" dùng để báo route--}}
                    @csrf
                    {{--                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
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
                            <textarea name="blog_content" id="editor1" class="form-control" ></textarea>
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
