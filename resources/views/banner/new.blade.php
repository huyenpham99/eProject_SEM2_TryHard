@extends("layout")
@section("title", "Create Banner List")
@section("contentHeader", "New Banner")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Create New Banner</h2>
                </div>
                <form role="form" action="{{url("/save-banner")}}" method="post" enctype="multipart/form-data">
                    @method("POST")
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Banner Name</label>
                            <input type="text" name="banner_name" class="form-control @error("banner_name") is-invalid @enderror" placeholder="New Banner Name">
                            @error("banner_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Banner Image</label>
                            <input type="text" name="banner_image" class="form-control @error("banner_image") is-invalid @enderror">
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
