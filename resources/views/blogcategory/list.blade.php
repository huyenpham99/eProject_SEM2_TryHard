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
                        <a href="{{url("admin/new-blogcategory")}}" class="btn btn-success">Thêm Danh Mục Blog</a>
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
                                data-sort="name">Tên Danh Mục Blog
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name"> Chức Năng
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($blogcategories as $blogcategory)
                            <tr>
                                <td>{{$blogcategory->__get("id")}}</td>
                                <td>{{$blogcategory->__get("blog_category_name")}}</td>
                                <td>
                                    <div class="box" style="position: absolute; right: 330px">
                                    <a href="{{url("admin/edit-blogcategory/{$blogcategory->__get("id")}")}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                                    <div class="box" style="position: absolute; right: 280px">
                                        <form action="{{url("admin/delete-blogcategory/{$blogcategory->__get("id")}")}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
                                    </form>
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
