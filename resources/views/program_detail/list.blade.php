@extends("layout")
@section("title", "ProgramDetailRepository List")
@section("contentHeader", "ProgramDetaiRepository List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Program Detail List</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("admin/new-program-detail")}}" class="btn btn-success"><i class="fas fa-plus"></i></a>
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
                                data-sort="name">Program Detail Description
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Program Detail Content
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"

                                data-sort="name">Program Name
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
                        @foreach($program_detail as $program_detail)
                            <tr>
                                <td>{{$program_detail->__get("id")}}</td>
                                <td>{{$program_detail->__get("program_detail_name")}}</td>
                                <td><img src="{{$program_detail->__get("program_detail_image")}}" style="width: 50px; height: 50px"></td>
                                <td>{{$program_detail->__get("program_detail_desc")}}</td>
                                <td>Content</td>
                                <td>{{$program_detail->Program->__get("program_name")}}</td>
                                <td>{{$program_detail->__get("created_at")}}</td>
                                <td>{{$program_detail->__get("updated_at")}}</td>
                                <td>
                                    <a href="{{url("admin/edit-program-detail/{$program_detail->__get("id")}")}}" class="btn btn-warning" style="width: 75px"><i class="fas fa-pencil-alt"> Edit</i></a>
                                </td>
                                <td>
                                    <form action="{{url("admin/delete-program-detail/{$program_detail->__get("id")}")}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-danger" style="width: 90px"><i class="fas fa-times"> Delete</i> </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{--    {!! $program_detail->links() !!}--}}
@endsection
