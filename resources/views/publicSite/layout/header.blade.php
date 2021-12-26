<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/tripo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 13:10:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Two || Tripo || Travel & Tourism Agencies HTML Template</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- plugin scripts -->


    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200,300,400,400i,500,600,700,800,900%7CSatisfy&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href='{{asset("assets/css/animate.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/bootstrap.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/owl.carousel.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/owl.theme.default.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/magnific-popup.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/fontawesome-all.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/swiper.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/bootstrap-select.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/tripo-icons.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/jquery.mCustomScrollbar.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/bootstrap-datepicker.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/vegas.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/nouislider.min.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/nouislider.pips.css")}}'>

    <!-- template styles -->
    <link rel="stylesheet" href='{{asset("assets/css/style.css")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/responsive.css")}}'>

<link rel="stylesheet" href="{{asset("assets/css/guide_style.css")}}">

@yield('style')

<style>
    .sign-my:hover {
        color: #ff0143 !important;
    }
    </style>



<body>

    <div class="preloader">
        <img src='{{asset("assets/images/loader.png")}}' class="preloader__image" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">
        <div class="site-header__header-one site-header__home-two-wrap">
            <div class="topbar-one">
                <div class="container-fluid">
                    <div class="topbar-one__left">
                        <a href="mailto:needhelp@tripo.com">needhelp@tripo.com</a>
                        <a href="tel:666-999-0000">666 999 0000</a>
                        <a href="#">77 broklyn street new york</a>
                    </div><!-- /.topbar-one__left -->
                    <div class="topbar-one__right">
                        <div class="topbar-one__social">
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div><!-- /.topbar-one__social -->
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.container-fluid -->
            </div><!-- /.topbar-one -->
            <header class="main-nav__header-one site-header__home-two" style="background-color:#082740">
                <nav class="header-navigation stricky">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__logo-box">
                            <a href="index.html" class="main-nav__logo">
                                <img src={{asset("assets/images/logo-light.png")}} class="main-logo" width="123" alt="Awesome Image" />
                            </a>
                            <a href="#" class="side-menu__toggler"><i class="fa fa-bars"></i>
                                <!-- /.smpl-icon-menu --></a>
                        </div><!-- /.logo-box -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="main-nav__main-navigation">
                            <ul class=" main-nav__navigation-box">
                                <li class="dropdown current">
                                    <a href={{route("home2")}}>Home</a>

                                        </li>


                                <li class="dropdown">
                                    <a href="{{route("distination")}}">Destinations</a>

                                </li>
                                <li class="dropdown">
                                    <a href="{{route("trips-list.index")}}">Tours</a>

                                </li>
                                <li class="dropdown">
                                    <a href="tour-guide">Tour Guides</a>

                                </li>

                                <li>
                                    <a href="contact">Contact</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                        <div class="main-nav__right">
                            <ul class="navbar-nav ms-auto flex-row">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item mr-4">
                                            <a class="nav-link text-white sign-my" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item mr-4">
                                            <a class="nav-link text-white sign-my" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li>
                                        <a class="p-5 text-white" role="button" style="padding-right:40px !important;" >
                                            {!!   "Welocme, " .  "<span style='color:#FFA801'>".Auth::user()->name."</span>" !!}
                                        </a>
                                    </li>
                                    <div>
                                        <a class="" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                            <button class="btn btn-danger mr-5">
                                            {{   __('Logout') }}
                                            </button>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>


                                    </div>
                                @endguest
                            </ul>
                            <a href="" class="text-white search-popup__toggler"><i class="tripo-icon-magnifying-glass"></i></a>
                            <a href="" class="main-nav__login"><i class="tripo-icon-avatar"></i></a>
                        </div><!-- /.main-nav__right -->
                    </div>
                    <!-- /.container -->
                </nav>
            </header><!-- /.site-header -->
        </div>

  <!-- /.site-header__header-one site-header__home-two-wrap -->
