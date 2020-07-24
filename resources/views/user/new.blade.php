@extends("layout")
@section('tieude',"Thêm Mới Quản Trị Viên")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <form role="form" action="{{url("admin/save-manager")}}" method="post" enctype="multipart/form-data">
                    @method("POST")
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên Tài Khoản: </label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ Email :</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Mật Khẩu</label>
                            <input type="password" name="password" class="form-control" autocomplete="new-password" required/>
                        </div>
                        <div class="form-group">
                            <label>Xác Nhận Mật Khẩu</label>
                            <input type="password" name="password_confirmation" autocomplete="new-password"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Quyền Hạn</label>
                            <select name="role" class="form-control" id="exampleFormControlSelect1">
                                <option value="2">Quản Lý Bài Viết</option>
                                <option value="3">Quản Lý Sự Kiện</option>
                                <option value="4">Quản Lý Sản Phẩm</option>
                                <option value="5">Quản Lý Chương Trình</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
