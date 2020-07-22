@foreach($users as $user)
    <tr>
        <td>{{$user->__get("id")}}</td>
        <td>{{$user->__get("name")}}</td>
        <td>{{$user->__get("email")}}</td>
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
                {{--                                       </form>--}}
            @endif
        </td>
    </tr>
@endforeach
