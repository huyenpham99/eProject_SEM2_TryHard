@extends("layout")
@section("tieude", "Sửa chương trình")
@section("contentHeader", "Update ProgramRepository")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left"></h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("/admin/update-program/{$program->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{-- // method"POST" dùng để báo route--}}
                    @csrf
                    {{-- // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên Chương Trình</label>
                            <input type="text" value="{{$program->__get("program_name")}}" name="program_name" class="form-control @error("program_name") is-invalid @enderror" placeholder="">
                            @error("program_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div><label for="exampleInputEmail1">Ảnh</label></div>
                            <img src="{{$program->get("program_image")}}" style="width: 70px; height: 70px;"/>
                            <input class="form-control @error("program_image") is-invalid @enderror" type="text" name="" />
                            @error("program_image")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tên Người Dùng</label>
                            <select name="user_id" class="form-control">
                                @foreach($user as $user)
                                    <option value="{{$user->__get("id")}}">{{$user->__get("name")}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Hạng Mục Chương Trình</label>
                            <select name="program_category_id" class="form-control">
                                @foreach($programcategory as $programcategory)
                                    <option value="{{$programcategory->__get("id")}}">{{$programcategory->__get("progam_category_name")}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
{{--hhhhhhh--}}
