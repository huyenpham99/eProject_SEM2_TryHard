@extends("layout")
@section("title", "New TicketRepository Listing")
@section("contentHeader", "New TicketRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Create A New Ticket</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("/admin/save-ticket")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="ticket_name" class="form-control @error("ticket_name")  is-invalid @enderror" placeholder="New Ticket Name">
                    @error("ticket_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Type</label>
                    <input type="text" name="ticket_type" class="form-control @error("ticket_type")  is-invalid @enderror" placeholder="New Ticket Type">
                    @error("ticket_type")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Price</label>
                    <input type="text" name="ticket_price" class="form-control @error("ticket_price")  is-invalid @enderror" placeholder="New Ticket Price">
                    @error("ticket_price")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label> Code</label>
                    <input type="text" name="ticket_code" class="form-control @error("ticket_code")  is-invalid @enderror" placeholder="New Ticket Code">
                    @error("ticket_code")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>User Id</label>
                    <select name="user_id" class="form-control">
                        @foreach($user as $u)
                            <option>{{$u->__get("id")}}</option>
                            {{--                        @php dd($u)@endphp--}}
                        @endforeach
                    </select>
                </div>
            </div>


            <div>

            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection

