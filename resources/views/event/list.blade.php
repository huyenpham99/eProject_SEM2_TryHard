@extends("layout")
@section("title", "EventRepository List")
@section("contentHeader", "EventRepository List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left text-capitalize">Event List</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("/admin/new-event")}}" class="btn btn-sm btn-neutral">Create</a>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive table-borderless table-hover table-striped">
                    <table class="mb-0 table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Event Name</th>
                            <th>Event Date Start</th>
                            <th>Event Date End</th>
                            <th>Event People Count</th>
                            <th>Event Address</th>
                            <th>Event Content</th>
                            <th>Event Desciption</th>
                            <th>User</th>
                            <th>Banner</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--                        //--}}
                        @foreach($event as $event)
                            <tr>
                                <th scope="row">{{$event->__get("id")}}</th>
                                <td>{{$event->__get("event_name")}}</td>
                                <td>{{$event->__get("event_date_start")}}</td>
                                <td>{{$event->__get("event_date_end")}}</td>
                                <td>{{$event->__get("event_people_count")}}</td>
                                <td>{{$event->__get("event_address")}}</td>
                                <td>{{$event->__get("event_content")}}</td>
                                <td>{{$event->__get("event_desc")}}</td>
                                <td>{{$event->__get("user_id")}}</td>
                                <td>{{$event->__get("banner_id")}}</td>
                                <td>@php
                                        $doc = new DOMDocument();
                                        $doc->loadHTML($event->__get("event_content"));
                                        echo $doc->saveHTML();
                                    @endphp</td>
                                <td> <a href="{{url("/admin/edit-event/{$event->__get("id")}")}}" class="btn btn-outline-warning">Edit</a></td>
                                <td>
                                    <form action="{{url("/admin/delete-event/{$event->__get("id")}")}}" method="post">
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
