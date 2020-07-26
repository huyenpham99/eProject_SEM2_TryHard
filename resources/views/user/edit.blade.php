@extends("layout")
@section('tieude',"Sửa Quyền Quản Trị")
@section("content")
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa Tài Khoản Người Dùng</h3>
        </div>
        <!-- form start -->
        {{--        update thì method sẽ là put method trong form thi phai la post @method thi la put--}}
        <form role="form" action="{{url("admin/update-access/{$user->__get("id")}")}}" method="post">
            @method("PUT")
            {{--            // method"POST" dùng để báo route--}}
            @csrf
            {{--            // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
            <div class="card-body">
                <h3>Chọn Tài Khoản Người Dùng</h3>
                <br>
                <div class="form-group">
                    <div class="row">
                        @if($user->__get("role")== 3)
                        <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                       value="3" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Quản Lý Sự Kiện
                                </label>
                            </div>
                        </div>
                        @else
                            <div class="col-lg-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                           value="3">
                                    <label class="form-check-label" for="gridRadios1">
                                        Quản Lý Sự Kiện
                                    </label>
                                </div>
                            </div>
                        @endif
                        @if($user->__get("role")== 2)
                        <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                       value="2" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Quản Lý Bài Viết
                                </label>
                            </div>
                        </div>
                            @else
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                               value="2" >
                                        <label class="form-check-label" for="gridRadios1">
                                            Quản Lý Bài Viết
                                        </label>
                                    </div>
                                </div>
                            @endif
                            @if($user->__get("role")== 5)
                        <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                       value="5" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Quản Lý Chương Trình
                                </label>
                            </div>
                        </div>
                            @else
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                               value="5" >
                                        <label class="form-check-label" for="gridRadios1">
                                            Quản Lý Chương Trình
                                        </label>
                                    </div>
                                </div>
                                @endif
                            @if($user->__get("role")== 4)
                        <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios2"
                                       value="4" checked>
                                <label class="form-check-label" for="gridRadios2">
                                    Quản Lý Sản Phẩm
                                </label>
                            </div>
                        </div>
                            @else
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios2"
                                               value="4" >
                                        <label class="form-check-label" for="gridRadios2">
                                            Quản Lý Sản Phẩm
                                        </label>
                                    </div>
                                </div>
                                @endif
                            @if($user->__get("role")== 0)
                        <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios3"
                                       value="0" checked>
                                <label class="form-check-label" for="gridRadios3">
                                    User
                                </label>
                            </div>
                        </div>
                            @else
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios3"
                                               value="0">
                                        <label class="form-check-label" for="gridRadios3">
                                           Người Dùng
                                        </label>
                                    </div>
                                </div>
                                @endif
                            @if($user->__get("role")== 6)
                        <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios3"
                                       value="6" checked>
                                <label class="form-check-label" for="gridRadios3">
                                  Tài khoản tạm khóa
                                </label>
                            </div>
                        </div>
                                @else
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios3"
                                               value="6" >
                                        <label class="form-check-label" for="gridRadios3">
                                            Quản Lý Sản Phẩm
                                        </label>
                                    </div>
                                </div>
                        @endif
                    </div>
                </div>
            {{--                // biến error để lưu lỗi--}}
            <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thay Đổi</button>
                </div>
            </div>
        </form>
    </div>
@endsection
