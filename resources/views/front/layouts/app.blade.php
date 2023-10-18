<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eurtech - IT Solutions HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/backtotop.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- Preloader start -->
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    <!-- Preloader end -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo logo">
                            <a href="{{url('/')}}">
                                <img src="assets/img/logo/logo.png" alt="logo not found">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="offcanvas__search mb-25">
                        <form action="#">
                            <input type="text" placeholder="What are you searching for?">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu fix mb-40"></div>
                    <div class="offcanvas__contact mt-30 mb-20">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank"
                                        href="">Office No. 76/4, Ground Floor, M-Block, 3rd Avenue,East Anna Nagar, Chennai - 600102</a>
                                </div>
                            </li>
                            {{-- <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+91 9564151936">+91 9564151936</a>
                                </div>
                            </li> --}}
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+012-345-6789"><span class="mailto:enquiry@revoltfranchise.com"><span
                                                class="__cf_email__"
                                                data-cfemail="b7c4c2c7c7d8c5c3f7dad6dedb99d4d8da">enquiry@revoltfranchise.com</span></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas__social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- Header area start -->
    <header>
        <div id="header-sticky" class="header__area">
           <div class="header__main-wrapper-3">
              <div class="container">
                 <div class="row align-items-center justify-content-center">
                    <div class="col-xl-2 col-lg-2 col-6">
                       <div class="header__logo">
                          <a href="index.html">
                             <img src="assets/img/logo/logo.png" alt="logo not found">
                          </a>
                       </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-6">
                       <div class="header__right-3 d-flex align-items-center justify-content-end">
                          <div class="main-menu main-menu-3 d-none d-none d-lg-block">
                             <nav id="mobile-menu" style="display: block;">
                                   <ul>
                                      <li>
                                         <a href="{{url('/')}}">Home</a>
                                         
                                      </li>
                                      <li>
                                         <a href="{{url('about')}}">About</a>
                                      </li>
                                      <li>
                                         <a href="{{url('motorcycle')}}">Motorcycles</a>
                                        
                                      </li>
                                      <li>
                                        <a href="{{url('apply-now')}}">Apply Now</a>
                                     </li>
                                      <li>
                                         <a href="{{url('contact')}}">Contact</a>
                                      </li>
                                   </ul>
                                </nav>
                          </div>
                          <div class="header__button d-none d-xxl-block mr-20">
                             <a class="header__btn-1 s-2 " href="{{url('contact')}}">Get Appointment</a>
                          </div>
                          <div class="header__toggle style-2 d-none d-lg-block">
                             <button class="sidebar__toggle"><i class="flaticon-dots-menu"></i></button>
                          </div>
                          <div class="header__toggle d-lg-none">
                             <a class="sidebar__toggle" href="javascript:void(0)">
                                <div class="bar-icon">
                                   <span></span>
                                   <span></span>
                                   <span></span>
                                </div>
                             </a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </header>
    <!-- Header area end -->
    <main>
    @yield('content')
    </main>
    @include('front.layouts.footer')
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/waypoints.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
