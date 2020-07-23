@include('ckfinder::setup')
    <!doctype html>
<html lang="en">
<html ... xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <x-head/>
    <meta property="fb:app_id" content="{618524112104934}"/>
    <script src="{{asset("assets/scripts/jquery.js")}}"></script>
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <x-header/>
    <x-theme-ui-setting/>
    <div class="app-main">
        <x-aside/>
        <div class="app-main__outer">
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
                                <h2 class="mb-0 col-lg-9 float-left">User Listing</h2>
                                <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                                    <a href="{{url("admin/new-manager")}}" class="btn btn-success btn-sm text-white">New Manager</a>
                                </div>
                            </div>
                            <!-- Light table -->
                            <div class="table-responsive">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User Name</th>
                                        <th>User Email</th>
                                        <td>Account Status</td>
                                        <th>Action</th>
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
                                    </tbody>
                                </table>
                                {!! $users->links() !!}
                            </div>
                            <!-- Card footer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <x-footer/>
</div>
</body>
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js")}}"></script>
<script type="text/javascript" src="{{asset("./assets/scripts/main.js")}}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
    } );
</script>
</html>

<script type="text/javascript">
    $('#search-user').keyup(function(){
        var value = $(this).val();
        console.log(value);
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






