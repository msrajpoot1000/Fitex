
<style>
    .custom-nav {
        background-color: #006400; /* Dark Green */
        width: 40px;
        height: 40px;
        border-radius: 50%;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 16px;
        font-weight: bold;
    }

    .swiper-button-next {
        right: 10px;
    }

    .swiper-button-prev {
        left: 10px !important;
    }
    
    

    .swiper-button-next, .swiper-button-prev {
        top: 450px !important;
    }
    
    
    .form-control{
    display: block !important;
    border: none !important;
    outline: none !important;
    width: 100% !important;
    background-color: #f6f5f2 !important;
    border-radius: 5px !important;
    padding-left: 20px !important;
    padding-right: 20px !important;
    height: 60px !important;
    font-size: 14px !important;
    color: #6e7673 !important;
    margin-bottom: 20px !important;
}

.block-title h3 {
    font-size: 30px !important;
}

@media (min-width: 1200px) {
    .feature-one__check-list li {
        font-size: 15px !important;
    }
}

@media (min-width: 1200px) {
    .feature-one__check-list li > i {
        font-size: 13px !important;
        width: 30px !important;
        height: 30px !important;
    }
}



.main-slider .swiper-slide h2 {
    font-size: 55px !important;
     color: #393636 !important;
}

.main-slider .swiper-slide p {
    color: #393636 !important;
}

</style>




@extends('layouts.frontend.master')

@section('title', 'Anterra Commodities | Home')

