@extends("layout")
@section("tieude", "Thêm chi tiết chương trình")
@section("contentHeader", "New ProgramDetailRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>
        <form role="form" action="{{url("/admin/save-program-detail")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label> Tên</label>
                    <input type="text" name="program_detail_name" class="form-control @error("program_detail_name") is-invalid @enderror" placeholder="">
                    @error("program_detail_name")
                    <span class="error invalid-feedback"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Ảnh</label>
                    <input type="text" name="program_detail_image" class="form-control @error("program_detail_image") is-invalid @enderror" placeholder="">
                    @error("program_detail_image")
                    <span class="error invalid-feedback"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Mô Tả</label>
                    <input type="text" name="program_detail_desc" class="form-control @error("program_detail_desc") is-invalid @enderror" placeholder="">
                    @error("program_detail_desc")
                    <span class="error invalid-feedback"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Nội Dung </label>
                    <textarea type="text" name="program_detail_content" id="editor1" class="form-control @error("program_detail_content") is-invalid @enderror" placeholder=""></textarea>
                    @error("program_detail_content")
                    <span class="error invalid-feedback"> {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>ID Chương Trình</label>
                    <select name="program_id" class="form-control">
                        @foreach($program as $program)
                            <option>{{$program->__get("id")}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm Mới</button>
            </div>
        </form>
    </div>
@endsection
