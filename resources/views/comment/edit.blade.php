@extends("layout")
@section("title", "Set Comment Status")
@section("contentHeader", "Set Comment Status")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Set Comment Status</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("/admin/update-comment/{$comment->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--            // method"POST" dùng để báo route--}}
                    @csrf
                    {{--            // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Choose Comment Action: </label>
                            <div class="col-md-12" style="margin-top: 20px;">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Hide Comment: </label>
                                        <input type="radio" name="status" value="1">
                                    </div>
                                    <div class="col-md-3">
                                        <label>Banner Comment: </label>
                                        <input type="radio" name="status" value="2">
                                    </div>
                                    <div class="col-md-7">
                                        <label>Show Comment: </label>
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
