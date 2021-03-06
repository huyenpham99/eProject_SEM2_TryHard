<div class="app-header header-shadow">
    <div class="app-header__logo">
        <img class="logo-image" src="/frontend/images/logohealthyfood1.png" style="width: 150px;" alt="Organik Logo">
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
    <div class="app-header__content">
        <div class="app-header-left">

        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                   class="p-0 btn">
                                    <img style="border-radius: 50%; width: 50px;height: 50px; overflow: hidden"src="{{\Illuminate\Support\Facades\Auth::user()->__get("image")}}" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                     class="dropdown-menu dropdown-menu-right">
                                    @php
                                       $id =  \Illuminate\Support\Facades\Auth::user()->__get("id");
                                    @endphp
                                    <a href="{{url("admin/view-user/$id")}}" tabindex="0" class="dropdown-item">Thay Đổi Thông Tin</a>
                                    <a href="{{url("/change-password")}}" tabindex="0" class="dropdown-item">Thay Đổi Mật Khẩu</a>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <a class="dropdown-item"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                        <li class="float-right" style="list-style: none;">
                                            Đăng Xuất
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{auth()->user()->__get("name")}}
                            </div>
                            <div class="widget-subheading">
                                {{auth()->user()->__get("account_status")}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
