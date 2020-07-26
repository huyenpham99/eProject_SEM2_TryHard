@extends("layout")
@section("tieude", "Sửa Banner")
@section("contentHeader", "Update Banner")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left"></h2>
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
                            <div><label for="exampleInputEmail1">Banner Image</label></div>
                            <img src="{{$banner->getImage("banner_image")}}" style="width: 70px; height: 70px;"/>
                            <input class="form-control @error("banner_image") is-invalid @enderror" type="text" name="banner_image" />
                            @error("banner_image")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div><label for="exampleInputEmail1">Banner Image 2</label></div>
                            <img src="{{$banner->getImage("banner_image2")}}" style="width: 70px; height: 70px;"/>
                            <input class="form-control @error("banner_image2") is-invalid @enderror" type="text" name="banner_image2" />
                            @error("banner_image2")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-check">
                            <p class="col-2">Status</p>
                            <div class="row">
                                @if($banner->__get("status")==1)
                                    <div class="col-1">
                                        <input required class="form-check-input @error("status") is-invalid @enderror" value="1"  id="status1" type="radio" name="status" checked/>
                                        <label class="form-check-label" for="status1">
                                            Hiện
                                        </label>
                                    </div>
                                    <div class="col-1">
                                        <input required class="form-check-input @error("status") is-invalid @enderror" value="0" id="status2" type="radio" name="status" />
                                        <label class="form-check-label" for="status2">
                                            Ẩn
                                        </label>
                                    </div>
                                    @else
                                    <div class="col-1">
                                        <input required class="form-check-input @error("status") is-invalid @enderror" value="1"  id="status1" type="radio" name="status" />
                                        <label class="form-check-label" for="status1">
                                            Hiện
                                        </label>
                                    </div>
                                    <div class="col-1">
                                        <input required class="form-check-input @error("status") is-invalid @enderror" value="0" id="status2" type="radio" name="status"checked />
                                        <label class="form-check-label" for="status2">
                                            Ẩn
                                        </label>
                                    </div>
                                    @endif
                            </div>
                            @error("status")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div><label for="exampleInputEmail1">Thứ tự</label></div>
                            <input required class="form-control @error("thu_tu") is-invalid @enderror" value="{{$banner->__get("thu_tu")}}" type="text" name="thu_tu" />

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
