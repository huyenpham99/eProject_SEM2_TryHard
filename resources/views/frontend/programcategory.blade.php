@extends("frontend.layout")
@section("content")
    <div id="main">
        <div class="section section-bg-10 pt-11 pb-17">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="page-title text-center" style="font-family: 'Playfair Display', serif; ">Chương trình</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumbs">
                            <li><a href="{{url("/home")}}">Trang chủ</a></li>
                            <li>Chương trình</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bg-light pt-6 pb-4">
            <div class="container">
                <div class="row">
                    @foreach($programcategory as $p)
                    <div class="col-md-3 col-sm-6">
                        <div class="organik-services">
                            <a href="{{asset('program/'.$p->id)}}">
                                <img src="{{$p->__get("program_category_image")}}" height="540px" width="350px" alt=""/>
                                <div class="title">{{$p->__get("progam_category_name")}}</div>
                            </a>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
