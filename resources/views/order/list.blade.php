@extends("layout")
@section("title", "OrderController List")
@section("contentHeader", "OrderController List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Order List</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("admin/new-order")}}" class="btn btn-sm btn-neutral">Create</a>
                        {{--                        @foreach($categories as $category)--}}
                        {{--                            <a href="{{url("admin/admin/edit-category/{$category->__get("id")}")}}" class="btn btn-sm btn-neutral">Update</a>--}}
                        {{--                        @endforeach--}}

                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">ID
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">User
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Address
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Telephone
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Note
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Status
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Grand total
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Created At
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Updated At
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Edit
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Delete
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($orders as $order)
                            <tr>
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
                                <td>{{$order->__get("grand_total")}}</td>
                                <td>{{$order->__get("created_at")}}</td>
                                <td>{{$order->__get("update_at")}}</td>
                                <td>
                                    <a href="{{url("admin/edit-order/{$order->__get("id")}")}}" class="btn btn-outline-warning">Edit</a>

                                </td>
                                <td>
                                    <form action="{{url("admin/delete-order/{$order->__get("id")}")}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-outline-dark">Delete</button>
                                    </form>
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
