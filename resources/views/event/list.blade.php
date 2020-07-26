@extends("layout")
@section("tieude","Danh Sách Sự Kiện")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="col-lg-9"></div>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("/admin/new-event")}}" class="btn btn-success">Thêm Mới Sự Kiện</a>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive table-borderless table-hover table-striped">
                    <table style="font-size: 14px" class="mb-0 table table-responsive">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Sự Kiện</th>
                            <th>Ảnh</th>
                            <th>Ngày Bắt Đầu</th>
                            <th>Ngày Kết Thúc</th>
                            <th>Số Người Đăng Ký</th>
                            <th>Địa Chỉ Sự Kiện</th>
                            <th>Mô Tả Ngắn</th>
                            <th>Quy mô</th>
                            <th>Trạng thái</th>
                            <th>Tổng tiền</th>
                            <th>Quản lí</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--                        //--}}
                        @foreach($event as $event)
                            <tr>
                                <th scope="row">{{$event->__get("id")}}</th>
                                <td>{{$event->__get("event_name")}}</td>
                                <td><img src="{{$event->getImage()}}" style="width: 50px; height: 50px" alt=""></td>
                                <td>{{$event->__get("event_date_start")}}</td>
                                <td>{{$event->__get("event_date_end")}}</td>
                                <td>{{$event->__get("event_people_count")}}</td>
                                <td>{{$event->__get("event_address")}}</td>
                                <td>{{$event->__get("event_desc")}}</td>
                                <td>{{$event->__get("total_people")}} người</td>
                                <td style="color: white">
                                    @if($event->__get("status") == 1)
                                    <a class="btn btn-primary">On</a>
                                        @else
                                        <a class="btn btn-info">Off</a>
                                        @endif
                                </td>
                                <td>{{$event->__get("total_price")}}</td>
                                <td>
                                    <div class="box" style="position: absolute; right: 60px">
                                        <a href="{{url("/admin/edit-event/{$event->__get("id")}")}}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                                    <div class="box" style="position: absolute; right: 10px">
                                        <form action="{{url("/admin/delete-event/{$event->__get("id")}")}}" method="post">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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
