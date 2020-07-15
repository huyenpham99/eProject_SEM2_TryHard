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
                    <h2 class="mb-0 col-lg-9 float-left">Update Program Detail</h2>
                </div>
                <form role="form" action="{{url("admin/update-program-detail/{$program_detail->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                <form role="form" action="{{url("admin/update-program-detail/{$program_detail->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Program Detail Name</label>
                            <input type="text" value="{{$program_detail->__get("program_detail_name")}}" name="program_detail_name" class="form-control @error("program_detail_name") is-invalid @enderror" placeholder="New Program Detail Name">
                            @error("program_detail_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div><label for="exampleInputEmail1">Program Detail Image</label></div>
                            <img src="{{$program_detail->get("program_detail_image")}}" style="width: 70px; height: 70px;"/>
                            <input class="form-control @error("program_detail_image") is-invalid @enderror" type="text" name="program_detail_image" />
                            @error("program_detail_image")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Program Detail Desc</label>
                            <input type="text" value="{{$program_detail->__get("program_detail_desc")}}" name="program_detail_desc" class="form-control @error("program_detail_desc") is-invalid @enderror" placeholder="New Program Detail Desc">
                            @error("program_detail_desc")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Program Detail Content</label>
                            <textarea type="text" value="{{$program_detail->__get("program_detail_content")}}" name="program_detail_content" id="editor1" class="form-control @error("program_detail_content") is-invalid @enderror" placeholder="New Program Detail Content "></textarea>
                            @error("program_detail_content")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                            <label>Program Id</label>
                            <select name="program_id" class="form-control">
                                @foreach($program as $program)
                                    <option >{{$program->__get("id")}}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
        </div>
    </div>
@endsection
