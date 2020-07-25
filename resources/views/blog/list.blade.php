@extends("layout")
@section("tieude","Danh Mục Bài Viết")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left text-capitalize"></h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("admin/new-blog")}}" class="btn btn-success">Viết Bài</a>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive table-borderless table-hover table-striped">
                    <table class="mb-0 table">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu Đề Blog</th>
                            <td>Ảnh Bìa Blog</td>
                            <th>Mô Tả Ngắn</th>
                            <th>Ngày Viết</th>
                            <th>Lượt Xem</th>
                            <th>Danh Mục Blog</th>
                            <th>Chức Năng</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        //--}}
                        @foreach($blogs as $blog)
                        <tr>
                            <th scope="row">{{$blog->__get("id")}}</th>
                            <td>{{$blog->__get("blog_title")}}</td>
                            <td><img src="{{$blog->__get("blog_image")}}" style="width: 50px; height: 50px"></td>
                            <td>{{$blog->__get("blog_desc")}}</td>
                            <td>{{$blog->__get("blog_date")}}</td>
                            <td>{{$blog->__get("view_count")}}</td>
                            <td>{{$blog->__get("blog_category_id")}}</td>
                            <td>
                                <div class="box" style="position: absolute; right: 60px">
                                <a href="{{url("admin/edit-blog/{$blog->__get("id")}")}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                </div>
                                <div class="box" style="position: absolute; right: 10px">

                                <form action="{{url("admin/delete-blog/{$blog->__get("id")}")}}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
                                </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
            </div>
        </div>
    </div>
    {{--    {!! $categories->links() !!}--}}
@endsection
