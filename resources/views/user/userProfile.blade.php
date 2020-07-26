<!doctype html>
<html lang="en">
<head>
    <x-frontend.head/>
</head>
<body>
    <x-frontend.header/>

   <section style="background-color: #f5f5f5;">
       @if(session()->has('message'))
           <div class="alert alert-success">
               {{ session()->get('message') }}
           </div>
       @endif
       <div class="container">
           <div class="row">
              <div style="position: relative;margin-top: 20px" class="col-12">
                  <div style="width: 50%" class="col-6">
                      <h3 class="mb-3">Thông Tin Cá Nhân</h3>
                      <form action="{{url("update-user/{$currentUser->__get("id")}")}}" method="post" enctype="multipart/form-data">
                          @method("PUT")
                          {{--            // method"POST" dùng để báo route--}}
                          @csrf
                          <div class="pl-lg-4">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label><b>Tên Người Dùng</b></label>
                                          <input type="text" value="{{$currentUser->__get("name")}}" name="name" class="form-control @error("name") is-invalid @enderror" style="height: 35px">
                                          @error("name")
                                          <span class="error invalid-feedback">{{$message}}</span>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form-group">
{{--                                          <img style="position:absolute; top: -113px;right: -16px; width: 150px;height: 150px;"src="{{\Illuminate\Support\Facades\Auth::user()->__get("image")}}" alt="">--}}
                                          <label><b>Ảnh Người dùng</b></label>
                                          <input type="file" name="image" class="form-control"/>
                                      </div>
                                  </div>
                                  <div class="col-lg-6" style="display: none">
                                      <div class="form-group">
                                          <label>User Role</label>
                                          <input type="text" value="{{$currentUser->__get("role")}}" name="role" class="form-control @error("role") is-invalid @enderror">
                                          @error("role")
                                          <span class="error invalid-feedback">{{$message}}</span>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-lg-6" style="display: none">
                                      <label>User Password</label>
                                      <input type="password" value="{{$currentUser->__get("password")}}" name="password" class="form-control @error("password") is-invalid @enderror" >
                                      @error("password")
                                      <span class="error invalid-feedback">{{$message}}</span>
                                      @enderror
                                  </div>
                              </div>
                          </div>
                          <hr class="my-4" style="border-top: 1px solid #868585;" />
                          <!-- Address -->
                          <h6 class="heading-small text-muted mb-4">Thông tin liên lạc</h6>
                          <div class="pl-lg-4">
                              <div class="row">
                                  <div class="col-md-12">

                                      <div class="form-group">
                                          <label><b>Email Người Dùng</b></label>
                                          <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->__get("email")}}" name="email" class="form-control @error("email") is-invalid @enderror">
                                          @error("email")
                                          <span class="error invalid-feedback">{{$message}}</span>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label><b>Điạ chỉ người dùng</label>
                                          <input type="text" value="{{$currentUser->__get("address")}}" name="address" class="form-control @error("address") is-invalid @enderror">
                                          @error("address")
                                          <span class="error invalid-feedback">{{$message}}</span>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label><b>Số Điện Thoại</b></label>
                                          <input type="text" value="{{$currentUser->__get("telephone")}}" name="telephone" class="form-control @error("telephone") is-invalid @enderror">
                                          @error("telephone")
                                          <span class="error invalid-feedback">{{$message}}</span>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <hr class="my-4" style="border-top: 1px solid #868585;" />
                          <!-- Description -->
                          <button style="width: 100px;margin-left: 40%;padding: 7px;margin-bottom: 20px;font-size: 14px;"
                                  type="submit" class="btn btn-success btn-lg btn-block btn-sm">Gửi
                          </button>
                      </form>
                  </div>
                  <div style="position:absolute;right: 0; top: 0px; width: 47%;" class="col-6">
                      <h3 class="mb-3">Đơn Hàng</h3>
                      <div class="table-responsive">
                          <table class="table align-items-center table-flush">
                              <thead class="thead-light">
                              <tr>
                                  <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                      data-sort="name">Đơn hàng số
                                  </th>
                                  <th>Tên đơn hàng</th>
                                  <th>Trạng thái đơn hàng</th>
                                  <th>Hủy đơn hàng</th>

                              </tr>
                              </thead>
                              <tbody class="list">
                              @foreach($orders as $order)
                                  @if($order->status == 4)
                                      <tr>
                                          <td>Số: {{$order->order_id}}</td>
                                          <td>{{$order->product_name}}</td>
                                          <td><a style="color: white" class="btn btn-danger">Đã hủy đơn</a></td>
                                          <td><button class="btn btn-primary" type="submit">Đặt lại đơn hàng này</button></td>
                                      </tr>
                                      @else
                                      <tr>
                                          <td>Số: {{$order->order_id}}</td>
                                          <td>{{$order->product_name}}</td>
                                          @if($order->status == 1)
                                              <td><a style="color: white" class="btn btn-danger">Chờ Thanh Toán</a></td>
                                          @elseif($order->status == 2) <td><a style="color: white" class="btn btn-primary">Đang Vận Chuyển</a></td>
                                          @elseif($order->status == 3) <td><a style="color: white" class="btn btn-success">Đã hoàn thành</a></td>
                                          @elseif($order->status == 4) <td><a style="color: white" class="btn btn-dark">Đã hủy đơn</a></td>
                                          @endif
                                          <td>
<!--                                              --><?php //echo "<pre>"; var_dump($order->order_id); ?>
                                              <form action="{{url("cancel-order/{$order->order_id}")}}" method="post">
                                                  @method("post")
                                                  @csrf
                                              <button class="btn btn-primary" type="submit">Hủy đơn hàng</button>
                                              </form>
                                          </td>
                                      </tr>
                                      @endif
                              @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
           </div>
       </div>
   </section>

    <x-frontend.footer/>
<x-frontend.scripts/>
</body>
</html>


<script>
    $('#myTab a').on('click', function (e) {
        e.preventDefault();
        $(this).tab('show')
    })
</script>



