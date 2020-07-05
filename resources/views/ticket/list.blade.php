
@extends("layout")
@section("title", "TicketRepository List")
@section("contentHeader", "TicketRepository List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Ticket List</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("/admin/new-ticket")}}" class="btn btn-sm btn-neutral">Create</a>
                        {{--                        @foreach($categories as $category)--}}
                        {{--                            <a href="{{url("/admin/edit-category/{$category->__get("id")}")}}" class="btn btn-sm btn-neutral">Update</a>--}}
                        {{--                        @endforeach--}}

                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">ID
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Ticket Name
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Ticket Type
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Ticket Price
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Ticket Code
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">User ID
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Created At
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Updated At
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Edit
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Delete
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($ticket as $ticket)
                            <tr>
                                <td>{{$ticket->__get("id")}}</td>
                                <td>{{$ticket->__get("ticket_name")}}</td>
                                <td>{{$ticket->__get("ticket_type")}}</td>
                                <td>{{$ticket->__get("ticket_price")}}</td>
                                <td>{{$ticket->__get("ticket_code")}}</td>
                                <td>{{$ticket->User->__get("name")}}</td>
                                <td>{{$ticket->__get("created_at")}}</td>
                                <td>{{$ticket->__get("updated_at")}}</td>
                                <td>
                                    <a href="{{url("/admin/edit-ticket/{$ticket->__get("id")}")}}" class="btn btn-outline-warning">Edit</a>

                                </td>
                                <td>
                                    <form action="{{url("/admin/delete-ticket/{$ticket->__get("id")}")}}" method="post">
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
