@extends("layout")
@section("tieude","Viết Bài")
@section("content")
    <div class="card card-primary mt-4">
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("admin/save-blog")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Tiêu Đề Bài Viết</label>
                    <input type="text" name="blog_title" class="form-control @error("blog_title")  is-invalid @enderror">
                    @error("blog_title")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Ảnh Bìa</label>
                    <input type="text" name="blog_image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mô Tả Ngắn</label>
                    <input type="text" name="blog_desc" class="form-control @error("blog_desc")  is-invalid @enderror">
                    @error("blog_desc")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Ngày Viết</label>
                    <input type="text" name="blog_date" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nội Dung Blog</label>
                    <textarea name="blog_content" id="editor1" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Danh Mục Blog</label>
                    <select name="blog_category_id" class="form-control">
                        @foreach($blogcategory as $category)
                            <option value="{{$category->__get("id")}}">{{$category->__get("blog_category_name")}}</option>
                        @endforeach
                    </select>
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
