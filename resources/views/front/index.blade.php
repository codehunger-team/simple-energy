@extends('front.layouts.app')
@section('content')

    <!-- Hero area start -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/portfolio/slider/slide-1.jpg" class="d-block w-100" alt="..." style="height: 607px;">
        </div>
        <div class="carousel-item">
          <img src="assets/img/portfolio/slider/slide-2.jpg" class="d-block w-100" alt="..." style="height: 607px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



       <div class="hero__area p-relative pt-120">
          <div class="container">
             <div class="row wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-xl-8 col-lg-12">
                   <div class="hero__content-3 mb-60">
                      <span>Welcome to </span>
                      <h2>Revolt E-Mobility</h2>
                   </div>
                </div>
                <div class="col-xl-4 col-lg-8">
                   <div class="hero__contact-info text-end">
                      <form method="post" action="{{ route('apply-quickly') }}">
                        @csrf
                         <div class="hero__contact-wrapper">
                           @if(Session::has('success'))
                           <div class="text-center">
                              <span class="text-success fw-bold">{{ Session::get('success') }}</span>
                           </div>
                           @endif
                            <div class="contact__input mb-15">
                               <input type="text" name="name" placeholder="Full name">
                               <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="contact__input mb-15">
                               <input type="tel" name="number" placeholder="Contact Number">
                               <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact__input mb-15">
                               <input type="email" name="email" placeholder="Email">
                               <i class="fa-solid fa-envelope-open"></i>
                            </div>
                            <div class="contact__input mb-15">
                               <input type="text" name="state" placeholder="State">
                               <i class="fa-solid fa-address-book"></i>
                            </div>
                            <div class="contact__input mb-15">
                               <input type="number" name="pincode" placeholder="Pin Code">
                               <i class="fa-solid fa-code"></i>
                            </div>
                            
                            <button type="submit" class="contact__btn">Apply Now</button>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>      
       </div>
     <!-- Hero area start -->
 
     <!-- Banner area start -->
     <div class="hero__banner banner__height include__bg wow fadeInUp" data-wow-delay=".3s" data-background="assets/img/hero/f1sg9kog_revolt-rv-400-first-ride-review_625x300_28_August_19.jpg" style="background-image: url(&quot;assets/img/hero/f1sg9kog_revolt-rv-400-first-ride-review_625x300_28_August_19.jpg&quot;); visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;"></div>
     <!-- Banner area end -->
 
    <!-- About area start -->
    <section class="about__area pt-120 pb-60">
       <div class="container">
          <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
             <div class="col-xl-6">
                <div class="company__service-main mb-30">
                   <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-6">
                         <div class="company__service-wrapper mb-30">
                            <div class="company__service-item text-center">
                               <div class="company__service-icon">
                                  <img src="assets/img/service/icon/company-01.png" alt="image not found">
                               </div>
                               <div class="company__service-title">
                                  <h3><a href="{{url('contact')}}">Bike Dealership</a></h3>
                               </div>
                            </div>
                         </div>
                         <div class="company__service-wrapper mb-30">
                            <div class="company__service-item text-center">
                               <div class="company__service-icon">
                                  <img src="assets/img/service/icon/company-02.png" alt="image not found">
                               </div>
                               <div class="company__service-title">
                                  <h3><a href="{{url('contact')}}">AI Based Models</a></h3>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6">
                         <div class="skill__item-right mt-30">
                            <div class="company__service-wrapper mb-30">
                               <div class="company__service-item text-center">
                                  <div class="company__service-icon">
                                     <img src="assets/img/service/icon/company-03.png" alt="image not found">
                                  </div>
                                  <div class="company__service-title">
                                     <h3><a href="{{url('contact')}}">User Experience Design</a></h3>
                                  </div>
                               </div>
                            </div>
                            <div class="company__service-wrapper mb-30">
                               <div class="company__service-item text-center">
                                  <div class="company__service-icon">
                                     <img src="assets/img/service/icon/company-04.png" alt="image not found">
                                  </div>
                                  <div class="company__service-title">
                                     <h3><a href="{{url('contact')}}">24/7 Online Support</a></h3>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-6">
                <div class="about__wrapper-3 mb-60">
                   <div class="section__title-wrapper">
                      <div class="section__subtitle-3">
                         <p class="gradient__subtitle">About Us<span></span></p>
                      </div>
                      <div class="section__title-3">
                         <h2 class="mb-20">We are dedicated to <br> serve all time.</h2>
                      </div>
                      <p>Revolt Motors has entered the Indian motorcycle market with the RV 400 to begin with, which will be followed up by two more electric products.</p>
                   </div>
                   <div class="about__contact__item style-2">
                      <div class="about__contact-info d-flex align-items-center">
                         <div class="about__contact-icon mr-15">
                         <img src="assets/img/about/icon/about-phn.png" alt="image nort found">
                         </div>
                         <div class="about__contact-content">
                            <span>Call Us Now</span>
                            <h4><a href="tel:00211232000">+919564151936</a></h4>
                         </div>
                      </div>
                      
                   </div>
                   <div class="about__author-info">
                      <div class="about__author-content">
                         <h4>Abhishek Mehta</h4>
                         <span>Head Of Idea</span>
                      </div>
                      <div class="about__author-thumb">
                         <img src="assets/img/about/author/author.png" alt="image not found">
                      </div>
                      <div class="about__author-signature">
                         <img src="assets/img/about/author/signature.png" alt="image not found">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- About area end -->
 
    <!-- Counter area start -->
    <section class="counter__area">
       <div class="container">
          <div class="counter__main-wrapper counter__overlay include__bg" data-background="assets/img/bg/counter-bg-2.jpg" style="background-image: url(&quot;assets/img/bg/counter-bg-2.jpg&quot;);">
             <div class="row wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                   <div class="counter__item-2 text-center mb-30">
                      <div class="counter-icon">
                         <button><i class="fa-solid fa-plus"></i></button>
                     </div>
                     <div class="counter__number">
                         <h2 class="counter">30</h2>
                     </div>
                      <div class="counter__title">
                         <p>Year experience<br> in this field</p>
                      </div>
                   </div>
               </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                   <div class="counter__item-2 text-center mb-30">
                      <div class="counter-icon">
                         <button><i class="fa-solid fa-plus"></i></button>
                     </div>
                     <div class="counter__number">
                         <h2 class="counter">1200</h2>
                     </div>
                      <div class="counter__title">
                         <p>+ Worldwide good <br>
                            clientse</p>
                      </div>
                   </div>
               </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                   <div class="counter__item-2 text-center mb-30">
                      <div class="counter-icon">
                         <button><i class="fa-solid fa-plus"></i></button>
                     </div>
                     <div class="counter__number">
                         <h2 class="counter">200</h2>
                     </div>
                      <div class="counter__title">
                         <p>Worldwide Captured <br>
                            online base</p>
                      </div>
                   </div>
               </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                   <div class="counter__item-2 text-center mb-30">
                      <div class="counter-icon">
                         <button><i class="fa-solid fa-plus"></i></button>
                     </div>
                     <div class="counter__number">
                         <h2 class="counter">10</h2><h2>+</h2>
                     </div>
                      <div class="counter__title">
                         <p>Masterclass team <br>
                            ever made</p>
                      </div>
                   </div>
               </div>
             </div>
          </div>
       </div>
    </section>
    <!-- Counter area start -->
 
   
    <!-- History area start -->
    <section class="history__area pt-115 pb-60">
       <div class="container">
          <div class="row wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
             <div class="section__title-wrapper text-center mb-60">
                <div class="section__subtitle-3">
                   <p class="gradient__subtitle">History<span></span></p>
                </div>
                <div class="section__title-3">
                   <h2 class="mb-20">Company History</h2>
                </div>
             </div>
          </div>
          <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
             <div class="history__tab-wrapper d-flex justify-content-center mb-55">
                <div class="history__tab">
                   <nav>
                      <div class="nav nav-tabs" id="nav-tab-3" role="tablist">
                        <button class="nav-link active" id="history-tab-1-tab" data-bs-toggle="tab" data-bs-target="#history-tab-1" type="button" role="tab" aria-controls="history-tab-1" aria-selected="true">2000</button>
                        <button class="nav-link" id="history-tab-2-tab" data-bs-toggle="tab" data-bs-target="#history-tab-2" type="button" role="tab" aria-controls="history-tab-2" aria-selected="false">2005</button>
                        <button class="nav-link" id="history-tab-3-tab" data-bs-toggle="tab" data-bs-target="#history-tab-3" type="button" role="tab" aria-controls="history-tab-3" aria-selected="false">2012</button>
                        <button class="nav-link" id="history-tab-4-tab" data-bs-toggle="tab" data-bs-target="#history-tab-4" type="button" role="tab" aria-controls="history-tab-4" aria-selected="false">2018</button>
                        <button class="nav-link" id="history-tab-5-tab" data-bs-toggle="tab" data-bs-target="#history-tab-5" type="button" role="tab" aria-controls="history-tab-5" aria-selected="false">2022</button>
                      </div>
                    </nav> 
                </div>  
             </div>          
          </div>
          <div class="row wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
             <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="history-tab-1" role="tabpanel" aria-labelledby="history-tab-1-tab">
                   <div class="row align-items-center">
                      <div class="col-xl-6 col-lg-6">
                         <div class="history__thunb-wrapper mb-60 mr-30">
                            <div class="history__thunb w-img">
                               <img src="assets/img/history/history-01.jpg" alt="image not found">
                               <div class="play__btn">
                                  <a class="popup-video" href="http://www.youtube.com/watch?v=cP2wZ5XIHVE"><i class="fa-solid fa-play"></i></a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                         <div class="history__content-wrapper mb-60">
                            <div class="history__content">
                               <h2>We are dedicated to serve <br> all time for users.</h2>
                               <p>From finance, retail, and travel, to social media, cybersecurity, adtech,
                                  and more, market leaders are leveraging web data to maintain their
                                  advantage. Discover how it can work for you. We have developed stream
                                  lined software delivery process, encompassing project planning, agile
                                  methodologies. Who the hell are you are..</p>
                               <div class="history__btn">
                                  <a class="it__btn-3" href="about.html">learn more<span><i class="fa-solid fa-angle-right"></i></span></a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="history-tab-2" role="tabpanel" aria-labelledby="history-tab-2-tab">
                   <div class="row align-items-center">
                      <div class="col-xl-6 col-lg-6">
                         <div class="history__thunb-wrapper mb-60 mr-30">
                            <div class="history__thunb w-img">
                               <img src="assets/img/history/history-02.jpg" alt="image not found">
                               <div class="play__btn">
                                  <a class="popup-video" href="http://www.youtube.com/watch?v=cP2wZ5XIHVE"><i class="fa-solid fa-play"></i></a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                         <div class="history__content-wrapper mb-60">
                            <div class="history__content">
                               <h2>We are dedicated to serve <br> all time for users.</h2>
                               <p>From finance, retail, and travel, to social media, cybersecurity, adtech,
                                  and more, market leaders are leveraging web data to maintain their
                                  advantage. Discover how it can work for you. We have developed stream
                                  lined software delivery process, encompassing project planning, agile
                                  methodologies. Who the hell are you are..</p>
                               <div class="history__btn">
                                  <a class="it__btn-3" href="about.html">learn more<span><i class="fa-solid fa-angle-right"></i></span></a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="history-tab-3" role="tabpanel" aria-labelledby="history-tab-3-tab">
                   <div class="row align-items-center">
                      <div class="col-xl-6 col-lg-6">
                         <div class="history__thunb-wrapper mb-60 mr-30">
                            <div class="history__thunb w-img">
                               <img src="assets/img/history/history-03.jpg" alt="image not found">
                               <div class="play__btn">
                                  <a class="popup-video" href="http://www.youtube.com/watch?v=cP2wZ5XIHVE"><i class="fa-solid fa-play"></i></a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                         <div class="history__content-wrapper mb-60">
                            <div class="history__content">
                               <h2>We are dedicated to serve <br> all time for users.</h2>
                               <p>From finance, retail, and travel, to social media, cybersecurity, adtech,
                                  and more, market leaders are leveraging web data to maintain their
                                  advantage. Discover how it can work for you. We have developed stream
                                  lined software delivery process, encompassing project planning, agile
                                  methodologies. Who the hell are you are..</p>
                               <div class="history__btn">
                                  <a class="it__btn-3" href="about.html">learn more<span><i class="fa-solid fa-angle-right"></i></span></a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="history-tab-4" role="tabpanel" aria-labelledby="history-tab-4-tab">
                   <div class="row align-items-center">
                      <div class="col-xl-6 col-lg-6">
                         <div class="history__thunb-wrapper mb-60 mr-30">
                            <div class="history__thunb w-img">
                               <img src="assets/img/history/history-04.jpg" alt="image not found">
                               <div class="play__btn">
                                  <a class="popup-video" href="http://www.youtube.com/watch?v=cP2wZ5XIHVE"><i class="fa-solid fa-play"></i></a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                         <div class="history__content-wrapper mb-60">
                            <div class="history__content">
                               <h2>We are dedicated to serve <br> all time for users.</h2>
                               <p>From finance, retail, and travel, to social media, cybersecurity, adtech,
                                  and more, market leaders are leveraging web data to maintain their
                                  advantage. Discover how it can work for you. We have developed stream
                                  lined software delivery process, encompassing project planning, agile
                                  methodologies. Who the hell are you are..</p>
                               <div class="history__btn">
                                  <a class="it__btn-3" href="about.html">learn more<span><i class="fa-solid fa-angle-right"></i></span></a>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="history-tab-5" role="tabpanel" aria-labelledby="history-tab-5-tab">
                   <div class="row align-items-center">
                      <div class="col-xl-6 col-lg-6">
                         <div class="history__thunb-wrapper mb-60 mr-30">
                            <div class="history__thunb w-img">
                               <img src="assets/img/history/history-05.jpg" alt="image not found">
                               <div class="play__btn">
                                  <a class="popup-video" href="http://www.youtube.com/watch?v=cP2wZ5XIHVE"><i class="fa-solid fa-play"></i></a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xl-6 col-lg-6">
                         <div class="history__content-wrapper mb-60">
                            <div class="history__content">
                               <h2>We are dedicated to serve <br> all time for users.</h2>
                               <p>From finance, retail, and travel, to social media, cybersecurity, adtech,
                                  and more, market leaders are leveraging web data to maintain their
                                  advantage. Discover how it can work for you. We have developed stream
                                  lined software delivery process, encompassing project planning, agile
                                  methodologies. Who the hell are you are..</p>
                               <div class="history__btn">
                                  <a class="it__btn-3" href="about.html">learn more<span><i class="fa-solid fa-angle-right"></i></span></a>
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
    <!-- History area end -->
 
    <!-- Portfolio area start -->
    <section class="portfolio__area portfolio__bg fix pt-115 pb-115">
       <div class="container">
          <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
             <div class="col-xl-4 col-lg-4">
                <div class="section__title-wrapper mb-50">
                   <div class="section__subtitle-3">
                      <p class="gradient__subtitle">Portfolio<span></span></p>
                   </div>
                   <div class="section__title-3">
                      <h2 class="mb-20">Our Portfolio</h2>
                   </div>
                </div>
             </div>
             <div class="col-xl-8 col-lg-8">
                <div class="portfolio__tab-wrapper mb-60">
                   <div class="porfolio__tab">
                      <nav>
                         <div class="nav nav-tabs" id="nav-tab-2" role="tablist">
                           <button class="nav-link active" id="portfolio-1-tab" data-bs-toggle="tab" data-bs-target="#portfolio-1" type="button" role="tab" aria-controls="portfolio-1" aria-selected="true">All</button>
                           <button class="nav-link" id="portfolio-2-tab" data-bs-toggle="tab" data-bs-target="#portfolio-2" type="button" role="tab" aria-controls="portfolio-2" aria-selected="false">Revolt RV300</button>
                           <button class="nav-link" id="portfolio-3-tab" data-bs-toggle="tab" data-bs-target="#portfolio-3" type="button" role="tab" aria-controls="portfolio-3" aria-selected="false">Revolt RV400</button>
                           <button class="nav-link" id="portfolio-4-tab" data-bs-toggle="tab" data-bs-target="#portfolio-4" type="button" role="tab" aria-controls="portfolio-4" aria-selected="false">Revolt RV Cafe Racer</button>
                         </div>
                       </nav>
                   </div>
                   <div class="portfolio__navigation-wrapper">
                      <!-- If we need pagination -->
                      <div class="portfolio__navigation style-2">
                         <button class="portfolio__button-prev-2" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-d714e24007cebb31"><i class="fa-regular fa-arrow-left-long"></i></button>
                         <button class="portfolio__button-next-2" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-d714e24007cebb31"><i class="fa-regular fa-arrow-right-long"></i></button>
                      </div>
                    </div>
                </div>
             </div>
          </div>
       </div>
       <div class="container-fluid p-0">
          <div class="row wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
             <div class="tab-content" id="nav-tabContent-2">
                <div class="tab-pane fade show active" id="portfolio-1" role="tabpanel" aria-labelledby="portfolio-1-tab">
                   <div class="row">
                      <div class="col-12">
                         <div class="portfolio__slider-active swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" id="swiper-wrapper-87c10165cbf1108d45" aria-live="off" style="transform: translate3d(-2615px, 0px, 0px); transition-duration: 300ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 9" style="width: 473px; margin-right: 50px;">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-01.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV300</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 9" style="width: 473px; margin-right: 50px;">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-02.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV400</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 9" style="width: 473px; margin-right: 50px;">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-03.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV Cafe Racer</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="4 / 9" style="width: 473px; margin-right: 50px;">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-01.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV300</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group" aria-label="5 / 9" style="width: 473px; margin-right: 50px;">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-02.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV400</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group" aria-label="6 / 9" style="width: 473px; margin-right: 50px;">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-03.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV Cafe Racer</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="7 / 9" style="width: 473px; margin-right: 50px;">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-01.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV300</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="8 / 9" style="width: 473px; margin-right: 50px;">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-02.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV400</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="9 / 9" style="width: 473px; margin-right: 50px;">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-03.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV Cafe Racer</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div></div>
                         <!-- If we need pagination -->
                         <div class="portfolio__pagination text-center mt-85 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                         <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="portfolio-2" role="tabpanel" aria-labelledby="portfolio-2-tab">
                   <div class="row">
                      <div class="col-12">
                         <div class="portfolio__slider-active swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" id="swiper-wrapper-86c4d34aa2a310ffa" aria-live="off" style="transition-duration: 300ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-01.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV300</a></h3>
                                           </div>
                                           
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="swiper-slide" data-swiper-slide-index="0">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-01.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV300</a></h3>
                                           </div>
                                           
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               
                         <!-- If we need pagination -->
                         <div class="portfolio__pagination text-center mt-85 swiper-pagination-clickable swiper-pagination-bullets"></div>
                         <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-01.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV300</a></h3>
                                           </div>
                                           
                                        </div>
                                     </div>
                                  </div>
                               </div></div>
                      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                   </div>
                </div>
                <div class="tab-pane fade" id="portfolio-3" role="tabpanel" aria-labelledby="portfolio-3-tab">
                   <div class="row">
                      <div class="col-12">
                         <div class="portfolio__slider-active swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" id="swiper-wrapper-911097199529f6e5a" aria-live="off" style="transition-duration: 300ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-02.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV400</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="swiper-slide" data-swiper-slide-index="0">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-02.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV400</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               
                         <!-- If we need pagination -->
                         <div class="portfolio__pagination text-center mt-85 swiper-pagination-clickable swiper-pagination-bullets"></div>
                         <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-02.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV400</a></h3>
                                           </div>
                                          
                                        </div>
                                     </div>
                                  </div>
                               </div></div>
                      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                   </div>
                </div>
                <div class="tab-pane fade" id="portfolio-4" role="tabpanel" aria-labelledby="portfolio-4-tab">
                   <div class="row">
                      <div class="col-12">
                         <div class="portfolio__slider-active swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" id="swiper-wrapper-d714e24007cebb31" aria-live="off" style="transition-duration: 300ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-03.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV Cafe Racer</a></h3>
                                           </div>
                                          
                                      </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="swiper-slide" data-swiper-slide-index="0">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-03.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV Cafe Racer</a></h3>
                                           </div>
                                          
                                      </div>
                                     </div>
                                  </div>
                               </div>
                               
                         <!-- If we need pagination -->
                         <div class="portfolio__pagination text-center mt-85 swiper-pagination-clickable swiper-pagination-bullets"></div>
                         <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
                                  <div class="portfolio__slider-item">
                                     <div class="portfolio__slider-thumb">
                                        <a href="case-details.html">
                                           <img src="assets/img/portfolio/slider/slider-03.jpg" alt="image not found">
                                        </a>
                                        <div class="portfolio__slider-action">
                                           <div class="portfolio__slider-content">
                                              <span>Portftolio</span>
                                              <h3><a href="case-details.html">Revolt RV Cafe Racer</a></h3>
                                           </div>
                                          
                                      </div>
                                     </div>
                                  </div>
                               </div></div>
                      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div></div></div></section>
    <!-- Portfolio area end -->
 
   
 
    <!-- Cta area start -->
    <section class="cta__area section-bg include__bg pt-120 pb-200" data-background="assets/img/bg/cta-pattern.png" style="background-image: url(&quot;assets/img/bg/cta-pattern.png&quot;);">
       <div class="container">
          <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
             <div class="col-xxl-9 col-xl-8 col-lg-7 col-md-12">
                <div class="cta__title-wrapper mb-60">
                   <div class="section__title-wrapper">
                      <div class="section__subtitle-3">
                         <p class="gradient__subtitle">Contact Us<span></span></p>
                      </div>
                      <div class="section__title-3 s-2">
                         <h2 class="mb-20">Awesome technology we used for work</h2>
                      </div>
                   </div>
                   
                </div>
             </div>
             <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-8">
                <div class="cta__contact-info mb-60">
                   <div class="cta__contact-inner">
                      <div class="cta__contact-icon">
                         <figure>
                            <i class="fa-solid fa-phone-flip"></i>
                         </figure>
                      </div>
                      <div class="cta__contact-content">
                         <span>Call Us Now</span>
                         <h3><a href="tel:00211232000">+91 9564151936
                        </a></h3>
                      </div>
                   </div>
                   <div class="cta__button">
                      <a class="contact__btn s-2" href="#">get in touch</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- Cta area end -->
@endsection