@extends('templates.newprc.layouts.prcapp')
@section('title')

	<title>Repair : Phone Repair Shop &amp; Services | Phone Repair Centre</title>

@endsection
@section('content')
<!-- ***** Welcome Area Start ***** -->
<div class="welcome-area" id="welcome">

	<!-- ***** Header Text Start ***** -->
	<div class="header-text">
		<div class="container">
			<div class="row">
				<div class="left-text col-6" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s"
					 style="padding-top: 3%; padding-left: 0%;">
					<h1 style="font-size:58px;line-height:70px;">
						<strong>I N</strong><strong style="color: #ceb807;">EE</strong><strong>D HELP</strong><br>
						<strong>WI</strong><strong style="color: #ceb807;">TH </strong><strong> M</strong><strong style="color: #ceb807;">Y..</strong>.</h1>
				</div>
				<div class="col-6" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">

					<div class="row">
					<div class="col-3" style="background-color: lightgray;text-align: center;padding: 20px 0px;border-radius: 15px;margin: 20px;">
						<a href="{{  route('product.showbrand') }}"><img src="/newassets/images/Header_phone.png" alt="" ></a>
					</div>
					<div class="col-3" style="background-color: lightgray;text-align: center;padding: 20px 0px;border-radius: 15px;margin: 20px;">
						<a href="{{  route('product.showbrand') }}"><img src="/newassets/images/ipad.png" alt="" ></a>
					</div>
					</div>
					<div class="row">
					<div class="col-3" style="background-color: #ceb807;text-align: center;padding: 20px 0px;border-radius: 15px;margin: 20px;">
						<a href="{{  route('product.showbrand') }}"><img src="/newassets/images/Laaptop.png" alt="" ></a>
					</div>
					<div class="col-3" style="background-color: lightgray;text-align: center;padding: 20px 0px;border-radius: 15px;margin: 20px;">
						<a href="{{  route('product.showbrand') }}"><img src="/newassets/images/Data_recovery.png" alt="" ></a>
					</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->


