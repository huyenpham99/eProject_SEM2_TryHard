@extends("layout")
@section("title", "Update Order")
@section("contentHeader", "Update Order")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Update Order</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("admin/update-order/{$order->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--                    // method"POST" dùng để báo route--}}
                    @csrf
                    {{--                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Order Name</label>
                            <input type="text" value="{{$order->__get("username")}}" name="username" class="form-control @error("username") is-invalid @enderror" >
                            @error("username")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" value="{{$order->__get("address")}}" name="address" class="form-control @error("address") is-invalid @enderror" >
                            @error("address")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="text" value="{{$order->__get("telephone")}}" name="telephone" class="form-control @error("telephone") is-invalid @enderror" >
                            @error("telephone")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Note</label>
                            <input type="text" value="{{$order->__get("note")}}" name="note" class="form-control @error("note") is-invalid @enderror" >
                            @error("note")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="1">Chờ xác nhận</option>
                                <option value="2">Đang giao hàng</option>
                                <option value="3">Hoàn thành đơn hàng</option>
                                <option value="4">Hủy đơn hàng</option>
                            </select>
                            @error("status")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
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
