@extends("layout")
@section("tieude","")
@section("content")
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <p class="col-lg-5 mt-3 float-left">Tổng số đơn hàng đã hoàn thành: <b style="background-color: green; color: white; padding: 5px 5px 5px 5px; border-radius: 50%">{{$ordersCount}}</b></p>
                </div>
                <!-- Light table -->
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead class="thead-light">
                        <tr class="text-center">
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">STT
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Tên Khách Hàng
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Địa Chỉ
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Điện Thoại
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Lời Nhắn
                            </th>
                            <th scope="col" width="200px" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Trạng Thái Đơn Hàng
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Tổng Tiền
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Chức Năng
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($orders as $order)
                            <tr class="text-center">
                                <td>{{$order->__get("id")}}</td>
                                <td>{{$order->__get("username")}}</td>
                                <td>{{$order->__get("address")}}</td>
                                <td>{{$order->__get("telephone")}}</td>
                                <td>{{$order->__get("note")}}</td>
                                @if($order->__get("status") == 1)
                                    <td><a style="color: white" class="btn btn-danger">Chờ xác nhận</a></td>
                                    @elseif($order->__get("status") == 2) <td><a style="color: white" class="btn btn-primary">Đang giao hàng</a></td>
                                    @elseif($order->__get("status") == 3) <td><a style="color: white" class="btn btn-success">Đã hoàn thành</a></td>
                                    @elseif($order->__get("status") == 4) <td><a style="color: white" class="btn btn-dark">Đã hủy đơn</a></td>
                                    @endif
                                <td>{{number_format($order->__get("grand_total"))}}đ</td>
                                <td>
                                        <div class="box" style="position: absolute; right: 60px">
                                    <a href="{{url("admin/edit-order/{$order->__get("id")}")}}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                                        </div>
                                        <div class="box" style="position: absolute; right: 10px">
                                    <form action="{{url("admin/delete-order/{$order->__get("id")}")}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
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
