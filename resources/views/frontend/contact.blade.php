@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumbs">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-10 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Get in touch</div>
                        <h2 class="text-center section-title mtn-2">HEALTHY FOOD FARM</h2>
                        <div class="organik-seperator mb-6 center">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="googleMap" class="mb-6" data-icon="images/icon_location.png" data-lat="37.789133" data-lon="-122.402158"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contact-inner">
                                <h6 class="contact-title"> Address</h6>
                                <div class="contact-content">
                                    08 Tôn Thất Thuyết
                                    <br />
                                    Hà Nội
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact-inner">
                                <h6 class="contact-title"> Hotline</h6>
                                <div class="contact-content">
                                    0998.888.888</br>
                                    0968.666.888
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-inner">
                                <h6 class="contact-title"> Email Contact</h6>
                                <div class="contact-content">
                                    healthyfood@gmail.com
                                    <br />
                                    contact@healthyfoodstore.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="contact-inner">
                                <h6 class="contact-title"> Website</h6>
                                <div class="contact-content">
                                    www.healthyfoodstore.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <hr class="mt-4 mb-7" />
                        <div class="text-center mb-1 section-pretitle">Leave us a message!</div>
                        <div class="organik-seperator mb-6 center">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                        <div class="contact-form-wrapper">
                            <form class="contact-form" action="{{url("/sendform")}}" method="post">
                                @method("POST")
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>your name <span class="required">*</span></label>
                                        <div class="form-wrap">
                                            <input type="text" name="name" value="" size="40" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>your email <span class="required">*</span></label>
                                        <div class="form-wrap">
                                            <input type="email" name="email" value="" size="40" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>subject</label>
                                        <div class="form-wrap">
                                            <input type="text" name="subject" value="" size="40" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>message</label>
                                        <div class="form-wrap">
                                            <textarea name="your-message" cols="40" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-wrap text-center">
                                            <input type="submit" value="SEND US NOW" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
