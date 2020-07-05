@extends("layout")
@section("title","Edit User")
@section("contentHeader","Edit Access")
@section("content")
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Account Access</h3>
        </div>
        <!-- form start -->
        {{--        update thì method sẽ là put method trong form thi phai la post @method thi la put--}}
        <form role="form" action="{{url("admin/update-access/{$user->__get("id")}")}}" method="post">
            @method("PUT")
            {{--            // method"POST" dùng để báo route--}}
            @csrf
            {{--            // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
            <div class="card-body">
                <h3>Choose This Account Access</h3>
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                       value="eventmanager" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Event Manager
                                </label>
                            </div>
                        </div>   <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                       value="blogmanager">
                                <label class="form-check-label" for="gridRadios1">
                                    Blog Manager
                                </label>
                            </div>
                        </div>   <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                       value="programmanager">
                                <label class="form-check-label" for="gridRadios1">
                                    Program Manager
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios2"
                                       value="productmanager">
                                <label class="form-check-label" for="gridRadios2">
                                    Product Manager
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios3"
                                       value="user">
                                <label class="form-check-label" for="gridRadios3">
                                    User
                                </label>
                            </div>
                        </div>       <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="gridRadios3"
                                       value="deadactive">
                                <label class="form-check-label" for="gridRadios3">
                                    Dead Active Account
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            {{--                // biến error để lưu lỗi--}}
            <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Change</button>
                </div>
            </div>
        </form>
    </div>
@endsection
