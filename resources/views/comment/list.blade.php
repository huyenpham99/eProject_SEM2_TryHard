@extends("layout")
@section("tieude","Quản Lý Bình Luận")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr class="text-center">
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">STT
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Người Bình Luận
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Thời Gian Bình Luận
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Nội Dung Bình luận
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Bài Viết
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Trạng Thái
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Chức Năng
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($comments as $comment)
                            <tr class="text-center">
                                <td>{{$comment->__get("id")}}</td>
                                <td>{{$comment->__get("comment_user")}}</td>
                                <td>
                                    {{$comment->__get("comment_date")}}
                                </td>
                                <td>
                                    {{$comment->__get("content")}}
                                </td>
                                <td>
                                    {{$comment->__get("blog_id")}}
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
                                    <a href="{{url("/admin/edit-comment/{$comment->__get("id")}")}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> </a>
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
