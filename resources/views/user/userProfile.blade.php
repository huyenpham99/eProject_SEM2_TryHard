<!doctype html>
<html lang="en">
<head>
    <x-frontend.head/>
</head>
<body>
    <x-frontend.header/>

   <section>
       <div class="container">
           <nav>
               <div class="nav nav-tabs" id="nav-tab" role="tablist">
                   <h5 class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profile</h5>
                   <h5 class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Order</h5>
                   <h5 class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Blog</h5>
               </div>
           </nav>
           <div class="tab-content" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                   <form action="{{url("update-user/{$currentUser->__get("id")}")}}" method="post" enctype="multipart/form-data">
                       @method("PUT")
                       {{--            // method"POST" dùng để báo route--}}
                       @csrf
                       <div class="pl-lg-4">
                           <div class="row">
                               <div class="col-lg-6">
                                   <div class="form-group">
                                       <label>User Name</label>
                                       <input type="text" value="{{$currentUser->__get("name")}}" name="name" class="form-control @error("name") is-invalid @enderror">
                                       @error("name")
                                       <span class="error invalid-feedback">{{$message}}</span>
                                       @enderror
                                   </div>
                               </div>
                               <div class="col-lg-6">
                                   <div class="form-group">
                                       <label>User Image                                     <img style="position:absolute; top: -113px;right: -16px; width: 150px;height: 150px;"src="{{\Illuminate\Support\Facades\Auth::user()->__get("image")}}" alt="">
                                       </label>

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
                                   <input type="password" value="{{$currentUser->__get("password")}}" name="password" class="form-control @error("password") is-invalid @enderror">
                                   @error("password")
                                   <span class="error invalid-feedback">{{$message}}</span>
                                   @enderror
                               </div>
                           </div>
                       </div>
                       <hr class="my-4" />
                       <!-- Address -->
                       <h6 class="heading-small text-muted mb-4">Contact information</h6>
                       <div class="pl-lg-4">
                           <div class="row">
                               <div class="col-md-12">

                                   <div class="form-group">
                                       <label>User Email</label>
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
                                       <label>User Address</label>
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
                                       <label>User Telephone</label>
                                       <input type="text" value="{{$currentUser->__get("telephone")}}" name="telephone" class="form-control @error("telephone") is-invalid @enderror">
                                       @error("telephone")
                                       <span class="error invalid-feedback">{{$message}}</span>
                                       @enderror
                                   </div>
                               </div>
                           </div>
                       </div>
                       <hr class="my-4" />
                       <!-- Description -->
                       <button style="width: 80px" type="submit" class="btn btn-primary btn-lg btn-block btn-sm">Change</button>
                   </form>

               </div>
               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                   <div class="table-responsive">
                       <table class="table align-items-center table-flush">
                           <thead class="thead-light">
                           <tr>
                               <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                   data-sort="name">Đơn hàng số
                               </th>
                               <th>Tên đơn hàng</th>
                               <th>Trạng thái đơn hàng</th>

                           </tr>
                           </thead>
                           <tbody class="list">
                           @foreach($orders as $order)
                               <tr>
                                   <td>Số: {{$order->order_id}}</td>
                                   <td>{{$order->product_name}}</td>
                                   @if($order->status == 1)
                                       <td><a style="color: white" class="btn btn-danger">Chờ xác nhận</a></td>
                                   @elseif($order->status == 2) <td><a style="color: white" class="btn btn-primary">Đang giao hàng</a></td>
                                   @elseif($order->status == 3) <td><a style="color: white" class="btn btn-success">Đã hoàn thành</a></td>
                                   @elseif($order->status == 4) <td><a style="color: white" class="btn btn-dark">Đã hủy đơn</a></td>
                                   @endif

                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>
               </div>
               <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

               </div>
           </div>




       </div>
   </section>

    <x-frontend.footer/>
<x-frontend.scripts/>
</body>
</html>






