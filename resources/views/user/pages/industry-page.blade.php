@extends('user.layouts.app')

@section('title', 'Fitex Uniform | About Us')
@section('style')
    <style>
        .clamp-1-lines {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .clamp-1-lines.no-clamp {
            -webkit-line-clamp: unset;
            overflow: visible;
            text-overflow: unset;
        }


        .clamp-2-lines {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .clamp-2-lines.no-clamp {
            -webkit-line-clamp: unset;
            overflow: visible;
            text-overflow: unset;
        }



        .clamp-3-lines {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .clamp-3-lines.no-clamp {
            -webkit-line-clamp: unset;
            overflow: visible;
            text-overflow: unset;
        }
    </style>
@endsection

@section('script')
    <script>
        document.querySelectorAll('.clamp-1-lines').forEach(element => {
            const computedStyle = getComputedStyle(element);
            const lineHeight = parseFloat(computedStyle.lineHeight);
            const lines = Math.round(element.scrollHeight / lineHeight);

            // Reset height first
            element.style.height = 'auto';

            if (lines < 1) {
                element.classList.add('no-clamp');
                element.style.height = `${lineHeight * 1}px`; // Force exactly 2 lines height
            } else if (lines === 1) {
                element.classList.add('no-clamp');
                element.style.height = 'auto'; // Exact 2 lines, no need for manual height
            } else {
                element.classList.remove('no-clamp');
                element.style.height = 'auto'; // Let clamp handle it
            }
        });


        document.querySelectorAll('.clamp-2-lines').forEach(element => {
            const computedStyle = getComputedStyle(element);
            const lineHeight = parseFloat(computedStyle.lineHeight);
            const lines = Math.round(element.scrollHeight / lineHeight);

            // Reset height first
            element.style.height = 'auto';

            if (lines < 2) {
                element.classList.add('no-clamp');
                element.style.height = `${lineHeight * 2}px`; // Force exactly 2 lines height
            } else if (lines === 2) {
                element.classList.add('no-clamp');
                element.style.height = 'auto'; // Exact 2 lines, no need for manual height
            } else {
                element.classList.remove('no-clamp');
                element.style.height = 'auto'; // Let clamp handle it
            }
        });

        document.querySelectorAll('.clamp-3-lines').forEach(element => {
            const computedStyle = getComputedStyle(element);
            const lineHeight = parseFloat(computedStyle.lineHeight);
            const lines = Math.round(element.scrollHeight / lineHeight);

            // Reset height first
            element.style.height = 'auto';

            if (lines < 3) {
                element.classList.add('no-clamp');
                element.style.height = `${lineHeight * 3}px`; // Force exactly 2 lines height
            } else if (lines === 3) {
                element.classList.add('no-clamp');
                element.style.height = 'auto'; // Exact 2 lines, no need for manual height
            } else {
                element.classList.remove('no-clamp');
                element.style.height = 'auto'; // Let clamp handle it
            }
        });
    </script>
@endsection
@section('write')
    <div class="cs_site_header_spacing_130"></div>
    <!-- Start Page Heading -->
    <section class="cs_page_heading cs_bg_filed cs_center cs_primary_bg text-center" data-src="assets/img/about_banner4.jpg">
        <div class="container">
            <h1 class="cs_white_color cs_semibold cs_white_color cs_mb_10 cs_fs_64">{{ $industry->name }}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Industry</a></li>
                <li class="breadcrumb-item active">{{ $industry->name }}</li>
            </ol>
        </div>
    </section>
    <!-- End Page Heading -->



    <!-- Start Service Section -->
    <section class="cs_bg_filed" data-src="assets/img/service_bg_1.svg">
        <div class="cs_height_115 cs_height_lg_70"></div>
        <div class="container">
            <div class="cs_section_heading cs_style_1 text-center">
                <h3 class="cs_section_subtitle cs_accent_color text-uppercase cs_medium cs_fs_20 cs_mb_10 wow fadeInUp"
                    data-wow-duration="0.9s" data-wow-delay="0.25s">
                    <img src="assets/img/icons/fan.svg" alt="" class="cs_section_subheading_icon">
                    {{-- our best services --}}
                </h3>
                <h2 class="cs_section_title cs_fs_48 cs_semibold mb-0">{{ $industry->name }} Uniforms</h2>
            </div>
            <div class="cs_height_45 cs_height_lg_45"></div>
            <div class="row cs_gap_y_30">
                @foreach ($industryPages as $item)
                    <div class="col-lg-3 col-md-6 ">
                        <a href="https://www.hostinger.com/in" class="">
                            <div class="cs_service_card cs_style_1 text-center" style="height: auto">
                                <div class="cs_service_card_in shadow-box">
                                    <img src="{{ asset($item->image) }}" alt="">
                                    <h3 class="clamp-2-lines mt-2 cs_service_card_title cs_fs_24 cs_semibold cs_mb_15">
                                        {{ $item->name }}</h3>
                                    <p class="clamp-3-lines">{{ strip_tags($item->description) }}
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








@endsection
