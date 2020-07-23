@extends("layout")
@section("title", "ProgramRepository List")
@section("contentHeader", "ProgramRepository List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Program List</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("/admin/new-program")}}"  class="btn btn-success"><i class="fas fa-plus"></i></a>
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
                                data-sort="name">Program Name
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Program Image
                            </th>
{{--                            hello--}}
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">User Name
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Program Category Name
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
                        @foreach($program as $program)
                            <tr>
                                <td>{{$program->__get("id")}}</td>
                                <td>{{$program->__get("program_name")}}</td>
                                <td><img src="{{$program->__get("program_image")}}" style="width: 50px; height: 50px"></td>
                                <td>{{$program->User->__get("name")}}</td>
                                <td>{{$program->ProgramCategory->__get("progam_category_name")}}</td>
                                <td>
                                    <a href="{{url("/admin/edit-program/{$program->__get("id")}")}}" class="btn btn-warning"><i class="fas fa-pencil-alt"> Edit</i></a>

                                </td>
                                <td>
                                    <form action="{{url("/admin/delete-program/{$program->__get("id")}")}}" method="post">
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
    {{--    {!! $categories->links() !!}--}}
@endsection
