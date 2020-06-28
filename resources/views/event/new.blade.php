@extends("layout")
@section("title", "New EventRepository Listing")
@section("contentHeader", "New EventRepository")
@section("content")
    <div class="card card-primary mt-4">
        <div class="card-header">
            <h3 class="card-title">Create A New Event</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("/save-event")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Event Name</label>
                    <input type="text" name="event_name" class="form-control @error("event_name")  is-invalid @enderror" placeholder="New Event">
                    @error("event_name")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Event Date Start</label>
                    <input type="text" name="event_date_start" class="form-control @error("event_date_start")  is-invalid @enderror" placeholder="Event Date Start">
                    @error("event_date_start")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Event Date End</label>
                    <input type="text" name="event_date_end" class="form-control @error("event_date_end")  is-invalid @enderror" placeholder="Event Date End">
                    @error("event_date_end")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Event People Count</label>
                    <input type="text" name="event_people_count" class="form-control @error("event_people_count")  is-invalid @enderror" placeholder="New Event">
                    @error("event_people_count")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Event Address</label>
                    <textarea type="text" name="event_address" class="form-control @error("event_address")  is-invalid @enderror" placeholder="New Event"></textarea>
                    @error("event_address")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Event Content</label>
                    <textarea name="event_content" id="editor1" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Event Desciption</label>
                    <input type="text" name="event_desc" class="form-control @error("event_desc")  is-invalid @enderror" placeholder="New Desc">
                    @error("event_desc")
                    <span class="error invalid-feedback">  {{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>User</label>
                    <select name="user_id" class="form-control">
                        @foreach($user as $user)
                            <option>{{$user->__get("id")}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Banner</label>
                    <select name="banner_id" class="form-control">
                        @foreach($banner as $banner)
                            <option>{{$banner->__get("id")}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
