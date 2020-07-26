@extends("layout")
@section("title", "New TicketRepository Listing")
@section("contentHeader", "New TicketRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Tạo vé cho sự kiện</h3>
        </div>
        <form role="form" action="{{url("/admin/save-ticket")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Tên vé</label>
                    <input type="text" name="ticket_name" class="form-control @error("ticket_name")  is-invalid @enderror">
                    @error("ticket_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
{{--                <div class="form-group">--}}
{{--                    <label> Type</label>--}}
{{--                    <input type="text" name="ticket_type" class="form-control @error("ticket_type")  is-invalid @enderror">--}}
{{--                    @error("ticket_type")--}}
{{--                    <span class="error invalid-feedback">  {{$message}}</span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
                <div class="form-group">
                    <label>Giá vé</label>
                    <input type="text" name="ticket_price" class="form-control @error("ticket_price")  is-invalid @enderror">
                    @error("ticket_price")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Mã vé</label>
                    <input type="text" name="ticket_code" class="form-control @error("ticket_code")  is-invalid @enderror">
                    @error("ticket_code")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Người tạo</label>
                    <select name="user_id" class="form-control">
                        @foreach($users as $u)
                            <option value="{{$u->__get("id")}}">{{$u->__get("email")}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Sự kiện</label>
                    <select name="event_id" class="form-control">
                        @foreach($events as $u)
                            <option value="{{$u->__get("id")}}">{{$u->__get("event_name")}}</option>
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

