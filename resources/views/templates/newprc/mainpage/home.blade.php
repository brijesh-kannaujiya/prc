@extends('templates.newprc.layouts.prcapp')
@section('title')
    <title>Phone Repair Shop &amp; Services | Phone Repair Centre</title>
@endsection
		@section('content')
            <!-- ***** Welcome Area Start ***** -->
            <div class="welcome-area" id="welcome">

                <!-- ***** Header Text Start ***** -->
                <div class="header-text">
                    <div class="container">
                        <div class="row">
                            <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s"
                                 style="padding-top: 15%; padding-left: 5%;">
                                <strong>We'll repair your</strong> <br>
                                <h1 style="font-size:80px;line-height:70px;">
                                    <strong>P</strong><strong style="color: #ceb807;">HON</strong><strong>E</strong>,<br>
                                    <strong>COMP</strong><strong style="color: #ceb807;">UTE</strong>R,</h1>
                                <p style="float: right;color: black;margin-top: -25px;"><strong>& other devices.</strong></p>
                                <a href="{{   route('frontend.service') }}" class="main-button">Explore Our Services</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <img src="/newassets/images/Vector Smart Object.png" class="rounded img-fluid d-block mx-auto" alt="Phone Repair centre"
                                     style="height: 98%;padding-top: 20%;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Header Text End ***** -->
            </div>
            <!-- ***** Welcome Area End ***** -->


            <!-- ***** Features Small Start ***** -->
            <section class="section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading ourservice">
                                <p style="text-align: center">Choose the Best</p>
                                <h1><strong>OUR SE</strong><strong style="color: #ceb807;">R</strong><strong>VIC</strong><strong style="color: #ceb807;">ES</strong></h1>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-3 item service-home">
                                <a href="{{  route('product.showbrand') }}">
                                <div>
                                    <img src="/newassets/images/Smart_phone.png" alt="">
                                </div>
                                <h5 class="service-title" style="padding-top: 10px;color: #777;">Smart Phone</h5>
                                    <h6 class="service-title" style="color: #777;"><u>Repair</u></h6>
                                </a>
                            </div>
                            <div class="col-3 item service-home">
                                <a href="{{  route('product.showbrand') }}">
                                <div>
                                    <img src="/newassets/images/Tablet.png" alt="">
                                </div>
                                <h5 class="service-title" style="padding-top: 10px;color: #777">Tablet</h5>
                                    <h6 class="service-title" style="color: #777;"><u>Repair</u></h6>
                                </a>
                            </div>
                            <div class="col-3 item service-home">
                                <a href="{{  route('product.showbrand') }}">
                                <div>
                                    <img src="/newassets/images/Mackbook.png" alt="">
                                </div>
                                <h5 class="service-title" style="padding-top: 10px;color:#777">Mackbook</h5>
                                    <h6 class="service-title" style="color: #777;"><u>Repair</u></h6>
                                </a>
                            </div>
                            <div class="col-3 item service-home">
                                <a href="{{  route('product.showbrand') }}">
                                <div>
                                    <img src="/newassets/images/Laptop.png" alt="">
                                </div>
                                <h5 class="service-title" style="padding-top: 10px;color: #777">Laptop</h5>
                                    <h6 class="service-title" style="color: #777;"><u>Repair</u></h6>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Features Small End ***** -->

            <!-- ***** Welcome Area Start ***** -->
            <div class="welcome-area" id="homepage">

                <!-- ***** Header Text Start ***** -->
                <div class="header-text">
                    <div class="container">
                        <div class="row">
                            <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s"
                                 style="padding-top: 5%; padding-left: 5%;">
                                <h2 style="color:#ffffff;"><strong>WE CAN FIX IT <br>ALMOST AS FAST
                                        <br>AS YOU CAN BREAK IT</strong></h2>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <img src="/newassets/images/4.png" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic"
                                     style="height: 98%;padding-top: 20%;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Header Text End ***** -->
            </div>
            <!-- ***** Welcome Area End ***** -->
            <!-- ***** Features Small Start ***** -->
            <section class="section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading" style="text-align: center">
                                <h2><strong>W</strong><strong style="color: #ceb807;">H</strong><strong>Y CH</strong><strong style="color: #ceb807;">OO</strong><strong>SE U</strong><strong style="color: #ceb807;">S?</strong></h2>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-6 item service-chooseus ">
                                <div class="col-3" style="float: left">
                                        <img src="/newassets/images/Icon.png" alt="">
                                </div>
                                <div class="text col-9" style="float: right">
                                    <h5>Same Day Repairs</h5>
                                    <p>When your phone breaks, you don’t want it fixed tomorrow—you need it fixed today.</p>
                                </div>

                            </div>
                            <div class="col-6 item service-chooseus ">
                                <div class="col-3" style="float: left">
                                    <img src="/newassets/images/Icon_2.png" alt="">
                                </div>
                                <div class="text col-9" style="float: right">
                                    <h5>Low Price Guarantee</h5>
                                    <p>Repairing beats replacing, and PRC beats all other phone repair companies.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-6 item service-chooseus ">
                                <div class="col-3" style="float: left">
                                    <img src="/newassets/images/Icon_3.png" alt="">
                                </div>
                                <div class="text col-9" style="float: right">
                                    <h5>Superior Warranty</h5>
                                    <p>Stronger than any phone case, PRC offers the most reliable warranty on the market.</p>
                                </div>

                            </div>
                            <div class="col-6 item service-chooseus">
                                <div class="col-3" style="float: left">
                                    <img src="/newassets/images/Icon_3.png" alt="">
                                </div>
                                <div class="text col-9" style="float: right">
                                    <h5>We do all repair</h5>
                                    <p>You can use this website template for commercial or non-commercial purposes.We do all repair in our premises. We do not outsource any repair to any other store.</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Features Small End ***** -->

            <!-- ***** Features Small Start ***** -->
            <section class="section" id="services-aboutus">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading" style="text-align: center">
                                <h1><strong>WHAT PROBLEMS<br> CAN PRC FIX ?</strong></h1>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-sm-4 item service-aboutus">
                                <h5 class="service-title">Macbook Repair</h5>
                                <p style="padding-bottom: 20px;">We provide complete solutions for all your MacBook related repair issue at Phone Repair Centre</p>
                                <a href="{{   route('frontend.service') }}" class="main-button">Read More</a>
                            </div>
                            <div class="col-sm-4 item service-aboutus">
                                <h5 class="service-title">Laptop Repair</h5>
                                <p style="padding-bottom: 20px;">Phone Repair Centre offer complete and quick solutions for repairing laptops.</p>
                                <a href="{{   route('frontend.service') }}" class="main-button">Read More</a>
                            </div>
                            <div class="col-sm-4 item service-aboutus">
                                <h5 class="service-title">Data Recovery</h5>
                                <p style="padding-bottom: 20px;">Data recovery is the process of retrieving information that is not accessible because of variety of reasons.</p>
                                <a href="{{   route('frontend.service') }}" class="main-button">Read More</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-sm-4 item service-aboutus">
                                <h5 class="service-title">Motherboard Repair</h5>
                                <p style="padding-bottom: 20px;">Motherboard is assuredly the most important of a computer. Thus, making Motherboard repair a task only to be performed by experts.</p>
                                <a href="{{   route('frontend.service') }}" class="main-button">Read More</a>
                            </div>
                            <div class="col-sm-4 item service-aboutus">
                                <h5 class="service-title">Phone Unlocking</h5>
                                <p style="padding-bottom: 20px;">Remove any sort of lock from your device,including passcode,network and google lock.</p>
                                <a href="{{   route('frontend.service') }}" class="main-button">Read More</a>
                            </div>
                            <div class="col-sm-4 item service-aboutus">
                                <h5 class="service-title">Game Console</h5>
                                <p style="padding-bottom: 20px;">For those who spend their leisure time by playing video games, frustration may arise if your Game Console stops working.</p>
                                <a href="{{   route('frontend.service') }}" class="main-button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Features Small End ***** -->
            <!-- ***** Features Small Start ***** -->
            <section class="section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading" style="text-align: center">
                                <h1><strong>WE CAN FIX IT !</strong></h1>
                                <p style="text-align: center;">Our prices for phone repairs are competitive with anyone in the city. We repair cracked screens for all models of phones and repair broken buttons, speakers and cameras as well. Cracked screen on your new phone? We fix that.</p>
                            </div>
                        </div>
                        <div class="col-12" style="text-align: center;">
                           <ul class="homeul">
                               <li>Cracked Screen</li>
                               <li>MotherBoard Repair</li>
                               <li>Home Button</li>
                               <li>Cameras</li>
                               <li>Passcode Lock Remove</li>
                           </ul>
                        </div><div class="col-12" style="text-align: center;">
                           <ul class="homeul">
                               <li>Network Unlocking</li>
                               <li>No Power</li>
                               <li>Charging Port</li>
                               <li>IC Replacement</li>
                               <li>Liquid Damage</li>
                           </ul>
                        </div><div class="col-12" style="text-align: center;">
                           <ul class="homeul">
                               <li>Speaker</li>
                               <li>Google Account Lock Remove</li>
                               <li>Software Issue</li>
                               <li>Battery Replacement</li>
                           </ul>
                        </div>

                    </div>
                    <!-- ***** Welcome Area Start ***** -->
                    <div class="welcome-area" id="homepagebottom">

                        <!-- ***** Header Text Start ***** -->
                        <div class="header-text">
                            <div class="container">
                                <div class="row">
                                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s"
                                         style="padding-top: 2%; padding-left: 2%;">
                                        <h3 style="color:#ffffff;padding-bottom: 10px">Diagnose Your device and<br>
                                            Get Reports for insurance Purpose.</h3>
                                        <a href="#" class="home-button">More Detail</a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ***** Header Text End ***** -->
                    </div>
                    <!-- ***** Welcome Area End ***** -->
                </div>
            </section>
            <!-- ***** Features Small End ***** -->

            <!-- ***** Features Small Start ***** -->
            <section class="section" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading" style="text-align: center">
                                <h1><strong>Selling Mobile Accessories</strong></h1>
                                <p style="text-align: center;">We don’t want you to break your phone again so we provide wide range of accessories to protect your phone.</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-3 item service-home">
                                <div>
                                    <img src="/newassets/images/Product.png" alt="">
                                </div>
                                <h5 class="service-title">Screen Protectors</h5>
                                <p style="padding-bottom: 20px;">Shock proof glass protectors for all phone models.</p>
                                <a href="{{   route('frontend.service') }}" class="main-button">Read More</a>
                            </div>
                             <div class="col-3 item service-home">
                                <div>
                                    <img src="/newassets/images/Product_1.png" alt="">
                                </div>
                                <h5 class="service-title">Cases/Cover</h5>
                                <p style="padding-bottom: 20px;">Verity of cases including flip and heavy duty.</p>
                                 <a href="{{   route('frontend.service') }}" class="main-button">Read More</a>
                            </div>
                             <div class="col-3 item service-home">
                                <div>
                                    <img src="/newassets/images/Product_2.png" alt="">
                                </div>
                                <h5 class="service-title">Electronic Gadgets</h5>
                                <p style="padding-bottom: 20px;">Bluetooth,Headphones,PowerBanks and lots more…</p>
                                 <a href="{{   route('frontend.service') }}" class="main-button">Read More</a>
                            </div>
                             <div class="col-3 item service-home">
                                <div>
                                    <img src="/newassets/images/Product_3.png" alt="">
                                </div>
                                <h5 class="service-title">Mobile Holders & Chargers</h5>
                                <p style="padding-bottom: 20px;">Damage or lost your chargers ? Grab a new one !</p>
                                 <a href="{{   route('frontend.service') }}" class="main-button">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Features Small End ***** -->


        @endsection
    
        @section('afterBottom')

        <script>


        </script>
		
		@endsection