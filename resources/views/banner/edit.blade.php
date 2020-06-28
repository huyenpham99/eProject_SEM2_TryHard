@extends("layout")
@section("title", "Update Banner List")
@section("contentHeader", "Update Banner")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Update Banner</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("/admin/update-banner/{$banner->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--            // method"POST" dùng để báo route--}}
                    @csrf
                    {{--            // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Banner Name</label>
                            <input type="text" value="{{$banner->__get("banner_name")}}" name="banner_name" class="form-control @error("banner_name") is-invalid @enderror" placeholder="New banner Name">
                            @error("banner_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div><label for="exampleInputEmail1">banner Image</label></div>
                            <img src="{{$banner->get("banner_image")}}" style="width: 70px; height: 70px;"/>
                            <input class="form-control @error("banner_image") is-invalid @enderror" type="text" name="banner_image" />
                            @error("banner_image")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
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
