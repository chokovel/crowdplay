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
        <!-- service details area start -->
<section class="tp-blog-breadcrumb-area pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
    <div class="row">
        <!-- Loop through the blog posts -->
        @foreach($posts as $post)
        <div class="col-md-6 blog-col">
            <div class="tp-blog-content-wrapper">
                <div class="tp-blog-breadcrumb-thumb p-relative">
                    <a href="{{ route('post', $post->slug) }}"><img src="{{ asset(str_replace('public','storage',$post->image)) }}" alt=""></a>
                    <span class="tp-section__title-pre">{{ $post->created_at->format('d-M-Y') }}</span>
                </div>
                <div class="tp-blog-breadcrumb-inner-content">
                    <h3 style="font-size: 20px" class="tp-blog-title"><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></h3>
                    {{-- <p>{!! Str::limit(strip_tags($post->content), 200) !!}</p> --}}
                    {{-- <div class="tp-blog-btn">
                        <a class="tp-btn" href="{{ route('post', $post->slug) }}">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="tp-blog-breadcrumb-pagination mb-40">
        <nav class="blog-pagination" aria-label="...">
            <ul class="pagination">
                <!-- Pagination links go here -->
            </ul>
        </nav>
    </div>
</div>

            <div class="col-lg-4">
                <div class="tp-blog-left-box">
                    <div class="tp-service-details__search-box mb-60">
                        <h3 class="tp-blog-sidebar__widget-title">Search Here</h3>
                        <div class="search-form p-relative">
                            <form action="#">
                                <input type="text" placeholder="Search here">
                                <button><i class="fa-regular fa-arrow-right-long"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="service-sidebar__widget mb-60">
                        <h3 class="service-sidebar__widget-title">Post Categories</h3>
                        <div class="service-sidebar__widget-content">
                            <ul>
                                <!-- Loop through the post categories -->
                                @foreach($categories as $category)
                                <li><a href="{{route('category', $category->name)}}"><i class="fa-regular fa-arrow-right"></i> {{ $category->name }}<span></span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="tp-blog-sidebar__widget mb-60">
                        <h3 class="tp-blog-sidebar__widget-title">Recent Post</h3>
                        <div class="tp-blog-sidebar__widget-content">
                            <!-- Loop through the recent posts -->
                            @foreach($recents as $recent)
                            <div class="tp-blog-sidebar__post">
                                <div class="rc__post d-flex align-items-center">
                                    <div class="rc__post-thumb">
                                        <a href="{{ route('post', $recent->slug)}}"><img src="{{ asset(str_replace('public','storage',$post->image)) }}" alt="{{ $recent->title }}" style="width: 75px;"></a>
                                    </div>
                                    <div class="rc__post-content">
                                        <h3 class="rc__post-title">
                                            <a href="{{ route('post', $recent->slug)}}">{{ $recent->title }}</a>
                                        </h3>
                                        <span><i class="fa-light fa-calendar-days"></i> {{ $recent->created_at->format('d-m-Y') }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tp-blog-sidebar__widget mb-30">
                        <h3 class="tp-blog-sidebar__widget-title">Popular Tag</h3>
                        <div class="tp-blog-sidbar__widget-content">
                            <div class="side__tagcloud">
                                <!-- Loop through the tags -->
                                @foreach($tags as $tag)
                                <a href="{{route('tag', $tag->name)}}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
         <!-- service details area end -->
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
                                 {{-- <li><a href="{{'#about'}}">About</a></li> --}}
                                 <li><a href="{{'/service'}}">Services</a></li>
                                 <li><a href="{{'/artists'}}">Artists</a></li>
                                 <li> <a href="{{'/gallery'}}">Portfolio</a> </li>
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
   </body>
</html>
