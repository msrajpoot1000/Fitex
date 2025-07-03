  @php
    use Illuminate\Support\Facades\DB;
    $company = DB::table('companyinfos')->first(); // ✅ returns only the first row (an object)
@endphp


 <footer class="cs_footer cs_style_1">
      <div class="cs_footer_top">
        <div class="container">
          <div class="cs_footer_top_in">
            <div class="cs_social_btns cs_style_1">
              <a href="{{$company->linkedin}}" class="cs_social_btn cs_center">
                    <i class="fa-brands fa-linkedin-in"></i>
                  </a>
                  <a href="{{$company->linkedin}}" class="cs_social_btn cs_center">
                    <i class="fa-brands fa-instagram"></i>
                    </a>

                 <a href="{{$company->pinterest}}" class="cs_social_btn cs_center">
                  <i class="fa-brands fa-pinterest"></i>
                     </a>


                <a href="{{ $company->facebook }}" class="cs_social_btn cs_center">
              <i class="fa-brands fa-facebook-f"></i>
                </a>

            </div>
            <div class="cs_footer_logo wow zoomIn" data-wow-duration="0.9s" data-wow-delay="0.25s" style="background-color: white;"><img src="{{asset($company->logo)}}" alt="Logo" style="width:5rem"></div>
            <div class="cs_footer_contact_card">
              <div class="cs_footer_contact_card_icon cs_white_bg cs_center">
                <img src="assets/img/icons/call.svg" alt="">
              </div>
              <div>
                <p class="cs_white_color cs_fs_14 mb-0">Feel Free to contact us</p>
                <h3 class="mb-0 cs_fs_24 cs_semibold cs_white_color"><a href="tel:+222(789)56825">+91 {{$company->phone}}</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_main_footer cs_bg_filed cs_primary_bg cs_white_color" data-src="assets/img/footer_bg_1.jpg">
        <div class="container">
          <div class="cs_footer_row cs_type_1">
            <div class="cs_footer_col">
              <div class="cs_footer_widget">
                <h2 class="cs_footer_widget_title cs_fs_24 cs_semibold cs_white_color cs_mb_10">Industries Served</h2>
                <div class="cs_footer_widget_seperator">
                  <span class="cs_accent_bg"></span>
                  <span class="cs_white_bg"></span>
                  <span class="cs_white_bg"></span>
                </div>
                <ul class="cs_footer_menu_2">
                  <li><a href="service-details.html">Security</a></li>
                  <li><a href="service-details.html">HealthCare</a></li>
                  <li><a href="service-details.html">Hospitality</a></li>
                  <li><a href="service-details.html">Construction</a></li>
                </ul>
              </div>
            </div>
            <!--<div class="cs_footer_col">-->
            <!--  <div class="cs_footer_widget">-->
            <!--    <h2 class="cs_footer_widget_title cs_fs_24 cs_semibold cs_white_color cs_mb_10">Working Hours:</h2>-->
            <!--    <div class="cs_footer_widget_seperator">-->
            <!--      <span class="cs_accent_bg"></span>-->
            <!--      <span class="cs_white_bg"></span>-->
            <!--      <span class="cs_white_bg"></span>-->
            <!--    </div>-->
            <!--    <ul class="cs_working_hours">-->
            <!--      <li>-->
            <!--        <span>Thu - Fri</span>-->
            <!--        <span>9:00 AM - 7:00 PM</span>-->
            <!--      </li>-->
            <!--      <li>-->
            <!--        <span>Mon - Wed</span>-->
            <!--        <span>8:00 AM - 10:00 PM</span>-->
            <!--      </li>-->
            <!--      <li>-->
            <!--        <span>Saturday</span>-->
            <!--        <span>7:00 AM - 9:00 PM</span>-->
            <!--      </li>-->
            <!--      <li>-->
            <!--        <span>Sunday</span>-->
            <!--        <span>Close</span>-->
            <!--      </li>-->
            <!--    </ul>-->
            <!--  </div>-->
            <!--</div>-->
            <div class="cs_footer_col">
              <div class="cs_footer_widget">
                <h2 class="cs_footer_widget_title cs_fs_24 cs_semibold cs_white_color cs_mb_10">Quick links</h2>
                <div class="cs_footer_widget_seperator">
                  <span class="cs_accent_bg"></span>
                  <span class="cs_white_bg"></span>
                  <span class="cs_white_bg"></span>
                </div>
                <ul class="cs_footer_menu_2">
                  <li><a href="{{route('user.pages.index')}}">Home</a></li>
                  <li><a href="{{route('user.pages.aboutus')}}">About </a></li>
                  <li><a href="{{route('user.pages.services')}}">Services</a></li>
                  <li><a href="{{route('user.pages.blog')}}">Blog</a></li>
                  <li><a href="{{route('user.pages.contact')}}">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="cs_footer_col">
              <div class="cs_footer_widget">
                <h2 class="cs_footer_widget_title cs_fs_24 cs_semibold cs_white_color cs_mb_10">Recent Post</h2>
                <div class="cs_footer_widget_seperator">
                  <span class="cs_accent_bg"></span>
                  <span class="cs_white_bg"></span>
                  <span class="cs_white_bg"></span>
                </div>
                <ul class="cs_recent_post_widget">
                  <li>
                    <div class="cs_recent_post">
                      <a href="blog-details.html" class="cs_recent_post_thumb">
                        <img src="assets/img/recent_post_1.jpg" alt="">
                      </a>
                      <div class="cs_recent_post_right">
                        <p class="cs_recent_posted_by cs_fs_14">
                          <i class="fa-solid fa-calendar-alt"></i>                         
                          12 May, 2024
                        </p>
                        <h3 class="cs_white_color cs_fs_18 cs_medium mb-0">
                          <a href="blog-details.html">Outdoor and Landscape Lighting</a>
                        </h3>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="cs_recent_post">
                      <a href="blog-details.html" class="cs_recent_post_thumb">
                        <img src="assets/img/recent_post_2.jpg" alt="">
                      </a>
                      <div class="cs_recent_post_right">
                        <p class="cs_recent_posted_by cs_fs_14">
                          <i class="fa-solid fa-calendar-alt"></i>                          
                          10 May, 2024
                        </p>
                        <h3 class="cs_white_color cs_fs_18 cs_medium mb-0">
                          <a href="blog-details.html">Panel Upgrades and Maintenance</a>
                        </h3>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_footer_bottom cs_accent_bg cs_white_color">
        <div class="container">
          <div class="cs_footer_bottom_in">
            <div class="cs_footer_copyright">Copyright@ 2025 <a href="#">{{$company->companyname}}</a>. All Rights Reserved.</div>
            <!--<ul class="cs_footer_menu cs_mp_0">-->
            <!--  <li><a href="#">Setting & Privacy </a></li>-->
            <!--  <li><a href="#">FAQ</a></li>-->
            <!--  <li><a href="#">Support</a></li>-->
            <!--</ul>-->
          </div>
        </div>
      </div>
    </footer>