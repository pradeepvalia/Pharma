<div class="wrapper">
    <div class="page">
        <div class="header-container header-color color">
            <div class="header_full">
                <div class="header">
                    <div class="header-logo show-992">
                        <a href="index.html" class="logo"> <img class="img-responsive"
                                src="assets/images/logo.png" alt="" /></a>
                    </div>
                    <!--- .header-logo -->
                    <div class="header-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="header-config-bg">
                                    <div class="header-wrapper-bottom">
                                        <div class="custom-menu col-lg-12">
                                            <div class="header-logo hidden-992">
                                                <a href="index.html" class="logo">
                                                    <img class="img-responsive" src="assets/images/logo.png"
                                                        alt="" /></a>
                                            </div>
                                            <!--- .header-logo -->
                                            <div class="magicmenu clearfix">
                                                <ul class="nav-desktop sticker">
                                                    <li class="level0 logo display"><a class="level-top"
                                                            href="index.html"><img alt="logo"
                                                                src="assets/images/logo.png"></a></li>
                                                    <li class="level0 home">
                                                        <a class="level-top"
                                                            href="#"><span
                                                                class="icon-home fa fa-home"></span><span
                                                                class="icon-text">Home</span></a>

                                                    </li>
                                                    <li class="level0 home">
                                                        <a class="level-top"><span class="icon-home fa fa-home"></span><span class="icon-text">PRODUCT'S</span></a>
                                                        <div class="level-top-mega">

                                                            <div><a href="index.html"><span class="demo-home"></span></a></div>

                                                        </div>
                                                    </li>
                                                    <li class="level0 home">
                                                        <a class="level-top"
                                                            href="#"><span
                                                                class="icon-home fa fa-home"></span><span
                                                                class="icon-text">ABOUT US</span></a>

                                                    </li>
                                                </ul>
                                            </div>
                                            <!--- .magicmenu -->

                                        </div>
                                        <!--- .custom-menu -->
                                    </div>
                                    <!--- .header-wrapper-bottom -->
                                </div>
                                <!--- .header-config-bg -->
                            </div>
                            <!--- .row -->
                        </div>
                        <!--- .container -->
                    </div>
                    <!--- .header-bottom -->
                    <div class="header-page clearfix">

                        <div class="header-setting">
                            <div class="settting-switcher">
                                <div class="dropdown-toggle">
                                    <div class="icon-setting"><i class="icon-settings icons"></i></div>
                                </div>
                                <div class="dropdown-switcher">
                                    <div class="top-links-alo">
                                        <div class="header-top-link">
                                            <ul class="links">

                                                @guest
                                                    @if (Route::has('login'))
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                href="{{ route('login') }}">{{ __('Login') }}</a>
                                                        </li>
                                                    @endif

                                                    @if (Route::has('register'))
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                                                        </li>
                                                    @endif
                                                @else
                                                    <li class="nav-item dropdown">
                                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" v-pre>
                                                            {{ Auth::user()->name }}
                                                        </a>


                                                    </li>

                                                    <li class="nav-item has-treeview menu-open">
                                                        <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                @endguest
                                            </ul>
                                        </div>
                                    </div>
                                    <!--- .top-links-alo -->
                                </div>
                                <!--- .dropdown-switcher -->
                            </div>
                            <!--- .settting-switcher -->
                        </div>
                        <!--- .header-setting -->
                    </div>
                    <!--- .header-page -->
                </div>
                <!--- .header -->
            </div>
            <!--- .header_full -->
        </div>
        <!--- .header-container -->
