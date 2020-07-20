@extends("layout")
@section("title", "ProgramCategoryRepository List")
@section("contentHeader", "ProgramCategoryRepository List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">ProgramCategory List</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("admin/new-programcategory")}}" class="btn btn-sm btn-neutral">Create</a>
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
                                data-sort="name">ProgramCategory Name
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">ProgramCategory Image
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
                        @foreach($programcategory as $programcategory)
                            <tr>
                                <td>{{$programcategory->__get("id")}}</td>
                                <td>{{$programcategory->__get("progam_category_name")}}</td>
                                <td><img src="{{$programcategory->__get("program_category_image")}}" style="width: 50px; height: 50px"></td>
                                <td>
                                    <a href="{{url("admin/edit-programcategory/{$programcategory->__get("id")}")}}" class="btn btn-outline-warning">Edit</a>

                                </td>
                                <td>
                                    <form action="{{url("admin/delete-programcategory/{$programcategory->__get("id")}")}}" method="post">
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
