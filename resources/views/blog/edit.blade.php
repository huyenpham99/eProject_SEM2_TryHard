@extends("layout")
@section("tieude","Sửa Blog")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <!-- Light table -->
                <form role="form" action="{{url("admin/update-blog/{$blog->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--                    // method"POST" dùng để báo route--}}
                    @csrf
                    {{--                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tiêu đề Blog</label>
                            <input type="text" name="blog_title" class="form-control @error("blog_title")  is-invalid @enderror" placeholder="New Title">
                            @error("blog_title")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ảnh Bìa Blog</label>
                            <input type="text" name="blog_image" class="form-control" placeholder="edit Blog Image">
                        </div>
                        <div class="form-group">
                            <label>Mô tả ngắn</label>
                            <input type="text" name="blog_desc" class="form-control @error("blog_desc")  is-invalid @enderror" placeholder="New Desc">
                            @error("blog_desc")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ngày Viết</label>
                            <input type="text" name="blog_date" class="form-control" placeholder="New Blog Date">
                        </div>
                        <div class="form-group">
                            <label>Nội Dung Blog</label>
                            <textarea name="blog_content" id="editor1" class="form-control" ></textarea>
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
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
{{--hhhhhhh--}}
