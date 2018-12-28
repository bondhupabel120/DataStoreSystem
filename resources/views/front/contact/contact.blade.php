<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tech Mag template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="{{ asset('/') }}front/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/styles/contact.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}front/styles/contact_responsive.css">
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

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('/') }}front/images/about.jpg" data-speed="0.8"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">Contact</div>
                            <div class="breadcrumbs">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="{{ route('/') }}">Home</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Contact Content -->
                <div class="col-lg-4 contact_col">
                    <div class="contact_content">
                        <div class="contact_title">Get in Touch</div>
                        <div class="contact_text">
                            <p> Write your opinion, we try provide best service, if unfortunately have any suggestion or complain, please tell us</p>
                        </div>
                        <div class="contact_social">
                            <ul class="contact_social_list d-flex flex-row align-items-center justify-content-start">
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.being.com" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                <li><a href="https://bd.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="contact_info">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
                                        <div class="contact_info_icon"><img src="{{ asset('/') }}front/images/icon_9.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_content">107, Katatur, Mohammadpur, Dhaka-1207</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
                                        <div class="contact_info_icon"><img src="{{ asset('/') }}front/images/icon_10.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_content">bondhupabel@gmail.com</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start mb-2">
                                    <div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
                                        <div class="contact_info_icon"><img src="{{ asset('/') }}front/images/icon_11.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_content">+8801621355849</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8 contact_col">
                    <div class="contact_form_container">
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        <div class="contact_title">Send us a message</div>
                        <form action="{{ route('contact-info') }}" method="POST" id="contact_form" class="contact_form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="contact_input" name="name" placeholder="Name" required="required">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="contact_input" name="email" placeholder="E-mail" required="required">
                                </div>
                            </div>
                            <input type="text" class="contact_input" name="mobile" placeholder="Mobile">
                            <textarea class="contact_input contact_textarea" name="message" placeholder="Message" required="required"></textarea>
                            <button class="contact_button trans_200">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Google Map -->

    <div class="google_map_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="map" style="height: 300px"><span><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14687.645764566552!2d90.37449494567822!3d23.754330595401164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf59580725a5%3A0x76ee228dfc4c1420!2sAllah+Karim+Jame+Masjid+Super+Market!5e0!3m2!1sen!2sbd!4v1543770633174" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></span></div>

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
                            <a href="#">
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{ asset('/') }}front/js/contact.js"></script>
<script src="{{ asset('/') }}front/js/script.js"></script>
</body>
</html>