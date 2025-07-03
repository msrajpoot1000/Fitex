@php
    use Illuminate\Support\Facades\DB;
    $company = DB::table('companyinfos')->first(); // ✅ returns only the first row (an object)
@endphp
@extends('user.layouts.app')

@section('title', 'Fitex | Home')

@section('write')
    <!-- Body main wrapper start -->

    <div class="cs_site_header_spacing_130"></div>
    <!-- End Header Section -->
    <!-- Start Hero Section -->
    <section class="cs_slider cs_style_1">
        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="900" data-center="0" data-variable-width="0"
            data-slides-per-view="1">
            <div class="cs_slider_wrapper">
                <div class="cs_slide">
                    <div class="cs_hero cs_style_1 cs_bg_filed cs_primary_bg cs_center" data-src="">
                        <div class="container">
                            <div class="cs_hero_text wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
                                <h3 class="cs_hero_mini_title cs_accent_color cs_fs_18 cs_medium cs_mb_8">
                                    <img src="assets/img/icons/fan.svg" alt="">
                                    Fitex Uniforms
                                </h3>
                                <h1 class="cs_hero_title cs_white_color cs_fs_74 cs_mb_18">Your Identity, Our Uniforms</h1>
                                <p class="cs_hero_subtitle cs_white_color cs_mb_34">We design and deliver high-quality
                                    uniforms for schools, hospitals, corporates, and industries — combining comfort,
                                    durability, and style in every stitch.</p>
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
                        <div class="cs_hero_img">
                            <img src="assets/img/hero_img_1.png" alt="" style="opacity: 0.4;">
                        </div>
                    </div>
                </div>
                <div class="cs_slide">
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
                </div>
            </div>
            <div class="cs_pagination cs_style_1"></div>
        </div>
    </section>
    <!-- End Hero Section -->


    <!-- Start About Section -->
    <section>
        <div class="cs_height_120 cs_height_lg_80"></div>
        <div class="cs_about cs_style_1">
            <div class="container">
                <div class="row align-items-center cs_gap_y_40">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
                        <div class="cs_about_thumb">
                            <img src="assets/img/about_img_1.png" alt="About">
                            {{-- <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="cs_about_player_btn cs_video_open">
                                <span class="cs_player_btn cs_center">
                                    <span></span>
                                </span>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cs_about_content">
                            <div class="cs_section_heading cs_style_1 cs_mb_22">
                                <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10">
                                    <img src="assets/img/icons/fan.svg" alt=""
                                        class="cs_section_subheading_icon">
                                    About us
                                </h3>
                                <h2 class="cs_section_title cs_fs_48 cs_semibold mb-0">Where Quality Meets Professionalism
                                </h2>
                            </div>
                            <p class="cs_mb_30">Founded with a vision to elevate workplace attire, we specialize in
                                designing and manufacturing premium-quality uniforms for schools, hospitals, corporate
                                offices, industries, and more. With years of expertise and a passion for precision, we blend
                                comfort, durability, and modern style in every stitch.

                                Our team is committed to delivering tailored solutions that reflect your brand and fit your
                                team perfectly. From classic cuts to customized logos, we offer a wide range of uniform
                                options crafted to your needs.</p>

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
    </section>
    <!-- End About Section -->
    <!-- Start Service Section -->
    <section class="cs_bg_filed" data-src="assets/img/service_bg_1.svg">
        <div class="cs_height_115 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10 wow fadeInUp"
                    data-wow-duration="0.9s" data-wow-delay="0.25s">
                    <img src="assets/img/icons/fan.svg" alt="" class="cs_section_subheading_icon">
                    our bast services
                </h3>
                <h2 class="cs_section_title cs_fs_48 cs_semibold mb-0">Expert Services You Can <br>Trust</h2>
            </div>
            <div class="cs_height_45 cs_height_lg_45"></div>
            <div class="row cs_gap_y_30">
                <div class="col-lg-4 col-md-6">
                    <div class="cs_service_card cs_style_1 text-center">
                        <div class="cs_service_card_in">
                            <p class="cs_service_card_number cs_center cs_fs_48 cs_bold cs_mb_22">01</p>
                            <h3 class="cs_service_card_title cs_fs_24 cs_semibold cs_mb_15">Security Uniforms</h3>
                            <p class="cs_service_card_subtitle cs_mb_15">Smart & Durable Gear For Security Teams</p>
                            <div class="cs_service_card_icon cs_center"><img src="assets/img/icons/service_icon_1.svg"
                                    alt=""></div>
                        </div>
                        <div class="cs_service_card_bg">
                            <svg width="487" height="485" viewBox="0 0 487 485" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_6144_35471)">
                                    <path
                                        d="M106.5 96.5L159.525 41.5287C160.468 40.5518 161.767 40 163.124 40H310.906C312.245 40 313.529 40.5377 314.469 41.4926L375.5 103.5L435.35 157.511C436.4 158.459 437 159.808 437 161.223V308.815C437 310.208 436.419 311.538 435.396 312.484L376.5 367L314.432 423.692C313.511 424.533 312.308 425 311.06 425H243.5H163.124C161.767 425 160.468 424.448 159.525 423.471L106.5 368.5L51.4336 312.459C50.5148 311.524 50 310.265 50 308.955V155.071C50 153.745 50.5268 152.473 51.4645 151.536L106.5 96.5Z"
                                        fill="white" />
                                </g>
                                <g filter="url(#filter1_d_6144_3547a)">
                                    <path
                                        d="M121.367 111.337L121.373 111.331L121.38 111.324L168.772 62.2221C169.526 61.4411 170.565 61 171.65 61H303.723C304.795 61 305.821 61.4299 306.573 62.1933L361.144 117.604L361.165 117.625L361.187 117.645L414.679 165.89C415.52 166.648 416 167.728 416 168.86V300.658C416 301.773 415.535 302.837 414.716 303.595L362.079 352.287L362.074 352.292L306.574 402.954C305.837 403.627 304.876 404 303.878 404H243.5H171.65C170.565 404 169.526 403.559 168.772 402.778L121.38 353.676L121.373 353.669L72.1477 303.602C71.4122 302.854 71 301.847 71 300.798V163.332C71 162.27 71.4218 161.253 72.1724 160.502L121.367 111.337Z"
                                        stroke="currentColor" stroke-width="2" shape-rendering="crispEdges" />
                                </g>
                                <g filter="url(#filter2_d_6144_3547q)">
                                    <path
                                        d="M66 358.001H417V375.001C417 402.615 394.614 425.001 367 425.001H116C88.3858 425.001 66 402.615 66 375.001V358.001Z"
                                        fill="white" />
                                </g>
                                <path
                                    d="M403 342.501L413.612 332.268C414.882 331.044 417 331.944 417 333.708V358.001H386L403 342.501Z"
                                    fill="#ECF1F5" />
                                <path
                                    d="M80.5 342.001L69.8593 330.98C68.6209 329.698 66.45 330.554 66.4207 332.337L66 358.001H97L80.5 342.001Z"
                                    fill="#ECF1F5" />
                                <path
                                    d="M311 40.001C312.105 40.001 313.002 40.8968 312.981 42.0011C312.545 64.8809 304.645 86.7148 290.887 102.933C276.728 119.624 257.524 129.001 237.5 129.001C217.476 129.001 198.272 119.624 184.113 102.933C170.355 86.7148 162.455 64.8809 162.019 42.0011C161.998 40.8968 162.895 40.001 164 40.001L311 40.001Z"
                                    fill="currentColor" />
                                <defs>
                                    <filter id="filter0_d_6144_35471" x="0" y="0" width="487" height="485"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                    <filter id="filter1_d_6144_3547a" x="20" y="20" width="447" height="445"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                    <filter id="filter2_d_6144_3547q" x="16" y="318.001" width="451" height="167"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_service_card cs_style_1 text-center">
                        <div class="cs_service_card_in">
                            <p class="cs_service_card_number cs_center cs_fs_48 cs_bold cs_mb_22">02</p>
                            <h3 class="cs_service_card_title cs_fs_24 cs_semibold cs_mb_15">Healthcare Uniforms</h3>
                            <p class="cs_service_card_subtitle cs_mb_15">Rugged Wear Built For The Toughest Jobs
                            </p>
                            <div class="cs_service_card_icon cs_center"><img src="assets/img/icons/service_icon_2.svg"
                                    alt=""></div>
                        </div>
                        <div class="cs_service_card_bg">
                            <svg width="487" height="485" viewBox="0 0 487 485" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_6144_35472)">
                                    <path
                                        d="M106.5 96.5L159.525 41.5287C160.468 40.5518 161.767 40 163.124 40H310.906C312.245 40 313.529 40.5377 314.469 41.4926L375.5 103.5L435.35 157.511C436.4 158.459 437 159.808 437 161.223V308.815C437 310.208 436.419 311.538 435.396 312.484L376.5 367L314.432 423.692C313.511 424.533 312.308 425 311.06 425H243.5H163.124C161.767 425 160.468 424.448 159.525 423.471L106.5 368.5L51.4336 312.459C50.5148 311.524 50 310.265 50 308.955V155.071C50 153.745 50.5268 152.473 51.4645 151.536L106.5 96.5Z"
                                        fill="white" />
                                </g>
                                <g filter="url(#filter1_d_6144_3547x)">
                                    <path
                                        d="M121.367 111.337L121.373 111.331L121.38 111.324L168.772 62.2221C169.526 61.4411 170.565 61 171.65 61H303.723C304.795 61 305.821 61.4299 306.573 62.1933L361.144 117.604L361.165 117.625L361.187 117.645L414.679 165.89C415.52 166.648 416 167.728 416 168.86V300.658C416 301.773 415.535 302.837 414.716 303.595L362.079 352.287L362.074 352.292L306.574 402.954C305.837 403.627 304.876 404 303.878 404H243.5H171.65C170.565 404 169.526 403.559 168.772 402.778L121.38 353.676L121.373 353.669L72.1477 303.602C71.4122 302.854 71 301.847 71 300.798V163.332C71 162.27 71.4218 161.253 72.1724 160.502L121.367 111.337Z"
                                        stroke="currentColor" stroke-width="2" shape-rendering="crispEdges" />
                                </g>
                                <g filter="url(#filter2_d_6144_3547w)">
                                    <path
                                        d="M66 358.001H417V375.001C417 402.615 394.614 425.001 367 425.001H116C88.3858 425.001 66 402.615 66 375.001V358.001Z"
                                        fill="white" />
                                </g>
                                <path
                                    d="M403 342.501L413.612 332.268C414.882 331.044 417 331.944 417 333.708V358.001H386L403 342.501Z"
                                    fill="#ECF1F5" />
                                <path
                                    d="M80.5 342.001L69.8593 330.98C68.6209 329.698 66.45 330.554 66.4207 332.337L66 358.001H97L80.5 342.001Z"
                                    fill="#ECF1F5" />
                                <path
                                    d="M311 40.001C312.105 40.001 313.002 40.8968 312.981 42.0011C312.545 64.8809 304.645 86.7148 290.887 102.933C276.728 119.624 257.524 129.001 237.5 129.001C217.476 129.001 198.272 119.624 184.113 102.933C170.355 86.7148 162.455 64.8809 162.019 42.0011C161.998 40.8968 162.895 40.001 164 40.001L311 40.001Z"
                                    fill="currentColor" />
                                <defs>
                                    <filter id="filter0_d_6144_35472" x="0" y="0" width="487" height="485"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                    <filter id="filter1_d_6144_3547x" x="20" y="20" width="447" height="445"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                    <filter id="filter2_d_6144_3547w" x="16" y="318.001" width="451" height="167"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_service_card cs_style_1 text-center">
                        <div class="cs_service_card_in">
                            <p class="cs_service_card_number cs_center cs_fs_48 cs_bold cs_mb_22">03</p>
                            <h3 class="cs_service_card_title cs_fs_24 cs_semibold cs_mb_15"> Construction Uniforms</h3>
                            <p class="cs_service_card_subtitle cs_mb_15">Elegant Uniforms That Reflect Your Brand</p>
                            <div class="cs_service_card_icon cs_center"><img src="assets/img/icons/service_icon_3.svg"
                                    alt=""></div>
                        </div>
                        <div class="cs_service_card_bg">
                            <svg width="487" height="485" viewBox="0 0 487 485" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_6144_35472)">
                                    <path
                                        d="M106.5 96.5L159.525 41.5287C160.468 40.5518 161.767 40 163.124 40H310.906C312.245 40 313.529 40.5377 314.469 41.4926L375.5 103.5L435.35 157.511C436.4 158.459 437 159.808 437 161.223V308.815C437 310.208 436.419 311.538 435.396 312.484L376.5 367L314.432 423.692C313.511 424.533 312.308 425 311.06 425H243.5H163.124C161.767 425 160.468 424.448 159.525 423.471L106.5 368.5L51.4336 312.459C50.5148 311.524 50 310.265 50 308.955V155.071C50 153.745 50.5268 152.473 51.4645 151.536L106.5 96.5Z"
                                        fill="white" />
                                </g>
                                <g filter="url(#filter1_d_6144_3547x)">
                                    <path
                                        d="M121.367 111.337L121.373 111.331L121.38 111.324L168.772 62.2221C169.526 61.4411 170.565 61 171.65 61H303.723C304.795 61 305.821 61.4299 306.573 62.1933L361.144 117.604L361.165 117.625L361.187 117.645L414.679 165.89C415.52 166.648 416 167.728 416 168.86V300.658C416 301.773 415.535 302.837 414.716 303.595L362.079 352.287L362.074 352.292L306.574 402.954C305.837 403.627 304.876 404 303.878 404H243.5H171.65C170.565 404 169.526 403.559 168.772 402.778L121.38 353.676L121.373 353.669L72.1477 303.602C71.4122 302.854 71 301.847 71 300.798V163.332C71 162.27 71.4218 161.253 72.1724 160.502L121.367 111.337Z"
                                        stroke="currentColor" stroke-width="2" shape-rendering="crispEdges" />
                                </g>
                                <g filter="url(#filter2_d_6144_3547w)">
                                    <path
                                        d="M66 358.001H417V375.001C417 402.615 394.614 425.001 367 425.001H116C88.3858 425.001 66 402.615 66 375.001V358.001Z"
                                        fill="white" />
                                </g>
                                <path
                                    d="M403 342.501L413.612 332.268C414.882 331.044 417 331.944 417 333.708V358.001H386L403 342.501Z"
                                    fill="#ECF1F5" />
                                <path
                                    d="M80.5 342.001L69.8593 330.98C68.6209 329.698 66.45 330.554 66.4207 332.337L66 358.001H97L80.5 342.001Z"
                                    fill="#ECF1F5" />
                                <path
                                    d="M311 40.001C312.105 40.001 313.002 40.8968 312.981 42.0011C312.545 64.8809 304.645 86.7148 290.887 102.933C276.728 119.624 257.524 129.001 237.5 129.001C217.476 129.001 198.272 119.624 184.113 102.933C170.355 86.7148 162.455 64.8809 162.019 42.0011C161.998 40.8968 162.895 40.001 164 40.001L311 40.001Z"
                                    fill="currentColor" />
                                <defs>
                                    <filter id="filter0_d_6144_35472" x="0" y="0" width="487" height="485"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                    <filter id="filter1_d_6144_3547x" x="20" y="20" width="447" height="445"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                    <filter id="filter2_d_6144_3547w" x="16" y="318.001" width="451" height="167"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cs_service_card cs_style_1 text-center">
                        <div class="cs_service_card_in">
                            <p class="cs_service_card_number cs_center cs_fs_48 cs_bold cs_mb_22">04</p>
                            <h3 class="cs_service_card_title cs_fs_24 cs_semibold cs_mb_15">Hospitality Uniforms</h3>
                            <p class="cs_service_card_subtitle cs_mb_15">Comfortable Scrubs & Attire For Caregivers</p>

                            <div class="cs_service_card_icon cs_center"><img src="assets/img/icons/service_icon_4.png"
                                    alt=""></div>
                        </div>
                        <div class="cs_service_card_bg">
                            <svg width="487" height="485" viewBox="0 0 487 485" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_6144_35474)">
                                    <path
                                        d="M106.5 96.5L159.525 41.5287C160.468 40.5518 161.767 40 163.124 40H310.906C312.245 40 313.529 40.5377 314.469 41.4926L375.5 103.5L435.35 157.511C436.4 158.459 437 159.808 437 161.223V308.815C437 310.208 436.419 311.538 435.396 312.484L376.5 367L314.432 423.692C313.511 424.533 312.308 425 311.06 425H243.5H163.124C161.767 425 160.468 424.448 159.525 423.471L106.5 368.5L51.4336 312.459C50.5148 311.524 50 310.265 50 308.955V155.071C50 153.745 50.5268 152.473 51.4645 151.536L106.5 96.5Z"
                                        fill="white" />
                                </g>
                                <g filter="url(#filter1_d_6144_3547v)">
                                    <path
                                        d="M121.367 111.337L121.373 111.331L121.38 111.324L168.772 62.2221C169.526 61.4411 170.565 61 171.65 61H303.723C304.795 61 305.821 61.4299 306.573 62.1933L361.144 117.604L361.165 117.625L361.187 117.645L414.679 165.89C415.52 166.648 416 167.728 416 168.86V300.658C416 301.773 415.535 302.837 414.716 303.595L362.079 352.287L362.074 352.292L306.574 402.954C305.837 403.627 304.876 404 303.878 404H243.5H171.65C170.565 404 169.526 403.559 168.772 402.778L121.38 353.676L121.373 353.669L72.1477 303.602C71.4122 302.854 71 301.847 71 300.798V163.332C71 162.27 71.4218 161.253 72.1724 160.502L121.367 111.337Z"
                                        stroke="currentColor" stroke-width="2" shape-rendering="crispEdges" />
                                </g>
                                <g filter="url(#filter2_d_6144_3547r)">
                                    <path
                                        d="M66 358.001H417V375.001C417 402.615 394.614 425.001 367 425.001H116C88.3858 425.001 66 402.615 66 375.001V358.001Z"
                                        fill="white" />
                                </g>
                                <path
                                    d="M403 342.501L413.612 332.268C414.882 331.044 417 331.944 417 333.708V358.001H386L403 342.501Z"
                                    fill="#ECF1F5" />
                                <path
                                    d="M80.5 342.001L69.8593 330.98C68.6209 329.698 66.45 330.554 66.4207 332.337L66 358.001H97L80.5 342.001Z"
                                    fill="#ECF1F5" />
                                <path
                                    d="M311 40.001C312.105 40.001 313.002 40.8968 312.981 42.0011C312.545 64.8809 304.645 86.7148 290.887 102.933C276.728 119.624 257.524 129.001 237.5 129.001C217.476 129.001 198.272 119.624 184.113 102.933C170.355 86.7148 162.455 64.8809 162.019 42.0011C161.998 40.8968 162.895 40.001 164 40.001L311 40.001Z"
                                    fill="currentColor" />
                                <defs>
                                    <filter id="filter0_d_6144_35474" x="0" y="0" width="487" height="485"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                    <filter id="filter1_d_6144_3547v" x="20" y="20" width="447" height="445"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                    <filter id="filter2_d_6144_3547r" x="16" y="318.001" width="451" height="167"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="10" />
                                        <feGaussianBlur stdDeviation="25" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_6144_3547" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6144_3547"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End Service Section -->
    <!-- Start Team Section -->
    <!--<section>-->
    <!--  <div class="cs_height_115 cs_height_lg_70"></div>-->
    <!--  <div class="container">-->
    <!--    <div class="cs_slider cs_style_1 cs_slider_gap_30">-->
    <!--      <div class="cs_slider_heading_1">-->
    <!--        <div class="cs_section_heading cs_style_1">-->
    <!--          <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10 wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">-->
    <!--            <img src="assets/img/icons/fan.svg" alt="" class="cs_section_subheading_icon">-->
    <!--            Expert Team-->
    <!--          </h3>-->
    <!--          <h2 class="cs_section_title cs_fs_48 cs_semibold mb-0">Meet Our Team of Expert</h2>-->
    <!--        </div>-->
    <!--        <div class="cs_slider_arrows cs_style_2 cs_hide_md">-->
    <!--          <div class="cs_left_arrow cs_slider_arrow cs_center">-->
    <!--            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--              <g clip-path="url(#clip0_5_106)">-->
    <!--              <path d="M6.4 1.59961L7.52 2.71961L3.04 7.19961H16V8.79961H3.04L7.52 13.2796L6.4 14.3996L0 7.99961L6.4 1.59961Z" fill="white"/>-->
    <!--              </g>-->
    <!--              <defs>-->
    <!--              <clipPath id="clip0_5_106">-->
    <!--              <rect width="16" height="16" fill="white" transform="matrix(-1 0 0 1 16 0)"/>-->
    <!--              </clipPath>-->
    <!--              </defs>-->
    <!--            </svg> -->
    <!--          </div>-->
    <!--          <div class="cs_right_arrow cs_slider_arrow cs_center">-->
    <!--            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--              <g clip-path="url(#clip0_5_66)">-->
    <!--              <path d="M9.6 1.59961L8.48 2.71961L12.96 7.19961H0V8.79961H12.96L8.48 13.2796L9.6 14.3996L16 7.99961L9.6 1.59961Z" fill="white"/>-->
    <!--              </g>-->
    <!--              <defs>-->
    <!--              <clipPath id="clip0_5_66">-->
    <!--              <rect width="16" height="16" fill="white"/>-->
    <!--              </clipPath>-->
    <!--              </defs>-->
    <!--            </svg> -->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="cs_height_45 cs_height_lg_45"></div>-->
    <!--      <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3" data-add-slides="4">-->
    <!--        <div class="cs_slider_wrapper">-->
    <!--          <div class="cs_slide">-->
    <!--            <div class="cs_team_member cs_style_1 text-center">-->
    <!--              <div class="cs_team_member_in">-->
    <!--                <div class="cs_team_member_thumb">-->
    <!--                  <img src="assets/img/team_member_1.png" alt="">-->
    <!--                  <div class="cs_member_social_btns">-->
    <!--                    <span class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-solid fa-share-alt"></i>-->
    <!--                    </span>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-linkedin-in"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-twitter"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-youtube"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-facebook-f"></i>-->
    <!--                    </a>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--                <div class="cs_team_member_info">-->
    <!--                  <h3 class="cs_team_member_name cs_fs_24 cs_semibold cs_mb_4">Kathryn Murphy</h3>-->
    <!--                  <p class="cs_team_member_designation cs_fs_14 mb-0">Managing Partner</p>-->
    <!--                </div>-->
    <!--                <div class="cs_team_member_phone_number cs_fs_18 cs_heading_color">-->
    <!--                  <img src="assets/img/icons/phone_icon_2.svg" alt="">-->
    <!--                  (+108) 444-0245-->
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="cs_team_member_shape cs_accent_color">-->
    <!--                <svg width="300" height="407" viewBox="0 0 300 407" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.498047V407H300V212.548C175.575 177.381 69.7706 101.188 0 0.498047Z" fill="currentColor"/>-->
    <!--                </svg>                                       -->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="cs_slide">-->
    <!--            <div class="cs_team_member cs_style_1 text-center">-->
    <!--              <div class="cs_team_member_in">-->
    <!--                <div class="cs_team_member_thumb">-->
    <!--                  <img src="assets/img/team_member_2.png" alt="">-->
    <!--                  <div class="cs_member_social_btns">-->
    <!--                    <span class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-solid fa-share-alt"></i>-->
    <!--                    </span>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-linkedin-in"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-twitter"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-youtube"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-facebook-f"></i>-->
    <!--                    </a>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--                <div class="cs_team_member_info">-->
    <!--                  <h3 class="cs_team_member_name cs_fs_24 cs_semibold cs_mb_4">Marvin McKinney</h3>-->
    <!--                  <p class="cs_team_member_designation cs_fs_14 mb-0">President Of Sales</p>-->
    <!--                </div>-->
    <!--                <div class="cs_team_member_phone_number cs_fs_18 cs_heading_color">-->
    <!--                  <img src="assets/img/icons/phone_icon_2.svg" alt="">-->
    <!--                  (+108) 213-1254-->
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="cs_team_member_shape cs_accent_color">-->
    <!--                <svg width="300" height="407" viewBox="0 0 300 407" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.498047V407H300V212.548C175.575 177.381 69.7706 101.188 0 0.498047Z" fill="currentColor"/>-->
    <!--                </svg>                                       -->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="cs_slide">-->
    <!--            <div class="cs_team_member cs_style_1 text-center">-->
    <!--              <div class="cs_team_member_in">-->
    <!--                <div class="cs_team_member_thumb">-->
    <!--                  <img src="assets/img/team_member_3.png" alt="">-->
    <!--                  <div class="cs_member_social_btns">-->
    <!--                    <span class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-solid fa-share-alt"></i>-->
    <!--                    </span>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-linkedin-in"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-twitter"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-youtube"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-facebook-f"></i>-->
    <!--                    </a>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--                <div class="cs_team_member_info">-->
    <!--                  <h3 class="cs_team_member_name cs_fs_24 cs_semibold cs_mb_4">Darlene Robertson</h3>-->
    <!--                  <p class="cs_team_member_designation cs_fs_14 mb-0">Project Manager</p>-->
    <!--                </div>-->
    <!--                <div class="cs_team_member_phone_number cs_fs_18 cs_heading_color">-->
    <!--                  <img src="assets/img/icons/phone_icon_2.svg" alt="">-->
    <!--                  (+108) 543-2352-->
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="cs_team_member_shape cs_accent_color">-->
    <!--                <svg width="300" height="407" viewBox="0 0 300 407" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.498047V407H300V212.548C175.575 177.381 69.7706 101.188 0 0.498047Z" fill="currentColor"/>-->
    <!--                </svg>                                       -->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="cs_slide">-->
    <!--            <div class="cs_team_member cs_style_1 text-center">-->
    <!--              <div class="cs_team_member_in">-->
    <!--                <div class="cs_team_member_thumb">-->
    <!--                  <img src="assets/img/team_member_4.png" alt="">-->
    <!--                  <div class="cs_member_social_btns">-->
    <!--                    <span class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-solid fa-share-alt"></i>-->
    <!--                    </span>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-linkedin-in"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-twitter"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-youtube"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-facebook-f"></i>-->
    <!--                    </a>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--                <div class="cs_team_member_info">-->
    <!--                  <h3 class="cs_team_member_name cs_fs_24 cs_semibold cs_mb_4">Cameron William</h3>-->
    <!--                  <p class="cs_team_member_designation cs_fs_14 mb-0">Managing Partner</p>-->
    <!--                </div>-->
    <!--                <div class="cs_team_member_phone_number cs_fs_18 cs_heading_color">-->
    <!--                  <img src="assets/img/icons/phone_icon_2.svg" alt="">-->
    <!--                  (+108) 122-3215-->
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="cs_team_member_shape cs_accent_color">-->
    <!--                <svg width="300" height="407" viewBox="0 0 300 407" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.498047V407H300V212.548C175.575 177.381 69.7706 101.188 0 0.498047Z" fill="currentColor"/>-->
    <!--                </svg>                                       -->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="cs_slide">-->
    <!--            <div class="cs_team_member cs_style_1 text-center">-->
    <!--              <div class="cs_team_member_in">-->
    <!--                <div class="cs_team_member_thumb">-->
    <!--                  <img src="assets/img/team_member_2.png" alt="">-->
    <!--                  <div class="cs_member_social_btns">-->
    <!--                    <span class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-solid fa-share-alt"></i>-->
    <!--                    </span>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-linkedin-in"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-twitter"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-youtube"></i>-->
    <!--                    </a>-->
    <!--                    <a href="#" class="cs_member_social_item cs_center">-->
    <!--                      <i class="fa-brands fa-facebook-f"></i>-->
    <!--                    </a>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--                <div class="cs_team_member_info">-->
    <!--                  <h3 class="cs_team_member_name cs_fs_24 cs_semibold cs_mb_4">Marvin McKinney</h3>-->
    <!--                  <p class="cs_team_member_designation cs_fs_14 mb-0">President Of Sales</p>-->
    <!--                </div>-->
    <!--                <div class="cs_team_member_phone_number cs_fs_18 cs_heading_color">-->
    <!--                  <img src="assets/img/icons/phone_icon_2.svg" alt="">-->
    <!--                  (+108) 213-1254-->
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="cs_team_member_shape cs_accent_color">-->
    <!--                <svg width="300" height="407" viewBox="0 0 300 407" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.498047V407H300V212.548C175.575 177.381 69.7706 101.188 0 0.498047Z" fill="currentColor"/>-->
    <!--                </svg>                                       -->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="cs_pagination cs_style_2 cs_type_1"></div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--  <div class="cs_height_120 cs_height_lg_80"></div>-->
    <!--</section>-->
    <!-- End Team Section -->
    <!-- Start Why Choose Us Section -->

    <section class="cs_why_chose_us cs_style_1 cs_bg_filed overflow-hidden" data-src="assets/img/why_choose_us_bg_1.jpg"
        style="
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: scroll;
    background-color: #f0f0f0;
  ">
        <div class="cs_height_115 cs_height_lg_70"></div>

        <div class="container wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="cs_why_chose_us_in">
                <div class="cs_section_heading cs_style_1">
                    <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10">
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
    <!-- Start Pricing Plan Section -->
    <!--<section>-->
    <!--  <div class="cs_height_115 cs_height_lg_70"></div>-->
    <!--  <div class="container">-->
    <!--    <div class="cs_tabs">-->

    <!--      <div class="cs_slider_heading_1">-->
    <!--        <div class="cs_section_heading cs_style_1">-->
    <!--          <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10">-->
    <!--            <img src="assets/img/icons/fan.svg" alt="" class="cs_section_subheading_icon">-->
    <!--            Our price plan-->
    <!--          </h3>-->
    <!--          <h2 class="cs_section_title cs_fs_48 cs_semibold mb-0">Where Comfort Meets <br>Efficiency</h2>-->
    <!--        </div>-->
    <!--        <ul class="cs_tab_links cs_style_2 cs_semibold cs_heading_font cs_mp_0 cs_heading_color">-->
    <!--          <li class="active"><a href="#Monthly">Monthly</a></li>-->
    <!--          <li><a href="#Yearly">Yearly</a></li>-->
    <!--        </ul>-->
    <!--      </div>-->
    <!--      <div class="cs_height_45 cs_height_lg_45"></div>-->
    <!--      <div class="cs_tab_body">-->
    <!--        <div class="cs_tab active" id="Monthly">-->
    <!--          <div class="row cs_gap_y_30 cs_row_gap_30">-->
    <!--            <div class="col-lg-4">-->
    <!--              <div class="cs_pricing_plan cs_style_1">-->
    <!--                <img src="assets/img/shapes/price_shape.svg" alt="" class="cs_pricing_shape">-->
    <!--                <div class="cs_pricing_plan_head">-->
    <!--                  <div class="cs_price">-->
    <!--                    <div class="cs_price_in">-->
    <!--                      <h3 class="cs_fs_36 cs_white_color cs_semibold"><span>$</span>150</h3>-->
    <!--                      <p class="cs_fs_18 cs_medium cs_white_color">Monthly</p>-->
    <!--                    </div>-->
    <!--                    <svg width="120" height="94" viewBox="0 0 120 94" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                      <path d="M10 0H110L120 15H0L10 0Z" fill="#010F34"/>-->
    <!--                      <path d="M13 0H106V79L59.5 94L13 79V0Z" fill="#FF5500"/>-->
    <!--                    </svg>       -->
    <!--                  </div>-->
    <!--                  <h2 class="cs_pricing_plan_heading mb-0 cs_fs_20 cs_medium">Basic Plan</h2>-->
    <!--                </div>-->
    <!--                <ul class="cs_pricing_features cs_mp_0 cs_heading_color">-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Refrigerant leak detection & repair </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Thermostat replacement </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li class="cs_close_featue"><img src="assets/img/icons/tick.svg" alt="">Air filter replacement</li>-->
    <!--                  <li class="cs_close_featue"><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li class="cs_close_featue"><img src="assets/img/icons/tick.svg" alt="">AC fan replacement  </li>-->
    <!--                </ul>-->
    <!--                <a href="contact.html" class="cs_btn cs_style_1 cs_type_1">-->
    <!--                  <span>Choose Plan</span>              -->
    <!--                </a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4">-->
    <!--              <div class="cs_pricing_plan cs_style_1">-->
    <!--                <img src="assets/img/shapes/price_shape.svg" alt="" class="cs_pricing_shape">-->
    <!--                <div class="cs_pricing_plan_head">-->
    <!--                  <div class="cs_price">-->
    <!--                    <div class="cs_price_in">-->
    <!--                      <h3 class="cs_fs_36 cs_white_color cs_semibold"><span>$</span>200</h3>-->
    <!--                      <p class="cs_fs_18 cs_medium cs_white_color">Monthly</p>-->
    <!--                    </div>-->
    <!--                    <svg width="120" height="94" viewBox="0 0 120 94" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                      <path d="M10 0H110L120 15H0L10 0Z" fill="#010F34"/>-->
    <!--                      <path d="M13 0H106V79L59.5 94L13 79V0Z" fill="#FF5500"/>-->
    <!--                    </svg>       -->
    <!--                  </div>-->
    <!--                  <h2 class="cs_pricing_plan_heading mb-0 cs_fs_20 cs_medium">Standard Plan</h2>-->
    <!--                </div>-->
    <!--                <ul class="cs_pricing_features cs_mp_0 cs_heading_color">-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Refrigerant leak detection & repair </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Thermostat replacement </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Air filter replacement</li>-->
    <!--                  <li class="cs_close_featue"><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li class="cs_close_featue"><img src="assets/img/icons/tick.svg" alt="">AC fan replacement  </li>-->
    <!--                </ul>-->
    <!--                <a href="contact.html" class="cs_btn cs_style_1 cs_type_1">-->
    <!--                  <span>Choose Plan</span>              -->
    <!--                </a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4">-->
    <!--              <div class="cs_pricing_plan cs_style_1">-->
    <!--                <img src="assets/img/shapes/price_shape.svg" alt="" class="cs_pricing_shape">-->
    <!--                <div class="cs_pricing_plan_head">-->
    <!--                  <div class="cs_price">-->
    <!--                    <div class="cs_price_in">-->
    <!--                      <h3 class="cs_fs_36 cs_white_color cs_semibold"><span>$</span>250</h3>-->
    <!--                      <p class="cs_fs_18 cs_medium cs_white_color">Monthly</p>-->
    <!--                    </div>-->
    <!--                    <svg width="120" height="94" viewBox="0 0 120 94" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                      <path d="M10 0H110L120 15H0L10 0Z" fill="#010F34"/>-->
    <!--                      <path d="M13 0H106V79L59.5 94L13 79V0Z" fill="#FF5500"/>-->
    <!--                    </svg>       -->
    <!--                  </div>-->
    <!--                  <h2 class="cs_pricing_plan_heading mb-0 cs_fs_20 cs_medium">Premium Plan</h2>-->
    <!--                </div>-->
    <!--                <ul class="cs_pricing_features cs_mp_0 cs_heading_color">-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Refrigerant leak detection & repair </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Thermostat replacement </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Air filter replacement</li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">AC fan replacement  </li>-->
    <!--                </ul>-->
    <!--                <a href="contact.html" class="cs_btn cs_style_1 cs_type_1">-->
    <!--                  <span>Choose Plan</span>              -->
    <!--                </a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--        <div class="cs_tab" id="Yearly">-->
    <!--          <div class="row cs_gap_y_30 cs_row_gap_30">-->
    <!--            <div class="col-lg-4">-->
    <!--              <div class="cs_pricing_plan cs_style_1">-->
    <!--                <img src="assets/img/shapes/price_shape.svg" alt="" class="cs_pricing_shape">-->
    <!--                <div class="cs_pricing_plan_head">-->
    <!--                  <div class="cs_price">-->
    <!--                    <div class="cs_price_in">-->
    <!--                      <h3 class="cs_fs_36 cs_white_color cs_semibold"><span>$</span>350</h3>-->
    <!--                      <p class="cs_fs_18 cs_medium cs_white_color">Yearly</p>-->
    <!--                    </div>-->
    <!--                    <svg width="120" height="94" viewBox="0 0 120 94" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                      <path d="M10 0H110L120 15H0L10 0Z" fill="#010F34"/>-->
    <!--                      <path d="M13 0H106V79L59.5 94L13 79V0Z" fill="#FF5500"/>-->
    <!--                    </svg>       -->
    <!--                  </div>-->
    <!--                  <h2 class="cs_pricing_plan_heading mb-0 cs_fs_20 cs_medium">Basic Plan</h2>-->
    <!--                </div>-->
    <!--                <ul class="cs_pricing_features cs_mp_0 cs_heading_color">-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Refrigerant leak detection & repair </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Thermostat replacement </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li class="cs_close_featue"><img src="assets/img/icons/tick.svg" alt="">Air filter replacement</li>-->
    <!--                  <li class="cs_close_featue"><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li class="cs_close_featue"><img src="assets/img/icons/tick.svg" alt="">AC fan replacement  </li>-->
    <!--                </ul>-->
    <!--                <a href="contact.html" class="cs_btn cs_style_1 cs_type_1">-->
    <!--                  <span>Choose Plan</span>              -->
    <!--                </a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4">-->
    <!--              <div class="cs_pricing_plan cs_style_1">-->
    <!--                <img src="assets/img/shapes/price_shape.svg" alt="" class="cs_pricing_shape">-->
    <!--                <div class="cs_pricing_plan_head">-->
    <!--                  <div class="cs_price">-->
    <!--                    <div class="cs_price_in">-->
    <!--                      <h3 class="cs_fs_36 cs_white_color cs_semibold"><span>$</span>500</h3>-->
    <!--                      <p class="cs_fs_18 cs_medium cs_white_color">Yearly</p>-->
    <!--                    </div>-->
    <!--                    <svg width="120" height="94" viewBox="0 0 120 94" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                      <path d="M10 0H110L120 15H0L10 0Z" fill="#010F34"/>-->
    <!--                      <path d="M13 0H106V79L59.5 94L13 79V0Z" fill="#FF5500"/>-->
    <!--                    </svg>       -->
    <!--                  </div>-->
    <!--                  <h2 class="cs_pricing_plan_heading mb-0 cs_fs_20 cs_medium">Standard Plan</h2>-->
    <!--                </div>-->
    <!--                <ul class="cs_pricing_features cs_mp_0 cs_heading_color">-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Refrigerant leak detection & repair </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Thermostat replacement </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Air filter replacement</li>-->
    <!--                  <li class="cs_close_featue"><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li class="cs_close_featue"><img src="assets/img/icons/tick.svg" alt="">AC fan replacement  </li>-->
    <!--                </ul>-->
    <!--                <a href="contact.html" class="cs_btn cs_style_1 cs_type_1">-->
    <!--                  <span>Choose Plan</span>              -->
    <!--                </a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4">-->
    <!--              <div class="cs_pricing_plan cs_style_1">-->
    <!--                <img src="assets/img/shapes/price_shape.svg" alt="" class="cs_pricing_shape">-->
    <!--                <div class="cs_pricing_plan_head">-->
    <!--                  <div class="cs_price">-->
    <!--                    <div class="cs_price_in">-->
    <!--                      <h3 class="cs_fs_36 cs_white_color cs_semibold"><span>$</span>600</h3>-->
    <!--                      <p class="cs_fs_18 cs_medium cs_white_color">Yearly</p>-->
    <!--                    </div>-->
    <!--                    <svg width="120" height="94" viewBox="0 0 120 94" fill="none" xmlns="http://www.w3.org/2000/svg">-->
    <!--                      <path d="M10 0H110L120 15H0L10 0Z" fill="#010F34"/>-->
    <!--                      <path d="M13 0H106V79L59.5 94L13 79V0Z" fill="#FF5500"/>-->
    <!--                    </svg>       -->
    <!--                  </div>-->
    <!--                  <h2 class="cs_pricing_plan_heading mb-0 cs_fs_20 cs_medium">Premium Plan</h2>-->
    <!--                </div>-->
    <!--                <ul class="cs_pricing_features cs_mp_0 cs_heading_color">-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Refrigerant leak detection & repair </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Thermostat replacement </li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Air filter replacement</li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">Clean condenser coil</li>-->
    <!--                  <li><img src="assets/img/icons/tick.svg" alt="">AC fan replacement  </li>-->
    <!--                </ul>-->
    <!--                <a href="contact.html" class="cs_btn cs_style_1 cs_type_1">-->
    <!--                  <span>Choose Plan</span>              -->
    <!--                </a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--  <div class="cs_height_120 cs_height_lg_80"></div>-->
    <!--</section>-->
    <!-- End Pricing Plan Section -->
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
                        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="900"
                            data-center="0" data-variable-width="0" data-slides-per-view="1">
                            <div class="cs_slider_wrapper">
                                <div class="cs_slide">
                                    <div class="cs_testimonial cs_style_1">
                                        <div class="cs_rating cs_accent_color" data-rating="4.5">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <div class="cs_rating_percentage">
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                            </div>
                                        </div>
                                        <blockquote class="cs_testimonial_blockquote cs_white_color cs_mb_25 cs_fs_16">The
                                            uniforms supplied by your team are not only professional and hygienic but also
                                            extremely comfortable for our long shifts. The fabric quality and stitching
                                            reflect premium craftsmanship.</blockquote>
                                        <div class="cs_testimonial_avatar_box">
                                            <img src="assets/img/avatar_1.png" alt=""
                                                class="cs_testimonial_avatar_img">
                                            <div class="cs_testimonial_avatar_right">
                                                <h3 class="cs_fs_24 cs_accent_color cs_mb_1"> Dr. Anjali Mehra</h3>
                                                <p class="mb-0">Chief Medical Officer, Medilife Hospital</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cs_slide">
                                    <div class="cs_testimonial cs_style_1">
                                        <div class="cs_rating cs_accent_color" data-rating="4.5">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <div class="cs_rating_percentage">
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                            </div>
                                        </div>
                                        <blockquote class="cs_testimonial_blockquote cs_white_color cs_mb_25 cs_fs_16">
                                            Durability and safety are non-negotiable on-site, and your uniforms exceed both.
                                            High-visibility, breathable fabric, and strong build — exactly what we needed
                                            for our workforce.</blockquote>
                                        <div class="cs_testimonial_avatar_box">
                                            <img src="assets/img/avatar_1.png" alt=""
                                                class="cs_testimonial_avatar_img">
                                            <div class="cs_testimonial_avatar_right">
                                                <h3 class="cs_fs_24 cs_accent_color cs_mb_1">Mr. Rajesh Verma</h3>
                                                <p class="mb-0">Project Head, Skyline Constructions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cs_slide">
                                    <div class="cs_testimonial cs_style_1">
                                        <div class="cs_rating cs_accent_color" data-rating="4.5">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <div class="cs_rating_percentage">
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                            </div>
                                        </div>
                                        <blockquote class="cs_testimonial_blockquote cs_white_color cs_mb_25 cs_fs_16">
                                            Your custom-designed uniforms have elevated our staff’s appearance and brand
                                            image. Guests frequently compliment the polished, elegant look — thank you for
                                            maintaining both style and comfort</blockquote>
                                        <div class="cs_testimonial_avatar_box">
                                            <img src="assets/img/avatar_1.png" alt=""
                                                class="cs_testimonial_avatar_img">
                                            <div class="cs_testimonial_avatar_right">
                                                <h3 class="cs_fs_24 cs_accent_color cs_mb_1">Ms. Priya Sen</h3>
                                                <p class="mb-0">Operations Manager, Golden Orchid Hotels</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cs_pagination cs_style_2"></div>
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
                        <p class="cs_section_text">Air conditioning system is best for your home Our FrostFree
                            Consultation air a service provides expert guidance tailored to your specific needs.</p>
                    </div>
                    <div class="cs_height_45 cs_height_lg_45"></div>
                    <div class="cs_accordians cs_style_1">
                        <div class="cs_accordian active">
                            <div class="cs_accordian_head">
                                <h2 class="cs_accordian_title cs_fs_18 cs_medium mb-0">Which type of uniform is best for
                                    my organization?</h2>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p>Our team provides free consultation to help you choose the right fabric, design, and
                                    style based on your industry—whether it's for schools, hospitals, corporate teams, or
                                    industrial use.</p>
                            </div>
                        </div><!-- .cs_accordian -->
                        <div class="cs_accordian">
                            <div class="cs_accordian_head">
                                <h2 class="cs_accordian_title cs_fs_18 cs_medium mb-0">Can I customize uniforms with my
                                    company logo?</h2>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p>Yes! We offer complete customization including embroidery or printing of logos, taglines,
                                    or any specific design elements.</p>
                            </div>
                        </div><!-- .cs_accordian -->
                        <div class="cs_accordian">
                            <div class="cs_accordian_head">
                                <h2 class="cs_accordian_title cs_fs_18 cs_medium mb-0">Do you offer bulk order discounts?
                                </h2>
                                <span class="cs_accordian_toggle"></span>
                            </div>
                            <div class="cs_accordian_body">
                                <p>Absolutely. We provide competitive pricing and attractive discounts for bulk or recurring
                                    orders.</p>
                            </div>
                        </div><!-- .cs_accordian -->
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End FAQ Section -->
    <!-- Start How To Work Section -->
    <section class="cs_bg_filed" data-src="assets/img/how_to_work_bg.svg">
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
    </section>
    <!-- End How To Work Section -->

    <section>
        <div class="cs_height_115 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10 wow fadeInUp"
                    data-wow-duration="0.9s" data-wow-delay="0.25s">
                    <img src="assets/img/icons/fan.svg" alt="" class="cs_section_subheading_icon">
                    Blog Post
                </h3>
                <h2 class="cs_section_title cs_fs_48 cs_semibold mb-0">Our Latest News & Updates</h2>
            </div>
            <div class="cs_height_45 cs_height_lg_45"></div>
            <div class="row cs_gap_y_30">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="cs_post cs_style_3">
                            <div class="cs_post_thumb_out">
                                <div class="cs_post_thumb_wrap">
                                    <a href="{{ route('user.pages.blog-details', $blog->id) }}" class="cs_post_thumb"><img src="{{$blog->blog_image}}"
                                            alt=""></a>
                                </div>
                                <span class="cs_posted_by cs_fs_24 cs_semibold cs_heading_color cs_heading_font">
                                    <i class="fa-regular fa-calendar-alt"></i> {{ $blog->blog_date }}
                                </span>
                            </div>
                            <div class="cs_post_info">
                                <div class="cs_post_meta cs_mb_14">
                                    <div class="cs_post_admin">
                                        <img src="assets/img/avatar_3.png" alt="" class="cs_post_admin_img">
                                        <div class="cs_post_admin_right">
                                            <span>Post</span><br>
                                            <a href="#">Admin</a>
                                        </div>
                                    </div>
                                    {{-- <span class="cs_post_comment"><i class="fa-regular fa-comments"></i>03
                                        Comments</span> --}}
                                </div>
                                <h2 class="cs_fs_24 cs_semibold cs_mb_15">
                                    <a href="{{ route('user.pages.blog-details', $blog->id) }}">{{ $blog->title }}</a>
                                </h2>
                                <p class="cs_mb_21">{{ strip_tags($blog->description) }}</p>
                                <hr>

                                <a href="{{ route('user.pages.blog-details', $blog->id) }}"
                                    class="cs_text_btn cs_fs_16 text-uppercase cs_heading_color cs_bold">
                                    READ MORE
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.28125 1.21875L13.7812 6.46875C13.9271 6.61458 14 6.79167 14 7C14 7.20833 13.9271 7.38542 13.7812 7.53125L8.28125 12.7812C7.90625 13.0729 7.55208 13.0729 7.21875 12.7812C6.92708 12.4062 6.92708 12.0521 7.21875 11.7188L11.375 7.75H0.75C0.291667 7.70833 0.0416667 7.45833 0 7C0.0416667 6.54167 0.291667 6.29167 0.75 6.25H11.375L7.21875 2.28125C6.92708 1.94792 6.92708 1.59375 7.21875 1.21875C7.55208 0.927083 7.90625 0.927083 8.28125 1.21875Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4">
                    <div class="cs_post cs_style_3">
                        <div class="cs_post_thumb_out">
                            <div class="cs_post_thumb_wrap">
                                <a href="blog-details.html" class="cs_post_thumb"><img src="assets/img/post_5.jpg"
                                        alt=""></a>
                            </div>
                            <span class="cs_posted_by cs_fs_24 cs_semibold cs_heading_color cs_heading_font">
                                <i class="fa-regular fa-calendar-alt"></i> 10 May, 2024
                            </span>
                        </div>
                        <div class="cs_post_info">
                            <div class="cs_post_meta cs_mb_14">
                                <div class="cs_post_admin">
                                    <img src="assets/img/avatar_2.png" alt="" class="cs_post_admin_img">
                                    <div class="cs_post_admin_right">
                                        <span>Post</span><br>
                                        <a href="#">Admin</a>
                                    </div>
                                </div>
                                <span class="cs_post_comment"><i class="fa-regular fa-comments"></i>14 Comments</span>
                            </div>
                            <h2 class="cs_fs_24 cs_semibold cs_mb_15">
                                <a href="blog-details.html">Your Comfort, Our Mission Cool Choice for AC</a>
                            </h2>
                            <p class="cs_mb_21">Cleaning or replacing filters sealing leaks in ductwork and using a ace
                            </p>
                            <hr>
                            <a href="blog-details.html"
                                class="cs_text_btn cs_fs_16 text-uppercase cs_heading_color cs_bold">
                                READ MORE
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.28125 1.21875L13.7812 6.46875C13.9271 6.61458 14 6.79167 14 7C14 7.20833 13.9271 7.38542 13.7812 7.53125L8.28125 12.7812C7.90625 13.0729 7.55208 13.0729 7.21875 12.7812C6.92708 12.4062 6.92708 12.0521 7.21875 11.7188L11.375 7.75H0.75C0.291667 7.70833 0.0416667 7.45833 0 7C0.0416667 6.54167 0.291667 6.29167 0.75 6.25H11.375L7.21875 2.28125C6.92708 1.94792 6.92708 1.59375 7.21875 1.21875C7.55208 0.927083 7.90625 0.927083 8.28125 1.21875Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cs_post cs_style_3">
                        <div class="cs_post_thumb_out">
                            <div class="cs_post_thumb_wrap">
                                <a href="blog-details.html" class="cs_post_thumb"><img src="assets/img/post_6.jpg"
                                        alt=""></a>
                            </div>
                            <span class="cs_posted_by cs_fs_24 cs_semibold cs_heading_color cs_heading_font">
                                <i class="fa-regular fa-calendar-alt"></i> 05 May, 2024
                            </span>
                        </div>
                        <div class="cs_post_info">
                            <div class="cs_post_meta cs_mb_14">
                                <div class="cs_post_admin">
                                    <img src="assets/img/avatar_1.png" alt="" class="cs_post_admin_img">
                                    <div class="cs_post_admin_right">
                                        <span>Post</span><br>
                                        <a href="#">Admin</a>
                                    </div>
                                </div>
                                <span class="cs_post_comment"><i class="fa-regular fa-comments"></i>25 Comments</span>
                            </div>
                            <h2 class="cs_fs_24 cs_semibold cs_mb_15">
                                <a href="blog-details.html">Your Trusted Air Cool, Stay Comfortable</a>
                            </h2>
                            <p class="cs_mb_21">We recommend annual inspections especi before the winter and after severe
                                storms</p>
                            <hr>
                            <a href="blog-details.html"
                                class="cs_text_btn cs_fs_16 text-uppercase cs_heading_color cs_bold">
                                READ MORE
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.28125 1.21875L13.7812 6.46875C13.9271 6.61458 14 6.79167 14 7C14 7.20833 13.9271 7.38542 13.7812 7.53125L8.28125 12.7812C7.90625 13.0729 7.55208 13.0729 7.21875 12.7812C6.92708 12.4062 6.92708 12.0521 7.21875 11.7188L11.375 7.75H0.75C0.291667 7.70833 0.0416667 7.45833 0 7C0.0416667 6.54167 0.291667 6.29167 0.75 6.25H11.375L7.21875 2.28125C6.92708 1.94792 6.92708 1.59375 7.21875 1.21875C7.55208 0.927083 7.90625 0.927083 8.28125 1.21875Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End Blog Section -->
@endsection