@section('write')
        
     <div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
    
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
                <div class="swiper-wrapper">
                    @foreach($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url('{{ asset($slider->homesliderimage) }}');">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline" style="color:#393636;">Welcome to Anterra Commodities LLP</span>
                                    <h2><span>{{ $slider->heading1 }}</span> <br>
                                       {{ $slider->heading2 }}</h2>
                                    <p>{{ $slider->description }}</p>
                                      <a href="tel:{{ $companyinfos->phone }}" class="thm-btn">Contact Now</a><!-- /.thm-btn -->       
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    @endforeach
                </div><!-- /.swiper-wrapper -->

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->

            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->

 

        <section class="about-one">
            <img src="assets/images/icons/about-bg-icon-1-1.png" class="about-one__bg-shape-1" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-one__images">
                            <img src="assets/images/resources/buckets.jpg" alt="">
                            <img src="assets/images/resources/pexels.jpg" alt="">
                            
                        </div><!-- /.about-one__images -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-7">
                        <div class="about-one__content">
                            <div class="block-title text-left">
                                <p>About us</p>
                                <h3>Anterra Commodities LLP</h3>
                            </div><!-- /.block-title -->
                            <div class="about-one__tagline">
                                <p>Your Trusted Partner in Global Agri-Trade & Private Label Solutions</p>
                            </div><!-- /.about-one__tagline -->
                            <div class="about-one__summery">
                                <p>
                                    From the vibrant trading hub of India, Anterra Commodities LLP stands as a trusted name in the export of premium agricultural commodities, offering both bulk and private label solutions to meet the diverse needs of global buyers. We specialize in sourcing and supplying the finest spices, grains, and pulses from India’s fertile farmlands to global markets, ensuring quality, reliability, and competitive pricing.
                                    </p>
                            </div><!-- /.about-one__summery -->
                            <a href="{{ route('website.frontend.aboutus') }}" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->
        
        <section class="service-one">
            <div class="container">
                  <div class="block-title text-center">
                            <p>Our Services list</p>
                            <h3>What We’re Offering</h3>
                        </div><!-- /.block-title -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($categories as $category)
                        <div class="swiper-slide">
                            <div class="service-one__box">
                                <img src="{{ asset($category->productcategoryimage) }}" alt="">
                                <div class="service-one__box-content">
                                    <h3>
                                        <a href="{{ route('website.frontend.product', $category->id) }}">
                                            {{ $category->productcategory }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                   <!-- Navigation Buttons -->
                    <div class="swiper-button-next custom-nav"></div>
                    <div class="swiper-button-prev custom-nav"></div>
            </div>
        </section>


       <section class="service-two py-5">
            <div class="container">
                <div class="block-title text-center mb-4">
                    <p>Our products list</p>
                    <h3>Explore Our Product Range</h3>
                </div>
        
                <div class="swiper myProductSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($products as $product)
                          
                            <div class="swiper-slide">
                                 <a href="{{ route('website.frontend.product-details', $product->id) }}">
                                <div class="service-two__card">
                                    <div class="service-two__card-image">
                                        <img src="{{ asset($product->productimage) }}" alt="">
                                    </div>
                                    <div class="service-two__card-content">
                                        <h3>{{ $product->heading }}</h3>
                                    </div>
                                </div>
                                </a>
                            </div>
                            
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>


    <section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
        <img class="call-to-action__three__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="call-to-action__three-image">
                        <img src="assets/images/resources/chai.jpg" alt="">
                        <img src="assets/images/resources/mel.jpg" alt="">
                    </div><!-- /.call-to-action__three-image -->
                </div><!-- /.col-lg-5 -->
                <div class="col-lg-7">
                    <div class="call-to-action__three-content">
                        <h3>Providing High Quality
                            Products</h3>
                        <a href="tel:{{ $companyinfos->phone }}" class="thm-btn">Contact Now</a><!-- /.thm-btn -->
                    </div><!-- /.call-to-action__three-content -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.call-to-action__three -->
    
    <section class="feature-one mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="feature-one__content">
                        <div class="block-title">
                            <p>What we’re offering</p>
                            <h3>Why Partner with Anterra Commodities LLP?</h3>
                        </div><!-- /.block-title -->
                        <div class="feature-one__summery">
                            <p>At Anterra Commodities LLP, we go beyond exporting—we empower your brand with tailored agri-commodity solutions. Whether you need bulk supply or a private label partnership, we deliver quality, consistency, and trust.
                            </p>
                        </div><!-- /.feature-one__summery -->
                        <ul class="list-unstyled feature-one__check-list">
                            <li>
                                <i class="agrikon-icon-tick"></i>
                                End-to-End Private Label Services: From sourcing to packaging, we help you build your brand with customized solutions.
                            </li>
                            <li>
                                <i class="agrikon-icon-tick"></i>
                                Farm-to-Global Supply Chain: Strong farmer networks and ethical sourcing guarantee premium, traceable products.
                            </li>
                             <li>
                                <i class="agrikon-icon-tick"></i>
                                Reliable Logistics: Efficient shipping and documentation for hassle-free international trade.
                            </li>
                            <li>
                                <i class="agrikon-icon-tick"></i>
                                Sustainable & Ethical Trade: Environmentally responsible practices that support farmers and ensure long-term supply stability.
                            </li>
                           
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.feature-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="feature-one__image">
                        <img src="assets/images/resources/scattere.jpg" alt="">
                    </div><!-- /.feature-one__image -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.feature-one -->

<section class="testimonials-one py-5">
    <img src="{{ asset('assets/images/icons/testimonials-bg-1-1.png') }}" class="testimonials-one__bg" alt="">
    <div class="container">
        <h2 class="text-center mb-5 text-white">Customer Feedback</h2>

        <div class="row align-items-start justify-content-center">
            <!-- Left Side: Testimonials Slider -->
            <div class="col-lg-8 col-md-10 col-sm-12 mb-4 text-center">
                <div class="swiper testimonials-one__carousel">
                    <div class="swiper-wrapper">
                        @foreach ($testimonials as $testimonial)
                            <div class="swiper-slide p-4 bg-light rounded shadow-sm">
                                <div class="testimonials-one__icons mb-2">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $testimonial->rating)
                                            <i class="fas fa-star text-warning"></i>
                                        @else
                                            <i class="far fa-star text-muted"></i>
                                        @endif
                                        
                                    @endfor
                                </div>
                                <p class="mb-2">{{ $testimonial->feedback }}</p>
                                <p><strong>{{ $testimonial->user }}</strong></p>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination mt-3"></div>
                </div>
            </div>


            <!-- Right Side: Form -->
            <div class="col-lg-4">
                <form action="{{ route('testimonial.store') }}" method="POST" class="contact-one__form contact-form-validated p-4 bg-white rounded shadow-sm">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="user" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <select name="rating" id="rating" class="form-control" required>
                            <option value="">Select Rating</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea name="feedback" class="form-control" placeholder="Write Your Feedback" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div> <!-- /.row -->
    </div>
</section>

 <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                        <div class="contact-one__content">
                            <div class="block-title">
                                <p>Contact now</p>
                                <h3>Leave A Message</h3>
                            </div><!-- /.block-title -->
                            <div class="contact-one__summery">
                                <p>
                                  We strictly adhere to international standards, holding certifications from APEDA, the Spice Board, and FIEO. Our quality control processes ensure that every shipment meets global safety and hygiene benchmarks
                                </p>
                            </div><!-- /.contact-one__summery -->
                          
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-sm-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
                        <form action="{{ route('contact.store') }}" method="POST" class="contact-one__form contact-form-validated">
                         @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">Send a Message</button><!-- /.thm-btn -->
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-sm-12 col-md-6 col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->


@endsection      
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.mySwiper', {
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });
    });
</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.testimonials-one__carousel', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.myProductSwiper', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                576: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }
        });
    });
</script>

