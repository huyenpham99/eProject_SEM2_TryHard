@foreach($users as $user)
    <tr>
        <td>{{$user->__get("id")}}</td>
        <td>{{$user->__get("name")}}</td>
        <td>{{$user->__get("email")}}</td>
        <td>
            @if($user->__get("role") == 1)
                <a class="btn btn-danger btn-sm text-white">Admin</a>
            @elseif($user->__get("role") == 0)
                <a class="btn btn-success btn-sm text-white">Tài Khoản Khách</a>
            @elseif($user->__get("role") == 2)
                <a class="btn btn-success btn-sm text-white">Quản Lý Bài Viết</a>
            @elseif($user->__get("role") == 3)
                <a class="btn btn-success btn-sm text-white">Quản Lý Sự Kiện</a>
            @elseif($user->__get("role") == 4)
                <a class="btn btn-success btn-sm text-white">Quản Lý Sản Phẩm</a>
            @elseif($user->__get("role") == 5)
                <a class="btn btn-success btn-sm text-white">Quản Lý Chương Trình</a>
            @elseif($user->__get("role") == 6)
                <a class="btn btn-danger btn-sm text-white">Tạm khóa</a>
            @endif
        </td>
        <td class="d-flex">
            @if($user->__get("role") == 1)

            @else
                <a class="pr-2" href="{{url("admin/view-user/{$user->__get("id")}")}}">
                    <button type="button" class="btn btn-info btn-sm">Xem thông tin</button>
                </a>
                <a class="pr-2" href="{{url("admin/edit-user/{$user->__get("id")}")}}">
                    <button type="button" class="btn btn-primary btn-sm">Sửa quyền hạn</button>
                </a>

            @endif
        </td>
    </tr>
@endforeach
