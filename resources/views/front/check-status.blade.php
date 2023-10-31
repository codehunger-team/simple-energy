@extends('front.layouts.app')
@section('content')
    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url('assets/img/banner/banner-4.jpg')">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Check Status</h2>
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>Check Status</li>
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
            <br>
        </section>
        <section class="book_now_section ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="contact-message-wrapper">
                            <h1 class="contact-title">Check Your Booking History by Mobile Number</h1>
                        </div>
                        <div class="contact-message">
                            <form method="GET"
                                action="#">
                                <input name="id" id="idd" type="hidden">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-form-style mb-20">
                                            <input class="form-control" id="phone_no" name="phone_no" type="tel"
                                                placeholder="Enter your phone number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <button type="submit" class=" cr-btn btn-style"
                                                        id="submit-button">Check</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div> <!-- row -->
            </div>
        </section>

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
