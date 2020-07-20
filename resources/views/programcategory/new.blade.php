@extends("layout")
@section("title", "New ProgramCategoryRepository Listing")
@section("contentHeader", "New ProgramCategoryRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Create A New Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("admin/save-programcategory")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>ProgramCategory Name</label>
                    <input type="text" name="progam_category_name" class="form-control @error("progam_category_name")  is-invalid @enderror" placeholder="New Program Category">
                    @error("progam_category_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>ProgramCategory Image</label>
                    <input type="text" name="program_category_image" class="form-control @error("program_category_image") is-invalid @enderror">
                </div>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
