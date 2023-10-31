@extends('front.layouts.app')
@section('content')
    <!-- Hero area start -->
    <div class="slider-area">
        <style>
            .overview-content11 {
                background-image: url('assets/img/banner.png');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                height: 80vh;
                position: relative;
            }

            .overview-content11 .question-area {
                position: absolute;
                left: 50px;
                bottom: 100px;

            }

            .overview-content11 .question-area h1 {
                padding-bottom: 10%;
                font-size: 70px;

            }

            .overview-content11 .question-area a:hover {
                color: white;

            }

            @media only screen and (max-width: 600px) {
                .overview-content11 .question-area {
                    position: absolute;
                    left: 20px;

                }

                .overview-content11 .question-area h1 {
                    padding-bottom: 10%;
                    font-size: 50px;

                }

                .pt-135 {
                    padding-top: 67px !important;
                }
            }
        </style>
        <div class="overview-area pt-135" style="
        background-color: black;>

            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-lg-12 col-md-12">
                            <div class="overview-content11">
                                <div class="question-area
                                  col-md-6">
                                    <h1 style="color:white;">
                                        SIMPLE ONE</h1>

                                    <a href="{{ route('book.now') }}">
                                        <div class="question-content-number btn-primary" style="border-radius:10px;">
                                            <h6 class="mt-1"> BOOK NOW</h6>
                                        </div>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-12 col-md-12">
                            <div class="overview-content11" style="background-image:url('assets/img/ather-450x-11.jpg');">
                                <div class="question-area
                                  col-md-6">
                                    <h1 style="color:white;">
                                        India's first <br>super
                                        EV.</h1>

                                    <a href="{{ route('book.now') }}">
                                        <div class="question-content-number"
                                            style="border-radius:10px;">
                                            <h6> BOOK NOW</h6>
                                        </div>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-12 col-md-12">
                            <div class="overview-content11" style="background-image:url('assets/img/img2.jpg');">
                                <div class="question-area
                                  col-md-6">
                                    <h1 style="color:white;">
                                        Adaptive. Intuitive.
                                        <br>Interface.
                                    </h1>

                                    <a href="{{ route('book.now') }}">
                                        <div class="question-content-number"
                                            style="border-radius:10px;">
                                            <h6> BOOK NOW</h6>
                                        </div>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                                                                                  <div class="col-lg-12 col-md-12">
                                                                                      <div class="overview-content11">

                                                                                          <div class="question-area col-md-6">
                                                                                              <h1 style="color:white;"> SIMPLE ONE</h1>

                                                                                              <a href="book-now.php">
                                                                                                  <div class="question-content-number"
                                                                                                      style="background-color:#198754;border-radius:10px;">
                                                                                                      <h6> BOOK NOW
                                                                                              </a>
                                                                                          </div>
                                                                                          </a>

                                                                                      </div>
                                                                                  </div>
                                                                                </div> -->
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="overview-area pt-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="overview-content">

                        <h2> Start Your Ride With <span>Simple
                                One</span></h2>
                        <p>The <span>'Simple One'</span> is a
                            game-changing electric vehicle that
                            has been specifically
                            designed and manufactured in India.
                            With its sleek design and superior
                            performance, the 'Simple
                            One' is the perfect choice for
                            anyone who wants to drive an
                            affordable, yet high-quality EV. The
                            Simple One comes in six different
                            colour variations, including Brazen
                            Black, Namma Red, Azure
                            Blue, and Grace White, Brazen X and
                            Light X allowing users to choose the
                            one that suits their
                            style.</p>
                        <div class="question-area">
                            <h4>HAVE ANY QUESTION? </h4>
                            <div class="question-contact">
                                <div class="question-icon ">
                                    <i class="icofont
                                      icofont-phone btn-primary"></i>
                                </div>
                                <div class="question-content-number">
                                    <h6> 18008900720</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="overview-img">
                        <img class="tilter" src="{{ asset('assets/img/slider/scoty2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-area pt-135 pb-100">

    </div>
    <div class="product-area pb-190" style="
    background-color: antiquewhite;>
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>CHOOSE YOUR BIKE</h2>
                <p> "Select Your Ride, Your Way! Explore Our
                    Bike Collection."
                </p>
            </div>

            <div class="tab-content jump">
                <div class="tab-pane active" id="home1">
                    <div class="product-slider-active
                      owl-carousel">
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper">
                                <div class="product-img">

                                    <img src="{{ asset('assets/img/vehicle/scoty1%20(1).png') }}" alt="">

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4>Brazen X</h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Rs. 150,000.00</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">

                                    <img src="{{ asset('assets/img/vehicle/scoty1%20(2).png') }}" alt="">

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4>Grace White</h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Rs. 150,000.00</span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper">
                                <div class="product-img">

                                    <img src="{{ asset('assets/img/vehicle/scoty1%20(3).png') }}" alt="">

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4>Brazen X</h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Rs. 150,000.00</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">

                                    <img src="{{ asset('assets/img/vehicle/scoty1%20(4).png') }}" alt="">

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4>Brazen Black</h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Rs. 150,000.00</span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-bundle">
                            <div class="product-wrapper">
                                <div class="product-img">

                                    <img src="{{ asset('assets/img/vehicle/scoty1%20(5).png') }}" alt="">

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4>Light X</h4>
                                        </div>
                                        <div class="product-price">
                                            <span> Rs.
                                                145,000.00</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">

                                    <img src="{{ asset('assets/img/vehicle/scoty1%20(6).png') }}" alt="">

                                    <div class="product-content-wrapper">
                                        <div class="product-title-spreed">
                                            <h4>Brazen Black</h4>
                                        </div>
                                        <div class="product-price">
                                            <span>Rs. 150,000.00</span>
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
    <div class="latest-product-area pt-205 pb-145 bg-img"
        style="background-image:
      url('assets/img/banner/banner-4.jpg')">
        <div class="container-fluid">
            <div class="latest-product-slider owl-carousel">
                <div class="single-latest-product
                  slider-animated-2">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-12">
                            <div class="latest-product-img">
                                <img class="animated" src="{{ asset('assets/img/product/gallery8.png') }}"
                                    alt="image">
                            </div>
                        </div>
                        <div class="col-lg-5 col-col-12 col-12">
                            <div class="latest-product-content">
                                <h2 class="animated">
                                    Features of My SimpleOne</h2>
                                <p class="animated">The 'Simple
                                    One' boasts an 8.65 kW
                                    electric motor optimized for
                                    Indian
                                    roads and a durable
                                    Lithium-ion battery for long
                                    commutes. Its CBS brake
                                    system ensures
                                    swift, safe stops, even at
                                    high speeds. Plus, with a
                                    generous 30-litre under-seat
                                    storage, it's practical for
                                    daily use. A premium,
                                    sustainable, and stylish
                                    choice for
                                    eco-conscious drivers
                                    seeking top-notch
                                    performance.</p>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-latest-product
                  slider-animated-2">
                    <div class="row">
                        <div class="col-lg-7 col-col-12 col-12">
                            <div class="latest-product-img">
                                <img class="animated" src="{{ asset('assets/img/product/gallery1.png') }}"
                                    alt="image">
                            </div>
                        </div>
                        <div class="col-lg-5 col-col-12 col-12">
                            <div class="latest-product-content">
                                <h2 class="animated">
                                    Features of My SimpleOne</h2>
                                <p class="animated">The 'Simple
                                    One' boasts an 8.65 kW
                                    electric motor optimized for
                                    Indian
                                    roads and a durable
                                    Lithium-ion battery for long
                                    commutes. Its CBS brake
                                    system ensures
                                    swift, safe stops, even at
                                    high speeds. Plus, with a
                                    generous 30-litre under-seat
                                    storage, it's practical for
                                    daily use. A premium,
                                    sustainable, and stylish
                                    choice for
                                    eco-conscious drivers
                                    seeking top-notch
                                    performance.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accessories-area pt-152 pb-130">

    </div>
    <div class="testimonial-area">
        <div class="container">
            <div class="section-title-2 section-title-position">
                <h2>OUR CUSTOMER REVIEWS</h2>
            </div>
            <div class="testimonial-active owl-carousel">
                <div class="single-testimonial">
                    <div class="row">
                        <div class="col-lg-1">

                        </div>
                        <div class="col-lg-10">
                            <div class="testimonial-content">
                                <div class="testimonial-dec">
                                    <p>"I love my 'Simple One' –
                                        it's an absolute joy to
                                        ride. The robust
                                        electric motor
                                        handles Indian roads
                                        like a champ, and the
                                        under-seat storage is
                                        incredibly
                                        convenient. It's a
                                        sustainable,
                                        high-quality option that
                                        turns heads wherever I
                                        go."
                                    </p>
                                </div>
                                <div class="name-designation">
                                    <h4>Rajesh Patel</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1">

                        </div>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="row">
                        <div class="col-lg-1 col-md-12 col-12">
                        </div>
                        <div class="col-lg-10 col-md-12 col-12">
                            <div class="testimonial-content">
                                <div class="testimonial-dec">
                                    <p>"The 'Simple One' is a
                                        game-changer in the
                                        Indian EV market. The
                                        CBS brake system
                                        provides unmatched
                                        safety, and the variety
                                        of color options lets me
                                        express my
                                        style. It's an
                                        affordable and
                                        eco-friendly choice that
                                        doesn't compromise on
                                        quality."</p>
                                </div>
                                <div class="name-designation">
                                    <h4>Priya Sharma</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-12 col-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area pt-150 pb-110">

    </div>

    <!-- modal -->

    <!-- Cta area end -->
@endsection
