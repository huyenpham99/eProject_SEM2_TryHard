<!doctype html>
<html lang="en">
<head>
    <x-frontend.head/>
</head>
<style>
    #table-search tbody{
        height: 5px;
        overflow-y: auto;
        overflow-x: hidden;
        box-sizing: border-box;
    }
</style>
<body>
    <div class="noo-spinner">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <div id="menu-slideout" class="slideout-menu hidden-md-up">
        <div class="mobile-menu">
            <ul id="mobile-menu" class="menu">
                <li class="dropdown">
                    <a href="#">Home</a>
                    <i class="sub-menu-toggle fa fa-angle-down"></i>
                    <ul class="sub-menu">
                        <li class="active"><a href="index.html">Organik Main</a></li>
                        <li><a href="index-fresh.html">Organik Fresh</a></li>
                        <li><a href="index-shop.html">Organik Shop</a></li>
                        <li><a href="index-store.html">Organik Store</a></li>
                        <li><a href="index-farm.html">Organik Farm</a></li>
                        <li><a href="index-house.html">Organik House</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Pages</a>
                    <i class="sub-menu-toggle fa fa-angle-down"></i>
                    <ul class="sub-menu">
                        <li class="dropdown">
                            <a href="#">About Us</a>
                            <i class="sub-menu-toggle fa fa-angle-down"></i>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About us 01</a></li>
                                <li><a href="about-us-2.html">About us 02</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery-freestyle.html">Gallery Freestyle</a></li>
                        <li><a href="gallery-grid.html">Gallery Grid</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>
                <li>
                    <a href="shortcodes.html">Shortcodes</a>
                </li>
                <li class="dropdown">
                    <a href="#">Shop</a>
                    <i class="sub-menu-toggle fa fa-angle-down"></i>
                    <ul class="sub-menu">
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="cart-empty.html">Empty Cart</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Check Out</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop-list.html">Shop List</a></li>
                        <li><a href="shop-detail.html">Single Product</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Blog</a>
                    <i class="sub-menu-toggle fa fa-angle-down"></i>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog List</a></li>
                        <li><a href="blog-classic.html">Blog Classic</a></li>
                        <li><a href="blog-masonry.html">Blog Masonry</a></li>
                        <li><a href="blog-detail.html">Blog Single</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact-us.html">Contact</a>
                </li>
            </ul>

        </div>
    </div>
    <div class="site">
        <x-frontend.header/>

        @yield("content")

        <x-frontend.footer/>
    </div>
    <x-frontend.scripts/>
<script type="text/javascript">
    function searchHome(e) {
        var value =$(e).val();
        $("#head-search").html('<tr>\n' +
            '                                <th>Tên</th>\n' +
            '                                <th>Ảnh mô tả</th>\n' +
            '                                <th>Liên quan</th>\n' +
            '                                <th>' +
            '<select style="background-color: #5fbd74; color: white; border: none; padding: 0" onchange="selectSearch(this)" name="select-search">\n' +
            '                <option value="product">Product</option>\n' +
            '                <option value="blog">Blog</option>\n' +
            '            </select></th>\n' +
            '                                <th></th>\n' +
            '                            </tr>');
        $.ajax({
            url: '/search',
            method:"get",
            data:{
                "search": value,
            },
            success: function (res){
                var tong = res.count + res.countBlog;
                if(value===""){
                    $("#count").html('<p id="count">Tìm được: 0 sản phẩm</p><p id="count">Tìm được: 0 blog</p>');
                    $('#tbody').html("");
                }else{
                    $("#count").html('<p id="count">Tìm được: '+tong+' kết quả</p>');
                    $('#tbody').html(res.response);
                    $('#tbody2').html(res.blog);
                }
            }
        });
    }
    $(".top-search-input").bind("click",function (){
        $(".table__search").css('display', 'block' );
    });
    function selectSearch(e) {
        var selected = $(e).find(":selected").text();
        var value = $(".top-search-input").val();
        console.log(value)
        $.ajax({
            url: '/searchselected',
            method:"get",
            data:{
                "search": selected,
                "value": value,
            },
            success: function (res){
                if(value===""){
                    $("#count").html('<p id="count">Tìm được: 0 sản phẩm</p><p id="count">Tìm được: 0 blog</p>');
                    $('#tbody').html("");
                }else{
                    $("#count").html('<p id="count">Tìm được: '+res.count+' kết quả</p>');
                    $('#tbody').html(res.response);
                    // $('#tbody2').html(res.blog);
                }
            }
        });
    }
</script>
</body>
</html>
