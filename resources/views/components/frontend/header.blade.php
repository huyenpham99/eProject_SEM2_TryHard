<!-- ============== Header starts ============== -->
<header>
    <div class="container">
        <div class="row">
            <!-- ============== Left logo block starts ============== -->
            <div class="col-xs-12 col-sm-3 logo-block">
                <figure><a href="home-version1.html"><img class="img-responsive" src="images/madang-logo.png" alt="Madang Logo" /></a></figure>
            </div>
            <!-- ============== Left logo block ends ============== -->

            <!-- ============== Main navigation starts ============== -->
            <div class="col-xs-12 col-sm-7 menu-block">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse">
                            <ul class="nav navbar-nav text-right pull-right">
                                <li><a href="{{asset("/")}}">Home</a></li>
                                <li class="active"><a href="{{asset("/about")}}">About Us</a></li>
                                <li><a href="{{asset("/shop")}}">Shop</a></li>
                                <li><a href="{{asset("/programs")}}">Programs</a></li>
                                <li><a href="{{asset("/blog")}}">Blog</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <div class="logout" style="position: relative;margin-top: 15px">
                @guest
                    <li class="float-right" style="list-style: none;"><a href="{{url("/login")}}"
                                                                         style="border-radius: 20px; width: 100px; height: 40px;margin-left: 10px"
                                                                         type="button"
                                                                         class="btn btn-secondary">Login</a>
                    </li>
                @else
                    <a class="dropdown-item" style="margin-left: 20px!important;position: absolute;top: -5px"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <li class="float-right" style="list-style: none;">
                            <button style="border-radius: 20px; width: 100px; height: 40px" type="button"
                                    class="btn btn-secondary">Logout
                            </button>
                        </li>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{--                        //--}}
                        @csrf
                    </form>
                @endguest
            </div>
            <!-- ============== Main navigation ends ============== -->
        </div>
    </div>
</header>
<!-- ============== Header ends ============== -->
