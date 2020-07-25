@extends("layout")
@section("tieude","Danh Sách Loại Hàng")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left"></h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("admin/new-category")}}" class="btn btn-success">Thêm Mới Loại Hàng</a>
                        {{--                        @foreach($categories as $category)--}}
                        {{--                            <a href="{{url("admin/admin/edit-category/{$category->__get("id")}")}}" class="btn btn-sm btn-neutral">Update</a>--}}
                        {{--                        @endforeach--}}

                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table table-stripe">
                        <thead class="thead-light">
                        <tr class="text-center">
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">STT
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Tên Loại Hàng
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Ảnh Loại Hàng
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name"> Chức Năng
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($categories as $category)
                            <tr class="text-center">
                                <td>{{$category->__get("id")}}</td>
                                <td>{{$category->__get("category_name")}}</td>
                                <td><img src="{{$category->__get("category_image")}}" style="width: 40px; height: 40px"></td>
                                <td>
                                    <div class="row" style="position: relative">
                                        <div class="box" style="position: absolute; left: 110px">
                                            <a href="{{url("admin/edit-category/{$category->__get("id")}")}}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>

                                        </div>
                                        <div class="box" style="position: absolute; left: 160px">
                                            <form action="{{url("admin/delete-category/{$category->__get("id")}")}}" method="post">
                                                @method("DELETE")
                                                @csrf
                                                <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
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
