@extends("frontend.layout")
@section("content")
    <!-- ============== Sample menu banner starts ============== -->
    <section class="banner sample-menu-banner">
        <div class="bannerwrap">
            <figure><img src="images/sample-menu-banner.jpg" alt="Sample menu banner" /></figure>
            <div class="banner-text text-center">
                <h1 class="text-uppercase">your food<br><strong>YOUR delicious</strong></h1>
            </div>
        </div>
    </section>
    <!-- ============== Sample menu banner starts ============== -->

    <main> <!-- main content starts -->
        <!-- ============== Sample menu block starts ============== -->
        <section class="block sample-menu-block">
            <div class="container">
                <div class="text-center top-description wow fadeInUp">
                    <h3 class="text-uppercase text-center">SAMPLE MENUS</h3>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
                </div>

                <!-- == menu listing starts == -->
                <div class="row menu-listing">
                    <div class="col-xs-12 col-sm-3 menu-item wow fadeInUp">
                        <div class="text-center menu-item-wrap">
                            <figure><a href="#"><img class="img-responsive" src="images/menu-img1.jpg" alt="Menu image" /></a></figure>
                            <h4><a href="#">PORRIDGE</a></h4>
                            <span>With Fresh Fruit and Cranberries</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 menu-item wow fadeInUp">
                        <div class="text-center menu-item-wrap">
                            <figure><a href="#"><img class="img-responsive" src="images/menu-img2.jpg" alt="Menu image" /></a></figure>
                            <h4><a href="#">BAKED SALMON</a></h4>
                            <span>With Brokoli and Vegetables</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 menu-item wow fadeInUp">
                        <div class="text-center menu-item-wrap">
                            <figure><a href="#"><img class="img-responsive" src="images/menu-img3.jpg" alt="Menu image" /></a></figure>
                            <h4><a href="#">VEGETABLE SALAD</a></h4>
                            <span>With Cheese Feta</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 menu-item wow fadeInUp">
                        <div class="text-center menu-item-wrap">
                            <figure><a href="#"><img class="img-responsive" src="images/menu-img4.jpg" alt="Menu image" /></a></figure>
                            <h4><a href="#">TOMATOES OMELET</a></h4>
                            <span>With Parsley and Feta Cheese</span>
                        </div>
                    </div>
                </div>
                <!-- == menu listing ends == -->
            </div>
        </section>
        <!-- ============== Sample menu block ends ============== -->

        <!-- ============== select menu block starts ============== -->
        <section class="block select-menu-block">
            <div class="container">
                <h3 class="wow fadeInUp text-center">SELECT PROGRAM</h3>
                <div class="text-center  wow flipInX">
                    <select>
                        <option value="">Accelerated Weight Loss</option>
                        <option value="">Accelerated Weight Gain</option>
                        <option value="">Accelerated Protein Free</option>
                        <option value="">Accelerated Weight Loss</option>
                    </select>
                </div>
            </div>

            <!-- == menu tab part starts == -->
            <div class='food-tab wow fadeInUp'>
                <div class='container'>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#day1" role="tab" data-toggle="tab">Day 01</a></li>
                        <li role="presentation"><a href="#day2" role="tab" data-toggle="tab">Day 02</a></li>
                        <li role="presentation"><a href="#day3" role="tab" data-toggle="tab">Day 03</a></li>
                        <li role="presentation"><a href="#day4" role="tab" data-toggle="tab">Day 04</a></li>
                    </ul>
                </div>
            </div>
            <!-- == menu tab part ends == -->

            <!-- == Tab description starts == -->
            <div class='tab-description'>
                <div class="container">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="day1">
                            <!-- == food listing group starts == -->
                            <div class="food-listing-group">
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food1.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">Breakfast</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Tomatoes Omelet with Parsley and Feta Cheese
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">vegan</a>
                                    </div>
                                </div>
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food2.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">lunch</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Chinese Noodle Bowl Mix Vegetables with Shrimp
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">vegan</a>
                                    </div>
                                </div>
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food3.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">dinner</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Roasted Hot and Spicy Chicken Wings
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">vegan</a>
                                    </div>
                                </div>
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food4.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">snack</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Cheddar Chees Grilled and Bacon Sandwich
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">gluten-free</a>
                                    </div>
                                </div>
                            </div>
                            <!-- == food listing group ends == -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="day2">
                            <!-- == food listing group starts == -->
                            <div class="food-listing-group">
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food2.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">lunch</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Chinese Noodle Bowl Mix Vegetables with Shrimp
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">vegan</a>
                                    </div>
                                </div>
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food3.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">dinner</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Roasted Hot and Spicy Chicken Wings
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">vegan</a>
                                    </div>
                                </div>
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food4.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">snack</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Cheddar Chees Grilled and Bacon Sandwich
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">gluten-free</a>
                                    </div>
                                </div>
                            </div>
                            <!-- == food listing group ends == -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="day3">
                            <!-- == food listing group starts == -->
                            <div class="food-listing-group">
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food1.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">Breakfast</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Tomatoes Omelet with Parsley and Feta Cheese
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">vegan</a>
                                    </div>
                                </div>
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food2.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">lunch</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Chinese Noodle Bowl Mix Vegetables with Shrimp
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">vegan</a>
                                    </div>
                                </div>
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food3.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">dinner</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Roasted Hot and Spicy Chicken Wings
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">vegan</a>
                                    </div>
                                </div>
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food4.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">snack</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Cheddar Chees Grilled and Bacon Sandwich
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">gluten-free</a>
                                    </div>
                                </div>
                            </div>
                            <!-- == food listing group ends == -->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="day4">
                            <!-- == food listing group starts == -->
                            <div class="food-listing-group">
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food2.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">lunch</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Chinese Noodle Bowl Mix Vegetables with Shrimp
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">vegan</a>
                                    </div>
                                </div>
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food3.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">dinner</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Roasted Hot and Spicy Chicken Wings
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">vegan</a>
                                    </div>
                                </div>
                                <div class="food-listing-row wow fadeInLeft">
                                    <div class="food-image">
                                        <a href='#'><figure><img class="img-responsive" src="images/food4.jpg" alt="Food image" /></figure></a>
                                    </div>
                                    <div class="food-type">
                                        <h5><a href="#">snack</a></h5>
                                    </div>
                                    <div class="food-ingredients">
                                        Cheddar Chees Grilled and Bacon Sandwich
                                    </div>
                                    <div class="food-category">
                                        <a href="#" class="btn border-btn-small">organic</a>
                                        <a href="#" class="btn border-btn-small">gluten-free</a>
                                    </div>
                                </div>
                            </div>
                            <!-- == food listing group ends == -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- == Tab description ends == -->

        </section>
        <!-- ============== select menu block starts ============== -->

    </main> <!-- main content ends -->
@endsection
