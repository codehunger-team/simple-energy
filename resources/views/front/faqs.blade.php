@extends('front.layouts.app')
@section('content')
    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url('assets/img/banner/banner-4.jpg')">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Frequently Asked Questions</h2>
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>FAQs</li>
                </ul>
            </div>
        </div>
    </div>

    <style>
        .all-faqs main {
            display: block;
            position: relative;
            box-sizing: border-box;
            padding: 30px;
            width: 100%;
            max-width: 1150px;
            background-color: #fff;
            margin: 0 auto;
            margin-top: 50px;
        }

        .topic {
            padding: 20px;
            padding-top: 0px;
            padding-bottom: 0px;
            border-bottom: solid 1px #ebebeb;
        }

        .open {
            cursor: pointer;
            display: block;
            padding: 0px;
        }

        .open:hover {
            opacity: 0.7;
        }

        .expanded {
            background-color: #f5f5f5;
            transition: all 0.3s ease-in-out;
        }

        .question {
            padding-top: 30px;
            padding-right: 40px;
            padding-bottom: 20px;
            font-size: 18px;
            font-weight: 500;
            color: #000;
        }

        .answer {
            font-size: 16px;
            line-height: 26px;
            display: none;
            margin-bottom: 30px;
            text-align: justify;
            padding-left: 20px;
            padding-right: 20px;
        }

        .faq-t {
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            display: inline-block;
            float: right;
            position: relative;
            top: -55px;
            right: 10px;
            width: 10px;
            height: 10px;
            background: transparent;
            border-left: 2px solid #ccc;
            border-bottom: 2px solid #ccc;
            transition: all 0.3s ease-in-out;
        }

        .faq-o {
            top: -50px;
            -moz-transform: rotate(-224deg);
            -ms-transform: rotate(-224deg);
            -webkit-transform: rotate(-224deg);
            transform: rotate(-224deg);
        }

        @media only screen and (max-width: 480px) {
            .faq-t {
                display: none;
            }

            .question {
                padding-right: 0px;
            }

            main {
                padding: 10px;
            }

            .answer {
                margin-bottom: 30px;
                padding-left: 0px;
                padding-right: 0px;
            }
        }
    </style>


    <div class="all-faqs ptb-130">
        <main>
            <h1 style="color: #F8C01B;">Battery</h1>
            <div class="topic">
                <div class="open">
                    <h2 class="question">1.How is the battery pack protected considering its Li-ion?</h2>
                    <span class="faq-t"></span>
                </div>
                <p class="answer">The battery is protected by an aluminum casing to rule out physical damage. Also, the BMS
                    regulates temperature and ensures optimum performance. Be rest assured our battery packs comply with the
                    latest Government norms.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">2. Can I take out the battery and charge it at home?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">The portable battery has 1.6 KWh of the battery pack and this is removable and you can
                    charge
                    it in your home separately.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">3.What is the warranty on the Simple One battery pack?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">The warranty is valid for 3 years from the date of purchase or the first 30000 Km of
                    vehicle
                    run, whichever comes first.</p>
            </div>


        </main>

        <main>
            <h1 style="color: #F8C01B;">Booking</h1>
            <div class="topic">
                <div class="open">
                    <h2 class="question">1.How do I check the pre-order status?</h2>
                    <span class="faq-t"></span>
                </div>
                <p class="answer">When you choose to pre-order the Simple One, you will be directed to sign up with us. You
                    would need to log into your account to check the status of your pre-order from your profile page.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">2. I have not received any confirmation mail on my email id, what should I do?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">Not to worry. Your pre-book would still have got confirmed on our side. From your side,
                    first,
                    check your spam folder for the account creation mail as well as the prebook confirmation mail. If they
                    are
                    not found in your spam folder, even after 5 minutes, contact care@simpleenergy.in or contact our
                    helpline at
                    8929045085 at any time between 9 am-7 pm Monday to Saturday with your transaction details.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">3.How many vehicles can I pre-order?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">One can pre-order as many as 3 vehicles.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">4.Why do I need a license to ride Simple ONE? As I have heard Evs do not need a
                        License
                        to ride them
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">The electric scooters that run on a 250 W motor and the ones that have a top speed of 25
                    km/h
                    do not require a driver's license or number plate registration. However, the Simple ONE is significantly
                    more powerful with a top speed of 105 km/h. Therefore, a driver's license and number plate registration
                    are
                    mandatory to ride it.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">5.My booking was made in a different name, I want to purchase the vehicle in a
                        different name, how do I do it?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">All you need to do is send us an email at care@simpleenergy.in and mention your concern.
                    which
                    personal information of yours needs to be updated. Note: The customer needs to send us the email only
                    from
                    his registered email ID and if in case the registered Mail id is not active then the customer needs to
                    mention his/her registered Mobile number and Pre-book Order ID.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">6.Is there any other way I can pre book the Simple ONE?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">You can ONLY pre-book the Simple One on our website simpleenergy.in through 4 methods-
                    Paytm,
                    Credit/Debit Card, Net Banking, and BHIM/UPI. Beware!! It is notified to the website visitors of
                    Simpleenergy.in that there is a scam happening on the internet using the portal/url Simpleenargy.in.
                    Please
                    note that Simpleenargy.in is in no manner linked or associated with Simpleenergy Private Limited. Any
                    person
                    transacting on Simpleenargy.in shall do the same at his/her own risk(s), cost(s) and consequence(s) and
                    Simpleenergy Private Limited shall not be responsible or liable in any manner whatsoever.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">7.How can I buy a Simple One vehicle?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">Customer need to login in our website www.simpleenergy.in and register using Mobile number
                    and
                    fill in their details. Email confirmation along with Order ID sent to customer.
                    Once intimated to Customer via Phone call followed by email confirmation sent from
                    Sales@simpleenergy.in,
                    customer to visit for the tests ride, post-test ride customer to proceed with payment by NEFT, RTGS,
                    Cheque
                    or Online transaction or via Finance facility available along with invoice of the vehicle.
                    Once payment completed, customer to physically submit necessary document for registration process.
                    Scooter will be delivered to the customer post completion of registration process, along with an
                    overview of
                    how the scooters operates and their warranties and features.</p>
            </div>


        </main>

        <main>
            <h1 style="color: #F8C01B;">Charger</h1>
            <div class="topic">
                <div class="open">
                    <h2 class="question">1.What type of electrical power socket is compatible with the Simple charger?</h2>
                    <span class="faq-t"></span>
                </div>
                <p class="answer">15A, 230V is sufficient to charge your Simple One</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">2. Do I need a separate meter for the charging unit?

                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">This will be not recommended but in case you want it you can add a separate meter.</p>
            </div>

        </main>

        <main>
            <h1 style="color: #F8C01B;">Delivery</h1>
            <div class="topic">
                <div class="open">
                    <h2 class="question">1.When can I expect the Simple ONE to be delivered?</h2>
                    <span class="faq-t"></span>
                </div>
                <p class="answer">As we have already started the delivery of the Simple ONE we are starting phase-wise. For
                    now,
                    the delivery is only happening in Bangalore and once the sales are stable we will be able to move to
                    other
                    states and towards more remote locations.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">2.Can I get an Early/Priority delivery?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">All our customers will be equally treated and every delivery will be considered on
                    priority
                    and make sure we provide the service in smoother.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">3.I do not live in a city where the Simple One is currently sold, but I'd really
                        like
                        to buy the vehicle and take it to my city. How can I do that?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">Buying the Simple one and taking it to the city where currently it is not sold may be a
                    challenge and also might involve legal concerns. More importantly, we do not have after-sales and
                    roadside
                    assistance in that city, which may hinder your ownership experience.</p>
            </div>


        </main>

        <main>
            <h1 style="color: #F8C01B;">Pricing</h1>
            <div class="topic">
                <div class="open">
                    <h2 class="question">1.What is the Ex-showroom Price of the Simple One?</h2>
                    <span class="faq-t"></span>
                </div>
                <p class="answer">Simple One is now available in 2 different color categories. The first segment has 4
                    initial
                    colors which have Azure Blue, Brazen Black, Namma Red, and Grace white. Now we have added 2 more colours
                    which BrazenX and LightX</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">2. Can I get finance options to buy Simple One?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">We have multiple loan options to go with. You can choose the preferred Finance options and
                    purchase your Simple One.</p>
            </div>



        </main>

        <main>
            <h1 style="color: #F8C01B;">Service</h1>
            <div class="topic">
                <div class="open">
                    <h2 class="question">1. What is the warranty period of the Simple ONE?</h2>
                    <span class="faq-t"></span>
                </div>
                <p class="answer">3 years ord 30,000 Kms whichever comes first.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">2. What are the scheduled services for the Simple ONE?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">1st Service will be in 3 months or 2000 Kms whichever comes first and 2nd Service 9
                    months or
                    6000 Kms whichever comes first.</p>
            </div>
        </main>

        <main>
            <h1 style="color: #F8C01B;">Vehicle</h1>
            <div class="topic">
                <div class="open">
                    <h2 class="question">1.Is Namma Red only specific to Bangalore?</h2>
                    <span class="faq-t"></span>
                </div>
                <p class="answer">Not at all. Namma Red is a colour dedicated to our origins and roots, the state of
                    Karnataka.
                    Namma Red is available for
                    pre-book pan India. So go ahead and pick it. We know you love it.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">2. What are the vehicle colors available for pre-order?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">Namma Red, Azure Blue, Brazen Black, Grace White, LightX and BrazenX.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">3.Do I need a license to ride the Simple ONE?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">The Simple ONE is significantly more powerful with a top speed of 105 km/h. Therefore, a
                    driver's license and number plate registration are mandatory to ride it.</p>
            </div>
            <div class="topic">
                <div class="open">
                    <h2 class="question">4.What is the warranty of the scooter?
                    </h2><span class="faq-t"></span>
                </div>
                <p class="answer">The warranty is valid for 3 years from the date of purchase or the first 30000 Km of
                    vehicle
                    run, whichever comes first. Parts covered under warranty include the battery, motor,
                    and controller and any proven manufacturing defects will be repaired or replaced free of cost by SEPL
                    after
                    thorough examination and analysis.</p>
            </div>


        </main>

        <main>
            <h1 style="color: #F8C01B;">Your Account</h1>
            <div class="topic">
                <div class="open">
                    <h2 class="question">1.How can I know the status of the delivery of the scooter?</h2>
                    <span class="faq-t"></span>
                </div>
                <p class="answer">We will have a tracking system in my account section to check the status of your vehicle
                    registration and the delivery process.</p>
            </div>



        </main>
    </div>
    </div>
@endsection
