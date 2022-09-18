@extends('templates.newprc.layouts.prcapp')
@section('title')

	<title>Contact Us : Phone Repair Shop &amp; Services | Phone Repair Centre</title>

@endsection

		@section('content')
			<!-- ***** Welcome Area Start ***** -->
			<div class="welcome-area" id="welcome">

				<!-- ***** Header Text Start ***** -->
				<div class="header-text">
					<div class="container">
						<div class="row">
							<div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s"
								 style="padding-top: 15%; padding-left: 15%;">
								<h1 style="font-size:80px;line-height:70px;"><strong>CO</strong><strong style="color: #ceb807;">NTA</strong><strong>CT</strong></br><strong style="padding-left: 75%;">U</strong><strong style="color: #ceb807;">S</strong></h1>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
								<img src="/newassets/images/Contactus.png" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic"
									 style="height: 98%;padding-top: 20%;">
							</div>
						</div>
					</div>
				</div>
				<!-- ***** Header Text End ***** -->
			</div>
			<!-- ***** Welcome Area End ***** -->


			<!-- ***** Contact Us Start ***** -->
			<section class="section" id="contact-us">
				<div class="container-fluid">
					<div class="row" style="padding:2% 0px 0px 10%;">

						<div class="col-lg-4 col-md-4 col-sm-12">
							<p>Address</p>
							<p>122 Queen,St Marys,NSW-2760</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<p>Phone number</p>
							<p>Call us: 0286783298</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<p>E-mail address</p>
							<p>info@phonerepaircentre.com.au</p>
						</div>

					</div>
					<div class="row">

						<!-- ***** Contact Form Start ***** -->
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="contact-form">
								<form id="contact" action="" method="post">
									<div class="row">
										<div class="col-md-6 col-sm-12">
											<fieldset>
												<input name="name" type="text" id="name" placeholder="Full Name" required="" class="contact-field">
											</fieldset>
										</div>
										<div class="col-md-6 col-sm-12">
											<fieldset>
												<input name="email" type="text" id="email" placeholder="E-mail" required="" class="contact-field">
											</fieldset>
										</div>
										<div class="col-md-6 col-sm-12">
											<fieldset>
												<input name="mobile" type="text" id="mobile" placeholder="Mobile" required="" class="contact-field">
											</fieldset>
										</div>
										<div class="col-md-6 col-sm-12">
											<fieldset>
												<input name="subject" type="text" id="subject" placeholder="Subject" required="" class="contact-field">
											</fieldset>
										</div>
										<div class="col-lg-12">
											<fieldset>
												<textarea name="message" rows="6" id="message" placeholder="Your Message" required="" class="contact-field"></textarea>
											</fieldset>
										</div>
										<div class="col-lg-12">
											<fieldset>
												<button type="submit" id="form-submit" class="main-button">Send Message</button>
											</fieldset>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- ***** Contact Form End ***** -->

						<!-- ***** Contact Map Start ***** -->
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div id="map" style="padding:10%;">
								<!-- How to change your own map point
                                     1. Go to Google Maps
                                     2. Click on your location point
                                     3. Click "Share" and choose "Embed map" tab
                                     4. Copy only URL and paste it within the src="" field below
                              -->
								<iframe src="https://www.google.com/maps/embed/v1/place?q=122%20Queen%20St%2C%20St%20Marys%20NSW%202760%2C%20Australia&key=AIzaSyBKvpW36qwSACsa-My3dPc-jq-sTIbF8Iw" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
						<!-- ***** Contact Map End ***** -->


					</div>
				</div>
			</section>
			<!-- ***** Contact Us End ***** -->

		@endsection
    
        @section('afterBottom')

        
		
		@endsection