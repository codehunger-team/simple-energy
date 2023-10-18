@extends('front.layouts.app')
@section('content')
    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url('assets/img/banner/banner-4.jpg')">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Dealership Form</h2>
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>Dealership</li>
                </ul>
            </div>
        </div>
    </div>

    <br><br><br>
    <!-- page-title end -->

    <!--------------site-main start------------>
    <div class="site-main mb-5">
        <!-- article-section -->
        <section class="dealership_section ">
            <div class="container">
                <div class="contact-message-wrapper">
                    <h1 class="contact-title">Dealership Form </h1>
                </div>
                <div class="contact-message">
                    <form class="request_qoute_form wrap-form clearfix" method="post" novalidate="novalidate"
                        action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input"> <input name="f_name" type="text" value=""
                                            placeholder="Name of the firm" required></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input"><input name="name" type="text" value=""
                                            placeholder="Your Name*" required></span>
                                </div>
                            </div>

                            <!--<div class="col-md-6">-->
                            <!--    <span class="text-input"><input name="age" type="text" value="" placeholder="Age*" required="required"></span>-->
                            <!--</div>-->
                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input"><input name="mobile" type="text" value=""
                                            placeholder="Mobile Number*" required="required"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input"><input name="email" type="text" value=""
                                            placeholder="Your Email"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input">
                                        <!--<select class="" name="city">-->
                                        <input name="city" type="text" value="" placeholder="city*"
                                            required="required">
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input">
                                        <input name="state" type="text" value="" placeholder="State*"
                                            required="required">
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input"><input name="address" type="text" value=""
                                            placeholder="Address"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input"><input name="pincode" type="text" value=""
                                            placeholder="Pin Code"></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input"><input name="Rent" type="text" value=""
                                            placeholder="Type of property ownership Own/Rent*"></span>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input">
                                        <select class="" name="locality">
                                            <option value="" disabled selected>Locality</option>
                                            <option value="Posh">Posh</option>
                                            <option value="Urban">Urban</option>
                                            <option value="Semi Urban">Semi Urban</option>
                                            <option value="Rural">Rural</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input"><input name="turnover" type="text" value=""
                                            placeholder="Current Annual Turnover (in rupees)"></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="contact-form-style mb-20">
                                    <span class="text-input">
                                        <select class="" name="experience">
                                            <option value="" disabled selected>Any relevant experience in automotive
                                                industry?</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>

                                        </select>
                                    </span>
                                </div>
                            </div>


                            <div class="col-lg-12 mt-3">
                                <div class="form-group text-center">
                                    <button class="submit cr-btn btn-style" type="submit" name="submit"
                                        value="Send Message">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>



            </div>
        </section>
    </div>
@endsection
