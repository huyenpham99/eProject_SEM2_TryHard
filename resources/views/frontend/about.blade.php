@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-9 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif; ">Về Chúng Tôi</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumbs">
                            <li><a href="index.html">TRANG CHỦ</a></li>
                            <li>VỀ CHÚNG TÔI</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-10 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Welcome to Healthy Food!</div>
                        <h2 class="text-center section-title mtn-2">Câu chuyện về trang trại tươi sạch</h2>
                        <div class="organik-seperator mb-9 center">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="about-main-img col-lg-6">
                        <img src="frontend/images/about_1.jpg" alt="" />
                    </div>
                    <div class="about-content col-lg-6">
                        <div class="about-content-title">
                            <h4>Trang Trại Gia Đình</h4>
                            <div class="about-content-title-line"></div>
                        </div>
                        <div class="about-content-text">
                            <p>Trang trại của chúng tôi là trang trại Thực phẩm lành mạnh thế hệ thứ hai, Tuấn & Thắng, mơ ước cung cấp nhiều loại thực phẩm lành mạnh và tốt nhất cho sức khỏe, tăng cường sức khỏe trong cộng đồng và mang lại cảm giác khám phá và phiêu lưu vào mua sắm thực phẩm.</p>
                            <p>Ghé thăm trang web của chúng tôi để có danh sách đầy đủ các loại trái cây và rau quả tươi, Thực phẩm lành mạnh mà chúng tôi đang cung cấp.<br></p>
                        </div>
                        <div class="about-carousel" data-auto-play="true" data-desktop="4" data-laptop="4" data-tablet="4" data-mobile="2">
                            <a href="frontend/images/carousel/img_large_1.jpg" data-rel="prettyPhoto[gallery]">
                                <img src="frontend/images/carousel/img_1.jpg" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="frontend/images/carousel/img_large_2.jpg" data-rel="prettyPhoto[gallery]">
                                <img src="frontend/images/carousel/img_2.jpg" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="frontend/images/carousel/img_large_3.jpg" data-rel="prettyPhoto[gallery]">
                                <img src="frontend/images/carousel/img_3.jpg" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="frontend/images/carousel/img_large_4.jpg" data-rel="prettyPhoto[gallery]">
                                <img src="frontend/images/carousel/img_4.jpg" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="frontend/images/carousel/img_large_5.jpg" data-rel="prettyPhoto[gallery]">
                                <img src="frontend/images/carousel/img_5.jpg" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="frontend/images/carousel/img_large_6.jpg" data-rel="prettyPhoto[gallery]">
                                <img src="frontend/images/carousel/img_6.jpg" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bg-light pt-16 pb-6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Vì Sao Nên Chọn Chúng Tôi ?</div>
                        <div class="organik-seperator mb-9 center">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="icon-boxes">
                            <div class="icon-boxes-icon"><i class="ion-android-star-outline"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title"> Ăn uống lành mạnh hơn.</h6>
                                <p>
                                    Có được các loại trái cây và rau quả hàng ngày được đề nghị.
                                </p>
                            </div>
                        </div>
                        <div class="icon-boxes">
                            <div class="icon-boxes-icon"><i class="organik-lemon"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title">Chúng tôi có danh tiếng.</h6>
                                <p>Chúng tôi đã phát triển sản phẩm hữu cơ cho khách hàng từ năm 1976.</p>
                            </div>
                        </div>
                        <div class="icon-boxes">
                            <div class="icon-boxes-icon"><i class="organik-cucumber"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title">Tươi sạch và không thuốc trừ sâu</h6>
                                <p>
                                    Chúng tôi cung cấp các sản phẩm hữu cơ không có thuốc trừ sâu và phát triển bền vững.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="text-center">
                            <img src="frontend/images/about_pic.png" alt="" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="icon-boxes right">
                            <div class="icon-boxes-icon"><i class="organik-broccoli"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title"> Lời Cam kết về chất lượng</h6>
                                <p>không yêu cầu cam kết và cho phép bạn hủy hoặc tạm dừng giao hàng.</p>
                            </div>
                        </div>
                        <div class="icon-boxes right">
                            <div class="icon-boxes-icon"><i class="organik-carrot"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title"> Linh hoạt</h6>
                                <p>Chọn tần suất giao hàng phù hợp nhất với nhu cầu của bạn.</p>
                            </div>
                        </div>
                        <div class="icon-boxes right">
                            <div class="icon-boxes-icon"><i class="organik-tomato"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title">Tùy Chỉnh thích hợp </h6>
                                <p>Tùy chỉnh phân phối tiêu chuẩn của bạn để loại trừ các mục bạn không muốn.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-11 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle"> Trang Trại</div>
                        <h2 class="text-center section-title mtn-2">Về Trang Trại của chúng tôi</h2>
                        <div class="organik-seperator center mb-8">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="team-member">
                            <div class="image">
                                <img src="frontend/images/testimonial/picture_3.jpg" alt="Michael Andrews" />
                            </div>
                            <div class="team-info">
                                <h5 class="name">Michael Andrews</h5>
                                <p class="bio">Sinh ra tại trang trại ở Capay, Michael cho thấy sự thành thạo sớm trong cửa hàng máy móc và chịu trách nhiệm thiết kế các công cụ được sử dụng trong trang trại ngày nay.</p>
                                <ul class="social-list">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="team-member">
                            <div class="image">
                                <img src="frontend/images/testimonial/picture_4.jpg" alt="Kathleen Barsotti" />
                            </div>
                            <div class="team-info">
                                <h5 class="name">Kathleen Barsotti</h5>
                                <p class="bio">Sinh ra ở Belmont, CA, Kathleen theo học tại UC Riverside nơi cô kiếm được bằng B.S. trong nông nghiệp. Cô là chủ sở hữu duy nhất và quản lý trang trại.</p>
                                <ul class="social-list">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="team-member">
                            <div class="image">
                                <img src="frontend/images/testimonial/picture_2.jpg" alt="Mark Ronson" />
                            </div>
                            <div class="team-info">
                                <h5 class="name">Mark Ronson</h5>
                                <p class="bio">Ông cam kết xây dựng một mô hình tài chính mạnh mẽ cho nông dân để kết nối sản xuất trực tiếp với người tiêu dùng bằng cách quản lý chiến lược các chương trình hiện tại của chúng tôi.</p>
                                <ul class="social-list">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-2 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="client-carousel" data-auto-play="true" data-desktop="5" data-laptop="3" data-tablet="3" data-mobile="2">
                            <div class="client-item">
                                <a href="#" target="_blank">
                                    <img src="frontend/images/client/client_1.png" alt="" />
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#" target="_blank">
                                    <img src="frontend/images/client/client_2.png" alt="" />
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#" target="_blank">
                                    <img src="frontend/images/client/client_3.png" alt="" />
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#" target="_blank">
                                    <img src="frontend/images/client/client_4.png" alt="" />
                                </a>
                            </div>
                            <div class="client-item">
                                <a href="#" target="_blank">
                                    <img src="frontend/images/client/client_5.png" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
