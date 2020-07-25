@extends("layout")
@section("tieude","Sửa Sự Kiện")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <!-- Light table -->
                <form role="form" action="{{url("/admin/update-event/{$event->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--                    // method"POST" dùng để báo route--}}
                    @csrf
                    {{--                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên Sự Kiện</label>
                            <input type="text" name="event_name" class="form-control @error("event_name")  is-invalid @enderror" placeholder="New Event">
                            @error("event_name")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ngày Bắt Đầu</label>
                            <input type="text" name="event_date_start" class="form-control @error("event_date_start")  is-invalid @enderror" placeholder="Event Date Start">
                            @error("event_date_start")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ngày Kết Thúc</label>
                            <input type="text" name="event_date_end" class="form-control @error("event_date_end")  is-invalid @enderror" placeholder="Event Date End">
                            @error("event_date_end")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Số Người Đăng Ký</label>
                            <input type="text" name="event_people_count" class="form-control @error("event_people_count")  is-invalid @enderror" placeholder="New Event">
                            @error("event_people_count")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ Event</label>
                            <textarea type="text" name="event_address" class="form-control @error("event_address")  is-invalid @enderror" placeholder="New Event"></textarea>
                            @error("event_address")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label>Event Content</label>--}}
{{--                            <input type="text" name="event_content" class="form-control @error("event_content")  is-invalid @enderror" placeholder="New Content">--}}
{{--                            @error("event_content")--}}
{{--                            <span class="error invalid-feedback">  {{$message}}</span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <label>Nội Dung Event</label>
                            <textarea name="event_content" id="editor1" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Mô Tả Ngắn</label>
                            <input type="text" name="event_desc" class="form-control @error("event_desc")  is-invalid @enderror" placeholder="New Desc">
                            @error("event_desc")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Người Đăng Ký</label>
                            <select name="user_id" class="form-control">
                                @foreach($user as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ảnh Bìa</label>
                            <select name="banner_id" class="form-control">
                                @foreach($banner as $banner)
                                    <option value="{{$banner->id}}">{{$banner}}</option>
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
