@extends('front.layouts.app')
@section('content')
<!-- Breadcrumb area start -->
<div class="breadcrumb__area include__bg" data-background="assets/img/bg/breadcrumb.jpg"
    style="background-image: url(&quot;assets/img/bg/breadcrumb.jpg&quot;);">
    <div class="container fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__wrapper text-center">
                    <div class="breadcrumb__title">
                        <h2>Apply Now</h2>
                    </div>
                    <div class="breadcrumb__menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items">
                                <li class="trail-item trail-begin"><span><a href="{{url('/')}}">Home</a></span></li>
                                <li class="trail-item trail-end"><span>Apply Now</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb area end -->

<!-- About area start -->
<section class="about__area pt-120 pb-60">
    <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
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
                                        <h3><a href="http://127.0.0.1:8000/contact">Bike Dealership</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="company__service-wrapper mb-30">
                                <div class="company__service-item text-center">
                                    <div class="company__service-icon">
                                        <img src="assets/img/service/icon/company-02.png" alt="image not found">
                                    </div>
                                    <div class="company__service-title">
                                        <h3><a href="http://127.0.0.1:8000/contact">AI Based Models</a></h3>
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
                                            <h3><a href="http://127.0.0.1:8000/contact">User Experience Design</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="company__service-wrapper mb-30">
                                    <div class="company__service-item text-center">
                                        <div class="company__service-icon">
                                            <img src="assets/img/service/icon/company-04.png" alt="image not found">
                                        </div>
                                        <div class="company__service-title">
                                            <h3><a href="http://127.0.0.1:8000/contact">24/7 Online Support</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            <div class="col-lg-6">
                <center><h2 style="
                    margin-top: -40%;
                    margin-bottom: 3%;
                ">Apply Now</h2></center>
                <hr>
                <div class="contact__form mb-60">
                    @if(Session::has('success'))
                    <div class="text-center">
                       <span class="text-success fw-bold">
                          {{ Session::get('success') }}
                       </span>
                    </div>
                    @endif
                    <form method="POST" action="{{url('submit-apply-now')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact__from-input">
                                    <input type="text" name="name" required placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact__from-input">
                                    <input type="text" name="father_name" required placeholder="Father Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact__from-input">
                                    <input type="email" name="email"  required placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact__from-input">
                                    <input type="tel" name="mobile" required placeholder="Your Contact Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact__from-input">
                                    <input type="tel" name="alternate_mobile" placeholder="Your Alternate Contact Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact__select mb-20">
                                    <select id="country-state" name="state"  required>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Ladakh">Ladakh</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact__from-input">
                                    <input type="text" name="city" placeholder="Your city" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact__select mb-20">
                                    <select name="investment" required>
                                        <option selected="" disabled="">Select Investment</option>
                                        <option value="15-20 lakh">15-20 lakh</option>
                                        <option value="30-35 lakh">30-35 lakh</option>
                                        <option value="above 50 lakh">above 50 lakh</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact__from-input">
                                   <textarea name="concern" id="Message" placeholder="Query(Optional)"></textarea>
                                </div>
                             </div>
                            <div class="col-12">
                                <button class="comment__btn e-btn" type="submit">Apply Franchise</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About area end -->

<!-- Counter area start -->
<section class="counter__area">
    <div class="container">
        <div class="counter__main-wrapper counter__overlay include__bg" data-background="assets/img/bg/counter-bg-2.jpg"
            style="background-image: url(&quot;assets/img/bg/counter-bg-2.jpg&quot;);">
            <div class="row">
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
                            <h2 class="counter">10</h2>
                            <h2>+</h2>
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
@endsection
