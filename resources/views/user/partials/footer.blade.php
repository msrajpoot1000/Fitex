  @php
      use Illuminate\Support\Facades\DB;
      $company = DB::table('companyinfos')->first(); // ✅ returns only the first row (an object)
      use App\Models\Blog;
      $blogs = Blog::limit(2)->get();
  @endphp

  <style>
      .two-line-clamp {
          display: -webkit-box;
          -webkit-line-clamp: 2;
          /* Number of lines to show */
          -webkit-box-orient: vertical;
          overflow: hidden;
          text-overflow: ellipsis;
      }


      .footer-list li::before {
          content: none !important;
      }
  </style>


  <footer class="cs_footer cs_style_1">
      <div class="cs_footer_top ">
          <div class="container">
              <div class="cs_footer_top_in">
                  <div class="cs_social_btns cs_style_1">
                      <a href="{{ $company->linkedin }}" class="cs_social_btn cs_center">
                          <i class="fa-brands fa-linkedin-in"></i>
                      </a>
                      <a href="{{ $company->instagram }}" class="cs_social_btn cs_center">
                          <i class="fa-brands fa-instagram"></i>
                      </a>

                      <a href="{{ $company->pinterest }}" class="cs_social_btn cs_center">
                          <i class="fa-brands fa-pinterest"></i>
                      </a>


                      <a href="{{ $company->facebook }}" class="cs_social_btn cs_center">
                          <i class="fa-brands fa-facebook-f"></i>
                      </a>

                  </div>
                  <div class="cs_footer_logo wow zoomIn" data-wow-duration="0.9s" data-wow-delay="0.25s"
                      style="background-color: white;"><img src="{{ asset($company->logo) }}" alt="Logo"
                          style="width:5rem"></div>
                  <div class="cs_footer_contact_card">
                      <div class="cs_footer_contact_card_icon cs_white_bg cs_center">
                          <img src="assets/img/icons/call.svg" alt="">
                      </div>
                      <div>
                          <p class="cs_white_color cs_fs_14 mb-0">Feel Free to contact us</p>
                          <h3 class="mb-0 cs_fs_24 cs_semibold cs_white_color"><a href="tel:+222(789)56825">+91
                                  {{ $company->phone }}</a></h3>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="cs_main_footer cs_bg_filed cs_primary_bg cs_white_color" data-src="assets/img/footer_bg_1.jpg">
          <div class="container">
              <div class="container">
                  <div class="row">
                      <!-- First Column -->
                      <div class="col-lg-6 col-md-6 col-sm-12 pt-4">
                          <div class="cs_footer_widget">
                              <div class="cs_footer_logo wow zoomIn" data-wow-duration="0.9s" data-wow-delay="0.25s"
                                  style="display:flex">
                                  <div style="background-color: white;display:block">
                                      <img src="{{ asset($company->logo) }}" alt="Logo" style="width:5rem">
                                  </div>
                              </div>
                              <h2 class="cs_footer_widget_title cs_fs_24 cs_semibold cs_white_color cs_mb_10 mt-4">
                                  {{ $company->companyname }} Uniforms
                              </h2>
                              <p>{!! $company->company_description !!}</p>
                          </div>
                      </div>

                      <!-- Second Column -->
                      <div class="col-lg-3 col-md-6 col-sm-12 pt-4">
                          <div class="cs_footer_widget">
                              <h2 class="cs_footer_widget_title cs_fs_24 cs_semibold cs_white_color cs_mb_10">Quick
                                  links</h2>
                              <div class="cs_footer_widget_seperator">
                                  <span class="cs_accent_bg"></span>
                                  <span class="cs_white_bg"></span>
                                  <span class="cs_white_bg"></span>
                              </div>
                              <ul class="cs_footer_menu_2 footer-list">
                                  <li><a href="{{ route('user.pages.index') }}"><i class="fa-solid fa-angle-right"></i> Home</a></li>
                                  <li><a href="{{ route('user.pages.aboutus') }}"><i class="fa-solid fa-angle-right"></i> About</a></li>
                                  <li><a href="{{ route('user.pages.blog') }}"><i class="fa-solid fa-angle-right"></i> Blog</a></li>
                                  <li><a href="{{ route('user.pages.contact') }}"><i class="fa-solid fa-angle-right"></i> Contact</a></li>
                              </ul>
                          </div>
                      </div>

                      <!-- Third Column -->
                      <div class="col-lg-3 col-md-6 col-sm-12 pt-4">
                          <div class="cs_footer_widget">
                              <h2 class="cs_footer_widget_title cs_fs_24 cs_semibold cs_white_color cs_mb_10">Recent
                                  Post</h2>
                              <div class="cs_footer_widget_seperator">
                                  <span class="cs_accent_bg"></span>
                                  <span class="cs_white_bg"></span>
                                  <span class="cs_white_bg"></span>
                              </div>
                              <ul class="cs_recent_post_widget">
                                  @foreach ($blogs as $item)
                                      <li>
                                          <div class="cs_recent_post">
                                              <a href="{{ route('user.pages.blog-details', $item->id) }}"
                                                  class="cs_recent_post_thumb">
                                                  <img src="{{ asset($item->blog_image) }}" alt="">
                                              </a>
                                              <div class="cs_recent_post_right">
                                                  <p class="cs_recent_posted_by cs_fs_14">
                                                      <i class="fa-solid fa-calendar-alt"></i>
                                                      {{ \Carbon\Carbon::parse($item->blog_date)->format('d/m/Y') }}
                                                  </p>
                                                  <h3 class="cs_white_color cs_fs_18 cs_medium mb-0">
                                                      <a href="{{ route('user.pages.blog-details', $item->id) }}"
                                                          class="two-line-clamp">
                                                          {{ $item->title }}
                                                      </a>
                                                  </h3>
                                              </div>
                                          </div>
                                      </li>
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
      <div class="cs_footer_bottom cs_accent_bg cs_white_color">
          <div class="container">
              <div class="cs_footer_bottom_in">
                  <div class="cs_footer_copyright">Copyright@ 2025 <a href="#">{{ $company->companyname }}</a>.
                      All Rights Reserved.</div>
                  <!--<ul class="cs_footer_menu cs_mp_0">-->
                  <!--  <li><a href="#">Setting & Privacy </a></li>-->
                  <!--  <li><a href="#">FAQ</a></li>-->
                  <!--  <li><a href="#">Support</a></li>-->
                  <!--</ul>-->
              </div>
          </div>
      </div>
  </footer>
