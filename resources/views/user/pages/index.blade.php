@php
    use Illuminate\Support\Facades\DB;
    $company = DB::table('companyinfos')->first(); // ✅ returns only the first row (an object)
@endphp
@extends('user.layouts.app')

@section('title', 'Fitex Uniforms | Home')

@section('style')
    <style>
        .testimonial-pagination {
            margin-top: -3rem !important;
            /* border: 1px solid red; */
            /* width: 100%; */
            display: flex;
            justify-content: left;
            align-content: center
        }

        .why-choose-banner-design {
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: scroll;
            background-color: #f0f0f0;
        }
    </style>
@endsection

@section('write')
    <!-- Body main wrapper start -->

    <div class="cs_site_header_spacing_130"></div>
    <!-- End Header Section -->
    <!-- Start Hero Section -->
    <section class="cs_slider cs_style_1">
        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="900" data-center="0" data-variable-width="0"
            data-slides-per-view="1">
            <div class="cs_slider_wrapper">
                @foreach ($homeSliders as $item)
                    <div class="cs_slide">
                        <div class="cs_hero cs_style_1 cs_bg_filed cs_primary_bg cs_center" data-src="">
                            <div class="container">
                                <div class="cs_hero_text wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
                                    <h3 class="cs_hero_mini_title cs_accent_color cs_fs_18 cs_medium cs_mb_8">
                                        <img src="assets/img/icons/fan.svg" alt="">
                                        Fitex Uniforms
                                    </h3>
                                    <h1 class="cs_hero_title cs_white_color cs_fs_74 cs_mb_18">{{ $item->title }}</h1>
                                    <p class="cs_hero_subtitle cs_white_color cs_mb_34">{!! $item->description !!}</p>
                                    <div class="cs_hero_btns">
                                        <a href="{{ route('user.pages.contact') }}" class="cs_btn cs_style_1">
                                            <span>Contact Us</span>
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.28125 0.71875L13.7812 5.96875C13.9271 6.11458 14 6.29167 14 6.5C14 6.70833 13.9271 6.88542 13.7812 7.03125L8.28125 12.2812C7.90625 12.5729 7.55208 12.5729 7.21875 12.2812C6.92708 11.9062 6.92708 11.5521 7.21875 11.2188L11.375 7.25H0.75C0.291667 7.20833 0.0416667 6.95833 0 6.5C0.0416667 6.04167 0.291667 5.79167 0.75 5.75H11.375L7.21875 1.78125C6.92708 1.44792 6.92708 1.09375 7.21875 0.71875C7.55208 0.427083 7.90625 0.427083 8.28125 0.71875Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="cs_hero_img">
                                <img src="{{ asset($item->banner_image) }}" alt="" style="opacity: 0.4;">
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="cs_slide">
                    <div class="cs_hero cs_style_1 cs_bg_filed cs_primary_bg cs_center"
                        data-src="assets/img/hero_bg_2x.jpg">
                        <div class="container">
                            <div class="cs_hero_text wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
                                <h3 class="cs_hero_mini_title cs_accent_color cs_fs_18 cs_medium cs_mb_8">
                                    <img src="assets/img/icons/fan.svg" alt="">
                                    Fitex
                                </h3>
                                <h1 class="cs_hero_title cs_white_color cs_fs_74 cs_mb_18">Smart Uniforms for Smarter
                                    Futures</h1>
                                <p class="cs_hero_subtitle cs_white_color cs_mb_34">Give your students the perfect blend of
                                    comfort, durability, and smart design. Our school uniforms are tailored to inspire
                                    confidence and support active learning every day.</p>
                                <div class="cs_hero_btns">
                                    <a href="{{ route('user.pages.contact') }}" class="cs_btn cs_style_1">
                                        <span>Contact Us</span>
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.28125 0.71875L13.7812 5.96875C13.9271 6.11458 14 6.29167 14 6.5C14 6.70833 13.9271 6.88542 13.7812 7.03125L8.28125 12.2812C7.90625 12.5729 7.55208 12.5729 7.21875 12.2812C6.92708 11.9062 6.92708 11.5521 7.21875 11.2188L11.375 7.25H0.75C0.291667 7.20833 0.0416667 6.95833 0 6.5C0.0416667 6.04167 0.291667 5.79167 0.75 5.75H11.375L7.21875 1.78125C6.92708 1.44792 6.92708 1.09375 7.21875 0.71875C7.55208 0.427083 7.90625 0.427083 8.28125 0.71875Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                    <!--<a href="https://www.youtube.com/embed/rRid6GCJtgc" class="cs_hero_player_btn cs_video_open">-->
                                    <!--  <span class="cs_player_btn cs_center">-->
                                    <!--    <span></span>-->
                                    <!--  </span>-->
                                    <!--  <span class="cs_hero_play_btn_text">Watch Our Story</span>-->
                                    <!--</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="cs_hero_img"><img src="assets/img/hero_img_2.png" style="opacity: 0.4;" alt="">
                        </div>
                    </div>
                </div>
                <div class="cs_slide">
                    <div class="cs_hero cs_style_1 cs_bg_filed cs_primary_bg cs_center"
                        data-src="assets/img/hero_bg_33232.jpg">
                        <div class="container">
                            <div class="cs_hero_text wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
                                <h3 class="cs_hero_mini_title cs_accent_color cs_fs_18 cs_medium cs_mb_8">
                                    <img src="assets/img/icons/fan.svg" alt="">
                                    Fitex
                                </h3>
                                <h1 class="cs_hero_title cs_white_color cs_fs_74 cs_mb_18">Comfort Meets Care in Every
                                    Stitch</h1>
                                <p class="cs_hero_subtitle cs_white_color cs_mb_34">Our medical and hospitality uniforms are
                                    designed for professionals who value comfort, hygiene, and a polished look — perfect for
                                    long shifts and high-performance environments.</p>
                                <div class="cs_hero_btns">
                                    <a href="{{ route('user.pages.contact') }}" class="cs_btn cs_style_1">
                                        <span>Contact Us</span>
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.28125 0.71875L13.7812 5.96875C13.9271 6.11458 14 6.29167 14 6.5C14 6.70833 13.9271 6.88542 13.7812 7.03125L8.28125 12.2812C7.90625 12.5729 7.55208 12.5729 7.21875 12.2812C6.92708 11.9062 6.92708 11.5521 7.21875 11.2188L11.375 7.25H0.75C0.291667 7.20833 0.0416667 6.95833 0 6.5C0.0416667 6.04167 0.291667 5.79167 0.75 5.75H11.375L7.21875 1.78125C6.92708 1.44792 6.92708 1.09375 7.21875 0.71875C7.55208 0.427083 7.90625 0.427083 8.28125 0.71875Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                    <!--<a href="https://www.youtube.com/embed/rRid6GCJtgc" class="cs_hero_player_btn cs_video_open">-->
                                    <!--  <span class="cs_player_btn cs_center">-->
                                    <!--    <span></span>-->
                                    <!--  </span>-->
                                    <!--  <span class="cs_hero_play_btn_text">Watch Our Story</span>-->
                                    <!--</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="cs_hero_img"><img src="assets/img/hero_img_3.png" alt="" style="opacity: 0.4">
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="cs_pagination cs_style_1"></div>
        </div>
    </section>
    <!-- End Hero Section -->


    <!-- Start About Section -->
    {{-- <section>
        <div class="cs_height_120 cs_height_lg_80"></div>
        <div class="cs_about cs_style_1">
            <div class="container">
                <div class="row align-items-center cs_gap_y_40">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
                        <div class="cs_about_thumb">
                            <img src="assets/img/about_img_1.png" alt="About">

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cs_about_content">
                            <div class="cs_section_heading cs_style_1 cs_mb_22">
                                <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10">
                                    <img src="assets/img/icons/fan.svg" alt="" class="cs_section_subheading_icon">
                                    About us
                                </h3>
                                <h2 class="cs_section_title cs_fs_48 cs_semibold mb-0">Where Quality Meets Professionalism
                                </h2>
                            </div>
                            <p class="cs_mb_30">Fitex Uniforms is a leading manufacturer and bulk supplier of high-quality,
                                custom uniforms across a wide
                                range of industries including healthcare, hospitality, corporate, industrial, educational,
                                and security sectors.
                                With a monthly production capacity of 45,000+ pieces, we are equipped to handle large-scale
                                demands
                                without compromising on precision, quality, or delivery timelines.</p>

                            <div class="cs_height_33 cs_height_lg_30"></div>
                            <div class="cs_about_btns">

                                <div class="cs_about_phone_number">
                                    <div class="cs_about_phone_number_icon cs_accent_bg cs_center">
                                        <img src="assets/img/icons/phone_icon.svg" alt="">
                                    </div>
                                    <div class="cs_about_phone_number_right">
                                        <p class="mb-0">Call any time for New Uniform</p>
                                        <h3 class="cs_heading_color cs_fs_18 cs_medium mb-0"><a
                                                href="tel:+91{{ $company->phone }}">(+91) {{ $company->phone }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section> --}}
    <!-- End About Section -->


    {{-- uniforms served --}}


    <!-- Start Service Section -->
    <section class="cs_bg_filed" data-src="assets/img/service_bg_1.svg">
        <div class="cs_height_115 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10 wow fadeInUp"
                    data-wow-duration="0.9s" data-wow-delay="0.25s">
                    <img src="assets/img/icons/fan.svg" alt="" class="cs_section_subheading_icon">
                    our best services
                </h3>
                <h2 class="cs_section_title cs_fs_48 cs_semibold mb-0">Uniforms Served</h2>
            </div>
            <div class="cs_height_45 cs_height_lg_45"></div>
            <div class="row cs_gap_y_30">
                @foreach ($industries as $item)
                    <div class="col-lg-3 col-md-6 ">
                        <a href="{{ route('user.pages.industry-page', $item->id) }}" class="">
                            <div class="cs_service_card cs_style_1 text-center" style="height: auto">
                                <div class="cs_service_card_in shadow-box">
                                    <img src="{{ $item->logo }}" alt="">
                                    <h3 class="cs_service_card_title cs_fs_24 cs_semibold cs_mb_15">{{ $item->name }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach







            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End Service Section -->

    <!-- Start Testimonial Section -->
    <section class="cs_testimonial_1_section cs_bg_filed" data-src="assets/img/testimonial_bg.svg">
        <div class="cs_height_115 cs_height_lg_70"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="cs_section_heading cs_style_1">
                        <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10">
                            <img src="assets/img/icons/fan.svg" alt="" class="cs_section_subheading_icon">
                            Testimonials
                        </h3>
                        <h2 class="cs_section_title cs_white_color cs_fs_48 cs_semibold mb-0">Our Clients Feedback</h2>
                    </div>
                    <div class="cs_height_45 cs_height_lg_45"></div>
                    <div class="cs_slider cs_style_1">
                        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="900" data-center="0"
                            data-variable-width="0" data-slides-per-view="1">
                            <div class="cs_slider_wrapper">
                                @foreach ($testimonials as $item)
                                    <div class="cs_slide">
                                        <div class="cs_testimonial cs_style_1">
                                            <div class="cs_rating cs_accent_color" data-rating="{{ $item->rating }}">
                                                <div class="cs_rating_percentage">
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                    <i class="fa-solid fa-star fa-fw"></i>
                                                </div>
                                            </div>
                                            <blockquote class="cs_testimonial_blockquote cs_white_color cs_mb_25 cs_fs_16">
                                                {!! $item->description !!}</blockquote>
                                            <div class="cs_testimonial_avatar_box">
                                                <img src="assets/img/avatar_1.png" alt=""
                                                    class="cs_testimonial_avatar_img">
                                                <div class="cs_testimonial_avatar_right">
                                                    <h3 class="cs_fs_24 cs_accent_color cs_mb_1"> {{ $item->client_name }}
                                                    </h3>
                                                    <p class="mb-0">{{ $item->client_postion }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="testimonial-pagination">
                                <div class="cs_pagination  cs_style_2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_testimonial_1_thumb" data-src="assets/img/testimonial_img.png">
            <div class="cs_testimonial_1_quote_wrap">
                <div class="cs_testimonial_1_quote cs_accent_bg cs_center wow zoomIn" data-wow-duration="0.9s"
                    data-wow-delay="0.25s">
                    <svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 0H3.75C1.68213 0 0 1.68213 0 3.75V15C0 17.0679 1.68213 18.75 3.75 18.75H8.79578L6.89819 28.5114C6.82678 28.8782 6.92321 29.2572 7.16064 29.5453C7.39806 29.8334 7.75146 30 8.125 30H12.1747C13.2617 30 14.2279 29.2889 14.5569 28.2593L18.1958 19.6277C18.2165 19.5783 18.2342 19.5276 18.2483 19.4763C18.5815 18.2788 18.75 17.0404 18.75 15.7959V3.75C18.75 1.68213 17.0679 0 15 0Z"
                            fill="white" />
                        <path
                            d="M36.25 0H25C22.9321 0 21.25 1.68213 21.25 3.75V15C21.25 17.0679 22.9321 18.75 25 18.75H30.0464L28.1482 28.5114C28.0762 28.8782 28.1726 29.2572 28.4106 29.5453C28.6475 29.8334 29.0015 30 29.375 30H33.4253C34.5129 30 35.4785 29.2889 35.8069 28.2587L39.4458 19.6277C39.4665 19.5782 39.4836 19.5276 39.4983 19.4763C39.8315 18.2776 40 17.0392 40 15.7959V3.75C40 1.68213 38.3179 0 36.25 0Z"
                            fill="white" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start Why Choose Us Section -->
    <section class="cs_why_chose_us cs_style_1 cs_bg_filed overflow-hidden why-choose-banner-design"
        data-src="assets/img/why_choose_us.png">
        <div class="cs_height_115 cs_height_lg_70"></div>

        <div class=" wow fadeInRight container" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="">
                <div class="cs_section_heading cs_style_1">
                    <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10"
                        style="display:flex;flex-direction:row;justify-content:center">
                        <img src="assets/img/icons/fan.svg" alt="" class="cs_section_subheading_icon">
                        Why Choose Us
                    </h3>
                    <h2 class="cs_section_title cs_fs_48 cs_semibold mb-0" style="text-align: center">Built for Comfort.
                        Designed for Duty</h2>
                </div>
                <div class="cs_height_45 cs_height_lg_45"></div>
                <div class="row cs_gap_y_30 cs_row_gap_60">
                    <div class="col-sm-6">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon cs_mb_17">
                                <img src="assets/img/icons/why_chose_us_1.svg" alt="Icon">
                            </div>
                            <h3 class="cs_iconbox_title cs_fs_24 cs_semibold cs_mb_6">Premium Fabric Quality</h3>
                            <p class="cs_iconbox_subtitle mb-0">Soft, breathable, and durable fabric for everyday
                                professional wear.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon cs_mb_17">
                                <img src="assets/img/icons/why_chose_us_2.svg" alt="Icon">
                            </div>
                            <h3 class="cs_iconbox_title cs_fs_24 cs_semibold cs_mb_6"> Custom Design & Branding</h3>
                            <p class="cs_iconbox_subtitle mb-0">Add logos, colors, and styles to reflect your brand
                                identity</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon cs_mb_17">
                                <img src="assets/img/icons/why_chose_us_3.svg" alt="Icon">
                            </div>
                            <h3 class="cs_iconbox_title cs_fs_24 cs_semibold cs_mb_6">Perfect Fit & Comfort</h3>
                            <p class="cs_iconbox_subtitle mb-0">Tailored fits that ensure comfort and confidence all day
                                long.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon cs_mb_17">
                                <img src="assets/img/icons/why_chose_us_4.svg" alt="Icon">
                            </div>
                            <h3 class="cs_iconbox_title cs_fs_24 cs_semibold cs_mb_6">Bulk Orders with Timely Delivery
                            </h3>
                            <p class="cs_iconbox_subtitle mb-0">Efficient bulk production with guaranteed on-time delivery
                                every order.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_115 cs_height_lg_70"></div>
    </section>
    <!-- End Why Choose Us Section -->


    <!-- Start FAQ Section -->
    <section>
        <div class="cs_height_120 cs_height_lg_80"></div>
        <div class="container">
            <div class="row cs_gap_y_40">
                <div class="col-xl-6 wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
                    <div class="cs_faq_thumb">
                        <div class="cs_faq_thumb_1">
                            <img src="assets/img/faq_img_1.jpg" alt="">
                        </div>
                        <div class="cs_faq_thumb_2">
                            <div class="cs_faq_thumb_2_in">
                                <div class="cs_faq_experience_box cs_accent_bg text-center" <h3
                                    class="cs_fs_48 cs_white_color">3+</h3>
                                    <p class="cs_white_color mb-0">Years <br>Experience</p>
                                    <svg width="72" height="42" viewBox="0 0 72 42" class="cs_accent_color"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 42V0L72 42H0Z" fill="currentColor" />
                                    </svg>
                                </div>
                                {{-- <img src="assets/img/faq_img_21.jpg" alt=""> --}}
                            </div>
                        </div>
                        <div class="cs_thumb_text">Best Fitex Company</div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="cs_section_heading cs_style_1">
                        <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10">
                            <img src="assets/img/icons/fan.svg" alt="" class="cs_section_subheading_icon">
                            Faq
                        </h3>
                        <h2 class="cs_section_title cs_fs_48 cs_semibold mb-0">Frequently Asked Questions</h2>
                        <p class="cs_section_text">Talk to our agent directly: <strong>+1 (647) 867-3159</strong>
                            Based in Canada, serving businesses nationwide and beyond.</p>
                    </div>
                    <div class="cs_height_45 cs_height_lg_45"></div>
                    <div class="cs_accordians cs_style_1">
                        @foreach ($faqs as $item)
                            <div class="cs_accordian {{ $loop->first ? 'active' : '' }}">

                                <div class="cs_accordian_head">
                                    <h2 class="cs_accordian_title cs_fs_18 cs_medium mb-0">{{ $item->question }}</h2>
                                    <span class="cs_accordian_toggle"></span>
                                </div>
                                <div class="cs_accordian_body">
                                    <p>{!! $item->answer !!}</p>
                                </div>
                            </div><!-- .cs_accordian -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End FAQ Section -->


    <!-- Start How To Work Section -->
    {{-- <section class="cs_bg_filed" data-src="assets/img/how_to_work_bg.svg">
        <div class="cs_height_115 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading_1_with_sub">
                <div class="cs_section_heading cs_style_1">
                    <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10 wow fadeInLeft"
                        data-wow-duration="0.9s" data-wow-delay="0.25s">
                        <img src="assets/img/icons/fan.svg" alt="" class="cs_section_subheading_icon">
                        Features
                    </h3>
                    <h2 class="cs_section_title cs_fs_48 cs_semibold mb-0">What Makes Our Uniforms Stand Out</h2>
                </div>
                <p class="mb-0"> Premium-quality uniforms designed for comfort, durability, and style—custom-fit with
                    branding options to elevate professional appearance across industries.</p>
            </div>
            <div class="cs_height_45 cs_height_lg_45"></div>
            <div class="cs_card_1_wrap">
                <div class="cs_card_1_col">
                    <div class="cs_card cs_style_1">
                        <div class="cs_card_in cs_white_bg">
                            <div class="cs_card_icon cs_center cs_mb_30">
                                <img src="assets/img/icons/how_to_work_icon_1.svg" alt="">
                            </div>
                            <h3 class="cs_fs_24 cs_semibold cs_mb_6">Safety-Compliant Designs</h3>
                            <p class="cs_fs_14 cs_mb_25">Hi-vis and reinforced uniforms designed to meet industry safety
                                standards.</p>

                        </div>
                        <div class="cs_card_shape">
                            <svg width="305" height="145" viewBox="0 0 305 145" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M274.465 30.698L35.5518 41.3918L0 6.19539V120.27C0 133.924 11.1913 145 24.9875 145H280.012C293.809 145 305 133.924 305 120.27V0.478516L274.465 30.698Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cs_card_1_col">
                    <div class="cs_card cs_style_1 cs_type_1">
                        <div class="cs_card_in cs_white_bg">
                            <h3 class="cs_fs_24 cs_semibold cs_mb_6">Multiple Color & Size Options</h3>
                            <p class="cs_fs_14 cs_mb_25">Available in a wide range of colors and sizes to suit different
                                roles and body types.</p>

                            <div class="cs_card_icon cs_center">
                                <img src="assets/img/icons/how_to_work_icon_2.png" alt="">
                            </div>
                        </div>
                        <div class="cs_card_shape">
                            <svg width="305" height="146" viewBox="0 0 305 146" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M274.465 115.014L35.5518 104.253L0 139.669V24.883C0 11.1442 11.1913 -0.000549316 24.9875 -0.000549316H280.012C293.809 -0.000549316 305 11.1442 305 24.883V145.422L274.465 115.014Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cs_card_1_col">
                    <div class="cs_card cs_style_1">
                        <div class="cs_card_in cs_white_bg">
                            <div class="cs_card_icon cs_center cs_mb_30">
                                <img src="assets/img/icons/how_to_work_icon_3.svg" alt="">
                            </div>
                            <h3 class="cs_fs_24 cs_semibold cs_mb_6"> Seasonal & Weather-Friendly Fabrics</h3>
                            <p class="cs_fs_14 cs_mb_25">Options for summer, winter, and all-season wear — designed to
                                handle changing work environments. </p>

                        </div>
                        <div class="cs_card_shape">
                            <svg width="305" height="145" viewBox="0 0 305 145" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M274.465 30.698L35.5518 41.3918L0 6.19539V120.27C0 133.924 11.1913 145 24.9875 145H280.012C293.809 145 305 133.924 305 120.27V0.478516L274.465 30.698Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cs_card_1_col">
                    <div class="cs_card cs_style_1 cs_type_1">
                        <div class="cs_card_in cs_white_bg">
                            <h3 class="cs_fs_24 cs_semibold cs_mb_6">Long-Lasting Stitch Quality</h3>
                            <p class="cs_fs_14 cs_mb_25">Double-stitched seams and reinforced areas ensure durability even
                                under daily heavy use.</p>

                            <div class="cs_card_icon cs_center">
                                <img src="assets/img/icons/how_to_work_icon_4.png" alt="">
                            </div>
                        </div>
                        <div class="cs_card_shape">
                            <svg width="305" height="146" viewBox="0 0 305 146" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M274.465 115.014L35.5518 104.253L0 139.669V24.883C0 11.1442 11.1913 -0.000549316 24.9875 -0.000549316H280.012C293.809 -0.000549316 305 11.1442 305 24.883V145.422L274.465 115.014Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_70"></div>
    </section> --}}
    <!-- End How To Work Section -->

    <!-- End Blog Section -->
@endsection
