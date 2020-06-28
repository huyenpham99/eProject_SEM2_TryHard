<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button"
                    class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboards</li>
                <li>
                    <a href="{{url("/admin")}}" class="mm-active">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">WEB</li>
                @if(Auth::user()->role === 1)
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Manager
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>

                    <ul>
                        <li>

                            <a href="{{url("/admin/new-manager")}}">

                                <i class="metismenu-icon"></i>
                                New Manager
                            </a>
                        </li>
                        <li>

                            <a href="{{url("/admin/list-user")}}">


                                <i class="metismenu-icon"></i>
                                List Manager
                            </a>
                        </li>
                    </ul>
                    @else
                        @endif

                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Product
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url("/admin/new-product")}}">

                                <i class="metismenu-icon"></i>
                                New Product
                            </a>
                        </li>
                        <li>

                            <a href="{{url("/admin/list-product")}}">

                                <i class="metismenu-icon"></i>
                                List Product
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Category
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>

                            <a href="{{url("/admin/new-category")}}">

                                <i class="metismenu-icon"></i>
                                New Category
                            </a>
                        </li>
                        <li>

                            <a href="{{url("/admin/list-category")}}">

                                <i class="metismenu-icon"></i>
                                List Category
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Banner
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url("/admin/new-banner")}}">
                                <i class="metismenu-icon"></i>
                                New Banner
                            </a>
                        </li>
                        <li>
                            <a href="{{url("/admin/list-banner")}}">
                                <i class="metismenu-icon"></i>
                                List Banner
                            </a>
                        </li>
                    </ul>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Blog
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>

                            <a href="{{url("/admin/new-blog")}}">

                                <i class="metismenu-icon"></i>
                                New Blog
                            </a>
                        </li>
                        <li>

                            <a href="{{url("/admin/list-blog")}}">

                                <i class="metismenu-icon"></i>
                                List Blog
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Event
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url("/admin/new-event")}}">
                                <i class="metismenu-icon"></i>
                                New Event
                            </a>
                        </li>
                        <li>
                            <a href="{{url("/admin/list-event")}}">
                                <i class="metismenu-icon"></i>
                                List Event
                            </a>
                        </li>
                    </ul>
                </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-diamond"></i>
                            Program
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-program")}}">
                                    <i class="metismenu-icon"></i>
                                    New Program
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-program")}}">
                                    <i class="metismenu-icon"></i>
                                    List Program
                                </a>
                            </li>
                        </ul>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-diamond"></i>
                            Blog
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>

                                <a href="{{url("/admin/new-blog")}}">

                                    <i class="metismenu-icon"></i>
                                    New Blog
                                </a>
                            </li>
                            <li>

                                <a href="{{url("/admin/list-blog")}}">

                                    <i class="metismenu-icon"></i>
                                    List Blog
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="app-sidebar__heading">Charts</li>
                <li>
                    <a href="charts-chartjs.html">
                        <i class="metismenu-icon pe-7s-graph2">
                        </i>ChartJS
                    </a>
                </li>
                <li class="app-sidebar__heading">PRO Version</li>
                <li>
                    <a href="https://dashboardpack.com/theme-details/architectui-dashboard-html-pro/"
                       target="_blank">
                        <i class="metismenu-icon pe-7s-graph2">
                        </i>
                        Upgrade to PRO
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

{{--hello--}}
