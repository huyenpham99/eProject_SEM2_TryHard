@extends("layout")
@section("content")
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Product: </div>
                        <div class="widget-heading">Product View Count: </div>

                        <div class="widget-heading">Complete Order: </div>
                        <div class="widget-heading">Total Money: </div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-heading">{{$countproduct}} Products</div>
                        <div class="widget-heading">{{$viewcountproduct}} Views</div>
                        <div class="widget-heading">{{$completecount}} Complete</div>
                        <div class="widget-heading">{{$totalmoney}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Blog :</div>
                        <div class="widget-subheading">Total View : </div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-heading"> {{$countblog}} Blog</div>
                        <div class="widget-heading">{{$viewcountblog}} Views</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Event: </div>
                        <div class="widget-subheading">Total People Count: </div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-heading">{{$countevent}}</div>
                        <div class="widget-heading">{{$totalpeople}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="mb-3 card">
                <div class="card-header-tab card-header-tab-animation card-header">
                    <div class="card-header-title">
                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                        Blog Each Category
                    </div>
                </div>
                <div class="card-body">
                            <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
{{--                                        {!! $chart->container() !!}--}}
{{--                                        {!! $chart->script() !!}--}}
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="mb-3 card">
                <div class="card-header-tab card-header-tab-animation card-header">
                    <div class="card-header-title">
                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                        Top 10 Blog View Count
                    </div>
                </div>
                <div class="card-body">
                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
{{--                                {!! $chart2->container() !!}--}}
{{--                                {!! $chart2->script() !!}--}}
                            </div>
                        </div>
                    </div>
{{--                    //div--}}
                    {{--                    //div--}}
                </div>
            </div>
        </div>
    </div>
@endsection
