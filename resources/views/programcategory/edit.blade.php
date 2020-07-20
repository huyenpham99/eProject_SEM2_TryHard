@extends("layout")
@section("title", "Update ProgramCategoryRepository List")
@section("contentHeader", "Update ProgramCategoryRepository")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Update ProgramCategory</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("admin/update-programcategory/{$programcategory->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--                    // method"POST" dùng để báo route--}}
                    @csrf
                    {{--                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>ProgramCategory Name</label>
                            <input type="text" value="{{$programcategory->__get("progam_category_name")}}" name="progam_category_name" class="form-control @error("progam_category_name") is-invalid @enderror" placeholder="New Program Category">
                            @error("progam_category_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div><label for="exampleInputEmail1">Program Category Image</label></div>
                        <img src="{{$programcategory->get("program_category_image")}}" style="width: 70px; height: 70px;"/>
                        <input class="form-control @error("program_category_image") is-invalid @enderror" type="text" name="programcategory_image" />
                        @error("program_category_image")
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
