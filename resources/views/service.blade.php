<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>CrowdPlay Studio </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/animate.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/swiper-bundle.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/splide.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/slick.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/nouislider.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/datepicker.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/magnific-popup.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/font-awesome-pro.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/flaticon_kleaso.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/circularProgressBar.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/spacing.css') !!}">
      <link rel="stylesheet" href="{!! asset('assets/css/main.css') !!}">
   </head>

   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- pre loader area start -->
         <!-- <div id="loading">
            <div id="loading-center">
               <div id="loading-center-absolute">
                  <div class="tp-loading-content text-center">
                     <div class="loading-infinity">
                        <div><span></span></div>
                        <div> <span></span></div>
                        <div> <span></span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
      <!-- pre loader area end -->

      <!-- back to top start -->
         <div class="back-to-top-wrapper">
            <button id="back_to_top" type="button" class="back-to-top-btn">
               <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </button>
         </div>
      <!-- back to top end -->

      <!-- header area start -->
         <header class="tp-header-area p-relative tp-header-height">
            <!-- <div class="tp-header-top tp-header-space d-none d-lg-block">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-lg-8">
                        <div class="tp-header-top-info">
                           <ul>
                              <li>
                                 <a href="tel:008757845682"><span><i class="flaticon-telephone-call"></i></span>(00) 875 784 5682</a>
                              </li>
                              <li>
                                 <a href="mailto:Kleasoinfo@gmail.com"><span><i class="flaticon-mail"></i></span>cleasoinfo@gmail.com</a>
                              </li>
                              <li>
                                 <a href="https://www.google.com/maps/place/Maricopa,+AZ,+USA/@33.0435146,-112.0317544,13z/data=!3m1!4b1!4m5!3m4!1s0x872ae52ea99557e3:0x702c0500cea3bb0!8m2!3d33.0581063!4d-112.0476423" target="_blank">
                                 <span><i class="flaticon-location"></i></span>
                                 238, Arimantab, Moska  - USA.
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="tp-header-top-social text-lg-end text-xl-center text-xxl-end">
                           <span>Follow Us:</span>
                           <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           <a href="#"><i class="fa-brands fa-skype"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
            <div id="header-sticky" class="tp-header-bottom header__sticky p-relative grey-bg-3">
               <div class="tp-header-color"></div>
               <div class="tp-header-space p-relative z-index-1">
                  <div class="tp-header-shape d-none d-xl-block">
                     <img class="shape-1" src="assets/img/testimonial/shpe-1.png" alt="">
                     <img class="shape-2" src="assets/img/testimonial/shpe-2.png" alt="">
                  </div>
                  <div class="container-fluid">
                     <div class="row align-items-center">
                        <div class="col-6 col-lg-6 col-xl-2">
                           <div class="tp-header-logo tp-header-logo-border">
                              <a href="{{'/'}}">
                                 <img style="width:60px" src="assets/img/logo/logo.png" alt="crowdplay logo">
                              </a>
                           </div>
                        </div>
                        <div class="col-xl-7 d-none d-xl-block">
                           <div class="tp-main-menu-area d-flex align-items-center pl-20">
                              <div class="tp-main-menu pl-45">
                                 <nav id="tp-mobile-menu">
                                    <ul>
                                       <li>
                                          <a href="{{'/'}}">Home</a>
                                       </li>
                                       <!-- <li> <a href="{{'/'}}">About</a> </li> -->
                                       <li> <a href="{{'/service'}}">Services</a> </li>
                                       <li> <a href="{{'/artists'}}">Artists</a> </li>
                                       <li> <a href="{{'/blog'}}">Blog</a> </li>
                                       <li> <a href="{{'/contact'}}">Contact</a></li>
                                         @if (Route::has('login'))
                                       <!-- <li class="sm:fixed sm:top-0 sm:right-0 p-6 text-right"> -->
                                          @auth
                                          <li>
                                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                                          </li>

                                          @else
                                          <li>
                                             <a href="{{ route('login') }}">Log in</a>
                                          </li>

                                                @if (Route::has('register'))
                                                <li>
                                                   <a href="{{ route('register') }}">Register</a>
                                                </li>
                                                @endif
                                          @endauth
                                       <!-- </li> -->
                                           @endif
                                    </ul>
                                 </nav>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-6 col-xl-3">
                           <div class="tp-header-right d-flex align-items-center justify-content-xxl-end">
                              <!-- <div class="tp-header-market mr-50 p-relative d-none d-xxl-block">
                                 <a href="cart.html"><i class="flaticon-shopping-cart"></i>
                                    <span>
                                       02
                                    </span>
                                 </a>
                                 </div> -->
                                 <div class="tp-header-btn p-relative d-none d-xl-block">
                                    <a class="tp-btn" href="{{'/contact'}}"><i class="fa-light fa-calendar-days"></i> Book A Session</a>
                                 </div>
                                 <div class="mobile-menu d-block d-xl-none text-end">
                                    <button class="tp-side-action tp-toogle hamburger-btn">
                                       <span></span>
                                       <span></span>
                                       <span></span>
                                    </button>
                                 </div>
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
      <!-- header area end -->

      <!-- mobile menu style start -->
         <div class="tp-offcanvas-area fix">
         <div class="tp-side-info">
            <div class="tp-side-logo">
               <a href="{{'/'}}">
                  <img style="width:80px" src="assets/img/logo/logo.png" alt="logo">
               </a>
            </div>
            <div class="tp-side-close">
               <button> <i class="fa-thin fa-xmark"></i></button>
            </div>
            <div class="tp-mobile-menu-pos"></div>
            <div class="tp-side-content p-relative">
               <div class="tp-sidebar__contact">
                  <h4 class="tp-sidebar-title">Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="tp-sidebar__contact-text">
                           <a target="_blank" href="https://www.google.com/maps/place/Maricopa,+AZ,+USA/@33.0435146,-112.0317544,13z/data=!3m1!4b1!4m5!3m4!1s0x872ae52ea99557e3:0x702c0500cea3bb0!8m2!3d33.0581063!4d-112.0476423"><i class="fal fa-map-marker-alt"></i> CrowdPlay Studios, Kemdy Plaza,By phase3 Gate,Army Post Service Housing Estate, Kurudu, Abuja.</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="tp-sidebar__contact-text">
                           <a href="telto:08081055103"><i class="far fa-phone"></i> 0808 105 5103</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="tp-sidebar__contact-text">
                           <a href="mailto:crowdplayabuja@gmail.com"><i class="fal fa-envelope"></i> crowdplayabuja@gmail.com</a>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="tp-sidebar-icons tp-btn-effect-blue">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
               </div>
            </div>
         </div>
         <div class="offcanvas-overlay"></div>
         </div>
      <!-- mobile menu style end -->

            <main>
         <!-- about breadcrumb area start -->
         <section class="breadcrumb__area breadcrumb-style pt-130 pb-115 p-relative z-index-1" data-background="assets/img/breadcrumb/breadcrumb-bg-2.jpg">
            <div class="breadcrumb__bg-overlay m-img"></div>
                  <div class="breadcrumb-shape d-none d-lg-block">
               <div class="shape-1">
                  <img src="assets/img/breadcrumb/breadcrumb-shape.png" alt="">
               </div>
               <div class="shape-2">
                  <img src="assets/img/breadcrumb/breadcrumb-shape-2.png" alt="">
               </div>
            </div>
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-10">
                     <div class="breadcrumb__content text-center">
                        <h3 class="breadcrumb__title">ALL SERVICES</h3>
                        <div class="breadcrumb__list breadcrumb__list-translate">
                           <span><a href="{{'/'}}">Home</a></span>
                           <span class="dvdr"><i class="fa-sharp fa-regular fa-minus"></i></span>
                           <span>SERVICES</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- about breadcrumb area end -->

         <!-- our service area start -->
         <section class="tp-service-breadcrumb-area fix pt-120 pb-90 p-relative">
            <div class="tp-service-breadcrumb-shape d-none d-lg-block">
               <img class="shape-1" src="assets/img/services/service-details/bubble-1.png" alt="">
               <img class="shape-2" src="assets/img/services/service-details/bubble-2.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="tp-service-2-item p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".3s">
                        <div class="item-2-shape">
                           <img src="assets/img/services/home-2/shape.png" alt="">
                        </div>
                        <div class="tp-service-2-thumb text-center">
                           <img src="assets/img/services/home-2/img-1.jpg" alt="">
                        </div>
                        <!-- <div class="tp-service-2-icon text-center">
                           <i class="flaticon-house-cleaning"></i>
                        </div> -->
                       <div class="tp-service-2-inner">
                        <h4 class="tp-service-title"><a href="service.detail.html">Audios</a></h4>
                        <p>EXplore the finest top-quality audio producers in Nigeria.</p>
                        <!-- <div class="tp-service-2-btn">
                           <a href="service-details.html">Details <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div> -->
                       </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="tp-service-2-item p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".4s">
                        <div class="item-2-shape">
                           <img src="assets/img/services/home-2/shape.png" alt="">
                        </div>
                        <div class="tp-service-2-thumb text-center">
                           <img src="assets/img/services/home-2/img-2.jpg" alt="">
                        </div>
                        <!-- <div class="tp-service-2-icon text-center">
                           <i class="flaticon-workplace"></i>
                        </div> -->
                       <div class="tp-service-2-inner">
                        <h4 class="tp-service-title"><a href="service-detail.html">Visuals</a></h4>
                        <p>Crowdplay has the best recording studio for your next production.</p>
                        <!-- <div class="tp-service-2-btn">
                           <a href="service-details.html">Details <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div> -->
                       </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="tp-service-2-item p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".5s">
                        <div class="item-2-shape">
                           <img src="assets/img/services/home-2/shape.png" alt="">
                        </div>
                        <div class="tp-service-2-thumb text-center">
                           <img src="assets/img/services/home-2/img-3.jpg" alt="">
                        </div>
                        <!-- <div class="tp-service-2-icon text-center">
                           <i class="flaticon-window-cleaning"></i>
                        </div> -->
                       <div class="tp-service-2-inner">
                        <h4 class="tp-service-title"><a href="service-detail.html">Photography</a></h4>
                        <p>Hire the best photographers for a memorable event.</p>
                        <!-- <div class="tp-service-2-btn">
                           <a href="service-details.html">Details <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div> -->
                       </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="tp-service-2-item p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".6s">
                        <div class="item-2-shape">
                           <img src="assets/img/services/home-2/shape.png" alt="">
                        </div>
                        <div class="tp-service-2-thumb text-center">
                           <img src="assets/img/services/home-2/img-4.jpg" alt="">
                        </div>
                        <!-- <div class="tp-service-2-icon text-center">
                           <i class="flaticon-mop"></i>
                        </div> -->
                       <div class="tp-service-2-inner">
                        <h4 class="tp-service-title"><a href="service-detail.html">Announcements</a></h4>
                        <p>Public service announcement and all others.</p>
                        <!-- <div class="tp-service-2-btn">
                           <a href="service-details.html">Details <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div> -->
                       </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="tp-service-2-item p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".7s">
                        <div class="item-2-shape">
                           <img src="assets/img/services/home-2/shape.png" alt="">
                        </div>
                        <div class="tp-service-2-thumb text-center">
                           <img src="assets/img/services/home-2/img-5.jpg" alt="">
                        </div>
                        <!-- <div class="tp-service-2-icon text-center">
                           <i class="flaticon-house-cleaning"></i>
                        </div> -->
                       <div class="tp-service-2-inner">
                        <h4 class="tp-service-title"><a href="service.detail.html">Broadcasting</a></h4>
                        <p>Gain visibility with our verified broadcasting services.</p>
                        <!-- <div class="tp-service-2-btn">
                           <a href="service-details.html">Details <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div> -->
                       </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="tp-service-2-item p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".8s">
                        <div class="item-2-shape">
                           <img src="assets/img/services/home-2/shape.png" alt="">
                        </div>
                        <div class="tp-service-2-thumb text-center">
                           <img src="assets/img/services/home-2/img-6.jpg" alt="">
                        </div>
                        <!-- -->
                       <div class="tp-service-2-inner">
                        <h4 class="tp-service-title"><a href="service-detail.html">Interviews</a></h4>
                        <p>Eliminate the hassle, let's connect you with the best interviewers.</p>
                        <!-- <div class="tp-service-2-btn">
                           <a href="service-details.html">Details <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div> -->
                       </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="tp-service-2-item p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".9s">
                        <div class="item-2-shape">
                           <img src="assets/img/services/home-2/shape.png" alt="">
                        </div>
                        <div class="tp-service-2-thumb text-center">
                           <img src="assets/img/services/home-2/img-7.jpg" alt="">
                        </div>
                        <!-- <div class="tp-service-2-icon text-center">
                           <i class="flaticon-window-cleaning"></i>
                        </div> -->
                       <div class="tp-service-2-inner">
                        <h4 class="tp-service-title"><a href="service-detail.html">Presenters</a></h4>
                        <p>Look no further, let's connect you with the top-notch presenters .</p>
                        <!-- <div class="tp-service-2-btn">
                           <a href="service-details.html">Details <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div> -->
                       </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                     <div class="tp-service-2-item p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay="1s">
                        <div class="item-2-shape">
                           <img src="assets/img/services/home-2/shape.png" alt="">
                        </div>
                        <div class="tp-service-2-thumb text-center">
                           <img src="assets/img/services/home-2/img-8.jpg" alt="">
                        </div>
                        <!-- <div class="tp-service-2-icon text-center">
                           <i class="flaticon-mop"></i>
                        </div> -->
                       <div class="tp-service-2-inner">
                        <h4 class="tp-service-title"><a href="service-detail.html">Disc Jockey</a></h4>
                        <p>Connect with award winning Disc Jockeys in no time and with ease.</p>
                        <!-- <div class="tp-service-2-btn">
                           <a href="service-details.html">Details <i class="fa-regular fa-arrow-right-long"></i></a>
                        </div> -->
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- our service area end -->

         <!-- fun fact area start -->
            <section class="tp-counter-2-area p-relative">
               <div class="container">
                  <div class="tp-counter-2-wrapper p-relative">
                     <div class="tp-counter-2-shape">
                        <div class="shape-1 d-none d-lg-block">
                           <img src="assets/img/counter/bubble-1.png" alt="">
                        </div>
                        <div class="shape-2 d-none d-lg-block">
                           <img src="assets/img/counter/bubble-2.png" alt="">
                        </div>
                        <div class="shape-3 d-none d-lg-block">
                           <img src="assets/img/counter/bubble-3.png" alt="">
                        </div>
                     </div>
                     <div class="row wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".3s">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                           <div class="tp-counter-2-inner p-relative mb-30">
                              <!-- <div class="tp-counter-thumb">
                                 <i class="flaticon-clean"></i>
                              </div> -->
                              <div class="tp-counter-content">
                                 <h4 data-purecounter-duration="1" data-purecounter-end="25" class="purecounter tp-counter-title">0</h4>
                                 <p>Happy Customers</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                           <div class="tp-counter-2-inner-1 p-relative mb-30">
                              <!-- <div class="tp-counter-thumb">
                                 <i class="flaticon-cleaning-lady"></i>
                              </div> -->
                              <div class="tp-counter-content">
                                 <h4 data-purecounter-duration="1" data-purecounter-end="15" class="purecounter tp-counter-title">0</h4>
                                 <p>Team Members</p>
                              </div>
                              <div class="tp-counter-2-shape-2">
                                 <img src="assets/img/counter/shape-3.png" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                           <div class="tp-counter-2-inner-2 p-relative mb-30">
                              <!-- <div class="tp-counter-thumb">
                                 <i class="flaticon-medal"></i>
                              </div> -->
                              <div class="tp-counter-content">
                                 <h4 data-purecounter-duration="1" data-purecounter-end="2" class="purecounter tp-counter-title">0</h4>
                                 <p>Award Winning</p>
                              </div>
                              <div class="tp-counter-2-shape-3 d-none d-lg-block">
                                 <img src="assets/img/counter/shape-3.png" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                           <div class="tp-counter-2-inner-3 p-relative mb-30">
                              <!-- <div class="tp-counter-thumb">
                                 <i class="flaticon-thumbs-up"></i>
                              </div> -->
                              <div class="tp-counter-content">
                                 <h4 data-purecounter-duration="1.5" data-purecounter-end="35" class="purecounter tp-counter-title">0</h4>
                                 <p>Projects Complete</p>
                              </div>
                              <div class="tp-counter-2-shape-4">
                                 <img src="assets/img/counter/shape-3.png" alt="">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         <!-- fun fact area end -->

         <!-- testimonial area start -->
         <section class="tp-testimonial-3-area p-relative pt-120" data-background="assets/img/testimonial/home-3/img-1.jpg">
            <div class="tp-testimonial-3-overlay"></div>
            <div class="tp-testimonial-3-shape">
               <img class="shape-1" src="assets/img/testimonial/home-3/bubble-1.png" alt="">
               <img class="shape-2" src="assets/img/testimonial/home-3/bubble-2.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="tp-testimonial-2-section-title-wrapper text-center">
                        <div class="tp-inner-pre">
                           <span><i class="far fa-users"></i></span>
                        </div>
                        <h3 class="tp-section__title mb-50">OUR LOVELY CUSTOMERS</h3>
                     </div>
                     <div class="testimonial-active-3 splide wow fadeInLeft" data-wow-duration="1s"
                     data-wow-delay=".3s">
                        <div class="splide__arrows splide__arrows--ltr tp-btn-effect">
                           <button class="splide__arrow splide__arrow--prev">
                           <i class="fa-light fa-arrow-left"></i>
                         </button>
                           <button class="splide__arrow splide__arrow--next">
                            <i class="fa-light fa-arrow-right"></i>
                         </button>
                        </div>
                        <div class="splide__track">
                           <div class="splide__list">
                              <div class="splide__slide">
                                 <div class="tp-testimonial-2-wrapper">
                                    <div class="tp-testimonial-2-shape">
                                       <img src="assets/img/testimonial/home-2/shape.png" alt="">
               </div>
                                    <p>“I had a show and I needed experienced artists to partner with, CrowdPlay was the perfect place where I got an experienced artist to join me in my show.</p>
                                    <h3 class="tp-testimonial-title">Nicholas Ewung</h3>
                                    <span>Client</span>
                                 </div>
                              </div>
                              <div class="splide__slide">
                                 <div class="tp-testimonial-2-wrapper">
                                    <div class="tp-testimonial-2-shape">
                                       <img src="assets/img/testimonial/home-2/shape.png" alt="">
                                    </div>
                                    <p>“I became a professional photographer after joining CrowdPlay, I utilized Crowdplay's community of artist to grow and hone my photography skills.</p>
                                    <h3 class="tp-testimonial-title">Nadine Hansen</h3>
                                    <span>Artist</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s"
                  data-wow-delay=".3s">
                     <div class="tp-testimonial-3-from p-relative" data-background="assets/img/brand/home-2/form-img1.png" style="background-image: url(&quot;assets/img/brand/home-2/form-img1.png&quot;);">
                        <div class="tp-brands-from-overlay"></div>
                        <span class="tp-section__title-pre">Book a Session</span>
                        <!-- <h3 class="tp-brands-title">Book a Session</h3> -->
                        <div class="tp-brands-from-input">
                           <input type="text" name="fullname" placeholder="Full Name:" required>
                        </div>
                        <div class="tp-brands-from-input">
                           <input name="phone" type="number" placeholder="Phone:" required>
                        </div>
                        <div class="tp-brands-from-input">
                           <input type="email" name="email" placeholder="Email Address:" required>
                        </div>
                        <div class="tp-brands-from-input">
                           <select id="book-type" name="service" class="wide" style="display: none; required">
                              <option>Choose Service:</option>
                              <option name="artist" value="Book Artist">Book Artist</option>
                              <option name="session" value="Book Session">Book Session</option>
                           </select><div class="nice-select wide" tabindex="0"><span class="current">Choose Service:</span><ul class="list"><li data-value="Choose Service:" class="option selected">Choose Service:</li><li data-value="Book Artist" class="option">Book Artist</li><li data-value="Book Session" class="option">Book Session</li></ul></div>
                        </div>
                          <div id="comment1" class="tp-brands-from-input" style="display:none;">
                              Send us details of your choice of artist, event date and time, location and any other important note and we will get back to you shortly.
                        </div>
                        <div id="comment2" class="tp-brands-from-input" style="display:none;">
                              Full Session: Eight Thousand Naira <br/>
                              Half Session: Four Thousand Naira <br/>
                              Choose a session and give details of the activity you want to perform and we will get back to you with the schedule and payment details.
                        </div>
                       <div class="tp-brands-from-input">
                        <textarea name="message" placeholder="Write Message..." required></textarea>
                       </div>
                       <button class="tp-btn">Submit Now <i class="fa-regular fa-arrow-right-long"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      <!-- testimonial area end -->

      </main>



