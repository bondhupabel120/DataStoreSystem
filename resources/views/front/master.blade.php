<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Software final project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="{{ asset('/') }}front/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/styles/responsive.css">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Header bar -->
        <div class="header_bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_bar_content d-flex flex-row align-items-center justify-content-start">
                            @if(Session::get('visitorId'))
                                <div class="nav-item dropdown"><a class="nav-link dropdown-toggle fa fa-user-circle fa-2x" data-toggle="dropdown" href=""> {{ Session::get('visitorName') }}</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"
                                               onclick="event.preventDefault();document.getElementById('visitorLogoutForm').submit();
                                            ">Logout</a></li>
                                    </ul>
                                    <form id="visitorLogoutForm" action="{{ route('visitor-logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </div>
                            @else
                                <div class="sub_button text-center mr-2" style="border-radius: 50px"><a href="{{ route('sign-in') }}">Login</a><div class="d-flex flex-row align-items-start justify-content-start"><div></div><div></div><div></div></div></div>
                                <div class="sub_button text-center mr-2" style="border-radius: 50px"><a href="{{ route('sign-up') }}">Sign Up</a><div class="d-flex flex-row align-items-start justify-content-start"><div></div><div></div><div></div></div></div>
                            @endif

                            <div class="header_social ml-auto">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.being.com" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    <li><a href="https://bd.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Content -->
        <div class="header_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justfy-content-start">
                            <div class="logo_container">
                                <a href="{{ route('/') }}">
                                    <div class="logo"><span>Easy</span>Store</div>
                                    <div class="logo_sub">Innovation & Safe Technology</div>
                                </a>
                            </div>
                            <div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">
                                <a href="#">
                                    <div class="background_image" style="background-image:url({{ asset('/') }}front/images/extra.jpg)"></div>
                                    <div class="header_extra_content">
                                        <div class="header_extra_title">save 50%</div>
                                        <div class="header_extra_subtitle">Buy now in stores</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Navigation & Search -->
        <div class="header_nav_container" id="header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">

                            <!-- Logo -->
                            <div class="logo_container">
                                <a href="{{ route('/') }}">
                                    <div class="logo"><span>Easy</span>Store</div>
                                    <div class="logo_sub">Innovation & Safe Technology</div>
                                </a>
                            </div>

                            <!-- Navigation -->
                            <nav class="main_nav">
                                <ul class="main_nav_list d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="{{ route('/') }}">home</a></li>
                                    <li><a href="{{ route('about') }}">about</a></li>
                                    <li><a href="{{ route('category') }}">category</a></li>
                                    <li><a href="{{ route('data-store') }}">store data</a></li>
                                    <li><a href="{{ route('contact') }}">contact</a></li>
                                </ul>
                            </nav>

                            <!--&lt;!&ndash; Search &ndash;&gt;-->
                            <!--<div class="header_search_container ml-auto">-->
                            <!--<div class="header_search">-->
                            <!--<form action="#" id="header_search_form" class="header_search_form d-flex flex-row align-items-center justfy-content-start">-->
                            <!--<div><div class="header_search_activation"><i class="fa fa-search" aria-hidden="true"></i></div></div>-->
                            <!--<input type="text" class="header_search_input" placeholder="Search" required="required">-->
                            <!--</form>-->
                            <!--</div>-->
                            <!--</div>-->

                            <!-- Hamburger -->
                            <div class="hamburger ml-auto menu_mm"><i class="fa fa-bars  trans_200 menu_mm" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
        <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>

        <nav class="menu_nav">
            <ul class="menu_mm">
                <li class="menu_mm"><a href="{{ route('/') }}">Home</a></li>
                <li class="menu_mm"><a href="{{ route('about') }}">About</a></li>
                <li class="menu_mm"><a href="{{ route('category') }}">Category</a></li>
                <li class="menu_mm"><a href="{{ route('data-store') }}">Store Data</a></li>
                <li class="menu_mm"><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
        <div class="menu_subscribe"><a href="{{ route('sign-up') }}">Sign Up</a></div>
        <div class="menu_subscribe"><a href="{{ route('sign-in') }}">Login</a></div>
        <div class="menu_extra">
            <div class="menu_social">
                <ul>
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.being.com" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                    <li><a href="https://bd.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    @yield('body')

    <!-- Footer -->

    <footer class="footer">
        <div class="footer_social">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <ul class="footer_social_list d-flex flex-row align-items-center justify-content-center">
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.being.com" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                            <li><a href="https://bd.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_content">
            <!-- Image credit: https://unsplash.com/@badashphotos -->
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('/') }}front/images/footer.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="logo_container">
                            <a href="{{ route('/') }}">
                                <div class="logo"><span>Easy</span>Store</div>
                                <div class="logo_sub">Innovation & Safe Technology</div>
                            </a>
                        </div>
                        <div class="footer_nav_container text-center">
                            <nav class="footer_nav">
                                <ul class="footer_nav_list d-flex flex-md-row flex-column align-items-center justify-content-start">
                                    <li><a href="{{ route('/') }}">home</a></li>
                                    <li><a href="{{ route('about') }}">about</a></li>
                                    <li><a href="{{ route('category') }}">cetagory</a></li>
                                    <li><a href="{{ route('data-store') }}">store data</a></li>
                                    <li><a href="{{ route('contact') }}">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/md.pabel.961" target="_blank">Bondhu</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="{{ asset('/') }}front/js/jquery-3.2.1.min.js"></script>
<script src="{{ asset('/') }}front/styles/bootstrap-4.1.2/popper.js"></script>
<script src="{{ asset('/') }}front/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="{{ asset('/') }}front/plugins/greensock/TweenMax.min.js"></script>
<script src="{{ asset('/') }}front/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{ asset('/') }}front/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{ asset('/') }}front/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{ asset('/') }}front/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{ asset('/') }}front/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{ asset('/') }}front/plugins/easing/easing.js"></script>
<script src="{{ asset('/') }}front/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{ asset('/') }}front/js/custom.js"></script>
<script src="{{ asset('/') }}front/js/script.js"></script>
</body>
</html>