<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tech Mag template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="{{ asset('/') }}front/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/styles/about.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/styles/about_responsive.css">
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

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('/') }}front/images/about.jpg" data-speed="0.8"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">About us</div>
                            <div class="breadcrumbs">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="{{ route('/') }}">Home</a></li>
                                    <li>About us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <section style="background-color: white;padding-top: 50px">
        <div class="container">
            <div class="row">
                <h2 class="m-auto">Meet With Our Team</h2>
            </div>
        </div>
    </section>

    <div class="intro col-md-12">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <img src="{{ asset('/') }}front/images/pabel.jpg" alt="" class="img-responsive">
                    <h3 style="padding-left: 60px">Hanif Mia Fabel</h3>
                    <p style="padding-left: 90px">CEO & Developer</p>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('/') }}front/images/pervez.jpg" alt="" class="img-responsive">
                    <h3 style="padding-left: 40px">Mahfuzer Rahman</h3>
                    <p style="padding-left: 90px">MD & Developer</p>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('/') }}front/images/loginback.jpg" alt="" class="img-responsive">
                    <h3 style="padding-left: 85px">Sohel Rana</h3>
                    <p style="padding-left: 76px">Manager & Developer</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Boxes -->

    <div class="boxes d-flex flex-md-row align-items-start justify-content-start flex-wrap">

        <!-- Box -->
        <div class="box d-flex flex-column align-items-center justify-content-center">
            <div class="box_content d-flex flex-row align-items-center justify-content-start">
                <div class="box_icon"><img src="{{ asset('/') }}front/images/icon_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                <div class="box_text">
                    <div class="box_title">well documented</div>
                    <div class="box_subtitle">Just read it</div>
                </div>
            </div>
        </div>

        <!-- Box -->
        <div class="box d-flex flex-column align-items-center justify-content-center">
            <div class="box_content d-flex flex-row align-items-center justify-content-start">
                <div class="box_icon"><img src="{{ asset('/') }}front/images/icon_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                <div class="box_text">
                    <div class="box_title">the best technology</div>
                    <div class="box_subtitle">It's like a magnet</div>
                </div>
            </div>
        </div>

        <!-- Box -->
        <div class="box d-flex flex-column align-items-center justify-content-center">
            <div class="box_content d-flex flex-row align-items-center justify-content-start">
                <div class="box_icon"><img src="{{ asset('/') }}front/images/icon_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                <div class="box_text">
                    <div class="box_title">the best editorials</div>
                    <div class="box_subtitle">Choose the one you like</div>
                </div>
            </div>
        </div>

        <!-- Box -->
        <div class="box d-flex flex-column align-items-center justify-content-center">
            <div class="box_content d-flex flex-row align-items-center justify-content-start">
                <div class="box_icon"><img src="{{ asset('/') }}front/images/icon_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                <div class="box_text">
                    <div class="box_title">worldwide coverage</div>
                    <div class="box_subtitle">Easy to work with</div>
                </div>
            </div>
        </div>

    </div>

    <!-- Milestones -->

    <div class="milestones">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('/') }}front/images/milestones.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-center justify-content-center">
                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('/') }}front/images/icon_5.svg" alt=""></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="25">0</div>
                            <div class="milestone_text">Awards</div>
                        </div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-center justify-content-center">
                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('/') }}front/images/icon_6.svg" alt=""></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="135">0</div>
                            <div class="milestone_text">New Articles</div>
                        </div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-center justify-content-center">
                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('/') }}front/images/icon_7.svg" alt=""></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="39">0</div>
                            <div class="milestone_text">New Projects</div>
                        </div>

                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-xl-3 col-md-6 milestone_col">
                    <div class="milestone d-flex flex-row align-items-center justify-content-center">
                        <div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('/') }}front/images/icon_8.svg" alt=""></div>
                        <div class="milestone_content">
                            <div class="milestone_counter" data-end-value="45" data-sign-after="k">0</div>
                            <div class="milestone_text">Followers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
<script src="{{ asset('/') }}front/plugins/easing/easing.js"></script>
<script src="{{ asset('/') }}front/plugins/progressbar/progressbar.min.js"></script>
<script src="{{ asset('/') }}front/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{ asset('/') }}front/js/about.js"></script>
<script src="{{ asset('/') }}front/js/script.js"></script>
</body>
</html>