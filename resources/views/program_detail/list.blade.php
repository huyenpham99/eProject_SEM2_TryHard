
@extends("layout")
@section("title", "ProgramDetailRepository List")
@section("contentHeader", "ProgramDetaiRepository List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Program Detail List</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("/new-program-detail")}}" class="btn btn-sm btn-neutral">Create</a>
                        {{--                        @foreach($categories as $category)--}}
                        {{--                            <a href="{{url("/admin/edit-category/{$category->__get("id")}")}}" class="btn btn-sm btn-neutral">Update</a>--}}
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
                                data-sort="name">Program Detail Name
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Program Detail Image
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Program Detail Desc
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Program Detail Content
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Program ID
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
                        @foreach($program_detail as $program_detail)
                            <tr>
                                <td>{{$program_detail->__get("id")}}</td>
                                <td>{{$program_detail->__get("program_detail_name")}}</td>
                                <td>{{$program_detail->__get("program_detail_image")}}</td>
                                <td>{{$program_detail->__get("program_detail_desc")}}</td>
                                <td>{{$program_detail->__get("program_detail_content")}}</td>
                                <td>{{$program_detail->__get("program_id")}}</td>
                                <td>{{$program_detail->__get("created_at")}}</td>
                                <td>{{$program_detail->__get("updated_at")}}</td>
                                <td>
                                    <a href="{{url("/edit-program-detail/{$program_detail->__get("id")}")}}" class="btn btn-outline-warning">Edit</a>

                                </td>
                                <td>
                                    <form action="{{url("/delete-program-detail/{$program_detail->__get("id")}")}}" method="post">
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
