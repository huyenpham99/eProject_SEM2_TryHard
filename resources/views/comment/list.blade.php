@extends("layout")
@section("title", "Comment Manager")
@section("contentHeader", "Comment Manager")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Comment Manager</h2>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">STT
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Comment_User
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Comment Time
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Comment Content
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Blog Name
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Status
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Change Status
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{$comment->__get("id")}}</td>
                                <td>{{$comment->__get("comment_user")}}</td>
                                <td>
                                    {{$comment->__get("comment_date")}}
                                </td>
                                <td>
                                    {{$comment->__get("content")}}
                                </td>
                                <td>
                                    {{$comment->__get("blog_title")}}
                                </td>
                                @if($comment->__get("comment_status")==0)
                                <td>
                                   <a class="btn btn-sm btn-success text-white">Hiện</a>
                                </td>
                                    @elseif($comment->__get("comment_status")==1)
                                    <td>
                                        <a class="btn btn-sm btn-info text-white">Ẩn</a>
                                    </td>
                                @elseif($comment->__get("comment_status")==2)
                                    <td>
                                        <a class="btn btn-sm btn-danger text-white">Block</a>
                                    </td>
                                @endif
                                <td>
                                    <a href="{{url("/admin/edit-comment/{$comment->__get("id")}")}}" class="btn btn-sm btn-primary">Change</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination" style="float: right; padding-right: 100px">
                        {!! $comments->links() !!}
                    </div>


                </div>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
