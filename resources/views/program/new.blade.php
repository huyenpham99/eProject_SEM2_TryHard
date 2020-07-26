@extends("layout")
@section("tieude", "Thêm mới chương trình")
@section("contentHeader", "New ProgramRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("/admin/save-program")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Tên Chương Trình</label>
                    <input type="text" name="program_name" class="form-control @error("program_name") is-invalid @enderror" placeholder="">
                    @error("program_name")
                    <span class="error invalid-feedback"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Ảnh</label>
                    <input type="text" name="program_image" class="form-control @error("program_image") is-invalid @enderror" placeholder="">
                    @error("program_image")
                    <span class="error invalid-feedback"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Người Dùng</label>
                    <select name="user_id" class="form-control">
                        @foreach($user as $u)
                            <option>{{$u->__get("id")}}</option>
                            {{-- @php dd($u)@endphp--}}
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Hạng mục chương trình</label>
                    <select name="program_category_id" class="form-control">
                        @foreach($programcategory as $programcategory)
                            <option>{{$programcategory->__get("id")}}</option>
                            {{-- @php dd($u)@endphp--}}
                        @endforeach
                    </select>
                </div>
            </div>

            <div>

            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm Mới</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
