@extends('layouts.front')

@section('content')

      <main>
      <!-- hero area start -->
         <section class="tp-hero-area p-relative">
         <div class="hero-active splide">
            <div class="splide__arrows splide__arrows--ltr tp-btn-effect-blue">
               <button class="splide__arrow splide__arrow--prev">
                  <i class="fa-regular fa-arrow-left"></i>
               </button>
               <button class="splide__arrow splide__arrow--next">
                  <i class="fa-regular fa-arrow-right"></i>
               </button>
            </div>
            <div class="splide__track">
               <div class="splide__list">
                  <div class="splide__slide slider-item">
                     <div class="tp-hero-bg tp-hero-overlay" data-background="assets/img/hero/img-1.jpg">
                        <div class="tp-hero-shape">
                           <img class="shape-1" src="assets/img/hero/shape-1.png" alt="">
                           <img class="shape-2" src="assets/img/hero/shape-2.png" alt="">
                           <img class="shape-3" src="assets/img/hero/shape-3.png" alt="">
                        </div>
                        <div class="container">
                           <div class="row">
                              <div class="col-xl-12">
                                 <div class="tp-hero-wrapper d-flex align-items-center">
                                    <div class="tp-hero-content">
                                       <div class="tp-hero-title-wrapper">
                                          <!-- <span class="tp-hero__title-pre">
                                             24/7 cleaning service
                                          </span> -->
                                          <h3 class="tp-hero__title">CrowdPlay Studio</h3>
                                       </div>
                                       <p>Your First Artist Profiling Platform And Recording Studio</p>
                                       <div class="row">
                                          <div class="col-12 col-md-8">
                                             <ul class="tp-hero-list">
                                                <li><i class="fa-light fa-circle-check"></i> Highly Rated Artists</li>
                                                <li><i class="fa-light fa-circle-check"></i> Production/Recording Studio</li>
                                                <li><i class="fa-light fa-circle-check"></i> 24/7 Customer Support</li>
                                                <li><i class="fa-light fa-circle-check"></i> Easy Booking & Payment</li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="tp-hero-btn">
                                          <a class="tp-btn-2" href="{{'/artist-form'}}">
                                             <span class="tp-hero-btn-text">Book Artist</span>
                                             <!-- <span class="tp-hero-btn-icon"><i class="fa-regular fa-arrow-right-long"></i></span> -->
                                          </a>
                                          <a class="tp-btn-2" href="{{'/contact'}}">
                                             <span class="tp-hero-btn-text">Book Session</span>
                                          </a>
                                          <span class="tp-hero-btn-icon"><i class="fa-regular fa-arrow-right-long"></i></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="splide__slide slider-item">
                     <div class="tp-hero-bg tp-hero-overlay" data-background="assets/img/hero/img-2.jpg">
                        <div class="tp-hero-shape">
                           <img class="shape-1" src="assets/img/hero/shape-1.png" alt="">
                           <img class="shape-2" src="assets/img/hero/shape-2.png" alt="">
                           <img class="shape-3" src="assets/img/hero/shape-3.png" alt="">
                        </div>
                        <div class="container">
                           <div class="row">
                              <div class="col-xl-12">
                                 <div class="tp-hero-wrapper d-flex align-items-center">
                                    <div class="tp-hero-content">
                                       <div class="tp-hero-title-wrapper">
                                          <!-- <span class="tp-hero__title-pre">
                                             24/7 cleaning service
                                          </span> -->
                                          <h3 class="tp-hero__title"> Are you an Artist? <br>
                                        Express yourself <br> with CrowdPlay</h3>
                                       </div>
                                       <p>Register to showcase your talent to the world</p>

                                       <div class="tp-hero-btn">
                                          <a class="tp-btn-2" href="{{'/artist-form'}}">
                                             <span class="tp-hero-btn-text">Become an Artist</span>
                                             <span class="tp-hero-btn-icon"><i class="fa-regular fa-arrow-right-long"></i></span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="splide__slide slider-item">
                     <div class="tp-hero-bg tp-hero-overlay" data-background="assets/img/hero/img-3.jpg">
                        <div class="tp-hero-shape">
                           <img class="shape-1" src="assets/img/hero/shape-1.png" alt="">
                           <img class="shape-2" src="assets/img/hero/shape-2.png" alt="">
                           <img class="shape-3" src="assets/img/hero/shape-3.png" alt="">
                        </div>
                        <div class="container">
                           <div class="row">
                              <div class="col-xl-12">
                                 <div class="tp-hero-wrapper d-flex align-items-center">
                                    <div class="tp-hero-content">
                                       <div class="tp-hero-title-wrapper">
                                          <span class="tp-hero__title-pre">
                                             24/7 @ your service
                                          </span>
                                          <h3 class="tp-hero__title">Create, Produce, Mix <br> With CrowdPlay</h3>
                                       </div>
                                       <p>Record your Music Videos and Audios, Jingles, Advertisements,<br>  Broadcasting, Interviews, Announcements etc. </p>

                                       <div class="tp-hero-btn">
                                          <a class="tp-btn-2" href="{{'/contact'}}">
                                             <span class="tp-hero-btn-text">Book a Session</span>
                                             <span class="tp-hero-btn-icon"><i class="fa-regular fa-arrow-right-long"></i></span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </section>
      <!-- hero area end -->

      <!-- brands area start -->
         <!-- <section id="mousemove" class="tp-brands-area pt-120 pb-120 tp-brands-overlay p-relative fix">
         <div class="tp-brands-shape">
            <img src="assets/img/brand/brand-shape.png" alt="">
         </div>
         <div class="tp-brands-filter d-none d-md-block">
            <img class="filter-1" src="assets/img/brand/filter-1.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tp-section-title-wrapper text-center">
                     <span class="tp-section__title-pre">
                        trusted partner’s
                     </span>
                     <h3 class="tp-section__title">Tursted By These Brands</h3>
                  </div>
                  <div class="slider-active splide mt-75" >
                     <div class="splide__track">
                        <div class="splide__list">
                           <div class="splide__slide tp-brands-hover">
                              <a href="#"><img src="assets/img/brand/home-2/img-1.png" alt=""></a>
                           </div>
                           <div class="splide__slide tp-brands-hover">
                              <a href="#"><img src="assets/img/brand/home-2/img-2.png" alt=""></a>
                           </div>
                           <div class="splide__slide tp-brands-hover">
                              <a href="#"><img src="assets/img/brand/home-2/img-3.png" alt=""></a>
                           </div>
                           <div class="splide__slide tp-brands-hover">
                              <a href="#"><img src="assets/img/brand/home-2/img-4.png" alt=""></a>
                           </div>
                           <div class="splide__slide tp-brands-hover">
                              <a href="#"><img src="assets/img/brand/home-2/img-5.png" alt=""></a>
                           </div>
                           <div class="splide__slide tp-brands-hover">
                              <a href="#"><img src="assets/img/brand/home-2/img-6.png" alt=""></a>
                           </div>
                           <div class="splide__slide tp-brands-hover">
                              <a href="#"><img src="assets/img/brand/home-2/img-7.png" alt=""></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </section> -->
      <!-- brands area end -->

      <!-- features area start -->
         <section class="tp-features-area p-relative fix pb-95">
         <div class="tp-brands-filter">
            <img class="filter-2" src="assets/img/brand/filter-2.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                  <div class="tp-features-item-wrapper mb-50 wow fadeInUp" data-wow-duration="1s"
                  data-wow-delay=".3s">
                     <div class="tp-features-item-thumb text-center">
                        <img src="assets/img/brand/img-1.jpg" alt="">
                     </div>
                     <div class="tp-features-item-content">
                        <h4 class="tp-features-item-title"><a href="#"></a>Entertainment Artists</h4>
                        <p>We profile a variety of award winning professionals ranging from Musicians, Comedians, Disc Jockeys, MCs, Actors, Models, Photographer, Anchors, Presenters to Dancers. CrowdPlay got you. </p>
                     </div>
                     <!-- <div class="tp-btn-effect">
                        <a class="feature-btn" href="service-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
                     </div> -->
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                  <div class="tp-features-item-wrapper mb-50 wow fadeInUp" data-wow-duration="1s"
                  data-wow-delay=".4s">
                     <div class="tp-features-item-thumb text-center">
                        <img src="assets/img/brand/img-2.jpg" alt="">
                     </div>
                     <div class="tp-features-item-content">
                        <h4 class="tp-features-item-title"><a href="#"></a>Recording Studio</h4>
                        <p>You can create your own music, bring your production up to a professional level, and streamline your workflow for short deadlines; Whatever you need, CrowdPlay will help you reach your full creative potential.</p>
                     </div>
                     <!-- <div class="tp-btn-effect">
                        <a class="feature-btn" href="service-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
                     </div> -->
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                  <div class="tp-features-item-wrapper-2 mb-50 p-relative wow fadeInUp" data-wow-duration="1s"
                  data-wow-delay=".5s">
                     <div class="item-shape">
                        <img class="shape-1" src="assets/img/brand/brand-shape-2.png" alt="">
                        <img class="shape-2" src="assets/img/brand/brand-shape-3.png" alt="">
                     </div>
                     <h4 class="tp-features-item-title">Subscribe To our Newsletter</h4>
                     <p>Get latest updates on trending entertaiment news from our blog.</p>
                     <input type="text" placeholder="Your Full Name">
                     <input type="email" placeholder="Enter Your Email">
                     <div class="tp-features-btn text-center mt-5">
                        <button class="tp-btn-2">
                           <span class="tp-feature-btn-text">Subscribe Now</span>
                           <span class="tp-feature-btn-icon"><i class="fa-light fa-paper-plane"></i></span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </section>
      <!-- features area end -->

      <!-- about area start -->
         <section id="about" class="tp-about-area pt-120 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xl-6">
                  <div class="row tp-gx-20 ">
                     <div class="tp-about-thumb-wrapper wow fadeInLeft" data-wow-duration="1s"
                     data-wow-delay=".3s">
                        <div class="tp-about-thumb">
                           <img src="assets/img/about/img-1.jpg" alt="">
                        </div>
                        <div class="tp-about-thumb p-relative">
                           <img class="mb-20" src="assets/img/about/img-2.jpg" alt="">
                           <div class="skill__progress-circle mr-30">
                              <div class="progress-circular">
                                 <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="140" data-height="140" data-bgcolor="#fff" data-fgcolor="#ffc700" data-thickness=".15" data-readonly="true" disabled >
                              </div>
                              <h4>Project Success</h4>
                           </div>
                           <img src="assets/img/about/img-3.jpg" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="tp-about-section-title-wrapper wow fadeInRight" data-wow-duration="1s"
                  data-wow-delay=".3s">
                     <span class="tp-section__title-pre">
                        About CrowdPlay
                     </span>
                     <h3 class="tp-section__title mb-25">Crowplay is an innovative Artist profiling platform that aims to connect artists with potential fans and clients.</h3>
                     <p>
 It offers a unique opportunity for artists to showcase their talents and skills, providing a space for them to express their creativity and get recognized. Whether you're a musician, visual artist, or performer, Crowplay provides a powerful platform to connect with potential fans and clients, build your profile, and take your career to the next level.
 <br>We help potential clients find artists. We provide a seamless means for clients to easily find and connect with professional artists for all kinds of events (weddings, birthdays, corporate and house parties, etc.) at affordable cost.
 <br>CrowdPlay also provides solution to all audio and visual production need with the best producers always on standby.</p>

                  </div>
               </div>
            </div>
         </div>
         </section>
      <!-- about area end -->

      <!-- our service area start -->
         <section class="tp-service-area fix tp-service-overlay pt-120 pb-110 p-relative">
         <div class="tp-service-shape">
            <img class="service-1" src="assets/img/services/shape-wrapper.png" alt="">
            <img class="service-2" src="assets/img/services/shape-wrapper2.png" alt="">
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-section-title-wrapper text-center mb-80">
                     <span class="tp-section__title-pre">
                        Our services
                     </span>
                     <h3 class="tp-section__title">What We are Offering</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="service-active splide wow fadeInUp" data-wow-duration="1s"
                  data-wow-delay=".3s">
                     <div class="splide__track">
                        <div class="splide__list">
                           <div class="splide__slide">
                              <div class="tp-service-item p-relative">
                                 <div class="item-shape">
                                    <img src="assets/img/services/shape-item.png" alt="">
                                 </div>
                                 <!-- <div class="tp-service-thumb">
                                    <i class="flaticon-pipes"></i>
                                 </div> -->
                                 <h4 class="tp-service-title"><a href="#"></a>Audios</h4>
                                 <p>EXplore the finest top-quality audio producers</p>
                                 <!-- <div class="tp-service-item-btn">
                                    <a href="service-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
                                 </div> -->
                              </div>
                           </div>
                           <div class="splide__slide">
                              <div class="tp-service-item p-relative">
                                 <div class="item-shape">
                                    <img src="assets/img/services/shape-item.png" alt="">
                                 </div>
                                 <!-- <div class="tp-service-thumb">
                                    <i class="flaticon-house-cleaning"></i>
                                 </div> -->
                                 <h4 class="tp-service-title"><a href="#"></a>Visuals</h4>
                                 <p>Explore the best quality studios for your next production.</p>
                                 <!-- <div class="tp-service-item-btn">
                                    <a href="service-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
                                 </div> -->
                              </div>
                           </div>
                           <div class="splide__slide">
                              <div class="tp-service-item p-relative">
                                 <div class="item-shape">
                                    <img src="assets/img/services/shape-item.png" alt="">
                                 </div>
                                 <!-- <div class="tp-service-thumb">
                                    <i class="flaticon-workplace"></i>
                                 </div> -->
                                 <h4 class="tp-service-title"><a href="#"></a>Photography</h4>
                                 <p>Hire the best photographers for a memorable event.</p>
                                 <!-- <div class="tp-service-item-btn">
                                    <a href="service-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
                                 </div> -->
                              </div>
                           </div>
                           <div class="splide__slide">
                              <div class="tp-service-item p-relative">
                                 <div class="item-shape">
                                    <img src="assets/img/services/shape-item.png" alt="">
                                 </div>
                                 <!-- <div class="tp-service-thumb">
                                    <i class="flaticon-window-cleaning"></i>
                                 </div> -->
                                 <h4 class="tp-service-title"><a href="#"></a>Announcements</h4>
                                 <p>Public service announcement and all others.</p>
                                 <!-- <div class="tp-service-item-btn">
                                    <a href="service-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
                                 </div> -->
                              </div>
                           </div>
                           <div class="splide__slide">
                              <div class="tp-service-item p-relative">
                                 <div class="item-shape">
                                    <img src="assets/img/services/shape-item.png" alt="">
                                 </div>
                                 <!-- <div class="tp-service-thumb">
                                    <i class="flaticon-mop"></i>
                                 </div> -->
                                 <h4 class="tp-service-title"><a href="#"></a>Broadcasting</h4>
                                 <p>Gain visibility with our verified broadcasting services.</p>
                                 <!-- <div class="tp-service-item-btn">
                                    <a href="service-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
                                 </div> -->
                              </div>
                           </div>
                           <div class="splide__slide">
                              <div class="tp-service-item p-relative">
                                 <div class="item-shape">
                                    <img src="assets/img/services/shape-item.png" alt="">
                                 </div>
                                 <!-- <div class="tp-service-thumb">
                                    <i class="flaticon-house"></i>
                                 </div> -->
                                 <h4 class="tp-service-title"><a href="#"></a>Interviews</h4>
                                 <p>Eliminate the hassle, let's connect you to the best interviewers.</p>
                                 <!-- <div class="tp-service-item-btn">
                                    <a href="service-details.html"><i class="fa-regular fa-arrow-up-right"></i></a>
                                 </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-service-all-btn text-center mt-60">
                     <a class="tp-btn" href="{{'/service'}}">All Services <i class="fa-regular fa-arrow-right-long"></i></a>
                  </div>
               </div>
            </div>
         </div>
         </section>
      <!-- our service area end -->

      <!-- team area start -->
         <section class="tp-team-area pt-120 pb-80 p-relative">
            <div class="tp-team-bg" data-background="assets/img/team/team-bg.jpg"></div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-team-section-title-wrapper text-center mb-70">
                        <span class="tp-section__title-pre">
                           Our Team
                        </span>
                        <h3 class="tp-section__title">Qualified Team Members</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                     <div class="tp-team-wrapper p-relative wow fadeInLeft" data-wow-duration="1s"
                     data-wow-delay=".4s">
                        <div class="tp-team-thumb">
                           <a href="#"><img src="assets/img/team/artist-a.jpg" alt=""></a>
                        </div>
                        <!-- <div class="tp-team-social">
                           <ul class="tp-btn-effect">
                              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                           </ul>
                        </div> -->
                        <div class="tp-team-content text-center mt-30">
                           <h4 class="tp-team-title-1"><a href="#">Stella Bakie</a></h4>
                           <p>Studio Manager</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                     <div class="tp-team-wrapper p-relative wow fadeInLeft" data-wow-duration="1s"
                     data-wow-delay=".3s">
                        <div class="tp-team-thumb">
                           <a href="#"><img src="assets/img/team/team-2.jpg" alt=""></a>
                        </div>
                        <!-- <div class="tp-team-social">
                           <ul class="tp-btn-effect">
                              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                           </ul>
                        </div> -->
                        <div class="tp-team-content text-center mt-30">
                           <h4 class="tp-team-title-1"><a href="#">Isaac Obi</a></h4>
                           <p>Producer</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                     <div class="tp-team-wrapper p-relative wow fadeInRight" data-wow-duration="1s"
                     data-wow-delay=".3s">
                        <div class="tp-team-thumb">
                           <a href="#"><img src="assets/img/team/team-3.jpg" alt=""></a>
                        </div>
                        <!-- <div class="tp-team-social">
                           <ul class="tp-btn-effect">
                              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                           </ul>
                        </div> -->
                        <div class="tp-team-content text-center mt-30">
                           <h4 class="tp-team-title-1"><a href="#">MacDaniels Dickson</a></h4>
                           <p>Photographer</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
                     <div class="tp-team-wrapper p-relative wow fadeInRight" data-wow-duration="1s"
                     data-wow-delay=".4s">
                        <div class="tp-team-thumb">
                           <a href="#"><img src="assets/img/team/team-4.jpg" alt=""></a>
                        </div>
                        <!-- <div class="tp-team-social">
                           <ul class="tp-btn-effect">
                              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                           </ul>
                        </div> -->
                        <div class="tp-team-content text-center mt-30">
                           <h4 class="tp-team-title-1"><a href="#">Faith Alugbue</a></h4>
                           <p>IT Manager</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      <!-- team area end -->

      <!-- portfolio area start -->
         <section class="tp-portfolio-area pb-120">
            <div class="container">
               <div class="row align-items-center justify-content-center mb-25">
                  <div class="col-lg-8">
                     <div class="tp-portfolio-section-title-wrapper">
                        <span class="tp-section__title-pre">
                           Our portfolio
                        </span>
                        <h3 class="tp-section__title">Recent Work Showcase</h3>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="tp-portfolio-btn text-lg-end">
                        <a class="tp-btn" href="{{'/gallery'}}">All Portfolio <i class="fa-regular fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="portfolio-active splide wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".3s">
                        <div class="splide__arrows splide__arrows--ltr tp-btn-effect-blue">
                           <button class="splide__arrow splide__arrow--prev"><i class="fa-regular fa-arrow-left"></i></button>
                           <button class="splide__arrow splide__arrow--next"><i class="fa-regular fa-arrow-right"></i></button></div>
                           <div class="my-slider-progress">
                           <div class="my-slider-progress-bar"></div>
                           </div>
                        <div class="splide__track pt-80">
                           <div class="splide__list">
                              <div class="splide__slide">
                                 <div class="tp-portfolio-thumb w-img p-relative">
                                    <a href="#"><img src="assets/img/portfolio/portfolio-2.jpg" alt=""></a>
                                    <div class="tp-portfolio-info p-relative">
                                       <div class="tp-portfolio-content">
                                          <div class="tp-portfolio-title">
                                             <h4 class="tp-portfolio-content-title"><a href="#">Disc Jockey</a></h4>
                                             <p>CrowdPlay Artist</p>
                                          </div>
                                          {{-- <div class="tp-portfolio-content-btn">
                                             <a href="#"><i class="fa-regular fa-arrow-up-right"></i></a>
                                          </div> --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="splide__slide">
                                 <div class="tp-portfolio-thumb w-img">
                                    <a href="#"><img src="assets/img/portfolio/Frame-1.jpg" alt=""></a>
                                    <div class="tp-portfolio-info p-relative">
                                       <div class="tp-portfolio-content">
                                          <div class="tp-portfolio-title">
                                             <h4 class="tp-portfolio-content-title"><a href="#">Family Photo</a></h4>
                                             <p>CrowdPlay photography</p>
                                          </div>
                                          {{-- <div class="tp-portfolio-content-btn">
                                             <a href="project.html"><i class="fa-regular fa-arrow-up-right"></i></a>
                                          </div> --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="splide__slide">
                                 <div class="tp-portfolio-thumb w-img">
                                    <a href="#"><img src="assets/img/portfolio/Frame-2.jpg" alt=""></a>
                                    <div class="tp-portfolio-info p-relative">
                                       <div class="tp-portfolio-content">
                                          <div class="tp-portfolio-title">
                                             <h4 class="tp-portfolio-content-title"><a href="#">Interview Broadcast</a></h4>
                                             <p>CrowdPlay Studio</p>
                                          </div>
                                          {{-- <div class="tp-portfolio-content-btn">
                                             <a href="project.html"><i class="fa-regular fa-arrow-up-right"></i></a>
                                          </div> --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="splide__slide">
                                 <div class="tp-portfolio-thumb w-img">
                                    <a href="#"><img src="assets/img/portfolio/Frame-3.jpg" alt=""></a>
                                    <div class="tp-portfolio-info p-relative">
                                       <div class="tp-portfolio-content">
                                          <div class="tp-portfolio-title">
                                             <h4 class="tp-portfolio-content-title"><a href="#">Studio Session</a></h4>
                                             <p>CrowdPlay Studio</p>
                                          </div>
                                          <div class="tp-portfolio-content-btn">
                                             <a href="#"><i class="fa-regular fa-arrow-up-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="splide__slide">
                                 <div class="tp-portfolio-thumb w-img">
                                    <a href="#"><img src="assets/img/portfolio/Frame-4.jpg" alt=""></a>
                                    <div class="tp-portfolio-info p-relative">
                                       <div class="tp-portfolio-content">
                                          <div class="tp-portfolio-title">
                                             <h4 class="tp-portfolio-content-title"><a href="#">Family Photo</a></h4>
                                             <p>CrowdPlay Photography</p>
                                          </div>
                                          <div class="tp-portfolio-content-btn">
                                             <a href="#"><i class="fa-regular fa-arrow-up-right"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      <!-- portfolio area end -->

      <!-- fun fact area start -->
         <section class="tp-counter-area tp-counter-overlay p-relative pt-120 pb-90">
            <div class="tp-counter-shape">
               <img class="shape-1" src="assets/img/counter/shape.png" alt="">
               <img class="shape-2" src="assets/img/counter/shape-2.png" alt="">
            </div>
            <div class="container">
               <div class="row wow fadeInUp" data-wow-duration="1s"
               data-wow-delay=".4s">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="tp-counter-wrapper d-flex mb-30">
                        <div class="tp-counter-content">
                           <h4 data-purecounter-duration="1" data-purecounter-end="25" class="purecounter tp-counter-title">0</h4>
                           <p>Happy Customers</p>
                        </div>
                        <!-- <div class="tp-counter-thumb">
                           <i class="flaticon-clean"></i>
                        </div> -->
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="tp-counter-wrapper d-flex mb-30">
                        <div class="tp-counter-content">
                           <h4 data-purecounter-duration="1" data-purecounter-end="15" class="purecounter tp-counter-title">0</h4>
                           <p>Team Members</p>
                        </div>
                        <!-- <div class="tp-counter-thumb">
                           <i class="flaticon-cleaning-lady"></i>
                        </div> -->
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="tp-counter-wrapper d-flex mb-30">
                        <div class="tp-counter-content">
                           <h4 data-purecounter-duration="1" data-purecounter-end="2" class="purecounter tp-counter-title">0</h4>
                           <p>Award Winning</p>
                        </div>
                        <!-- <div class="tp-counter-thumb">
                           <i class="flaticon-medal"></i>
                        </div> -->
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                     <div class="tp-counter-wrapper d-flex mb-30">
                        <div class="tp-counter-content">
                           <h4 class="purecounter tp-counter-title" data-purecounter-duration="1.5" data-purecounter-end="35">0</h4>
                           <p>Project Complete</p>
                        </div>
                        <!-- <div class="tp-counter-thumb">
                           <i class="flaticon-thumbs-up"></i>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
      <!-- fun fact area end -->

      <!-- testimonial area start -->
         <div class="tp-testimonial-area p-relative pb-120">
            <div class="tp-testimonial-overlay"></div>
            <div class="tp-testimonial-shape">
               <img class="shape-1" src="assets/img/testimonial/shpe-1.png" alt="">
               <img class="shape-2" src="assets/img/testimonial/shpe-2.png" alt="">
               <img class="shape-3 d-none d-xl-block" src="assets/img/testimonial/shpe-3.png" alt="">
               <img class="shape-4 d-none d-xl-block" src="assets/img/testimonial/shpe-4.png" alt="">
            </div>
            <div class="container">
               <div class="tp-testimonial-wrapper">
                  <div class="row">
                     <div class="col-lg-5 order-2 order-lg-1 wow fadeInLeft" data-wow-duration="1s"
                     data-wow-delay=".3s">
                        <div class="tp-testimonial-thumb">
                           <img
                           style="width: 400px;
                              height: 494px;
                              object-fit: cover;"
                           src="assets/img/testimonial/img-1.jpg" alt="">
                        </div>
                     </div>
                     <div class="col-lg-7 order-1 order-lg-2 wow fadeInRight" data-wow-duration="1s"
                     data-wow-delay=".3s">
                        <div class="tp-testimonial-content">
                           <div class="tp-nav-wrap">
                              <div class="testimonial-navigation-active splide">
                                 <div class="splide__track">
                                    <div class="splide__list">
                                       <div class="splide__slide">
                                          <div class="tp-testimonial-user text-center">
                                             <img src="assets/img/testimonial/img-1.jpg" alt="">
                                          </div>
                                       </div>
                                       <div class="splide__slide">
                                          <div class="tp-testimonial-user text-center">
                                             <img src="assets/img/testimonial/img-3.jpg" alt="">
                                          </div>
                                       </div>
                                       <div class="splide__slide">
                                          <div class="tp-testimonial-user text-center">
                                             <img src="assets/img/testimonial/artist-j.jpg" alt="">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="testimonial-main-active splide">
                              <div class="splide__track">
                                 <div class="splide__list">
                                    <div class="splide__slide">
                                       <p class="text-center">“I had a show and I needed experienced artists to partner with, CrowdPlay was the perfect place where I got an experienced artist to join me in my show.</p>
                                       <span class="text-center">Nicholas Ewung</span>
                                       <p class="tp-testimonial-designation text-center">Client</p>
                                    </div>
                                    <div class="splide__slide">
                                       <p class="text-center">“I became a professional photographer after joining CrowdPlay, I utilized Crowdplay's community of artist to grow and hone my photography skills.</p>
                                       <span class="text-center">Nadine Hansen</span>
                                       <p class="tp-testimonial-designation text-center">Artist</p>
                                    </div>
                                    <div class="splide__slide">
                                       <p class="text-center">“As an upcoming artist, I found it difficult to make waves in the movie industry until I met my mentor on CrowdPlay who has now helped me become a 5-star actress.</p>
                                       <span class="text-center">Shansa Alex</span>
                                       <p class="tp-testimonial-designation text-center">Artist</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <!-- testimonial area end -->

      <!-- blog area start -->
         <section class="tp-blog-area p-relative pb-90">
            <div class="tp-blog-shape">
               <img src="assets/img/blog/shape.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-blog-section-title-wrapper text-center mb-80">
                        <span class="tp-section__title-pre">
                           Article Section
                        </span>
                        <h3 class="tp-section__title">latest blog</h3>
                     </div>
                  </div>
               </div>
               <div class="row">
                 @foreach($recents as $recent)
                  <div class="col-md-6 col-lg-4 blog-col">
                     <div class="tp-blog-wrapper mb-30 wow fadeInUp" data-wow-duration="1s"
                     data-wow-delay=".4s">
                        <div class="tp-blog-thumb">
                           <a href="{{ route('post', $recent->slug)}}"><img  src="{{ asset(str_replace('public','storage',$recent->image)) }}" alt=""></a>
                           <span class="tp-section__title-pre">{{ $recent->created_at->format('d-m-Y') }}</span>
                        </div>
                        <div class="tp-blog-content">
                           <h3 class="tp-blog-title"><a href="{{ route('post', $recent->slug)}}">{{ $recent->title }}</a></h3>
                           <p>{!! Str::limit(strip_tags($recent->content), 50, '...') !!}</p>
                           {{-- <div class="tp-blog-btn">
                              <a class="tp-btn" href="{{ route('post', $recent->slug)}}">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                           </div> --}}
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </section>
      <!-- blog area end -->
      </main>


@endsection
