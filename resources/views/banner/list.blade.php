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
                        <a href="{{url("/new-banner")}}" class="btn btn-sm btn-neutral">Create</a>
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
                        @foreach($banner as $banner)
                            <tr>
                                <td>{{$banner->__get("id")}}</td>
                                <td>{{$banner->__get("banner_name")}}</td>
                                <td><img src="{{$banner->__get("banner_image")}}" style="width: 50px; height: 50px"></td>
                                <td>{{$banner->__get("created_at")}}</td>
                                <td>{{$banner->__get("updated_at")}}</td>
                                <td>
                                    <a href="{{url("/edit-banner/{$banner->__get("id")}")}}" class="btn btn-outline-dark">Edit</a>
                                </td>
                                <td>
                                    <form action="{{url("/delete-banner/{$banner->__get("id")}")}}" method="post">
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
@endsection
