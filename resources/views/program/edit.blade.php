@extends("layout")
@section("title", "Update ProgramRepository List")
@section("contentHeader", "Update ProgramRepository")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Update Program</h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("/update-program/{$program->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    {{--                    // method"POST" dùng để báo route--}}
                    @csrf
                    {{--                    // dùng để tạo mã token nếu thiếu sẽ báo lỗi 419--}}
                    <div class="card-body">
                        <div class="form-group">
                            <label>Program Name</label>
                            <input type="text" value="{{$program->__get("program_name")}}" name="program_name" class="form-control @error("program_name") is-invalid @enderror" placeholder="New Program">
                            @error("program_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>User Id</label>
                            <select name="user_id" class="form-control">
                                @foreach($user as $user)
                                    <option >{{$user->__get("id")}}</option>
                                @endforeach
                            </select>
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
{{--hhhhhhh--}}
