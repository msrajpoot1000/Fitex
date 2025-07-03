  @php
      use Illuminate\Support\Facades\DB;
      $company = DB::table('companyinfos')->first(); // ✅ returns only the first row (an object)
  @endphp



  <!-- Start Header Section -->
  <header class="cs_site_header cs_style_1 cs_heading_color cs_sticky_header">
      <div class="cs_top_header">
          <div class="container">
              <div class="cs_top_header_in">
                  <div class="cs_top_header_left">Welcome to Fitex Uniforms</div>
                  <div class="cs_top_header_left">
                      <div class="cs_header_social_links_wrap">
                          <p class="mb-0">Follow Us On: </p>
                          <div class="cs_header_social_links">
                              <a href="{{ $company->linkedin }}" class="cs_social_btn cs_center">
                                  <i class="fa-brands fa-linkedin-in"></i>
                              </a>
                              <a href="{{ $company->linkedin }}" class="cs_social_btn cs_center">
                                  <i class="fa-brands fa-instagram"></i>
                              </a>

                              <a href="{{ $company->pinterest }}" class="cs_social_btn cs_center">
                                  <i class="fa-brands fa-pinterest"></i>
                              </a>


                              <a href="{{ $company->facebook }} class="cs_social_btn cs_center">
                                  <i class="fa-brands fa-facebook-f"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="cs_main_header cs_accent_bg">
          <div class="container">
              <div class="cs_main_header_in">
                  <div class="cs_main_header_left">
                      <a class="cs_site_branding" href="index.html">
                          <img src="{{ asset($company->logo) }}" alt="Logo" style="width:5rem">
                      </a>
                  </div>


                  <div class="cs_main_header_center">
                      <div class="cs_nav">
                          <ul class="cs_nav_list">
                              <li><a href="{{ route('user.pages.index') }}">Home</a></li>
                              <li><a href="{{ route('user.pages.aboutus') }}">About Us</a></li>
                              <li class="menu-item-has-children">
                                  <a href="{{ route('user.pages.services') }}">Services</a>
                                  <ul>
                                      <li><a href="{{ route('user.pages.services') }}">Services</a></li>
                                      <li><a href="{{ route('user.pages.service-details') }}">Service Details</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="menu-item-has-children">
                                  <a href="#">Pages</a>
                                  <ul>
                                      <li><a href="team.html">Team</a></li>
                                      <li><a href="team-details.html">Team Details</a></li>
                                      <li><a href="projects.html">Projects</a></li>
                                      <li><a href="project-details.html">Project Details</a></li>
                                  </ul>
                              </li>
                              <li class="menu-item-has-children">
                                  <a href="{{ route('user.pages.blog') }}">Blogs</a>
                                  <ul>
                                      <li><a href="{{ route('user.pages.blog') }}">Blogs</a></li>
                                      {{-- <li><a href="{{ route('user.pages.blog-details', $blog->id) }}">Blog Details</a> --}}
                                      </li>
                                  </ul>
                              </li>
                              <li><a href="{{ route('user.pages.contact') }}">Contact</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="cs_main_header_right">
                      <a href="{{ route('user.pages.contact') }}" class="cs_btn cs_style_1">
                          <span>Read More</span>
                          <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M8.28125 0.71875L13.7812 5.96875C13.9271 6.11458 14 6.29167 14 6.5C14 6.70833 13.9271 6.88542 13.7812 7.03125L8.28125 12.2812C7.90625 12.5729 7.55208 12.5729 7.21875 12.2812C6.92708 11.9062 6.92708 11.5521 7.21875 11.2188L11.375 7.25H0.75C0.291667 7.20833 0.0416667 6.95833 0 6.5C0.0416667 6.04167 0.291667 5.79167 0.75 5.75H11.375L7.21875 1.78125C6.92708 1.44792 6.92708 1.09375 7.21875 0.71875C7.55208 0.427083 7.90625 0.427083 8.28125 0.71875Z"
                                  fill="currentColor"></path>
                          </svg>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </header>
