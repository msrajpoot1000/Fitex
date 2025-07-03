@extends('user.layouts.app')

@section('title', 'Allied Print Pack | Contact Us')

@section('write')

    <div class="cs_site_header_spacing_130"></div>
    <!-- Start Page Heading -->
    <section class="cs_page_heading cs_bg_filed cs_center cs_primary_bg text-center" data-src="assets/img/page_heading_1.jpg">
        <div class="container">
            <h1 class="cs_white_color cs_semibold cs_white_color cs_mb_10 cs_fs_64">Contact Us</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
        </div>
    </section>
    <!-- End Page Heading -->
    <!-- Start Contact Section -->
    <section>
        <div class="cs_height_120 cs_height_lg_80"></div>
        <div class="container">
            <div class="row cs_gap_y_50">
                <div class="col-xxl-6 col-lg-7">
                    <h2 class="cs_fs_48 cs_semibold cs_mb_22">Contact Information</h2>
                    <p class="cs_mb_30">Our QuickCool Installation service provides fast and efficient installation of new
                        air conditioning units. Our certified technicians will ensure your system is air an installed
                        correctly and safely,</p>
                    <div class="row cs_gap_y_30 cs_row_gap_30">
                        <div class="col-xl-6">
                            <div class="cs_iconbox cs_style_3">
                                <div class="cs_iconbox_icon cs_center">
                                    <img src="assets/img/icons/contact_icon_1.svg" alt="Icon">
                                </div>
                                <div class="cs_iconbox_right">
                                    <h3 class="cs_fs_20 cs_medium cs_mb_5">Our Address</h3>
                                    <p class="mb-0">6391 Elgin St. Celina, <br>Delaware 10299</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="cs_iconbox cs_style_3">
                                <div class="cs_iconbox_icon cs_center">
                                    <img src="assets/img/icons/contact_icon_2.svg" alt="Icon">
                                </div>
                                <div class="cs_iconbox_right">
                                    <h3 class="cs_fs_20 cs_medium cs_mb_5">Phone Number</h3>
                                    <p class="mb-0">+(163)-5565-0697 <br>(+578) 587 89168</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="cs_iconbox cs_style_3">
                                <div class="cs_iconbox_icon cs_center">
                                    <img src="assets/img/icons/contact_icon_3.svg" alt="Icon">
                                </div>
                                <div class="cs_iconbox_right">
                                    <h3 class="cs_fs_20 cs_medium cs_mb_5">Email Address</h3>
                                    <p class="mb-0">info@gmail.com <br>demo@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="cs_iconbox cs_style_3">
                                <div class="cs_iconbox_icon cs_center">
                                    <img src="assets/img/icons/contact_icon_4.svg" alt="Icon">
                                </div>
                                <div class="cs_iconbox_right">
                                    <h3 class="cs_fs_20 cs_medium cs_mb_5">Working Time</h3>
                                    <p class="mb-0">Work Time: Sun - Fri <br>10AM - 6PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cs_height_35 cs_height_lg_35"></div>
                    <h3 class="cs_fs_24 cs_semibold cs_mb_10">Follow The Social Media:</h3>
                    <p class="cs_mb_20">Ensure your AC system is ready for the hottest days with our Comfort Check Tune-Up
                    </p>
                    <div class="cs_social_btns cs_style_1 cs_type_1">
                        <a href="#" class="cs_social_btn cs_center">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="cs_social_btn cs_center">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="cs_social_btn cs_center">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="#" class="cs_social_btn cs_center">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-5 offset-xxl-1 col-lg-5">
                    <form action="{{ route('contact.store') }}" method="POST" class="cs_contact_form">
                        @csrf

                        <h2 class="text-center cs_fs_36 cs_semibold">Feel Free to Contact Us</h2>

                        {{-- Name --}}
                        <input type="text" name="name"
                            class="cs_form_field cs_mb_22 @error('name') is-invalid @enderror" placeholder="Your Name"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror

                        {{-- Email --}}
                        <input type="email" name="email"
                            class="cs_form_field cs_mb_22 @error('email') is-invalid @enderror" placeholder="Your Email"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror

                        {{-- Subject --}}
                        <input type="text" name="subject"
                            class="cs_form_field cs_mb_22 @error('subject') is-invalid @enderror"
                            placeholder="Select Subject" value="{{ old('subject') }}">
                        @error('subject')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror

                        {{-- Message --}}
                        <textarea name="message" cols="30" rows="4"
                            class="cs_form_field cs_mb_22 @error('message') is-invalid @enderror" placeholder="Write Message...">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror

                        {{-- Submit --}}
                        <button class="cs_btn cs_style_1 w-100" type="submit">
                            <span>Appointment Now</span>
                        </button>
                    </form>

                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End Contact Section -->
    <!-- Start Map Section -->
    <div class="cs_map">
        <iframe id="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd"
            allowfullscreen></iframe>
    </div>
    <!-- End Map Section -->
@endsection



@section('script')
    <!-- Toastr JS & CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            @if (Session::has('message'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                };
                toastr.success("{{ session('message') }}");
            @endif

            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                };
                toastr.error("{{ session('error') }}");
            @endif

            @if (Session::has('success'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                };
                toastr.success("{{ session('success') }}");
            @endif
        });
    </script>

    <style>
        .toast-success {
            background-color: #ff5500 !important;
            color: #fff !important;
        }
    </style>
@endsection
