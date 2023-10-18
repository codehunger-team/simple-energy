@extends('front.layouts.app')
@section('content')
    <!-- Breadcrumb area start -->
    <div class="breadcrumb__area include__bg" data-background="assets/img/bg/breadcrumb.jpg" style="background-image: url(&quot;assets/img/bg/breadcrumb.jpg&quot;);">
       <div class="container fluid">
          <div class="row">
             <div class="col-xl-12">
                <div class="breadcrumb__wrapper text-center">
                   <div class="breadcrumb__title">
                      <h2>Motorcycles</h2>
                   </div>
                   <div class="breadcrumb__menu">
                      <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                         <ul class="trail-items">
                            <li class="trail-item trail-begin"><span><a href="index.html">Home</a></span></li>
                            <li class="trail-item trail-end"><span>Motorcycles</span></li>
                         </ul>
                      </nav>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
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
                         <button class="portfolio__button-prev-2" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-2b10ce39bb510cf4dd"><i class="fa-regular fa-arrow-left-long"></i></button>
                         <button class="portfolio__button-next-2" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-2b10ce39bb510cf4dd"><i class="fa-regular fa-arrow-right-long"></i></button>
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
                            <div class="swiper-wrapper" id="swiper-wrapper-99f62265292c1694" aria-live="off" style="transform: translate3d(-2092px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 9" style="width: 473px; margin-right: 50px;">
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
                               </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="2 / 9" style="width: 473px; margin-right: 50px;">
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
                               </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="3 / 9" style="width: 473px; margin-right: 50px;">
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
                               <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="4 / 9" style="width: 473px; margin-right: 50px;">
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
                               <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="5 / 9" style="width: 473px; margin-right: 50px;">
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
                               <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="6 / 9" style="width: 473px; margin-right: 50px;">
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
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" role="group" aria-label="7 / 9" style="width: 473px; margin-right: 50px;">
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
                               </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="8 / 9" style="width: 473px; margin-right: 50px;">
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
                               </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="9 / 9" style="width: 473px; margin-right: 50px;">
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
                         <div class="portfolio__pagination text-center mt-85 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                         <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                      </div>
                   </div>
                </div>
                <div class="tab-pane fade" id="portfolio-2" role="tabpanel" aria-labelledby="portfolio-2-tab">
                   <div class="row">
                      <div class="col-12">
                         <div class="portfolio__slider-active swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                            <div class="swiper-wrapper" id="swiper-wrapper-262be2810f8be8895" aria-live="off" style="transition-duration: 300ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
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
                            <div class="swiper-wrapper" id="swiper-wrapper-7b1b51b3608b72e4" aria-live="off" style="transition-duration: 300ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
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
                            <div class="swiper-wrapper" id="swiper-wrapper-2b10ce39bb510cf4dd" aria-live="off" style="transition-duration: 300ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
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
@endsection