@extends('front.master')

@section('title')
    Home
@endsection

@section('body')
    <!-- Home -->

    <div class="home">
        <h3 class="text-danger text-center">{{ Session::get('message') }}</h3>

        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                <!-- Slide -->
                <div class="owl-item home_slider_item">
                    <div class="background_image" style="background-image:url({{ asset('/') }}front/images/home_slider.jpg)"></div>
                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                            <div class="home_title">Building The Future Data</div>
                            <div class="home_text">A Data Store process<br>It's provide free & payment system<br>It's a safely data store zone</div>
                            <div class="home_button trans_200"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="owl-item home_slider_item">
                    <div class="background_image" style="background-image:url({{ asset('/') }}front/images/slider2.jpg)"></div>
                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                            <div class="home_title">Safely Store Data</div>
                            <div class="home_text">A Data Store process<br>It's provide free & payment system<br>It's a safely data store zone</div>
                            <div class="home_button trans_200"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
                <!-- Slide -->
                <div class="owl-item home_slider_item">
                    <div class="background_image" style="background-image:url({{ asset('/') }}front/images/slider3.jpg)"></div>
                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                            <div class="home_title">Enjoy Your Life</div>
                            <div class="home_text">A Data Store process<br>It's provide free & payment system<br>It's a safely data store zone</div>
                            <div class="home_button trans_200"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home Slider Navigation -->
            <div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left trans_200" aria-hidden="true"></i></div>
            <div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right trans_200" aria-hidden="true"></i></div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">

                <!-- Intro Item -->
                <div class="col-md-4 intro_col">
                    <div class="intro_item">
                        <img src="{{ asset('/') }}front/images/intro_1.jpg" alt="">
                        <div class="intro_content trans_200"><a href="category.html">technology</a></div>
                    </div>
                </div>

                <!-- Intro Item -->
                <div class="col-md-4 intro_col">
                    <div class="intro_item">
                        <img src="{{ asset('/') }}front/images/intro_2.jpg" alt="">
                        <div class="intro_content trans_200"><a href="category.html">videos</a></div>
                    </div>
                </div>

                <!-- Intro Item -->
                <div class="col-md-4 intro_col">
                    <div class="intro_item">
                        <img src="{{ asset('/') }}front/images/intro_3.jpg" alt="">
                        <div class="intro_content trans_200"><a href="category.html">featured</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--&lt;!&ndash; Content Container &ndash;&gt;-->

    <!--<div class="content_container">-->
    <!---->
    <!--&lt;!&ndash; Featured Title &ndash;&gt;-->
    <!--<div class="featured_title">-->
    <!--<div class="container">-->
    <!--<div class="row">-->
    <!--<div class="col">-->
    <!--<div class="section_title_container d-flex flex-row align-items-start justify-content-start">-->
    <!--<div>-->
    <!--<div class="section_title">Featured Posts</div>-->
    <!--<div class="section_subtitle">Handpicked articles</div>-->
    <!--</div>-->
    <!--<div class="section_bar"></div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--<div class="container">-->
    <!--<div class="row">-->

    <!--&lt;!&ndash; Main Content &ndash;&gt;-->

    <!--<div class="col-lg-9">-->
    <!--<div class="main_content">-->
    <!---->
    <!--&lt;!&ndash; Featured &ndash;&gt;-->

    <!--<div class="featured">-->
    <!--<div class="row">-->
    <!--<div class="col-lg-8">-->

    <!--&lt;!&ndash; Post &ndash;&gt;-->
    <!--<div class="post_item post_v_large d-flex flex-column align-items-start justify-content-start">-->
    <!--<div class="post_image"><img src="images/post_1.jpg" alt="https://unsplash.com/@cgower"></div>-->
    <!--<div class="post_content">-->
    <!--<div class="post_category cat_technology"><a href="category.html">technology</a></div>-->
    <!--<div class="post_title"><a href="single.html">The new Apple release ceremony</a></div>-->
    <!--<div class="post_info d-flex flex-row align-items-center justify-content-start">-->
    <!--<div class="post_author d-flex flex-row align-items-center justify-content-start">-->
    <!--<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>-->
    <!--<div class="post_author_name"><a href="#">Michael Smith</a></div>-->
    <!--</div>-->
    <!--<div class="post_date"><a href="#">29 April 2018</a></div>-->
    <!--<div class="post_comments ml-auto"><a href="#">3 comments</a></div>-->
    <!--</div>-->
    <!--<div class="post_text">-->
    <!--<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-lg-4">-->
    <!---->
    <!--&lt;!&ndash; Post &ndash;&gt;-->
    <!--<div class="post_item post_v_small d-flex flex-column align-items-start justify-content-start">-->
    <!--<div class="post_image"><img src="images/post_2.jpg" alt="https://unsplash.com/@lloydaleveque"></div>-->
    <!--<div class="post_content">-->
    <!--<div class="post_category cat_world"><a href="category.html">world</a></div>-->
    <!--<div class="post_title"><a href="single.html">The devices of the future</a></div>-->
    <!--<div class="post_info d-flex flex-row align-items-center justify-content-start">-->
    <!--<div class="post_author d-flex flex-row align-items-center justify-content-start">-->
    <!--<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>-->
    <!--<div class="post_author_name"><a href="#">Michael Smith</a></div>-->
    <!--</div>-->
    <!--<div class="post_date"><a href="#">29 April 2018</a></div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Post &ndash;&gt;-->
    <!--<div class="post_item post_v_small d-flex flex-column align-items-start justify-content-start">-->
    <!--<div class="post_image"><img src="images/post_3.jpg" alt="https://unsplash.com/@agkdesign"></div>-->
    <!--<div class="post_content">-->
    <!--<div class="post_category cat_world"><a href="category.html">world</a></div>-->
    <!--<div class="post_title"><a href="single.html">The devices of the future</a></div>-->
    <!--<div class="post_info d-flex flex-row align-items-center justify-content-start">-->
    <!--<div class="post_author d-flex flex-row align-items-center justify-content-start">-->
    <!--<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>-->
    <!--<div class="post_author_name"><a href="#">Michael Smith</a></div>-->
    <!--</div>-->
    <!--<div class="post_date"><a href="#">29 April 2018</a></div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Technology &ndash;&gt;-->

    <!--<div class="technology">-->
    <!--<div class="section_title_container d-flex flex-row align-items-start justify-content-start">-->
    <!--<div>-->
    <!--<div class="section_title">Technology</div>-->
    <!--<div class="section_subtitle">Handpicked articles</div>-->
    <!--</div>-->
    <!--<div class="section_bar"></div>-->
    <!--</div>-->
    <!--<div class="technology_content">-->
    <!---->
    <!--&lt;!&ndash; Post &ndash;&gt;-->
    <!--<div class="post_item post_h_large">-->
    <!--<div class="row">-->
    <!--<div class="col-lg-5">-->
    <!--<div class="post_image"><img src="images/post_h_1.jpg" alt="https://unsplash.com/@jmckinven"></div>-->
    <!--</div>-->
    <!--<div class="col-lg-7">-->
    <!--<div class="post_content">-->
    <!--<div class="post_category cat_technology"><a href="category.html">technology</a></div>-->
    <!--<div class="post_title"><a href="single.html">The new Apple release ceremony</a></div>-->
    <!--<div class="post_info d-flex flex-row align-items-center justify-content-start">-->
    <!--<div class="post_author d-flex flex-row align-items-center justify-content-start">-->
    <!--<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>-->
    <!--<div class="post_author_name"><a href="#">Michael Smith</a></div>-->
    <!--</div>-->
    <!--<div class="post_date"><a href="#">29 April 2018</a></div>-->
    <!--<div class="post_comments ml-auto"><a href="#">3 comments</a></div>-->
    <!--</div>-->
    <!--<div class="post_text">-->
    <!--<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>	-->
    <!--</div>-->

    <!--&lt;!&ndash; Post &ndash;&gt;-->
    <!--<div class="post_item post_h_large">-->
    <!--<div class="row">-->
    <!--<div class="col-lg-5">-->
    <!--<div class="post_image"><img src="images/post_h_2.jpg" alt="https://unsplash.com/@neonbrand"></div>-->
    <!--</div>-->
    <!--<div class="col-lg-7">-->
    <!--<div class="post_content">-->
    <!--<div class="post_category cat_world"><a href="category.html">world</a></div>-->
    <!--<div class="post_title"><a href="single.html">The new Apple release ceremony</a></div>-->
    <!--<div class="post_info d-flex flex-row align-items-center justify-content-start">-->
    <!--<div class="post_author d-flex flex-row align-items-center justify-content-start">-->
    <!--<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>-->
    <!--<div class="post_author_name"><a href="#">Michael Smith</a></div>-->
    <!--</div>-->
    <!--<div class="post_date"><a href="#">29 April 2018</a></div>-->
    <!--<div class="post_comments ml-auto"><a href="#">3 comments</a></div>-->
    <!--</div>-->
    <!--<div class="post_text">-->
    <!--<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>	-->
    <!--</div>-->

    <!--&lt;!&ndash; Post &ndash;&gt;-->
    <!--<div class="post_item post_h_large">-->
    <!--<div class="row">-->
    <!--<div class="col-lg-5">-->
    <!--<div class="post_image"><img src="images/post_h_3.jpg" alt="https://unsplash.com/@cdr6934"></div>-->
    <!--</div>-->
    <!--<div class="col-lg-7">-->
    <!--<div class="post_content">-->
    <!--<div class="post_category cat_world"><a href="category.html">world</a></div>-->
    <!--<div class="post_title"><a href="single.html">New HTML5 Codes - Freebies</a></div>-->
    <!--<div class="post_info d-flex flex-row align-items-center justify-content-start">-->
    <!--<div class="post_author d-flex flex-row align-items-center justify-content-start">-->
    <!--<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>-->
    <!--<div class="post_author_name"><a href="#">Michael Smith</a></div>-->
    <!--</div>-->
    <!--<div class="post_date"><a href="#">29 April 2018</a></div>-->
    <!--<div class="post_comments ml-auto"><a href="#">3 comments</a></div>-->
    <!--</div>-->
    <!--<div class="post_text">-->
    <!--<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>	-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; World &ndash;&gt;-->

    <!--<div class="world">-->
    <!--<div class="section_title_container d-flex flex-row align-items-start justify-content-start">-->
    <!--<div>-->
    <!--<div class="section_title">From the World</div>-->
    <!--<div class="section_subtitle">Handpicked articles</div>-->
    <!--</div>-->
    <!--<div class="section_bar"></div>-->
    <!--</div>-->
    <!--<div class="row world_row">-->
    <!--<div class="col-lg-11">-->
    <!--<div class="row">-->
    <!--<div class="col-lg-6">-->
    <!---->
    <!--&lt;!&ndash; Post &ndash;&gt;-->
    <!--<div class="post_item post_v_med d-flex flex-column align-items-start justify-content-start">-->
    <!--<div class="post_image"><img src="images/post_4.jpg" alt="https://unsplash.com/@oria_hector"></div>-->
    <!--<div class="post_content">-->
    <!--<div class="post_category cat_technology"><a href="category.html">technology</a></div>-->
    <!--<div class="post_title"><a href="single.html">Keep up with the tech</a></div>-->
    <!--<div class="post_info d-flex flex-row align-items-center justify-content-start">-->
    <!--<div class="post_author d-flex flex-row align-items-center justify-content-start">-->
    <!--<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>-->
    <!--<div class="post_author_name"><a href="#">Michael Smith</a></div>-->
    <!--</div>-->
    <!--<div class="post_date"><a href="#">29 April 2018</a></div>-->
    <!--<div class="post_comments ml-auto"><a href="#">3 comments</a></div>-->
    <!--</div>-->
    <!--<div class="post_text">-->
    <!--<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-lg-6">-->
    <!---->
    <!--&lt;!&ndash; Post &ndash;&gt;-->
    <!--<div class="post_item post_v_med d-flex flex-column align-items-start justify-content-start">-->
    <!--<div class="post_image"><img src="images/post_5.jpg" alt="https://unsplash.com/@mattyfours"></div>-->
    <!--<div class="post_content">-->
    <!--<div class="post_category cat_technology"><a href="category.html">technology</a></div>-->
    <!--<div class="post_title"><a href="single.html">Keep up with the tech</a></div>-->
    <!--<div class="post_info d-flex flex-row align-items-center justify-content-start">-->
    <!--<div class="post_author d-flex flex-row align-items-center justify-content-start">-->
    <!--<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>-->
    <!--<div class="post_author_name"><a href="#">Michael Smith</a></div>-->
    <!--</div>-->
    <!--<div class="post_date"><a href="#">29 April 2018</a></div>-->
    <!--<div class="post_comments ml-auto"><a href="#">3 comments</a></div>-->
    <!--</div>-->
    <!--<div class="post_text">-->
    <!--<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Load more button &ndash;&gt;-->
    <!--<div class="load_more">-->
    <!--<div class="load_more_button"><a href="#">load more</a></div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Sidebar &ndash;&gt;-->

    <!--<div class="col-lg-3">-->
    <!--<div class="sidebar">-->

    <!--&lt;!&ndash; Newsletter &ndash;&gt;-->
    <!--<div class="sidebar_newsletter">-->
    <!--<div class="sidebar_title">Subscribe to our newsletter</div>-->
    <!--<form action="#" id="newsletter_form" class="newsletter_form">-->
    <!--<input type="email" class="newsletter_input" placeholder="Your e-mail here" required="required">-->
    <!--<button class="newsletter_button">subscribe</button>-->
    <!--</form>-->
    <!--</div>-->

    <!--&lt;!&ndash; Extra &ndash;&gt;-->
    <!--<div class="sidebar_extra">-->
    <!--<a href="#">-->
    <!--<div class="sidebar_title">Advertisement</div>-->
    <!--<div class="sidebar_extra_container">-->
    <!--<div class="background_image" style="background-image:url(images/extra_1.jpg)"></div>-->
    <!--<div class="sidebar_extra_content">-->
    <!--<div class="sidebar_extra_title">30%</div>-->
    <!--<div class="sidebar_extra_title">off</div>-->
    <!--<div class="sidebar_extra_subtitle">Buy online now</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</a>-->
    <!--</div>-->

    <!--&lt;!&ndash; Latest Posts &ndash;&gt;-->
    <!--<div class="sidebar_latest">-->
    <!--<div class="sidebar_title">Latest Posts</div>-->
    <!--<div class="latest_posts">-->
    <!---->
    <!--&lt;!&ndash; Latest Post &ndash;&gt;-->
    <!--<div class="latest_post d-flex flex-row align-items-start justify-content-start">-->
    <!--<div><div class="latest_post_image"><img src="images/latest_1.jpg" alt="https://unsplash.com/@anniespratt"></div></div>-->
    <!--<div class="latest_post_content">-->
    <!--<div class="post_category_small cat_video"><a href="category.html">video</a></div>-->
    <!--<div class="latest_post_title"><a href="single.html">New tech development</a></div>-->
    <!--<div class="latest_post_date">March 12, 2018</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Latest Post &ndash;&gt;-->
    <!--<div class="latest_post d-flex flex-row align-items-start justify-content-start">-->
    <!--<div><div class="latest_post_image"><img src="images/latest_2.jpg" alt="https://unsplash.com/@agkdesign"></div></div>-->
    <!--<div class="latest_post_content">-->
    <!--<div class="post_category_small cat_world"><a href="category.html">world</a></div>-->
    <!--<div class="latest_post_title"><a href="single.html">New tech development</a></div>-->
    <!--<div class="latest_post_date">March 12, 2018</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Latest Post &ndash;&gt;-->
    <!--<div class="latest_post d-flex flex-row align-items-start justify-content-start">-->
    <!--<div><div class="latest_post_image"><img src="images/latest_3.jpg" alt="https://unsplash.com/@mfgonz"></div></div>-->
    <!--<div class="latest_post_content">-->
    <!--<div class="post_category_small cat_technology"><a href="category.html">tech</a></div>-->
    <!--<div class="latest_post_title"><a href="single.html">New tech development</a></div>-->
    <!--<div class="latest_post_date">March 12, 2018</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Latest Post &ndash;&gt;-->
    <!--<div class="latest_post d-flex flex-row align-items-start justify-content-start">-->
    <!--<div><div class="latest_post_image"><img src="images/latest_4.jpg" alt="https://unsplash.com/@juja_han"></div></div>-->
    <!--<div class="latest_post_content">-->
    <!--<div class="post_category_small cat_technology"><a href="category.html">tech</a></div>-->
    <!--<div class="latest_post_title"><a href="single.html">New tech development</a></div>-->
    <!--<div class="latest_post_date">March 12, 2018</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Most Viewed &ndash;&gt;-->

    <!--<div class="most_viewed">-->
    <!--<div class="sidebar_title">Most Viewed</div>-->
    <!--<div class="most_viewed_items">-->
    <!---->
    <!--&lt;!&ndash; Most Viewed Item &ndash;&gt;-->
    <!--<div class="most_viewed_item d-flex flex-row align-items-start justify-content-start">-->
    <!--<div><div class="most_viewed_num">01.</div></div>-->
    <!--<div class="most_viewed_content">-->
    <!--<div class="post_category_small cat_video"><a href="category.html">video</a></div>-->
    <!--<div class="most_viewed_title"><a href="single.html">New tech development</a></div>-->
    <!--<div class="most_viewed_date"><a href="#">March 12, 2018</a></div>-->
    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Most Viewed Item &ndash;&gt;-->
    <!--<div class="most_viewed_item d-flex flex-row align-items-start justify-content-start">-->
    <!--<div><div class="most_viewed_num">02.</div></div>-->
    <!--<div class="most_viewed_content">-->
    <!--<div class="post_category_small cat_world"><a href="category.html">world</a></div>-->
    <!--<div class="most_viewed_title"><a href="single.html">Robots are taking over</a></div>-->
    <!--<div class="most_viewed_date"><a href="#">March 12, 2018</a></div>-->
    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Most Viewed Item &ndash;&gt;-->
    <!--<div class="most_viewed_item d-flex flex-row align-items-start justify-content-start">-->
    <!--<div><div class="most_viewed_num">03.</div></div>-->
    <!--<div class="most_viewed_content">-->
    <!--<div class="post_category_small cat_technology"><a href="category.html">tech</a></div>-->
    <!--<div class="most_viewed_title"><a href="single.html">10 tips to tech world</a></div>-->
    <!--<div class="most_viewed_date"><a href="#">March 12, 2018</a></div>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Tags &ndash;&gt;-->

    <!--<div class="tags">-->
    <!--<div class="sidebar_title">Tags</div>-->
    <!--<div class="tags_content d-flex flex-row align-items-start justify-content-start flex-wrap">-->
    <!--<div class="tag cat_technology"><a href="category.html">technology</a></div>-->
    <!--<div class="tag"><a href="category.html">design</a></div>-->
    <!--<div class="tag"><a href="category.html">travel</a></div>-->
    <!--<div class="tag cat_video"><a href="category.html">video</a></div>-->
    <!--<div class="tag cat_party"><a href="category.html">party</a></div>-->
    <!--<div class="tag"><a href="category.html">music</a></div>-->
    <!--<div class="tag cat_world"><a href="category.html">world</a></div>-->
    <!--<div class="tag"><a href="category.html">adventure</a></div>-->
    <!--</div>-->
    <!--</div>-->

    <!--&lt;!&ndash; Extra &ndash;&gt;-->
    <!--<div class="sidebar_extra">-->
    <!--<a href="#">-->
    <!--<div class="sidebar_title">Advertisement</div>-->
    <!--<div class="sidebar_extra_container">-->
    <!--<div class="background_image" style="background-image:url(images/extra_2.jpg)"></div>-->
    <!--<div class="sidebar_extra_content">-->
    <!--<div class="sidebar_extra_title">30%</div>-->
    <!--<div class="sidebar_extra_title">off</div>-->
    <!--<div class="sidebar_extra_subtitle">Buy online now</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</a>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
@endsection