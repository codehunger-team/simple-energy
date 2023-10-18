@extends('front.layouts.app')
@section('content')
    <!-- Breadcrumb area start -->
       <div class="breadcrumb__area include__bg" data-background="assets/img/bg/breadcrumb.jpg" style="background-image: url(&quot;assets/img/bg/breadcrumb.jpg&quot;);">
          <div class="container fluid">
             <div class="row">
                <div class="col-xl-12">
                   <div class="breadcrumb__wrapper text-center">
                      <div class="breadcrumb__title">
                         <h2>about us</h2>
                      </div>
                      <div class="breadcrumb__menu">
                         <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items">
                               <li class="trail-item trail-begin"><span><a href="index.html">Home</a></span></li>
                            <li class="trail-item trail-end"><span>about us</span></li>
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
          <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
             <div class="col-xl-6 col-lg-6">
                <div class="about__left-one p-relative mb-60">
                   <div class="about__left-thumb">
                      <img src="assets/img/about/about-01.jpg" alt="about-img">
                   </div>
                   <div class="about__experience-shape">
                      <div class="about__experience-content">
                         <h2>30</h2>
                         <span>Year Experience</span>
                         <div class="about__experience-shape-icon">
                            <i class="fal fa-trophy-alt"></i>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-6 col-lg-6">
                <div class="about__right-content mb-60">
                   <div class="section__title-one mb-35">
                      <span>// About Us</span>
                      <h2>Best in classy product near from you.</h2>
                   </div>
                   <div class="about__description-text">
                      <p>Revolt Motors has entered the Indian motorcycle market with the RV 400 to begin with, which will be followed up by two more electric products. The electric bikes will be brought to India via the CKD route but will get a high degree of localisation from the onset. Revolt’s future plans include complete localisation of their products to make prices very competitive. It will start operations in Delhi first followed by six other cities.
 
                      Hair flowing with the wind, the smell of rubber burning over the tarmac and the feeling of being a free bird flying past everybody else. Irreplaceable! Biking is a passion – yes, we know! And we’re here to juice up your biking experience by giving you the pleasure of being on a motorbike, yet you playing the role of knight in shining armor in the mortal’s campaign of “Save The Earth!”. Seriously, let’s contribute to the society we’ve got so much from? Well, it all starts with you! Revolt Motors is the next-gen mobility company, created for the smart world. With technology at its roots and a class-apart product in the works, Revolt is soon going to introduce India’s first AI-enabled motorcycle without compromising on the performance or aesthetics of a regular ride.</p>
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
@endsection