<!-- ***** Frequently Question Start ***** -->
<section class="section" id="frequently-question">
	<div class="container">
		<!-- ***** Section Title Start ***** -->
		<div class="row">
			<div class="col-lg-12">
				<div class="section-heading" style="text-align: center;margin-bottom: 30px;">
					<h2><strong>RE</strong><strong style="color: #ceb807;">PAI</strong><strong>R G</strong><strong style="color: #ceb807;">UID</strong><strong>ES</strong></h2>
				</div>
			</div>
			<div class="col-12">
				<div class="section-heading">
					<div class="row">
						<div class="col-3" style="background-color: lightgray;border-radius: 30px;padding: 10px 5px;flex: 0 0 22%;margin-right: 25px;">
							<a href="http://localhost:8000/shop/showbrand">
								<div style="float: left;border-radius: 40px;padding: 15px 15px;background-color: darkgray;" class="col-4">
									<img src="/newassets/images/Screen.png" alt="" style="width: 50px;height: 50px;">
								</div>
								<div style="color:grey;float: right;padding: 25px;" class="text col-8">
									<h6>Screen Replacement</h6>
								</div>
							</a>
						</div>
						<div class="col-3" style="background-color: lightgray;border-radius: 30px;padding: 10px 5px;flex: 0 0 22%;margin-right: 25px;">
							<a href="http://localhost:8000/shop/showbrand">
								<div style="float: left;border-radius: 40px;padding: 15px 15px;background-color: darkgray;" class="col-4">
									<img src="/newassets/images/Charging.png" alt="" style="width: 50px;height: 50px;">
								</div>
								<div style="color:grey;float: right;padding: 25px;" class="text col-8">
									<h6>Charging Issue</h6>
								</div>
							</a>
						</div>
						<div class="col-3" style="background-color: lightgray;border-radius: 30px;padding: 10px 5px;flex: 0 0 22%;margin-right: 25px;">
							<a href="http://localhost:8000/shop/showbrand">
								<div style="float: left;border-radius: 40px;padding: 15px 15px;background-color: darkgray;" class="col-4">
									<img src="/newassets/images/Battery.png" alt="" style="width: 50px;height: 50px;">
								</div>
								<div style="color:grey;float: right;padding: 25px;" class="text col-8">
									<h6>Battery Replacement</h6>
								</div>
							</a>
						</div>
						<div class="col-3" style="background-color: lightgray;border-radius: 30px;padding: 10px 5px;flex: 0 0 22%;margin-right: 25px;">
							<a href="http://localhost:8000/shop/showbrand">
								<div style="float: left;border-radius: 40px;padding: 15px 15px;background-color: darkgray;" class="col-4">
									<img src="/newassets/images/Coding.png" alt="" style="width: 50px;height: 50px;">
								</div>
								<div style="color:grey;float: right;padding: 25px;" class="text col-8">
									<h6>Software Issue</h6>
								</div>
							</a>
						</div>

						{{--<div class="col-3" style="background-color: lightgray;border-radius: 30px;padding: 10px 5px;flex: 0 0 22%;margin-right: 25px;">
						<a href="{{  route('product.showbrand') }}">
							<div style="float: left;border-radius: 40px;padding: 10px 13px;background-color: darkgray;" class="col-4">
								<img src="/newassets/images/Charging.png" alt="" style="max-width: 60px;/*! border: 1px solid darkgray; */padding: 6px 12px;/*! border-radius: 30px; */">
							</div>
							<div style="color:grey;float: right;padding: 20px;" class="text col-8">
								<h6>Charging Issue</h6>
							</div>
						</a>
						</div>
						<div class="col-3" style="background-color: lightgray;border-radius: 30px;padding: 10px 5px;flex: 0 0 22%;margin-right: 25px;">
							<a href="{{  route('product.showbrand') }}">
							<div style="float: left;border-radius: 40px;padding: 10px 13px;background-color: darkgray;" class="col-4">
								<img src="/newassets/images/Battery.png" alt="" style="max-width: 60px;/*! border: 1px solid darkgray; */padding: 6px 10px;/*! border-radius: 30px; */">
							</div>
							<div style="color:grey;float: right;padding: 20px;" class="text col-8">
								<h6>Battery Replacement</h6>
							</div>
						</a>
						</div>
						<div class="col-3" style="background-color: lightgray;border-radius: 30px;padding: 10px 5px;flex: 0 0 22%;margin-right: 25px;">
							<a href="{{  route('product.showbrand') }}">
							<div style="float: left;border-radius: 40px;padding: 17px 10px;background-color: darkgray;" class="col-4">
								<img src="/newassets/images/Coding.png" alt="" style="max-width: 60px;/*! border: 1px solid darkgray; */padding: 6px 12px;/*! border-radius: 30px; */">
							</div>
							<div style="color:grey;float: right;padding: 20px;" class="text col-8">
								<h6>Software Issue</h6>
							</div>
							</a>
						</div>--}}

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***** Frequently Question End ***** -->

<!-- ***** Features Small Start ***** -->
<section class="section" id="services-aboutus">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="col-sm-12 item service-aboutus">
					<div class="icon">
						<i><img src="/newassets/images/1.png" alt=""></i>
					</div>
					<h5 class="service-title">JOHN DOE</h5>
					<p>I have been dealing with Cheap Mobile Repairs. They have helped me out in various occasions from broken screens to the data recovery from  a water damage phone, they have always gone out of there way to help me. I have always noticed how humble and Kind all the team is. I definitely recommend and will rate this company as the most honest and hte best gedget repair place`.</p>

				</div>

			</div>
		</div>
	</div>
</section>
<!-- ***** Features Small End ***** -->

@endsection
    
        @section('afterBottom')

        
		
		@endsection