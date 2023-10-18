@extends('front.layouts.app')
@section('content')
<section class="contact__area pt-120 pb-60">
    <div class="container">
       <div class="row wow fadeInUp" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
          <div class="col-lg-6">
             <div class="contact__info-wrapper mb-30">
                <div class="section__title-one mb-20">
                   <span>// Contact Us</span>
                   <h2>Get in Touch</h2>
                </div>
                <div class="contact__info-item">
                   <div class="contact__info-icon">
                      <i class="fa-solid fa-comment"></i>
                   </div>
                   <div class="contact__info-content">
                      <span>Call Anytime</span>
                      <h5><a href="tel:926668880000">+91 9564151936</a></h5>
                   </div>
                </div>
               
                <div class="contact__info-item">
                   <div class="contact__info-icon">
                      <i class="fa-solid fa-location-arrow"></i>
                   </div>
                   <div class="contact__info-content">
                      <span>visit office</span>
                      <h5><a target="_blank" href="https://www.google.com/maps/@23.8272409,90.3665795,11z?hl=en">Office No. 76/4, Ground Floor, M-Block, 3rd Avenue,East Anna Nagar, Chennai - 600102</a></h5>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-6">
             <div class="contact__form mb-60">
               @if(Session::has('success'))
               <div class="text-center">
                  <span class="text-success fw-bold">
                     {{ Session::get('success') }}
                  </span>
               </div>
               @endif
                <form method="POST" action="{{ route('submit.contact') }}">
                  @csrf
                   <div class="row">
                      <div class="col-lg-6">
                         <div class="contact__from-input">
                            <input type="text" name="name" placeholder="Name">
                         </div>
                      </div>
                      <div class="col-lg-6">
                         <div class="contact__from-input">
                            <input type="email" name="email" placeholder="Email">
                         </div>
                      </div>
                      <div class="col-lg-6">
                         <div class="contact__from-input">
                            <input type="tel" name="number" placeholder="Contact Number">
                         </div>
                      </div>
                      <div class="col-lg-6">
                         <div class="contact__select mb-20">
                            <select name="dealership">
                               <option selected disabled>Select Dealership</option>
                               <option value="revolt">Revolt</option>
                               <option value="others">Others</option>
                            </select>
                         </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="contact__from-input">
                           <input type="text" name="subject" placeholder="Subject">
                        </div>
                     </div>
                      <div class="col-lg-12">
                         <div class="contact__from-input">
                            <textarea name="message" id="Message" placeholder="Write Massage"></textarea>
                         </div>
                      </div>
                      <div class="col-12">
                         <button class="comment__btn e-btn" type="submit">Send a Massage</button>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>

@endsection