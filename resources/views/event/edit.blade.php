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
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên Sự Kiện</label>
                            <input type="text" name="event_name"  value="{{$event->__get("event_name")}}" class="form-control @error("event_name")  is-invalid @enderror">
                            @error("event_name")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <img style="width: 70px; height: 70px" src="{{$event->__get("event_image")}}" alt="">
                            <input type="text" name="event_image"  value="" class="form-control @error("event_image")  is-invalid @enderror">
                            @error("event_image")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ngày Bắt Đầu</label>
                            <input type="text" name="event_date_start" value="{{$event->__get("event_date_start")}}" class="form-control @error("event_date_start")  is-invalid @enderror" >
                            @error("event_date_start")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ngày Kết Thúc</label>
                            <input type="text" name="event_date_end" value="{{$event->__get("event_date_end")}}"  class="form-control @error("event_date_end")  is-invalid @enderror" >
                            @error("event_date_end")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
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
                            <label>Quy mô sự kiện</label>
                            <input type="text" name="total_people" value="{{$event->__get("event_people_count")}}" class="form-control @error("total_people")  is-invalid @enderror">
                            @error("total_people")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ Event</label>
                            <input type="text" name="event_address" value="{{$event->__get("event_address")}}" class="form-control @error("event_address")  is-invalid @enderror"/>
                            @error("event_address")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nội Dung Event</label>
                            <textarea name="event_content" id="editor1" class="form-control">{{$event->__get("event_content")}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Mô Tả Ngắn</label>
                            <input type="text" name="event_desc" value="{{$event->__get("event_desc")}}" class="form-control @error("event_desc")  is-invalid @enderror" >
                            @error("event_desc")
                            <span class="error invalid-feedback">  {{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Người Đăng Ký</label>
                            <select name="user_id" class="form-control">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->email}}</option>
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
