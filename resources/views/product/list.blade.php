@include('ckfinder::setup')
    <!doctype html>
<html lang="en">
<html ... xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <x-head/>
    <meta property="fb:app_id" content="{618524112104934}"/>
    <script src="{{asset("assets/scripts/jquery.js")}}"></script>
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <x-header/>
    <x-theme-ui-setting/>
    <div class="app-main">
        <x-aside/>
        <div class="app-main__outer">
            <div class="app-main__inner">
                <x-title/>

                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" id="search" name="search" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header border-0">
                                <h2 class="mb-0 col-lg-9 float-left">Product List</h2>
                                <div class="mb-0 col-lg-3 float-right d-flex justify-content-end">
                                    <a href="{{url("admin/new-product")}}" class="btn btn-sm btn-neutral">Create</a>
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
                                            data-sort="name">Product Name
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Product Image
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Product Image1
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Product Image2
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Product Description
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Price
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Quantity
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Category
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Created At
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Updated At
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Edit
                                        </th>
                                        <th scope="col" style="font-size: 14px; text-transform: capitalize!important;" class="sort"
                                            data-sort="name">Delete
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="tbody-product">
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->__get("id")}}</td>
                                            <td>{{$product->__get("product_name")}}</td>
                                            <td><img src="{{$product->__get("product_image")}}" style="width: 50px; height: 50px"></td>
                                            <td><img src="{{$product->__get("product_image1")}}" style="width: 50px; height: 50px"></td>
                                            <td><img src="{{$product->__get("product_image2")}}" style="width: 50px; height: 50px"></td>
                                            {{--                                <td><img src="{{$product->__get("product_image3")}}" style="width: 50px; height: 50px"></td>--}}
                                            {{--                                <td><img src="{{$product->__get("product_image4")}}" style="width: 50px; height: 50px"></td>--}}
                                            <td>{{$product->__get("product_desc")}}</td>
                                            <td>{{$product->__get("product_price")}}</td>
                                            <td>{{$product->__get("qty")}}</td>
                                            <td>{{$product->__get("category_id")}}</td>
                                            <td>{{$product->__get("created_at")}}</td>
                                            <td>{{$product->__get("updated_at")}}</td>
                                            <td>
                                                <a href="{{url("admin/edit-product/{$product->__get("id")}")}}" class="btn btn-outline-dark">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{url("admin/delete-product/{$product->__get("id")}")}}" method="post">
                                                    @method("DELETE")
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('chac khong?');" class="btn btn-outline-dark">Delete</button>
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

                {!! $products->links() !!}
            </div>
        </div>
    </div>
    <x-footer/>
</div>
</body>
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js")}}"></script>
<script type="text/javascript" src="{{asset("./assets/scripts/main.js")}}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
    } );
</script>
</html>

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



