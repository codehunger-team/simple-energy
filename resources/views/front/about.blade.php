@extends('front.layouts.app')
@section('content')
    <!-- Breadcrumb area start -->
    <div class="breadcrumb-area pt-255 pb-170" style="background: center;background-image: url('assets/img/banner/banner-4.jpg');">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>About Us</h2>
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-us-area pt-125 pb-125">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="overview-content">
                        <h1> <span>Empowering India</span> with Affordable and Stylish Electric Mobility.</h1>

                        <p>The <span>Simple One</span> is a game changi gerectric vehicle that has been specifically
                            designed and manufactured in India. With its sleek design and superior performance, the 'Simple
                            One is the perfect choice for anyone who wants to drive an affordable, yet high quality EV. The
                            Simple One comes in six different colour variations, including Brazen Black, Namma Red, Azure
                            Blue, and Grace White, Brazen X and Light X allowing users to choose the one that suits their
                            style.</p>
                        <div class="question-area">
                            <h4>HAVE ANY QUESTION? </h4>
                            <div class="question-contact">
                                <div class="question-icon">
                                    <i class="icofont icofont-phone"></i>
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
                        <img class="tilter" src="{{ asset('assets/img/slider/scoty.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services-area pb-100" style="background-color: antiquewhite;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services orange mb-30 text-center">

                        <div class="services-text">
                            <h5>Who We Are</h5>
                            <p>We are Simpleenergy Private Limited, the driving force behind the innovative 'Simple ONE'
                                electric vehicle designed and manufactured in India. Our commitment to superior performance,
                                safety, and eco-friendliness reflects in every aspect of our mission.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services yellow mb-30 text-center">

                        <div class="services-text">
                            <h5>Our Vision</h5>
                            <p>We envision a world where affordable and high-quality electric vehicles, like the 'Simple
                                ONE,' are accessible to all, reducing environmental impact and revolutionizing urban
                                mobility.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services purple mb-30 text-center">

                        <div class="services-text">
                            <h5>Our Mission</h5>
                            <p>Our mission is to lead the charge in providing cutting-edge electric vehicles, such as the
                                'Simple ONE,' designed and manufactured in India, to empower individuals with sustainable
                                transportation options.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
                                    <p>"The 'Simple One' is a game-changer in the Indian EV market. The CBS brake system
                                        provides unmatched safety, and the variety of color options lets me express my
                                        style. It's an affordable and eco-friendly choice that doesn't compromise on
                                        quality."</p>

                                </div>
                                <div class="name-designation">
                                    <h4>Priya Sharma</h4>

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
                                    <p>"I love my 'Simple One' – it's an absolute joy to ride. The robust electric motor
                                        handles Indian roads like a champ, and the under-seat storage is incredibly
                                        convenient. It's a sustainable, high-quality option that turns heads wherever I go."
                                    </p>
                                </div>
                                <div class="name-designation">
                                    <h4>Rajesh Patel</h4>

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
    <!-- Counter area start -->
@endsection
