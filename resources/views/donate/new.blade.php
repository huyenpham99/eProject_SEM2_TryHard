@extends("layout")
@section("tieude","Danh Mục Donate")
@section("content")
    <div class="card card-primary mt-4">
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="{{url("admin/save-donate")}}" method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Tiêu Đề Donate</label>
                    <input type="text" name="donate_title" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Ảnh Bìa Donate</label>
                    <input type="text" name="donate_image" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Mô Tả Ngắn</label>
                    <input type="text" name="donate_desc" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Nội Dung Donate</label>
                        <textarea name="donate_content" id="editor1" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Số Ngày Diễn Ra</label>
                    <input type="text" name="songaydienra" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Số Tiền Mục Tiêu</label>
                    <input type="text" name="goalmoney" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Người tạo</label>
                    <select class="form-control" name="user_id">
                        @foreach($user as $u)
                            <option value="{{$u->__get("id")}}">{{$u->__get("name")}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tạo mới</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
