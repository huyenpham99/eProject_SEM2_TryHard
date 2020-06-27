@extends("layout")
@section("title", "BlogRepository List")
@section("contentHeader", "BlogRepository List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left text-capitalize">Blog List</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("/new-blog")}}" class="btn btn-sm btn-neutral">Create</a>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive table-borderless table-hover table-striped">
                    <table class="mb-0 table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Blog_Title</th>
                            <th>Blog_Desc</th>
                            <th>Blog_Content</th>
                            <th>View_Count</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        //--}}
                        @foreach($blogs as $blog)
                        <tr>
                            <th scope="row">{{$blog->__get("id")}}</th>
                            <td>{{$blog->__get("blog_title")}}</td>
                            <td>{{$blog->__get("blog_desc")}}</td>
                            <td>@php
                                    $doc = new DOMDocument();
                                    $doc->loadHTML($blog->__get("blog_content"));
                                    echo $doc->saveHTML();
                                @endphp</td>
                            <td>{{$blog->__get("view_count")}}</td>
                            <td> <a href="{{url("/edit-blog/{$blog->__get("id")}")}}" class="btn btn-outline-warning">Edit</a></td>
                            <td>
                                <form action="{{url("/delete-blog/{$blog->__get("id")}")}}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-outline-dark">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
            </div>
        </div>
    </div>
    {{--    {!! $categories->links() !!}--}}
@endsection
