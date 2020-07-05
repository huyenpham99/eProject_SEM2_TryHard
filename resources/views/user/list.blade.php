@extends("layout")
@section("title", "User List")
@section("contentHeader", "User")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">User Listing</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("admin/new-user")}}" class="btn btn-success btn-sm text-white">Create</a>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <td>Account Status</td>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->__get("id")}}</td>
                                <td>{{$user->__get("name")}}</td>
                                <td>
                                    @if($user->__get("role") == 1)
                                        <a class="btn btn-warning btn-sm text-white">Admin</a>
                                    @elseif($user->__get("role") == 0)
                                        <a class="btn btn-success btn-sm text-white">User Account</a>
                                    @elseif($user->__get("role") == 2)
                                        <a class="btn btn-success btn-sm text-white">Blog Manager</a>
                                    @elseif($user->__get("role") == 3)
                                        <a class="btn btn-success btn-sm text-white">Event Manager</a>
                                    @elseif($user->__get("role") == 4)
                                        <a class="btn btn-success btn-sm text-white">Product Manager</a>
                                    @elseif($user->__get("role") == 5)
                                        <a class="btn btn-success btn-sm text-white">Program Manager</a>
                                    @elseif($user->__get("role") == 6)
                                        <a class="btn btn-danger btn-sm text-white">Dead Active</a>
                                    @endif
                                </td>
                                <td class="d-flex">
                                    @if($user->__get("role") == 1)
                                        <a class="btn btn-warning btn-sm text-white" onclick="alert('This user is protected')">Protected User</a>
                                    @else
                                        <a class="pr-2" href="{{url("admin/view-user/{$user->__get("id")}")}}">
                                            <button type="button" class="btn btn-info btn-sm">View Info</button>
                                        </a>
                                        <a class="pr-2" href="{{url("admin/edit-user/{$user->__get("id")}")}}">
                                            <button type="button" class="btn btn-primary btn-sm">Set Access</button>
                                        </a>
{{--                                        <form action="{{url("adminadmin/delete-user/{$user->__get("id")}")}}" method="post">--}}
{{--                                            @method("DELETE")--}}
{{--                                            @csrf--}}
{{--                                            <button type="submit" onclick="return confirm('Are you sure!');"--}}
{{--                                                    class="btn btn-danger btn-sm">Delete--}}
{{--                                            </button>--}}
{{--                                        </form>--}}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $users->links() !!}
                </div>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
