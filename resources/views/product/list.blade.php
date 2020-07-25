@extends("layout")
@section("tieude","Danh Sách Sản Phẩm")
@section("content")
                <div class="row mt-4">
                    <div class="col">
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <h2 class="mb-0 col-lg-9 float-left">
                                    <div class="search-wrapper">
                                        <div class="input-holder">
                                            <input type="text" class="search-input" id="search" name="search" placeholder="Type to search">
                                            <button class="search-icon"><span></span></button>
                                        </div>
                                        <button class="close"></button>
                                    </div>
                                </h2>
                                <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                                    <a href="{{url("admin/new-product")}}" class="btn btn-success">Nhập Hàng</a>
                                </div>
                            </div>
                            <!-- Light table -->
                            <div class="table-responsive">
                                <table class="table table-stripe">
                                    <thead class="thead-light">
                                    <tr class="text-center">
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Mã Số
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Tên Sản Phẩm
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Ảnh Sản Phẩm 1
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Ảnh Sản Phẩm 2
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Ảnh Sản Phẩm 3
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Mô Tả Ngắn
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Giá Tiền
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Số Lượng
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Danh Mục
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Chức Năng
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="list">
                                    @foreach($products as $product)
                                        <tr class="text-center">
                                            <td>{{$product->__get("id")}}</td>
                                            <td>{{$product->__get("product_name")}}</td>
                                            <td><img src="{{$product->__get("product_image")}}" style="width: 50px; height: 50px"></td>
                                            <td><img src="{{$product->__get("product_image1")}}" style="width: 50px; height: 50px"></td>
                                            <td><img src="{{$product->__get("product_image2")}}" style="width: 50px; height: 50px"></td>
                                            <td>{{$product->__get("product_desc")}}</td>
                                            <td>{{$product->__get("product_price")}}</td>
                                            <td>{{$product->__get("qty")}}</td>
                                            <td>{{$product->__get("category_id")}}</td>
                                            <td>
                                                    <div class="box" style="position: absolute; right: 60px">
                                                        <a href="{{url("admin/edit-product/{$product->__get("id")}")}}" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                                                    </div>
                                                    <div class="box" style="position: absolute; right: 10px">
                                                        <form action="{{url("admin/delete-product/{$product->__get("id")}")}}" method="post">
                                                            @method("DELETE")
                                                            @csrf
                                                            <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </div>
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

                {!! $products->links() !!}
                <script src="{{asset("assets/scripts/jquery.js")}}"></script>
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js")}}"></script>
<script type="text/javascript" src="{{asset("./assets/scripts/main.js")}}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
    } );
</script>

<script type="text/javascript">
    $('#search').keyup(function(){
        var value = $(this).val();
        if (value===""){
            $.ajax({
                type: 'get',
                url: 'search/all',
                success:function(data){
                    if(value === ""){
                        $('.tbody-product').html(data);
                    }else{
                        $('.tbody-product').html(data);
                    }
                }
            });
        }else{
            $.ajax({
                type: 'get',
                url: 'search/'+value,
                success:function(data){
                    if(value === ""){
                        $('.tbody-product').html(data);
                    }else{
                        $('.tbody-product').html(data);
                    }
                }
            });
        }

    });
</script>
@endsection



