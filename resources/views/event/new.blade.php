@extends("layout")
@section("tieude", "Thêm Sự Kiện")
@section("contentHeader", "New EventRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("/admin/save-event")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Tên sự kiện</label>
                    <input type="text" name="event_name" class="form-control @error("event_name")  is-invalid @enderror">
                    @error("event_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Mô tả ngắn</label>
                    <input type="text" name="event_desc" class="form-control @error("event_desc")  is-invalid @enderror">
                    @error("event_desc")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Ảnh mô tả</label>
                    <input name="event_image" type="text">
                </div>
                <div class="form-group">
                    <label>Trạng thái</label>
                    <div class="row ml-3">
                        <div class="col-1">
                            <input class="form-check-input " id="status1" value="1" type="radio" name="status">
                            <label class="form-check-label" for="status1">
                                Hiện
                            </label>
                        </div>
                        <div class="col-1">
                            <input class="form-check-input " id="status2" value="0" type="radio" name="status">
                            <label class="form-check-label" for="status2">
                                Ẩn
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Ngày bắt đầu</label>
                    <input type="text" name="event_date_start" class="form-control @error("event_date_start")  is-invalid @enderror" placeholder="yyyy/mm/dd">
                    @error("event_date_start")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Ngày kết thúc</label>
                    <input type="text" name="event_date_end" class="form-control @error("event_date_end")  is-invalid @enderror" placeholder="yyyy/mm/dd">
                    @error("event_date_end")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Địa chỉ tổ chức</label>
                    <input type="text" name="event_address" class="form-control @error("event_address")  is-invalid @enderror"/>
                    @error("event_address")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nội dung sự kiện</label>
                    <textarea name="event_content" id="editor1" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Người tạo event</label>
                    <select name="user_id" class="form-control">
                        @foreach($user as $user)
                            <option value="{{$user->__get("id")}}">{{$user->__get("email")}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
