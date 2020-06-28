@extends("frontend.layout")
@section("content")
    <!-- ============== Banner starts ============== -->
    <section class="banner banner-image">
        <div class="bannerwrap">
            <figure><img src="images/banner1.jpg" alt="Program Banner" /></figure>
            <div class="banner-text text-center">
                <h1 class="text-uppercase">SELECT A PROGRAM TO FIT<br /><strong>YOUR LIFESTYLE</strong></h1>
            </div>
        </div>
    </section>
    <!-- ============== Baner ends ============== -->

    <main> <!-- main content starts -->
        <!-- ============== Features block starts ============== -->
        <section class="block features-block">
            <div class="container">
                <div class="top-text text-center wow fadeInUp">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.</div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 features-item wow fadeInLeft">
                        <div class="feature-item-wrap text-center">
                            <figure><a href="#"><img class="img-responsive" src="images/weight-loss.svg" alt="Weigt loss icon" /></a></figure>
                            <h5><a href="#">Weight Loss</a></h5>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu.</p>
                            <a href="#" class="btn hvr-wobble-horizontal">learn more</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 features-item wow fadeInUp">
                        <div class="feature-item-wrap text-center">
                            <figure><a href="#"><img class="img-responsive" src="images/low-colestrol-icon.svg" alt="Low Colesterol Icon" /></a></figure>
                            <h5><a href="#">low colesterol</a></h5>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu.</p>
                            <a href="#" class="btn hvr-wobble-horizontal">learn more</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 features-item wow fadeInRight">
                        <div class="feature-item-wrap text-center">
                            <figure><a href="#"><img class="img-responsive" src="images/fitness-icon.svg" alt="Fitness & Performance Icon" /></a></figure>
                            <h5><a href="#">Fitness &amp; Performance</a></h5>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu.</p>
                            <a href="#" class="btn hvr-wobble-horizontal">learn more</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 features-item last-row wow fadeInLeft">
                        <div class="feature-item-wrap text-center">
                            <figure><a href="#"><img class="img-responsive" src="images/vegeterian-icon.svg" alt="Vegeterian Icon" /></a></figure>
                            <h5><a href="#">Vegeterian</a></h5>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu.</p>
                            <a href="#" class="btn hvr-wobble-horizontal">learn more</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 features-item last-row wow fadeInUp">
                        <div class="feature-item-wrap text-center">
                            <figure><a href="#"><img class="img-responsive" src="images/gulten-free-icon.svg" alt="Gluten Free Icon" /></a></figure>
                            <h5><a href="#">Gluten Free</a></h5>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu.</p>
                            <a href="#" class="btn hvr-wobble-horizontal">learn more</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 features-item last-row wow fadeInRight">
                        <div class="feature-item-wrap text-center">
                            <figure><a href="#"><img class="img-responsive" src="images/new-mom-icon.svg" alt="New Mom Icon" /></a></figure>
                            <h5><a href="#">New Mom</a></h5>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu.</p>
                            <a href="#" class="btn hvr-wobble-horizontal">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============== Features block starts ============== -->

        <!-- ============== Body banner starts ============== -->
        <section class="parallax-block wow fadeInUp">
            <div class="parallax-block-text text-right">
                <div class="container">
                    <h2 class="text-capitalize text-lt text-sp">NOT SURE WHICH PROGRAM<br />TO CHOOSE?</h2>
                    <a class="btn border-btn-big hvr-wobble-horizontal text-sp">let us help</a>
                </div>
            </div>
        </section>
        <!-- ============== Body banner ends ============== -->

        <!-- ============== Subscribe block starts ============== -->
        <section class="block subscribe-block text-center">
            <div class="container">
                <div class="subscribe-wrap">
                    <div class="top-text wow fadeInUp">
                        Be the lucky winner to get FREE Madang premium meals for one week. We are also offer you latest deal in your inbox!
                    </div>
                    <div class="subscribe-form wow fadeInDown">
                        <form>
                            <input type="text" placeholder="Enter your e-mail address here">
                            <button class="btn text-uppercase wow flipInX">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============== Subscribe block ends ============== -->
    </main> <!-- main content ends -->
@endsection
