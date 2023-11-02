<style>

    @media only screen and (max-width: 600px) {
        .header-area {
            padding: 12px 0px 10px 0px;
        }
    }

    @media only screen and (min-width: 600px) {
        .header-area {
            padding: 40px 0px 10px 0px;
        }
    }
       
</style>
<a id="scrollUp" class="btn-primary" href="tel:{{getConfigValue('contact_number_1')}}"
    style="position: fixed;bottom:49%; z-index: 2147483647; display: block;"><i class=" icofont icofont-ui-call"></i></a>
<a id="scrollUp"target="_blank" class="btn-primary" href="https://wa.me/8537014931"
    style="position: fixed;bottom:40%; z-index: 2147483647; display: block;"><i
        class="icofont icofont-brand-whatsapp"></i></a>

<!-- header start -->
<header>
    <div class="header-area transparent-bar ">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-4">
                    <div class="logo-small-device">
                        <a href="{{ route('home') }}"><img alt=""
                                src="{{ asset('assets/img/logo/logo4.png') }}"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-10">
                    <div class="header-contact-menu-wrapper pl-45">
                        <div class="header-contact">
                            <h5 style="margin-right:40px; color:white">WANT TO TALK WITH US </br>{{getConfigValue('contact_number_1')}} </h5>
                        </div>
                        <div class="menu-wrapper text-center">
                            <button class="menu-toggle" style="margin-right:20px;">
                                <img class="s-open" alt="" src="{{ asset('assets/img/icon-img/menu.png') }}">
                                <img class="s-close" alt=""
                                    src="{{ asset('assets/img/icon-img/menu-close.png') }}">
                            </button>
                            <button class="menu-toggle" style="margin-left:40px;">
                                <li><a href="{{ route('book.now') }}"><button class="btn btn-primary">Book
                                            Now</button></a></li>
                            </button>
                            {{-- <button class="menu-toggle" style="margin-left:40px;">
                                <li><a href="{{ route('book.now') }}"><button class="btn btn-primary">Payment</button></a></li>
                            </button> --}}

                            <button type="button" id="pay_data" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                Payment</button>
                            <button class="menu-toggle" style="margin-left:40px;">
                                <li><a href="{{ url('user-login') }}"><button class="btn btn-primary">Login</button></a></li>
                            </button>
                           
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{ route('home') }}">home</a></li>

                                        <li class="active"><a href="{{ route('about') }}">about us </a></li>
                                        <li><a href="{{ route('vehicle') }}">Vehicle</a></li>

                                        <li><a href="{{ route('contact.us') }}">contact</a></li>
                                        <li><a href="{{ route('dealership') }}"> Dealership</a></li>
                                        <li><a href="{{ route('check.status') }}"><button class="btn btn-primary">Check
                                                    Status</button></a></li>
                                                    
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="mobile-menu-area col-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{{ route('home') }}">home</a></li>

                                <li class="active"><a href="{{ route('about') }}">about us </a></li>

                                <li><a href="{{ route('vehicle') }}">Vehicle</a></li>

                                <li><a href="{{ route('contact.us') }}">contact</a></li>
                                <li><a href="{{ route('dealership') }}"> Dealership</a></li>

                                <li><a href="{{ route('book.now') }}"><button class="btn btn-primary">Book
                                            Now</button></a></li>
                                <li><a href="{{ route('check.status') }}"><button class="btn btn-primary">Check
                                            Status</button></a></li>
                                            <li><a href="javascript:void(0)"> <button type="button" id="pay_data" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                Payment</button></a></li>
                                    <li><a href="{{ url('user-login') }}"><button
                                                class="btn btn-primary">Login</button></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-cart-wrapper">
            <div class="header-cart">
                <!-- <button class="icon-cart">
                                    <i class="ti-shopping-cart"></i>
                                    <span class="count-style">02</span>
                                    <span class="count-price-add">$295.95</span>
                                </button> -->
                <div class="shopping-cart-content">
                    <ul>
                        <li class="single-shopping-cart">
                            <div class="shopping-cart-img">
                                <a href="#"><img alt=""
                                        src="{{ asset('assets/img/cart/cart-1.html') }}"></a>
                            </div>
                            <div class="shopping-cart-title">
                                <h3><a href="#">Gloriori GSX 250 R </a></h3>
                                <span>Price: $275</span>
                                <span>Qty: 01</span>
                            </div>
                            <div class="shopping-cart-delete">
                                <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </li>
                        <li class="single-shopping-cart">
                            <div class="shopping-cart-img">
                                <a href="#"><img alt=""
                                        src="{{ asset('assets/img/cart/cart-2.html') }}"></a>
                            </div>
                            <div class="shopping-cart-title">
                                <h3><a href="#">Demonissi Gori</a></h3>
                                <span>Price: $275</span>
                                <span class="qty">Qty: 01</span>
                            </div>
                            <div class="shopping-cart-delete">
                                <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </li>
                        <li class="single-shopping-cart">
                            <div class="shopping-cart-img">
                                <a href="#"><img alt=""
                                        src="{{ asset('assets/img/cart/cart-3.html') }}"></a>
                            </div>
                            <div class="shopping-cart-title">
                                <h3><a href="#">Demonissi Gori</a></h3>
                                <span>Price: $275</span>
                                <span class="qty">Qty: 01</span>
                            </div>
                            <div class="shopping-cart-delete">
                                <a href="#"><i class="icofont icofont-ui-delete"></i></a>
                            </div>
                        </li>
                    </ul>
                    <div class="shopping-cart-total">
                        <h4>total: <span>$550.00</span></h4>
                    </div>
                    <div class="shopping-cart-btn">
                        <a class="btn-style cr-btn" href="#">checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- modal box pop up -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Bank Details</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>

             <div class="modal-body row">
                 <div class="col-lg-6">
                     <div class="contact-info-wrapper">
                         <div class="col-sm-12">
                             <img class="img-responsive" src="{{ asset('assets/img/uri_qr_code.png') }}"
                                 alt="" style="width: 100%; height: 100%">
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="contact-message-wrapper">
                         <h4 class="contact-title">BANK DETAILS</h4>
                         <div class="contact-message">
                             <form action="#" method="post">

                                 <div class="">
                                     <label for="disabledTextInput" class="form-label">Bank Name</label>
                                     <input type="text" id="disabledTextInput"
                                         value="STATE BANK OF INDIA."name="bank_name" class="form-control" readonly
                                         disabled>
                                 </div>
                                 <div class="">
                                     <label for="disabledTextInput" class="form-label">Account Number</label>
                                     <input type="text" id="disabledTextInput" class="form-control"
                                         value="3125632515"name="account_no" readonly disabled>
                                 </div>
                                 <div class="">
                                     <label for="disabledTextInput" class="form-label">Branch Name</label>
                                     <input type="text" id="disabledTextInput" class="form-control"
                                         value="YAHLANKA." name="branch_name" readonly disabled>
                                 </div>
                                 <div class="">
                                     <label for="disabledTextInput" class="form-label">IFSC Code</label>
                                     <input type="text" id="disabledTextInput" class="form-control"
                                         value="SBIN0002356"name="ifsc_code" readonly disabled>
                                 </div>
                             </form>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end pop up -->
</header>
