@extends('user.layouts.app')

@section('title', 'Allied Print Pack | About Us')

@section('write')

    <div class="cs_site_header_spacing_130"></div>
    <!-- Start Page Heading -->
    <section class="cs_page_heading cs_bg_filed cs_center cs_primary_bg text-center" data-src="assets/img/page_heading_1.jpg">
        <div class="container">
            <h1 class="cs_white_color cs_semibold cs_white_color cs_mb_10 cs_fs_64">Blog Details</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Blog Details</li>
            </ol>
        </div>
    </section>
    <!-- End Page Heading -->
    <!-- Start Blog Section -->
    <section>
        <div class="cs_height_120 cs_height_lg_80"></div>
        <div class="container">
            <div class="row cs_gap_y_60">
                <div class="col-lg-8">
                    <div class="cs_post_details_wrap">
                        <div class="cs_post cs_style_4 cs_type_1">
                           
                            <div class="cs_post_thumb" style="">
                                <img src="{{ asset($blog->blog_image) }}" alt="">
                            </div>
                            <div class="cs_post_info">
                                <ul class="cs_post_meta cs_mp_0">
                                    <li>
                                        <i class="fa-regular fa-user"></i>
                                        <span>Post <a href="#">Admin</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-calendar"></i>
                                        <span>{{ \Carbon\Carbon::parse($blog->blog_date)->format('j-F-Y') }}</span>

                                    </li>
                                    {{-- <li>
                                        <i class="fa-regular fa-comments"></i>
                                        <span>03 Comments</span>
                                    </li> --}}
                                </ul>
                                <h2 class="cs_fs_30 cs_semibold cs_mb_15">{{ $blog->title }}</h2>
                                <p>{{ strip_tags($blog->description) }}
                                </p>
                                <blockquote>
                                    <span class="cs_accent_color cs_blockquote_icon">
                                        <svg width="30" height="24" viewBox="0 0 30 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.66334 21.9311C0.930403 20.0114 0 17.8583 0 14.3681C0 8.22637 4.13381 2.72165 10.1453 0L11.6477 2.41807C6.03668 5.58368 4.93971 9.6916 4.50227 12.2816C5.40575 11.7938 6.58853 11.6236 7.74774 11.7359C10.7829 12.029 13.1754 14.6278 13.1754 17.8583C13.1754 19.4872 12.555 21.0493 11.4506 22.2011C10.3463 23.3529 8.84851 24 7.28675 24C6.42307 23.9921 5.56952 23.8052 4.77578 23.45C3.98203 23.0948 3.26396 22.5785 2.66334 21.9311ZM19.488 21.9311C17.755 20.0114 16.8246 17.8583 16.8246 14.3681C16.8246 8.22637 20.9584 2.72165 26.9699 0L28.4723 2.41807C22.8613 5.58368 21.7643 9.6916 21.3269 12.2816C22.2304 11.7938 23.4132 11.6236 24.5724 11.7359C27.6075 12.029 30 14.6278 30 17.8583C30 19.4872 29.3796 21.0493 28.2753 22.2011C27.1709 23.3529 25.6731 24 24.1114 24C23.2477 23.9921 22.3941 23.8052 21.6004 23.45C20.8067 23.0948 20.0886 22.5785 19.488 21.9311Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    Expert consultation services to help you select the best air conditioning system for
                                    your needs, whether for a new installation or an upgrade <small>ChillPro Air</small>
                                </blockquote>
                                {{-- <h2>The Benefits of Professional Ace Servicing</h2> --}}
                                {{-- <p>Deep cleaning of coils, fins, and filters, as well as cleaning the blower motor and ducts if your an  necessary Ductwork inspection, airflow measurement, adjustments to dampers and registers and a final system test</p> --}}
                                <div class="row">
                                    <div class="col-md-6">
                                      
                                        <img src="assets/img/post_10.jpg" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="assets/img/post_11.jpg" alt="">
                                    </div>
                                </div>
                                {{-- <p> Home or office assessment, energy efficiency analysis, system recommendations, and air your detailed cost estimate or an upgrade</p> --}}
                                {{-- <ul class="cs_list cs_style_1 cs_mp_0 cs_fs_18 cs_medium cs_heading_font">
                    <li>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 10.5C7.16667 10.8125 6.82292 10.8125 6.46875 10.5L4.71875 8.75C4.42708 8.41667 4.42708 8.07292 4.71875 7.71875C5.07292 7.42708 5.41667 7.42708 5.75 7.71875L7 8.9375L9.96875 5.96875C10.3229 5.67708 10.6667 5.67708 11 5.96875C11.3125 6.32292 11.3125 6.66667 11 7L7.5 10.5ZM10.75 1.34375C11.8333 1.21875 12.8021 1.55208 13.6562 2.34375C14.4479 3.17708 14.7812 4.14583 14.6562 5.25C15.4896 5.91667 15.9375 6.83333 16 8C15.9375 9.16667 15.4896 10.0833 14.6562 10.75C14.7812 11.8333 14.4479 12.8021 13.6562 13.6562C12.8021 14.4479 11.8333 14.7812 10.75 14.6562C10.0833 15.4896 9.16667 15.9375 8 16C6.83333 15.9375 5.91667 15.4896 5.25 14.6562C4.14583 14.7812 3.17708 14.4479 2.34375 13.6562C1.55208 12.8021 1.21875 11.8333 1.34375 10.75C0.489583 10.0833 0.0416667 9.16667 0 8C0.0416667 6.83333 0.489583 5.91667 1.34375 5.25C1.21875 4.14583 1.55208 3.17708 2.34375 2.34375C3.17708 1.55208 4.14583 1.21875 5.25 1.34375C5.91667 0.489583 6.83333 0.0416667 8 0C9.16667 0.0416667 10.0833 0.489583 10.75 1.34375ZM5.9375 3.09375L5.375 2.90625C4.625 2.69792 3.96875 2.86458 3.40625 3.40625C2.86458 3.96875 2.69792 4.625 2.90625 5.375L3.09375 5.9375L2.5625 6.25C1.89583 6.625 1.54167 7.20833 1.5 8C1.54167 8.79167 1.89583 9.375 2.5625 9.75L3.09375 10.0312L2.90625 10.5938C2.69792 11.3438 2.86458 12.0104 3.40625 12.5938C3.96875 13.1354 4.625 13.3021 5.375 13.0938L5.9375 12.9062L6.25 13.4688C6.625 14.1146 7.20833 14.4583 8 14.5C8.79167 14.4583 9.375 14.1146 9.75 13.4688L10.0312 12.9062L10.5938 13.0938C11.3438 13.3021 12.0104 13.1354 12.5938 12.5938C13.1354 12.0104 13.3021 11.3438 13.0938 10.5938L12.9062 10.0312L13.4688 9.75C14.1146 9.375 14.4583 8.79167 14.5 8C14.4583 7.20833 14.1146 6.625 13.4688 6.25L12.9062 5.9375L13.0938 5.375C13.3021 4.625 13.1354 3.96875 12.5938 3.40625C12.0104 2.86458 11.3438 2.69792 10.5938 2.90625L10.0312 3.09375L9.75 2.5625C9.375 1.89583 8.79167 1.54167 8 1.5C7.20833 1.54167 6.625 1.89583 6.25 2.5625L5.9375 3.09375Z" fill="currentColor"/>
                      </svg>                                                 
                      SmartComfort System
                    </li>
                    <li>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 10.5C7.16667 10.8125 6.82292 10.8125 6.46875 10.5L4.71875 8.75C4.42708 8.41667 4.42708 8.07292 4.71875 7.71875C5.07292 7.42708 5.41667 7.42708 5.75 7.71875L7 8.9375L9.96875 5.96875C10.3229 5.67708 10.6667 5.67708 11 5.96875C11.3125 6.32292 11.3125 6.66667 11 7L7.5 10.5ZM10.75 1.34375C11.8333 1.21875 12.8021 1.55208 13.6562 2.34375C14.4479 3.17708 14.7812 4.14583 14.6562 5.25C15.4896 5.91667 15.9375 6.83333 16 8C15.9375 9.16667 15.4896 10.0833 14.6562 10.75C14.7812 11.8333 14.4479 12.8021 13.6562 13.6562C12.8021 14.4479 11.8333 14.7812 10.75 14.6562C10.0833 15.4896 9.16667 15.9375 8 16C6.83333 15.9375 5.91667 15.4896 5.25 14.6562C4.14583 14.7812 3.17708 14.4479 2.34375 13.6562C1.55208 12.8021 1.21875 11.8333 1.34375 10.75C0.489583 10.0833 0.0416667 9.16667 0 8C0.0416667 6.83333 0.489583 5.91667 1.34375 5.25C1.21875 4.14583 1.55208 3.17708 2.34375 2.34375C3.17708 1.55208 4.14583 1.21875 5.25 1.34375C5.91667 0.489583 6.83333 0.0416667 8 0C9.16667 0.0416667 10.0833 0.489583 10.75 1.34375ZM5.9375 3.09375L5.375 2.90625C4.625 2.69792 3.96875 2.86458 3.40625 3.40625C2.86458 3.96875 2.69792 4.625 2.90625 5.375L3.09375 5.9375L2.5625 6.25C1.89583 6.625 1.54167 7.20833 1.5 8C1.54167 8.79167 1.89583 9.375 2.5625 9.75L3.09375 10.0312L2.90625 10.5938C2.69792 11.3438 2.86458 12.0104 3.40625 12.5938C3.96875 13.1354 4.625 13.3021 5.375 13.0938L5.9375 12.9062L6.25 13.4688C6.625 14.1146 7.20833 14.4583 8 14.5C8.79167 14.4583 9.375 14.1146 9.75 13.4688L10.0312 12.9062L10.5938 13.0938C11.3438 13.3021 12.0104 13.1354 12.5938 12.5938C13.1354 12.0104 13.3021 11.3438 13.0938 10.5938L12.9062 10.0312L13.4688 9.75C14.1146 9.375 14.4583 8.79167 14.5 8C14.4583 7.20833 14.1146 6.625 13.4688 6.25L12.9062 5.9375L13.0938 5.375C13.3021 4.625 13.1354 3.96875 12.5938 3.40625C12.0104 2.86458 11.3438 2.69792 10.5938 2.90625L10.0312 3.09375L9.75 2.5625C9.375 1.89583 8.79167 1.54167 8 1.5C7.20833 1.54167 6.625 1.89583 6.25 2.5625L5.9375 3.09375Z" fill="currentColor"/>
                      </svg>                                                 
                      ArcticBoost Performance
                    </li>
                    <li>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 10.5C7.16667 10.8125 6.82292 10.8125 6.46875 10.5L4.71875 8.75C4.42708 8.41667 4.42708 8.07292 4.71875 7.71875C5.07292 7.42708 5.41667 7.42708 5.75 7.71875L7 8.9375L9.96875 5.96875C10.3229 5.67708 10.6667 5.67708 11 5.96875C11.3125 6.32292 11.3125 6.66667 11 7L7.5 10.5ZM10.75 1.34375C11.8333 1.21875 12.8021 1.55208 13.6562 2.34375C14.4479 3.17708 14.7812 4.14583 14.6562 5.25C15.4896 5.91667 15.9375 6.83333 16 8C15.9375 9.16667 15.4896 10.0833 14.6562 10.75C14.7812 11.8333 14.4479 12.8021 13.6562 13.6562C12.8021 14.4479 11.8333 14.7812 10.75 14.6562C10.0833 15.4896 9.16667 15.9375 8 16C6.83333 15.9375 5.91667 15.4896 5.25 14.6562C4.14583 14.7812 3.17708 14.4479 2.34375 13.6562C1.55208 12.8021 1.21875 11.8333 1.34375 10.75C0.489583 10.0833 0.0416667 9.16667 0 8C0.0416667 6.83333 0.489583 5.91667 1.34375 5.25C1.21875 4.14583 1.55208 3.17708 2.34375 2.34375C3.17708 1.55208 4.14583 1.21875 5.25 1.34375C5.91667 0.489583 6.83333 0.0416667 8 0C9.16667 0.0416667 10.0833 0.489583 10.75 1.34375ZM5.9375 3.09375L5.375 2.90625C4.625 2.69792 3.96875 2.86458 3.40625 3.40625C2.86458 3.96875 2.69792 4.625 2.90625 5.375L3.09375 5.9375L2.5625 6.25C1.89583 6.625 1.54167 7.20833 1.5 8C1.54167 8.79167 1.89583 9.375 2.5625 9.75L3.09375 10.0312L2.90625 10.5938C2.69792 11.3438 2.86458 12.0104 3.40625 12.5938C3.96875 13.1354 4.625 13.3021 5.375 13.0938L5.9375 12.9062L6.25 13.4688C6.625 14.1146 7.20833 14.4583 8 14.5C8.79167 14.4583 9.375 14.1146 9.75 13.4688L10.0312 12.9062L10.5938 13.0938C11.3438 13.3021 12.0104 13.1354 12.5938 12.5938C13.1354 12.0104 13.3021 11.3438 13.0938 10.5938L12.9062 10.0312L13.4688 9.75C14.1146 9.375 14.4583 8.79167 14.5 8C14.4583 7.20833 14.1146 6.625 13.4688 6.25L12.9062 5.9375L13.0938 5.375C13.3021 4.625 13.1354 3.96875 12.5938 3.40625C12.0104 2.86458 11.3438 2.69792 10.5938 2.90625L10.0312 3.09375L9.75 2.5625C9.375 1.89583 8.79167 1.54167 8 1.5C7.20833 1.54167 6.625 1.89583 6.25 2.5625L5.9375 3.09375Z" fill="currentColor"/>
                      </svg>                                                 
                      BreezeBalance Calibration
                    </li>
                    <li>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 10.5C7.16667 10.8125 6.82292 10.8125 6.46875 10.5L4.71875 8.75C4.42708 8.41667 4.42708 8.07292 4.71875 7.71875C5.07292 7.42708 5.41667 7.42708 5.75 7.71875L7 8.9375L9.96875 5.96875C10.3229 5.67708 10.6667 5.67708 11 5.96875C11.3125 6.32292 11.3125 6.66667 11 7L7.5 10.5ZM10.75 1.34375C11.8333 1.21875 12.8021 1.55208 13.6562 2.34375C14.4479 3.17708 14.7812 4.14583 14.6562 5.25C15.4896 5.91667 15.9375 6.83333 16 8C15.9375 9.16667 15.4896 10.0833 14.6562 10.75C14.7812 11.8333 14.4479 12.8021 13.6562 13.6562C12.8021 14.4479 11.8333 14.7812 10.75 14.6562C10.0833 15.4896 9.16667 15.9375 8 16C6.83333 15.9375 5.91667 15.4896 5.25 14.6562C4.14583 14.7812 3.17708 14.4479 2.34375 13.6562C1.55208 12.8021 1.21875 11.8333 1.34375 10.75C0.489583 10.0833 0.0416667 9.16667 0 8C0.0416667 6.83333 0.489583 5.91667 1.34375 5.25C1.21875 4.14583 1.55208 3.17708 2.34375 2.34375C3.17708 1.55208 4.14583 1.21875 5.25 1.34375C5.91667 0.489583 6.83333 0.0416667 8 0C9.16667 0.0416667 10.0833 0.489583 10.75 1.34375ZM5.9375 3.09375L5.375 2.90625C4.625 2.69792 3.96875 2.86458 3.40625 3.40625C2.86458 3.96875 2.69792 4.625 2.90625 5.375L3.09375 5.9375L2.5625 6.25C1.89583 6.625 1.54167 7.20833 1.5 8C1.54167 8.79167 1.89583 9.375 2.5625 9.75L3.09375 10.0312L2.90625 10.5938C2.69792 11.3438 2.86458 12.0104 3.40625 12.5938C3.96875 13.1354 4.625 13.3021 5.375 13.0938L5.9375 12.9062L6.25 13.4688C6.625 14.1146 7.20833 14.4583 8 14.5C8.79167 14.4583 9.375 14.1146 9.75 13.4688L10.0312 12.9062L10.5938 13.0938C11.3438 13.3021 12.0104 13.1354 12.5938 12.5938C13.1354 12.0104 13.3021 11.3438 13.0938 10.5938L12.9062 10.0312L13.4688 9.75C14.1146 9.375 14.4583 8.79167 14.5 8C14.4583 7.20833 14.1146 6.625 13.4688 6.25L12.9062 5.9375L13.0938 5.375C13.3021 4.625 13.1354 3.96875 12.5938 3.40625C12.0104 2.86458 11.3438 2.69792 10.5938 2.90625L10.0312 3.09375L9.75 2.5625C9.375 1.89583 8.79167 1.54167 8 1.5C7.20833 1.54167 6.625 1.89583 6.25 2.5625L5.9375 3.09375Z" fill="currentColor"/>
                      </svg>                                                 
                      PureAir Duct Cleaning
                    </li>
                  </ul> --}}
                                <hr>
                                {{-- <div class="cs_post_details_footer">
                    <div>
                      <h3>Tags:</h3>
                      <div class="cs_post_tags">
                        <a href="#">Application</a>
                        <a href="#">Installations</a>
                      </div>
                    </div>
                    <div>
                      <h3>Share:</h3>
                      <div class="cs_social_btns cs_style_1 cs_type_1">
                        <a href="#" class="cs_social_btn cs_center">
                          <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="cs_social_btn cs_center">
                          <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" class="cs_social_btn cs_center">
                          <i class="fa-brands fa-facebook-f"></i>
                        </a>
                      </div>
                    </div>
                  </div> --}}
                            </div>
                        </div>
                        <div class="cs_height_40 cs_height_lg_40"></div>
                        {{-- <div class="comments-area">
                <h2 class="comments-title"><i class="fa-regular fa-comments"></i>Comments (3)</h2>
                <ol class="comment-list">
                  <li class="comment">
                    <div class="comment-body">
                      <div class="comment-author vcard">
                        <img class="avatar" src="assets/img/avatar_5.jpg" alt="Author">
                        <a href="#" class="url">Jenny Wilson</a>
                      </div>
                      <div class="comment-meta">
                        <a href="#">12 May, 2024  05:56pm </a>
                      </div>
                      <p>
                        This can indicate loose parts or a need for professional maintenance air as Regular maintenance, clean filters, 
                      </p>
                      <div class="reply">
                        <a class="comment-reply-link" href="#">Reply</a>
                      </div>
                    </div>
                    <ol class="children">
                      <li class="comment">
                        <div class="comment-body">
                          <div class="comment-author vcard">
                            <img class="avatar" src="assets/img/avatar_6.jpg" alt="Author">
                            <a href="#" class="url">Guy Hawkins</a>
                          </div>
                          <div class="comment-meta">
                            <a href="#">12 May, 2024  07:36pm </a>
                          </div>
                          <p>Expert consultation services to help you select the best air conditioning system for your needs</p>
                          <div class="reply">
                            <a class="comment-reply-link" href="#">Reply</a>
                          </div>
                        </div>
                      </li>
                      <!-- #comment-## -->
                    </ol>
                    <!-- .children -->
                  </li>
                  <!-- #comment-## -->
                  <li class="comment">
                    <div class="comment-body">
                      <div class="comment-author vcard">
                        <img class="avatar" src="assets/img/avatar_7.jpg" alt="Author">
                        <a href="#" class="url">Savannah</a>
                      </div>
                      <div class="comment-meta">
                        <a href="#">12 May, 2024  08:56pm </a>
                      </div>
                      <p>It could be due to low refrigerant, a dirty filter, or a thermostat issue air for Annually, before the peak cooling</p>
                      <div class="reply">
                        <a class="comment-reply-link" href="#">Reply</a>
                      </div>
                    </div>
                  </li>
                  <!-- #comment-## -->
                </ol>
                <!-- .comment-list -->
              </div> --}}
                        <div class="cs_height_40 cs_height_lg_40"></div>
                        {{-- <div class="comment-respond">
                <h3 class="comment-reply-title"><i class="fa-solid fa-reply"></i>Leave a comment</h3>
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                      <input type="text" placeholder="Your name" class="cs_form_field cs_mb_25">
                    </div>
                    <div class="col-lg-6">
                      <input type="text" placeholder="Your Email" class="cs_form_field cs_mb_25">
                    </div>
                  </div>
                  <input type="text" placeholder="Website" class="cs_form_field cs_mb_25">
                  <textarea cols="30" rows="5" placeholder="Write a message...." class="cs_form_field cs_mb_25"></textarea>
                  <button class="cs_btn cs_style_1 w-100" type="submit">
                    <span>Post Comment</span>
                  </button>
                </form>
              </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cs_right_sidebar">
                        {{-- <div class="cs_sidebar_widget cs_color_1">
                            <form action="#" class="cs_search_form">
                                <input type="text" placeholder="Enter Keyword" class="cs_search_input">
                                <button class="cs_search_submit_btn"><i class="fa-solid fa-search"></i></button>
                            </form>
                        </div> --}}
                        <div class="cs_sidebar_widget">
                            <h2 class="cs_sidebar_widget_heading cs_fs_24 cs_semibold">Recent Posts</h2>
                            <ul class="cs_recent_post_widget">
                                <li>
                                    <div class="cs_recent_post">
                                        <a href="blog-details.html" class="cs_recent_post_thumb">
                                            <img src="assets/img/recent_post_3.jpg" alt="">
                                        </a>
                                        <div class="cs_recent_post_right">
                                            <h3 class="cs_fs_18 cs_medium mb-0">
                                                <a href="blog-details.html">Perfect Climate Perfect Lifeline</a>
                                            </h3>
                                            <p class="cs_recent_posted_by cs_fs_14">
                                                <i class="fa-solid fa-calendar-alt"></i>
                                                12 May, 2024
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_recent_post">
                                        <a href="blog-details.html" class="cs_recent_post_thumb">
                                            <img src="assets/img/recent_post_4.jpg" alt="">
                                        </a>
                                        <div class="cs_recent_post_right">
                                            <h3 class="cs_fs_18 cs_medium mb-0">
                                                <a href="blog-details.html">Where Comfort Meets Efficiency</a>
                                            </h3>
                                            <p class="cs_recent_posted_by cs_fs_14">
                                                <i class="fa-solid fa-calendar-alt"></i>
                                                10 May, 2024
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="cs_recent_post">
                                        <a href="blog-details.html" class="cs_recent_post_thumb">
                                            <img src="assets/img/recent_post_1.jpg" alt="">
                                        </a>
                                        <div class="cs_recent_post_right">
                                            <h3 class="cs_fs_18 cs_medium mb-0">
                                                <a href="blog-details.html">Breathe Easy Live Cool Cooling </a>
                                            </h3>
                                            <p class="cs_recent_posted_by cs_fs_14">
                                                <i class="fa-solid fa-calendar-alt"></i>
                                                08 May, 2024
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="cs_sidebar_widget">
                            <h2 class="cs_sidebar_widget_heading cs_fs_24 cs_semibold">Categories</h2>
                            <ul class="cs_category_widget">
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-folder-open"></i>
                                        <span>BreezeCheck Maintenance</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-folder-open"></i>
                                        <span>ChillMax Cleaning</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-folder-open"></i>
                                        <span>CoolFlow Inspection</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-folder-open"></i>
                                        <span>FrostWave Duct Cleaning</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-folder-open"></i>
                                        <span>CoolPro Installation</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-folder-open"></i>
                                        <span>RapidRepair Services</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-solid fa-folder-open"></i>
                                        <span>Emergency CoolFix</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        {{-- <div class="cs_sidebar_widget">
                <h2 class="cs_sidebar_widget_heading cs_fs_24 cs_semibold">Popular Tags</h2>
                <div class="cs_tags">
                  <a href="#">Application</a>
                  <a href="#">Art</a>
                  <a href="#">Marketing</a>
                  <a href="#">Repair</a>
                  <a href="#">Installations</a>
                  <a href="#">Testing</a>
                  <a href="#">Ventilation</a>
                  <a href="#">Residential</a>
                </div>
              </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>
    <!-- End Blog Section -->

@endsection
