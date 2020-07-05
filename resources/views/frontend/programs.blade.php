@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-9 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center">Gallery Freestyle</h2>
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
                            <li>Programs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section pt-10 pb-9">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="text-center">
                            <ul class="masonry-filter">
                                <li><a href="#" data-filter="" class="active">All</a></li>
                                <li><a href="#" data-filter=".dried">Dried</a></li>
                                <li><a href="#" data-filter=".fruits">Fruits</a></li>
                                <li><a href="#" data-filter=".vegetables">Vegetables</a></li>
                                <li><a href="#" data-filter=".juice">Juice</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="gallery-grid masonry-grid-post">
                        <div class="col-md-3 col-sm-6 gallery-item masonry-item text-center fruits juice">
                            <div class="gallery-image">
                                <a href="frontend/images/gallery/gallery_1_large.jpg" data-rel="prettyPhoto[gallery]">
                                    <img src="frontend/images/gallery/gallery_1.jpg" alt="" />
                                    <div class="desc-wrap">
                                        <div class="desc">
                                            <span class="icon ion-android-search"></span>
                                            <div class="title"> Oranges</div>
                                            <div class="cates"> Fruits, Juices</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 gallery-item masonry-item text-center dried vegetables">
                            <div class="gallery-image">
                                <a href="frontend/images/gallery/gallery_2_large.jpg" data-rel="prettyPhoto[gallery]">
                                    <img src="frontend/images/gallery/gallery_2.jpg" alt="" />
                                    <div class="desc-wrap">
                                        <div class="desc">
                                            <span class="icon ion-android-search"></span>
                                            <div class="title"> Oranges</div>
                                            <div class="cates"> Dried, Vegetables</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 gallery-item masonry-item text-center fruits">
                            <div class="gallery-image">
                                <a href="frontend/images/gallery/gallery_3_large.jpg" data-rel="prettyPhoto[gallery]">
                                    <img src="frontend/images/gallery/gallery_3.jpg" alt="" />
                                    <div class="desc-wrap">
                                        <div class="desc">
                                            <span class="icon ion-android-search"></span>
                                            <div class="title"> Oranges</div>
                                            <div class="cates"> Fruits</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 gallery-item masonry-item text-center fruits">
                            <div class="gallery-image">
                                <a href="frontend/images/gallery/gallery_4_large.jpg" data-rel="prettyPhoto[gallery]">
                                    <img src="frontend/images/gallery/gallery_4.jpg" alt="" />
                                    <div class="desc-wrap">
                                        <div class="desc">
                                            <span class="icon ion-android-search"></span>
                                            <div class="title"> Oranges</div>
                                            <div class="cates"> Fruits</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 gallery-item masonry-item text-center juice">
                            <div class="gallery-image">
                                <a href="frontend/images/gallery/gallery_5_large.jpg" data-rel="prettyPhoto[gallery]">
                                    <img src="frontend/images/gallery/gallery_5.jpg" alt="" />
                                    <div class="desc-wrap">
                                        <div class="desc">
                                            <span class="icon ion-android-search"></span>
                                            <div class="title"> Oranges</div>
                                            <div class="cates"> Juices</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 gallery-item masonry-item text-center dried juice">
                            <div class="gallery-image">
                                <a href="frontend/images/gallery/gallery_6_large.jpg" data-rel="prettyPhoto[gallery]">
                                    <img src="frontend/images/gallery/gallery_6.jpg" alt="" />
                                    <div class="desc-wrap">
                                        <div class="desc">
                                            <span class="icon ion-android-search"></span>
                                            <div class="title"> Oranges</div>
                                            <div class="cates"> Dried, Juices</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 gallery-item masonry-item text-center fruits vegetables">
                            <div class="gallery-image">
                                <a href="frontend/images/gallery/gallery_7_large.jpg" data-rel="prettyPhoto[gallery]">
                                    <img src="frontend/images/gallery/gallery_7.jpg" alt="" />
                                    <div class="desc-wrap">
                                        <div class="desc">
                                            <span class="icon ion-android-search"></span>
                                            <div class="title"> Oranges</div>
                                            <div class="cates"> Fruits, Vegetables</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        <a class="prev page-numbers" href="#">Prev</a>
                        <a class="page-numbers" href="#">1</a>
                        <span class="page-numbers current">2</span>
                        <a class="page-numbers" href="#">3</a>
                        <a class="next page-numbers" href="#">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
