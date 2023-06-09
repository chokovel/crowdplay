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
                                       {{-- <li> <a href="{{'#about'}}">About</a> </li> --}}
                                       <li> <a href="{{'/service'}}">Services</a> </li>
                                       <li> <a href="{{'/artists-page'}}">Artists</a> </li>
                                       <li> <a href="{{'/gallery'}}">Portfolio</a> </li>
                                       <li> <a href="{{'/blog'}}">Blog</a> </li>
                                       <li> <a href="{{'/contact'}}">Contact</a></li>
                                           {{-- @if (Route::has('login'))
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
                                           @endif --}}
                                    </ul>
                                 </nav>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-6 col-xl-3">
                           <div class="tp-header-right d-flex align-items-center justify-content-xxl-end">
                                 <div class="tp-header-btn p-relative d-none d-xl-block">
                                    <a class="tp-btn" href="{{'/contact'}}"><i class="fa-light fa-calendar-days"></i>Contact Us</a>
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
                           <a target="_blank" href="#"></i> CrowdPlay Studios, Kemdy Plaza,By phase3 Gate,Army Post Service Housing Estate, Kurudu, Abuja</a>
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
        <section class="breadcrumb__area breadcrumb-style pt-130 pb-115 p-relative z-index-1" data-background="assets/img/breadcrumb/art-bg.jpg">
            <div class="breadcrumb__bg-overlay m-img"></div>
            <div class="breadcrumb-shape  d-none d-lg-block">
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
                        <h3 class="breadcrumb__title">Become an Artist</h3>
                        <div class="breadcrumb__list breadcrumb__list-translate">
                            <span><a href="{{'/'}}">Home</a></span>
                            <span class="dvdr"><i class="fa-sharp fa-regular fa-minus"></i></span>
                            <span>Become an Artist</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about breadcrumb area end -->


        <!-- contact input area start -->
        <section class="tp-contact-input pt-100">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="tp-portfolio-2-section-title-wrapper text-center">
                    <span class="tp-section__title-pre-2">
                        Become an Artist
                    </span>
                    <h3 class="tp-section__title">Artist Details</h3>
                    </div>
                    <div class="tp-contact-from p-relative" data-background="assets/img/brand/home-2/team-1.jpg">
                        <div class="tp-brands-from-overlay"></div>
                        <form action="{{ route('artists.form') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <input type="text" id="firstname" name="firstname" class="form-control" required>
                                    <label for="firstname">First Name</label>
                                </div>
                                <div class="md-form mb-3">
                                    <input type="text" id="lastname" name="lastname" class="form-control" required>
                                    <label for="lastname">Last Name</label>
                                </div>
                                <div class="md-form mb-3">
                                    <input type="text" id="stagename" name="stagename" class="form-control">
                                    <label for="stagename">Stage Name</label>
                                </div>
                                <div class="md-form mb-3">
                                    <input type="text" id="phone" name="phone" class="form-control" required>
                                    <label for="phone">Phone</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="md-form mb-3">
                                    <input type="text" id="address" name="address" class="form-control" required>
                                    <label for="address">Address</label>
                                </div>
                                <div class="md-form mb-3">
                                    <input type="text" id="artprofession" name="artprofession" class="form-control" required>
                                    <label for="artprofession">Art Profession (e.g., Musician)</label>
                                </div>
                                <div class="md-form mb-3">
                                    <input type="text" id="portfoliolink" name="portfoliolink" class="form-control" required>
                                    <label for="portfoliolink">Portfolio Link (e.g., https://)</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="md-form mb-3">
                                    <input type="file" id="image" name="image" class="form-control-file">
                                    <label for="image">Image</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="md-form mb-3">
                                    <textarea id="bio" name="bio" class="form-control md-textarea" rows="4" required></textarea>
                                    <label for="bio">Brief Professional Biography</label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button class="btn btn-primary" type="submit">Send <i class="fas fa-arrow-right ml-1"></i></button>
                        </div>
                    </form>

                        </div>
                    </div>
                    </div>
                </div>
        </section>
        <!-- contact input area end -->

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
                                {{-- <!-- <li><a href="{{'/about'}}">About</a></li> --> --}}
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
    <script src="{!! asset('assets/js/vendor/jquery.js') !!}"></script>
    <script src="{!! asset('assets/js/vendor/showhide.js') !!}"></script>
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
</body>
</html>
