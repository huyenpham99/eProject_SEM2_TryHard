@extends("layout")
@section('tieude',"Danh sách danh mục Blog")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left"></h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("admin/new-donate")}}" class="btn btn-success">Tạo Mới Ủng Hộ</a>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">STT
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Tiêu Đề Donate
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Ảnh Bìa Donate
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Mô Tả Ngắn
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Số tiền hiện tại
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Số tiền mục tiêu
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Người tạo
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($donates as $donate)
                            <tr>
                                <td>{{$donate->__get("id")}}</td>
                                <td>{{$donate->__get("donate_title")}}</td>
                                <td><img width="50px" height="50px" src="{{$donate->__get("donate_image")}}" alt=""></td>
                                <td>{{$donate->__get("donate_desc")}}</td>
                                <td>{{$donate->__get("raisermoney")}}</td>
                                <td>{{number_format($donate->__get("goalmoney"))."đ"}}</td>
                                <td>{{$donate->__get("name")}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
