@extends("layout")
@section("tieude","Quản Lý Bình Luận")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <!-- Light table -->
                <form role="form" action="{{url("/admin/update-comment/{$comment->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--            // method"POST" dùng để báo route--}}
                    @csrf
                    {{--            // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Lựa Chọn :</label>
                            <div class="col-md-12" style="margin-top: 20px;">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Ẩn Bình Luận</label>
                                        <input type="radio" name="status" value="1">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Khóa Bình Luận</label>
                                        <input type="radio" name="status" value="2">
                                    </div>
                                    <div class="col-md-7">
                                        <label>Hiện Bình Luận</label>
                                        <input type="radio" name="status" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Change</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
