
@extends("layout")
@section('tieude',"Danh Sách Tài Khoản")
@section("content")
            <div class="app-main__inner">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input search" id="search-user" name="search-user" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <h2 class="mb-0 col-lg-9 float-left"></h2>
                                <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                                    <a href="{{url("admin/new-manager")}}" class="btn btn-success btn-sm text-white">Thêm Mới Quản Trị Viên</a>
                                </div>
                            </div>
                            <!-- Light table -->
                            <div class="table-responsive">
                                <table class="table table-striped table-light">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Tài Khoản</th>
                                        <th>Địa Chỉ Email</th>
                                        <td>Quyền Hạn</td>
                                        <th>Chức Năng</th>
                                    </tr>
                                    </thead>
                                    <tbody class="tbody-user">
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
                                                    <a class="btn btn-warning btn-sm text-white">Tạm Khóa</a>
                                                @endif
                                            </td>
                                            <td class="d-flex">
                                                @if($user->__get("role") == 1)
                                                    <a class="btn btn-danger btn-sm text-white" onclick="alert('Không Thể Chỉnh Sửa Tài Khoản Admin')">Được Bảo Vệ</a>
                                                @else
                                                    <a class="pr-2" href="{{url("admin/view-user/{$user->__get("id")}")}}">
                                                        <button type="button" class="btn btn-info btn-sm">Xem Thông Tin</button>
                                                    </a>
                                                    <a class="pr-2" href="{{url("admin/edit-user/{$user->__get("id")}")}}">
                                                        <button type="button" class="btn btn-primary btn-sm">Sửa Quyền Hạn</button>
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
                                    </tbody>
                                </table>
                                {!! $users->links() !!}
                            </div>
                            <!-- Card footer -->
                        </div>
                    </div>
                </div>
            </div>
            <script src="{{asset("assets/scripts/jquery.js")}}"></script>
            <script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js")}}"></script>
            <script type="text/javascript" src="{{asset("./assets/scripts/main.js")}}"></script>
            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
            <script>
                CKEDITOR.replace( 'editor1', {
                    filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
                } );
            </script>
            <script type="text/javascript">
                $('#search-user').keyup(function(){
                    var value = $(this).val();
                    if (value===""){
                        $.ajax({
                            type: 'get',
                            url: 'searchUser/all',
                            success:function(res){
                                if(value === ""){
                                    $('.tbody-user').html(res);
                                }else{
                                    $('.tbody-user').html(res);
                                }
                            }
                        });
                    }else{
                        $.ajax({
                            type: 'get',
                            url: 'searchUser/'+value,
                            success:function(data){
                                if(value === ""){
                                    $('.tbody-user').html(data);
                                }else{
                                    $('.tbody-user').html(data);
                                }
                            }
                        });
                    }

                });
            </script>
@endsection






