@extends("layout")
@section("title", "Banner List")
@section("contentHeader", "Banner")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Banner Listing</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("/admin/new-banner")}}" class="btn btn-success"><i class="fas fa-plus"></i></a>
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
                                data-sort="name">Banner Name
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Banner Image
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Banner Image 2
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Status
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Thứ tự
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Created At
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Updated At
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($banner as $banner)
                            <tr>
                                <td>{{$banner->__get("id")}}</td>
                                <td>{{$banner->__get("banner_name")}}</td>
                                <td><img src="{{$banner->getImage("banner_image")}}" style="width: 50px; height: 50px"></td>
                                <td><img src="{{$banner->getImage("banner_image2")}}" style="width: 50px; height: 50px"></td>
                                <td>
                                    @if($banner->__get("status") == 0)
                                        <a style="color: white" class="btn btn-info">Ẩn</a>
                                        @elseif($banner->__get("status") == 1)
                                        <a style="color: white" class="btn btn-primary">Hiện</a>
                                        @endif
                                </td>
                                <td>
                                    @if($banner->__get("thu_tu") == 4)
                                        <a style="color: white" class="btn btn-danger">Chờ</a>
                                        @else
                                        {{$banner->__get("thu_tu")}}
                                        @endif
                                </td>
                                <td>{{$banner->__get("created_at")}}</td>
                                <td>{{$banner->__get("updated_at")}}</td>
                                <td>
                                    <a href="{{url("/admin/edit-banner/{$banner->__get("id")}")}}" class="btn btn-warning"><i class="fas fa-pencil-alt"> Edit</i></a>
                                </td>
                                <td>
                                    <form action="{{url("/admin/delete-banner/{$banner->__get("id")}")}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-danger"><i class="fas fa-times"> Delete</i> </button>
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
@endsection