<!-- footer area start -->
         <footer class="tp-footer-area p-relative">
            <div class="tp-footer-wrapper" data-background="assets/img/footer/footer-bg-1.jpg">
               <div class="tp-footer-overlay"></div>
               <div class="tp-footer-shape">
                  <img class="shape-1" src="assets/img/footer/shape-1.png" alt="">
                  <img class="shape-2" src="assets/img/footer/shape-2.png" alt="">
               </div>
            <div class="tp-footer-inner-content tp-footer-plr">
               <div class="container-fluid">
                  <div class="tp-footer-logo-area pt-100 pb-75">
                  <div class="tp-footer-logo-content p-relative">
                     <div class="tp-footer-logo-content-shape d-none d-xl-block">
                        <img class="shape-3" src="assets/img/footer/shape-3.png" alt="">
                        <img class="shape-4" src="assets/img/footer/shape-4.png" alt="">
                     </div>
                     <div class="row align-items-center">
                        <div class="col-md-4 col-lg-6">
                           <div class="tp-footer-logo">
                              <a href="{{'/'}}">
                                 <img style="width:60px" src="assets/img/logo/logo.png" alt="crowdplay logo">
                              </a>
                           </div>
                        </div>
                        <div class="col-md-8 col-lg-6">
                           <div class="tp-btn-effect">
                              <div class="tp-footer-social d-flex justify-content-start justify-content-md-end align-items-center">
                                 <span>Follow Us:</span>
                                 <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                 <a href="#"><i class="fa-brands fa-instagram"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
               <div class="tp-footer-widget-area pb-60">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                           <div class="tp-footer-widget-1 pl-25 ">
                              <span class="mb-30 ">Quick Links</span>
                              <ul class="tp-footer-list-float">
                                 <li><a href="{{'/'}}">Home</a></li>
                                 <!-- <li><a href="{{'/about'}}">About</a></li> -->
                                 <li><a href="{{'/service'}}">Services</a></li>
                                 <li><a href="{{'/artists'}}">Artists</a></li>
                                 <li><a href="{{'/blog'}}">Blog</a></li>
                                 <li><a href="{{'/contact'}}">Contact</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                           <div class="tp-footer-widget-2 tp-footer-ml-18 mb-30">
                              <span class="mb-30">Contact Us</span>
                              <div class="tp-footer-widget-contact d-flex align-items-center mb-30">
                                 <a class="icon" href="#"><i class="flaticon-telephone-call"></i></a>
                                 <div class="contact-inner">
                                    <p>Phone:</p>
                                    <a style="font-size: 16px" href="tel:08081055103">0808 105 5103</a>
                                 </div>
                              </div>
                              <div class="tp-footer-widget-contact d-flex align-items-center">
                                 <a class="icon" href="#"><i class="flaticon-mail"></i></a>
                                 <div class="contact-inner">
                                    <p>E-mail:</p>
                                    <a style="font-size: 16px" href="mailto:crowdplayabuja@gmail.com">crowdplayabuja@gmail.com</a>
                                 </div>
                              </div>
                               <div class="tp-footer-widget-contact d-flex align-items-center">
                                 <a class="icon" href="#"><i class="flaticon-house"></i></a>
                                 <div class="contact-inner">
                                    <p>Address:</p>
                                    <a style="font-size: 16px" href="#">CrowdPlay Studios, Kemdy Plaza, By phase3 Gate, Army Post Service Housing Estate, Kurudu, Abuja</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-2">
                           <div class="tp-footer-widget-4 pl-20 mb-30">
                              <!-- <span class="mb-30">Other Links</span>
                              <ul>
                                 <li><a href="#">Terms of User</a></li>
                                 <li><a href="#">Terms & Condition</a></li>
                                 <li><a href="#">Privacy & Policy</a></li>
                                 <li><a href="#">Cookie & Policy</a></li>
                                 <li><a href="#">Team Members</a></li>
                                 <li><a href="#">Newsroom</a></li>
                              </ul> -->
                           </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                           <div class="tp-footer-widget-3 tp-footer-ml-45 mb-30">
                              <span class="mb-30">Our Services</span>
                              <ul>
                                 <li><a href="#">Audio</a></li>
                                 <li><a href="#">Visuals</a></li>
                                 <li><a href="#">Advertisements</a></li>
                                 <li><a href="#">Photography</a></li>
                                 <li><a href="#">Announcements</a></li>
                                 <li><a href="#">Jingles</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-footer-copyright">
               <div class="container">
                  <div class="row align-items-center justify-content-center">
                     <div class="col-lg-12">
                        <p class="text-center">Copyright ©
                            <script>document.write(new Date().getFullYear())</script> CrowdPlay. All Rights Reserved</p>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </footer>
      <!-- footer area end -->



      <!-- JS here -->
      <script src="{!! asset('assets/js/vendor/jquery.js') !!}"></>
      <script src="{!! asset('assets/js/vendor/waypoints.js') !!}"></script>
      <script src="{!! asset('assets/js/bootstrap-bundle.js') !!}"></script>
      <script src="{!! asset('assets/js/meanmenu.js') !!}"></script>
      <script src="{!! asset('assets/js/swiper-bundle.js') !!}"></script>
      <script src="{!! asset('assets/js/splide.js') !!}"></script>
      <script src="{!! asset('assets/js/slick.min.js') !!}"></script>
      <script src="{!! asset('assets/js/nouislider.js') !!}"></script>
      <script src="{!! asset('assets/js/magnific-popup.js') !!}"></script>
      <script src="{!! asset('assets/js/nice-select.js') !!}"></script>
      <script src="{!! asset('assets/js/wow.js') !!}"></script>
      <script src="{!! asset('assets/js/datepicker.js') !!}"></script>
      <script src="{!! asset('assets/js/isotope-pkgd.js') !!}"></script>
      <script src="{!! asset('assets/js/imagesloaded-pkgd.js') !!}"></script>
      <script src="{!! asset('assets/js/jquery.appear.js') !!}"></script>
      <script src="{!! asset('assets/js/jquery.knob.js') !!}"></script>
      <script src="{!! asset('assets/js/circularProgressBar.min.js') !!}"></script>
      <script src="{!! asset('assets/js/purecounter.js') !!}"></script>
      <script src="{!! asset('assets/js/ajax-form.js') !!}"></script>
      <script src="{!! asset('assets/js/main.js') !!}"></script>
      <script>
    $(document).ready(function() {
        $('#book-type').on('change', function() {
            if ($(this).val() === 'Book Artist') {
                $('#comment1').show();
                $('#comment2').hide();
            } else if ($(this).val() === 'Book Session') {
                $('#comment1').hide();
                $('#comment2').show();
            } else {
            $('#comment1').hide();
            $('#comment2').hide();
        }
        });
    });
</script>
   </body>
</html>
