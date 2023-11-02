<footer>
    <div class="footer-top pt-210 pb-98 theme-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-widget mb-30">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/img/logo/logo4.png') }}" alt="">
                            </a>
                        </div>
                        <div class="footer-about">
                            <p>The 'Simple One' is a
                                game-changing electric
                                vehicle that has been
                                specifically designed and
                                manufactured in India. </p>
                            <div class="footer-support">
                                <h5>FOR SUPPORT</h5>
                                <span> <a href="tel:{{getConfigValue('contact_number_1')}}">{{getConfigValue('contact_number_1')}}
                                        (Toll Free)</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-widget mb-30 pl-60">
                        <div class="footer-widget-title">
                            <h3>QUICK LINK</h3>
                        </div>
                        <div class="quick-links">
                            <ul>
                                <li><a href="{{ route('home') }}">home</a></li>

                                <li class="active"><a href="{{ route('about') }}">about Us </a></li>

                                <li><a href="{{ route('vehicle') }}">Vehicle</a></li>

                                <li><a href="{{ route('contact.us') }}">contact Us</a></li>

                                <li><a href="{{ route('faqs') }}">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-widget mb-30">
                        <div class="footer-widget-title">
                            <h3>CONTACT INFO</h3>
                        </div>
                        <div class="food-info-wrapper">
                            <div class="food-address">
                                <div class="food-info-title">
                                    <span>Address</span>
                                </div>
                                <div class="food-info-content">
                                    <p>{{getConfigValue('address')}}</p>
                                </div>
                            </div>
                            <div class="food-address">
                                <div class="food-info-title">
                                    <span>Corporate
                                        Identification
                                        Number (CIN)</span>
                                </div>
                                <div class="food-info-content">
                                    <p>U29309K2019PTC127859</p>
                                </div>
                            </div>
                            <div class="food-address">
                                <div class="food-info-title">
                                    <span>Phone</span>
                                </div>
                                <div class="food-info-content">
                                    <a href="tel:{{getConfigValue('contact_number_1')}}">+91
                                        {{getConfigValue('contact_number_1')}}</a>
                                    <a href="tel:{{getConfigValue('contact_number_2')}}">+91
                                        {{getConfigValue('contact_number_2')}}</a>
                                </div>
                            </div>
                            <div class="food-address">
                                <div class="food-info-title">
                                    <span>email</span>
                                </div>
                                <div class="food-info-content">
                                    <a href="mailto:care@simple1energy.in">
                                        care@simple1energy.in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-widget mb-30">

                        <div class="food-widget-content
                         pr-30">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3885.732001648512!2d77.6034902239264!3d13.116156761694837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSimpleenergy%20Private%20Limited%209th%20Floor%2C%20Wing%20A%2C%20Survey%20No.%202%2F%202%2C%20North%20Gate%20Phase%202%2C%20Modern%20Asset%2C%20Venkatala%20Village%2C%20Yelahanka%2C%20Hobli%2C%20Bengaluru%2C%20Karnataka%20560064%2C%20India!5e0!3m2!1sen!2sin!4v1695800834355!5m2!1sen!2sin"
                                width="270" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="footer-bottom ptb-35 black-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="copyright">
                        <p>©Copyright, 2023 by <a href="https://www.par-ken.com/">DESIZNIDEAZ
                                Pvt. Ltd.</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
