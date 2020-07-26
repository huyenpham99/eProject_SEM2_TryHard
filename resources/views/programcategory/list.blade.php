@extends("layout")
@section("tieude", "Danh sách danh mục")
@section("contentHeader", "ProgramCategoryRepository List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left"></h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("admin/new-programcategory")}}" class="btn btn-success"><i class="fas fa-plus"></i></a>
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
                                data-sort="name">Tên danh mục
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Ảnh danh mục
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
                        @foreach($programcategory as $programcategory)
                            <tr>
                                <td>{{$programcategory->__get("id")}}</td>
                                <td>{{$programcategory->__get("progam_category_name")}}</td>
                                <td><img src="{{$programcategory->__get("program_category_image")}}" style="width: 50px; height: 50px"></td>
                                <td>
                                    <a href="{{url("admin/edit-programcategory/{$programcategory->__get("id")}")}}" class="btn btn-warning"><i class="fas fa-pencil-alt"> Sửa</i></a>

                                </td>
                                <td>
                                    <form action="{{url("admin/delete-programcategory/{$programcategory->__get("id")}")}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-danger"><i class="fas fa-times"> Xóa</i> </button>
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
    {{-- {!! $categories->links() !!}--}}
@endsection
