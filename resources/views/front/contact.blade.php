@extends('front.layouts.app')
@section('content')
    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url('assets/img/banner/banner-4.jpg')">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="all-info ptb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info-wrapper">
                        <h4 class="contact-title">INFORMATION</h4>
                        <div class="communication-info">
                            <div class="single-communication">
                                <div class="communication-icon">
                                    <i class="ti-home" aria-hidden="true"></i>
                                </div>
                                <div class="communication-text">
                                    <h4>Address:</h4>
                                    <p>{{getConfigValue('address')}}</p>
                                </div>
                            </div>
                            <div class="single-communication">
                                <div class="communication-icon">
                                    <i class="ti-mobile" aria-hidden="true"></i>
                                </div>
                                <div class="communication-text">
                                    <h4>Phone:</h4>
                                    <p>{{getConfigValue('contact_number_1')}} - {{getConfigValue('contact_number_2')}}</p>
                                </div>
                            </div>
                            <div class="single-communication">
                                <div class="communication-icon">
                                    <i class="ti-email" aria-hidden="true"></i>
                                </div>
                                <div class="communication-text">
                                    <h4>Email:</h4>
                                    <p><a href="#">care@simpleenergy.in</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-message-wrapper">
                        <h4 class="contact-title">GET IN TOUCH</h4>
                        <div class="contact-message">
                            <form action="{{ route('submit.contact') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="name" placeholder="Full Name" type="text"required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="mobile" placeholder="Mobile Number" type="number"required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style mb-20">
                                            <input name="email" placeholder="Email Address" type="email"required>
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button class="submit cr-btn btn-style" type="submit"><span>SEND
                                                    MASSAGE</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- <p class="form-messege"></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
