@extends("layout")
@section("title", "Create Manager")
@section("contentHeader", "New Manager")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Create New Manager</h2>
                </div>
                <form role="form" action="{{url("/save-manager")}}" method="post" enctype="multipart/form-data">
                    @method("POST")
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" autocomplete="new-password" required/>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" autocomplete="new-password"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Role</label>
                            <select name="role" class="form-control" id="exampleFormControlSelect1">
                                <option value="2">Quản trị bài viết</option>
                                <option value="3">Quản trị người dùng</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
