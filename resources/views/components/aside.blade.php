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
                <li class="app-sidebar__heading">Bảng điều khiển</li>
                <li>
                    <a href="{{url("/admin")}}" class="mm-active">
                        <i class="metismenu-icon pe-7s-note2"></i>
                        Thống Kê
                    </a>
                </li>
                <li class="app-sidebar__heading">Danh Sách Quản Lý</li>
                @if(Auth::user()->role === 1)
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-users"></i>
                            Quản Lý Phân Quyền
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-manager")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Quản Trị Viên
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-user")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Tài Khoản
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-lock"></i>
                            Quản Lý Sản Phẩm
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-category")}}">

                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Loại Hàng
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-category")}}">

                                    <i class="metismenu-icon"></i>
                                    Danh Sách Loại Hàng
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/new-product")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Sản Phẩm
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-product")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh sách sản phẩm
                                </a>
                            </li>
                                <li>
                                    <a href="{{url("/admin/list-order")}}">
                                        <i class="metismenu-icon"></i>
                                        Theo Dõi Đơn Hàng
                                    </a>
                                </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-science"></i>
                            Quản Lý Chương Trình
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-programcategory")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Danh Mục
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-programcategory")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Danh Mục
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/new-program")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Chương Trình
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-program")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Chương Trình
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/new-program-detail")}}">
                                    <i class="metismenu-icon"></i>
                                    Chi Tiết Chương Trình
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-program-detail")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Chi Tiết Chương Trình
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-star"></i>
                            Quản Lý Sự Kiện
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-event")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Sự Kiện
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-event")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Sự Kiện
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/new-ticket")}}">
                                    <i class="metismenu-icon"></i>
                                    Tạo Mới Vé
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-ticket")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Vé
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-note"></i>
                            Quản Lý Bài Viết
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-blogcategory")}}">

                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Danh Mục Bài Viết
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-blogcategory")}}">

                                    <i class="metismenu-icon"></i>
                                    Danh Sách Danh Mục Bài Viết
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/new-blog")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Bài Viết
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-blog")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Bài Viết
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-comment")}}">

                                    <i class="metismenu-icon"></i>
                                    Quản Lý Bình Luận
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-photo-gallery"></i>
                            Quản Lý Banner
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-banner")}}">
                                    <i class="metismenu-icon"></i>
                                   Thêm Mới Banner
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-banner")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Banner
                                </a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-photo-gallery"></i>
                            Quản Lý Donate
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-donate")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Ủng Hộ
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-donate")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Ủng Hộ
                                </a>
                            </li>
                        </ul>

                    </li>
                    @elseif(Auth::user()->role === 2)
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-note"></i>
                            Quản Lý Bài Viết
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-blogcategory")}}">

                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Danh Mục Bài Viết
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-blogcategory")}}">

                                    <i class="metismenu-icon"></i>
                                    Danh Sách Danh Mục Bài Viết
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/new-blog")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Bài Viết
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-blog")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Bài Viết
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-comment")}}">

                                    <i class="metismenu-icon"></i>
                                    Quản Lý Bình Luận
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-photo-gallery"></i>
                            Quản Lý Banner
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-banner")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Banner
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-banner")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Banner
                                </a>
                            </li>
                        </ul>

                    </li>
                    @elseif(Auth::user()->role === 3)
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-star"></i>
                            Quản Lý Sự Kiện
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-event")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Sự Kiện
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-event")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Sự Kiện
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/new-ticket")}}">
                                    <i class="metismenu-icon"></i>
                                    Tạo Mới Vé
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-ticket")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Vé
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-photo-gallery"></i>
                            Quản Lý Banner
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-banner")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Banner
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-banner")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Banner
                                </a>
                            </li>
                        </ul>

                    </li>
                    @elseif(Auth::user()->role === 4)
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-lock"></i>
                            Quản Lý Sản Phẩm
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-category")}}">

                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Loại Hàng
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-category")}}">

                                    <i class="metismenu-icon"></i>
                                    Danh Sách Loại Hàng
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/new-product")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Sản Phẩm
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-product")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh sách sản phẩm
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-order")}}">
                                    <i class="metismenu-icon"></i>
                                    Theo Dõi Đơn Hàng
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-photo-gallery"></i>
                            Quản Lý Banner
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-banner")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Banner
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-banner")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Banner
                                </a>
                            </li>
                        </ul>

                    </li>
                    @elseif(Auth::user()->role === 5)
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-science"></i>
                            Quản Lý Chương Trình
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-programcategory")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Danh Mục
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-programcategory")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Danh Mục
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/new-program")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Chương Trình
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-program")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Chương Trình
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/new-program-detail")}}">
                                    <i class="metismenu-icon"></i>
                                    Chi Tiết Chương Trình
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-program-detail")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Chi Tiết Chương Trình
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-photo-gallery"></i>
                            Quản Lý Banner
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{url("/admin/new-banner")}}">
                                    <i class="metismenu-icon"></i>
                                    Thêm Mới Banner
                                </a>
                            </li>
                            <li>
                                <a href="{{url("/admin/list-banner")}}">
                                    <i class="metismenu-icon"></i>
                                    Danh Sách Banner
                                </a>
                            </li>
                        </ul>

                    </li>
                @endif
                <li class="app-sidebar__heading">Tài Khoản</li>
                <li>
                    <a href="{{url("/change-password")}}">
                        <i class="metismenu-icon pe-7s-key"></i>
                        Đổi Mật Khẩu
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

