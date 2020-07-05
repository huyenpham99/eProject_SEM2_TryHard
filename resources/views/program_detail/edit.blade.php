@extends("layout")
<<<<<<< HEAD
@section("title", "Update Program Detail List")
@section("contentHeader", "Update Program Detail")
=======
@section("title", "Update ProgramDetailRepository List")
@section("contentHeader", "Update ProgramDetailRepository")
>>>>>>> 9e6ffa4fc73c5567294754808c53d90023ee3f21
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Update Program Detail</h2>
                </div>
                <!-- Light table -->
<<<<<<< HEAD
                <form role="form" action="{{url("admin/update-program-detail/{$program_detail->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--            // method"POST" dùng để báo route--}}
                    @csrf
                    {{--            // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
=======
                <form role="form" action="{{url("/update-program-detail/{$program_detail->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--                    // method"POST" dùng để báo route--}}
                    @csrf
                    {{--                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
>>>>>>> 9e6ffa4fc73c5567294754808c53d90023ee3f21
                    <div class="card-body">
                        <div class="form-group">
                            <label>Program Detail Name</label>
                            <input type="text" value="{{$program_detail->__get("program_detail_name")}}" name="program_detail_name" class="form-control @error("program_detail_name") is-invalid @enderror" placeholder="New Program Detail Name">
                            @error("program_detail_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <div><label for="exampleInputEmail1">Product Image</label></div>
                            <img src="{{$program_detail->get("program_detail_image")}}" style="width: 70px; height: 70px;"/>
                            <input class="form-control @error("program_detail_image") is-invalid @enderror" type="text" name="program_detail_image" />
=======
                            <label>Program Detail Image</label>
                            <input type="text" value="{{$program_detail->__get("program_detail_imgae")}}" name="program_detail_imgae" class="form-control @error("program_detail_image") is-invalid @enderror" placeholder="New Program Detail Image">
>>>>>>> 9e6ffa4fc73c5567294754808c53d90023ee3f21
                            @error("program_detail_image")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
<<<<<<< HEAD
                        {{--                        <div class="form-group">--}}
                        {{--                            <div><label for="exampleInputEmail1">Product Image1</label></div>--}}
                        {{--                            <img src="{{$product->get("product_image1")}}" style="width: 70px; height: 70px;"/>--}}
                        {{--                            <input class="form-control @error("product_image1") is-invalid @enderror" type="text" name="product_image1" />--}}
                        {{--                            @error("product_image1")--}}
                        {{--                            <span class="error invalid-feedback">{{$message}}</span>--}}
                        {{--                            @enderror--}}
                        {{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <div><label for="exampleInputEmail1">Product Image2</label></div>--}}
                        {{--                            <img src="{{$product->get("product_image2")}}" style="width: 70px; height: 70px;"/>--}}
                        {{--                            <input class="form-control @error("product_image2") is-invalid @enderror" type="text" name="product_image2" />--}}
                        {{--                            @error("product_image2")--}}
                        {{--                            <span class="error invalid-feedback">{{$message}}</span>--}}
                        {{--                            @enderror--}}
                        {{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <div><label for="exampleInputEmail1">Product Image3</label></div>--}}
                        {{--                            <img src="{{$product->get("product_image3")}}" style="width: 70px; height: 70px;"/>--}}
                        {{--                            <input class="form-control @error("product_image3") is-invalid @enderror" type="text" name="product_image3" />--}}
                        {{--                            @error("product_image3")--}}
                        {{--                            <span class="error invalid-feedback">{{$message}}</span>--}}
                        {{--                            @enderror--}}
                        {{--                        </div>--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <div><label for="exampleInputEmail1">Product Image4</label></div>--}}
                        {{--                            <img src="{{$product->get("product_image4")}}" style="width: 70px; height: 70px;"/>--}}
                        {{--                            <input class="form-control @error("product_image4") is-invalid @enderror" type="text" name="product_image4" />--}}
                        {{--                            @error("product_image4")--}}
                        {{--                            <span class="error invalid-feedback">{{$message}}</span>--}}
                        {{--                            @enderror--}}
                        {{--                        </div>--}}

                        <div class="form-group">
                            <label>Program Detail Desc</label>
                            <textarea name="program_detail_desc" value="{{$program_detail->__get("program_detail_desc")}}" class="form-control @error("program_detail_desc") is-invalid @enderror" placeholder="New Program Detail Desc"></textarea>
=======
                        <div class="form-group">
                            <label>Program Detail Desc</label>
                            <input type="text" value="{{$program_detail->__get("program_detail_desc")}}" name="program_detail_desc" class="form-control @error("program_detail_desc") is-invalid @enderror" placeholder="New Program Detail Desc">
>>>>>>> 9e6ffa4fc73c5567294754808c53d90023ee3f21
                            @error("program_detail_desc")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Program Detail Content</label>
<<<<<<< HEAD
                            <input type="text" name="program_detail_content"  value="{{$program_detail->__get("program_detail_content")}}" class="form-control @error("program_detail_content") is-invalid @enderror" placeholder="New Program Detail Content">
=======
                            <input type="text" value="{{$program_detail->__get("program_detail_content")}}" name="program_detail_content" class="form-control @error("program_detail_content") is-invalid @enderror" placeholder="New Program Detail Content ">
>>>>>>> 9e6ffa4fc73c5567294754808c53d90023ee3f21
                            @error("program_detail_content")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <label>Program</label>
                            <select name="program_id" class="form-control">
                                @foreach($program as $program)
                                    <option>{{$program->__get("program_name")}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{--                // biến error để lưu lỗi--}}
=======
                            <label>Program Id</label>
                            <select name="program_id" class="form-control">
                                @foreach($program as $program)
                                    <option >{{$program->__get("id")}}</option>
                                @endforeach
                            </select>
                        </div>
>>>>>>> 9e6ffa4fc73c5567294754808c53d90023ee3f21
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
<<<<<<< HEAD
=======
{{--hhhhhhh--}}
>>>>>>> 9e6ffa4fc73c5567294754808c53d90023ee3f21
