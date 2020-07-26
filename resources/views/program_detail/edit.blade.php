@extends("layout")
@section("title", "Update Program Detail List")
@section("contentHeader", "Update Program Detail")
@section("title", "Update ProgramDetailRepository List")
@section("contentHeader", "Update ProgramDetailRepository")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Sửa Chi Tiết Chương Trình</h2>
                </div>
                <form role="form" action="{{url("admin/update-program-detail/{$program_detail->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" value="{{$program_detail->__get("program_detail_name")}}" name="program_detail_name" class="form-control @error("program_detail_name") is-invalid @enderror" placeholder="">
                            @error("program_detail_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div><label for="exampleInputEmail1">Ảnh</label></div>
                            <img src="{{$program_detail->get("program_detail_image")}}" style="width: 70px; height: 70px;"/>
                            <input class="form-control @error("program_detail_image") is-invalid @enderror" type="text" name="" />
                            @error("program_detail_image")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mô Tả</label>
                            <input type="text" value="{{$program_detail->__get("program_detail_desc")}}" name="program_detail_desc" class="form-control @error("program_detail_desc") is-invalid @enderror" placeholder="">
                            @error("program_detail_desc")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nội Dung</label>
                            <textarea type="text" value="{{$program_detail->__get("program_detail_content")}}" name="program_detail_content" id="editor1" class="form-control @error("program_detail_content") is-invalid @enderror" placeholder=" "></textarea>
                            @error("program_detail_content")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <label>Chương trình</label>
                        <select name="program_id" class="form-control">
                            @foreach($program as $program)
                                <option value="{{$program->__get("id")}}">{{$program->__get("program_name")}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
