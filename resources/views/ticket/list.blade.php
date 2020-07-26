
@extends("layout")
@section("title", "TicketRepository List")
@section("contentHeader", "TicketRepository List")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Danh sách vé</h2>
                    <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                        <a href="{{url("/admin/new-ticket")}}" class="btn btn-success"><i class="fas fa-plus"></i></a>
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
                                data-sort="name">Tên vé
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Giá vé
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">Người tạo
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">
                            </th>
                            <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                data-sort="name">
                            </th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($ticket as $ticket)
                            <tr>
                                <td>{{$ticket->__get("id")}}</td>
                                <td>{{$ticket->__get("ticket_name")}}</td>
                                <td>{{$ticket->__get("ticket_price")}}</td>
                                <td>{{$ticket->User->__get("name")}}</td>
                                <td>
                                    <a href="{{url("/admin/edit-ticket/{$ticket->__get("id")}")}}" class="btn btn-warning"><i class="fas fa-pencil-alt"> Edit</i></a>
                                </td>
                                <td>
                                    <form action="{{url("/admin/delete-ticket/{$ticket->__get("id")}")}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-danger"><i class="fas fa-times"> Delete</i> </button>
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

