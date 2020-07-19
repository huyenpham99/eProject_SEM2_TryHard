@extends("layout")
@section("title", "New ProgramRepository Listing")
@section("contentHeader", "New ProgramRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Create A New Program</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("/admin/save-program")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Program Name</label>
                    <input type="text" name="program_name" class="form-control @error("program_name")  is-invalid @enderror" placeholder="New Program">
                    @error("program_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Image</label>
                    <input type="text" name="program_image" class="form-control @error("program_image")  is-invalid @enderror" placeholder="Link Image">
                    @error("program_image")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>User</label>
                    <select name="user_id" class="form-control">
                    @foreach($user as $u)
                            <option>{{$u->__get("id")}}</option>
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

