@extends("layout")
@section("tieude", "Update Ticket")
@section("contentHeader", "Update TicketRepository")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left"></h2>
                </div>
                <!-- Light table -->
                <form role="form" action="{{url("/admin/update-ticket/{$ticket->__get("id")}")}}" method="post" enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên Vé</label>
                            <input type="text" value="{{$ticket->__get("ticket_name")}}" name="ticket_name" class="form-control @error("ticket_name") is-invalid @enderror" placeholder="">
                            @error("ticket_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Loại Vé</label>
                            <input type="text" value="{{$ticket->__get("ticket_type")}}" name="ticket_type" class="form-control @error("ticket_type") is-invalid @enderror" placeholder="">
                            @error("ticket_type")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Giá Vé</label>
                            <input type="text" value="{{$ticket->__get("ticket_price")}}" name="ticket_price" class="form-control @error("ticket_price") is-invalid @enderror" placeholder="">
                            @error("ticket_price")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ticket Code</label>
                            <input type="text" value="{{$ticket->__get("ticket_code")}}" name="ticket_code" class="form-control @error("ticket_code") is-invalid @enderror" placeholder="">
                            @error("ticket_code")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>User Id</label>
                            <select name="user_id" class="form-control">
                                @foreach($user as $user)
                                    <option >{{$user->__get("id")}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
{{--hhhhhhh--}}
