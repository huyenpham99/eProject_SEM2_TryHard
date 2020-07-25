@extends("layout")
@section("title", "Create Banner List")
@section("contentHeader", "New Banner")
@section("content")
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <h2 class="mb-0 col-lg-9 float-left">Tạo Banner Mới</h2>
                </div>
                <form role="form" action="{{url("/admin/save-banner")}}" method="post" enctype="multipart/form-data">
                    @method("POST")
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tên Banner</label>
                            <input required type="text" name="banner_name" class="form-control @error("banner_name") is-invalid @enderror">
                            @error("banner_name")
                            <span class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ảnh</label>
                            <input required type="text" name="banner_image" class="form-control @error("banner_image") is-invalid @enderror">
                        </div>
                        <div class="form-group">
                            <label>Ảnh Thứ 2</label>
                            <input required type="text" name="banner_image2" class="form-control @error("banner_image2") is-invalid @enderror">
                        </div>
                        <div class="form-check">
                            <p class="col-2">Trạng Thái</p>
                            <div class="row">
                                <div class="col-1">
                                    <input class="form-check-input @error("status") is-invalid @enderror" id="status1" value="1" type="radio" name="status" />
                                    <label class="form-check-label" for="status1">
                                        Hiện
                                    </label>
                                </div>
                                <div class="col-1">
                                    <input class="form-check-input @error("status") is-invalid @enderror" id="status2" value="0" type="radio" name="status" />
                                    <label class="form-check-label" for="status2">
                                        Ẩn
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Thứ tự</label>
                            <select class="form-control" name="thu_tu" id="thu_tu">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">Chờ</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tạo</button>
                    </div>
                </form>
                <!-- Card footer -->
            </div>
        </div>
    </div>
@endsection
