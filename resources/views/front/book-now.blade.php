@extends('front.layouts.app')
@section('content')
    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url('assets/img/banner/banner-4.jpg')">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Booking</h2>
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>Book Now</li>
                </ul>
            </div>
        </div>
    </div>
    <div data-elementor-type="wp-page" data-elementor-id="400" class="elementor elementor-400 mb-5">
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-09f2a03 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="09f2a03" data-element_type="section"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9157ecc"
                    data-id="9157ecc" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-117dd11 elementor-widget elementor-widget-heading"
                            data-id="117dd11" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.15.0 - 20-08-2023 */
                                    .elementor-heading-title {
                                        padding: 0;
                                        margin: 0;
                                        line-height: 1
                                    }

                                    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                        color: inherit;
                                        font-size: inherit;
                                        line-height: inherit
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                        font-size: 15px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                        font-size: 19px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                        font-size: 29px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                        font-size: 39px
                                    }

                                    .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                        font-size: 59px
                                    }
                                </style>
                                <!-- <h2 class="elementor-heading-title elementor-size-default">Book Now</h2> --}} -->
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2a8b8b5 elementor-widget elementor-widget-text-editor"
                            data-id="2a8b8b5" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.15.0 - 20-08-2023 */
                                    .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                        background-color: #69727d;
                                        color: #fff
                                    }

                                    .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                        color: #69727d;
                                        border: 3px solid;
                                        background-color: transparent
                                    }

                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                        margin-top: 8px
                                    }

                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                        width: 1em;
                                        height: 1em
                                    }

                                    .elementor-widget-text-editor .elementor-drop-cap {
                                        float: left;
                                        text-align: center;
                                        line-height: 1;
                                        font-size: 50px
                                    }

                                    .elementor-widget-text-editor .elementor-drop-cap-letter {
                                        display: inline-block
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3cb87c0"
                    data-id="3cb87c0" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-c532eda elementor-icon-list--layout-inline elementor-align-right elementor-mobile-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                            data-id="c532eda" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <br><br><br>
            <br><br><br>
        </section>
        <section class="book_now_section ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="contact-message-wrapper">
                            <h1 class="contact-title">Book A Simple Energy</h1>
                        </div>
                        <div class="contact-message">
                            <form method="POST" action="#" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-form-style mb-20">

                                            <input class="form-control" id="user_name" name="user_name" type="text"
                                                placeholder="Enter your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-form-style mb-20">

                                            <input class="form-control" id="phone_no" name="phone_no" type="tel"
                                                placeholder="Enter your phone number" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="contact-form-style mb-20">

                                            <input class="form-control" type="email" id="email_id" name="email_id"
                                                placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="contact-form-style mb-20">

                                            <input class="form-control" id="location" name="location" type="text"
                                                placeholder="Enter Your Location / Address">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="contact-form-style mb-20">

                                                    <select class="contact-form-style mb-20" id="vechile_name"
                                                        name="vechile_name" required>
                                                        <option value="">--Select Vehicle Model--</option>
                                                        <option value="single Tone">Simple Energy One Single Tone</option>
                                                        <option value="dual Tone">Simple Energy One Dual Tone</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="contact-form-style mb-20">

                                                    <select class="contact-form-style mb-20" id="vehicle_color"
                                                        name="vehicle_color" required>
                                                        <option value="">--Select Vehicle Color--</option>
                                                        <option value="Azure Blue">Azure Blue</option>
                                                        <option value="Namma Red">Namma Red</option>
                                                        <option value="Grace White">Grace White</option>
                                                        <option value="Brazen Black">Brazen Black</option>
                                                        <option value="Brazen X">Brazen X</option>
                                                        <option value="Light X ">Light X </option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">

                                                    <button type="button" id="pay_data" class="sub cr-btn btn-style"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                        data-bs-whatever="@mdo">proceed To Pre-Booking</button>

                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <div class="contact-form-style mb-20">
                                                    <label class="form-label"> Transaction id * </label>
                                                    <input class="form-control" name="transaction_id" id="transaction_id"
                                                        required type="text"
                                                        placeholder="Enter your transaction id"required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="contact-form-style mb-20">
                                                    <span class="form-label"> Amount Pay(Rs)</span>
                                                    <input class="form-control" name="amount_paid" id="amount_paid"
                                                        type="text" placeholder="Enter the paid amount correct"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="contact-form-style mb-20">
                                                    <span class="form-label">Transaction Photo</span>
                                                    <input class="form-control pt-3" id="transaction_image"
                                                        name="transaction_photo" type="file"required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn">
                                    <button class="cr-btn btn-style"type="submit" name="submit">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div> <!-- row -->
            </div>
        </section>
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
                                    <img class="img-responsive" src="admin/admin/upload_doc/UPI_QR_Code%20(1).png"
                                        alt="">
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
        <script>
            $(document).ready(function() {
                $("#pay_data").click(function() {
                    var user_name = $("#user_name").val();
                    var phone_no = $("#phone_no").val();
                    var email_id = $("#email_id").val();
                    var location = $("#location").val();
                    var vechile_name = $("#vechile_name").val();
                    var vechile_color = $("#vechile_color").val();
                    if (user_name && phone_no) {
                        $.ajax({

                            url: "{{ route('booking.submit.pay') }}",
                            data: {
                                _token: "{{ csrf_token() }}",
                                'user_name': user_name,
                                'phone_no': phone_no,
                                'email_id': email_id,
                                'location': location,
                                'vechile_name': vechile_name,
                                'vechile_color': vechile_color
                            },
                            type: 'POST',
                            success: function(result) {
                                console.log(result);
                                $("#idd").val(result);

                            }
                        });
                    }
                });
            });
        </script>
    @endsection
