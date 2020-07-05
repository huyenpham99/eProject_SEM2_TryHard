@extends("layout")
@section("title", "New ProgramDetailRepository Listing")
@section("contentHeader", "New ProgramDetailRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Create A New Program Detail</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("/admin/save-program-detail")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label> Name</label>
                    <input type="text" name="program_detail_name" class="form-control @error("program_detail_name")  is-invalid @enderror" placeholder="New Program Detail Name">
                    @error("program_detail_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Image</label>
                    <input type="text" name="program_detail_image" class="form-control @error("program_detail_image")  is-invalid @enderror" placeholder="Link Image">
                    @error("program_detail_image")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Desc</label>
                    <input type="text" name="program_detail_desc" class="form-control @error("program_detail_desc")  is-invalid @enderror" placeholder="New Program Detail Desc">
                    @error("program_detail_desc")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Content</label>
                    <input type="text" name="program_detail_content" class="form-control @error("program_detail_content")  is-invalid @enderror" placeholder="New Program Content">
                    @error("program_detail_content")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Program Id</label>
                    <select name="program_id" class="form-control">
                        @foreach($program as $program)
                            <option>{{$program->__get("id")}}</option>
                            {{--                        @php dd($u)@endphp--}}
                        @endforeach
                    </select>
                </div>
            </div>


            <div>

            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection

