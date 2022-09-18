@extends('templates.prc.layouts.prcapp')
<style id="themesflat-style-inline-css" type="text/css">
.page-title {
	background-image:
		url(/img/page-title.jpg)
}
.social-icon{
	margin-top: 10px;
}
</style>

@section('pageScript')
<script>window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-142686604-1');</script>
	<script type="application/ld+json">{
 "@context": "https://schema.org",
 "@type": "LocalBusiness",
 "name": "Phone Repair Centre",
 "image": "https://phonerepaircentre.com.au/wp-content/uploads/2019/07/logo-resize2.png",
 "@id": "",
 "url": "https://phonerepaircentre.com.au/",
 "description":"We started operating 10 years back in Australia. With a team of technical professionals having years of experience in mobile repairing domain, we at PhoneRepair Centre offer best in class phone and tech device repair services for customers.",
 "telephone": "02 86783298",
 "address": {
   "@type": "PostalAddress",
   "streetAddress": "122 Queen Street",
   "addressLocality": "St Marys.",
   "addressRegion": "NSW",
   "postalCode": "NSW-2760",
   "addressCountry": "AU"
 },
 "geo": {
   "@type": "GeoCoordinates",
   "latitude": -33.766127,
   "longitude": 150.77439170000002
 } ,
 "sameAs": [
   "https://twitter.com/phonerepaircentre.com.au",
   "https://www.facebook.com/phonerepaircentre.com.au/",
   "https://www.youtube.com/channel/UClA97i8j5HkTHcK5pgCtpBw",
   "https://www.tumblr.com/dashboard/blog/phonerepairme"
 ]
}</script>
	
@endsection

		@section('content')
		<div class="page-title pagetitle_style_2">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 page-title-container">
						<div class="breadcrumb-trail breadcrumbs">
							<span class="trail-browse"></span> <span class="trail-begin"><a
								href="{{ ('/')}}"
								title="PhoneRepairCenter" rel="home">Home</a></span> <span class="sep">&gt;</span>
							<span class="trail-end">Contact</span>
						</div>
						<div class="page-title-heading">
							<h1 class="title">Contact</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="content" class="page-wrap sidebar-left">
			<div class="container content-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div id="primary" class="content-area-full-width">
							<main id="main" class="site-main" role="main">
							<div class="vc_row wpb_row vc_row-fluid">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element ">
												<div class="wpb_wrapper">
													<p>
													<iframe src="https://www.google.com/maps/embed?pb=!4v1594561619253!6m8!1m7!1sCAoSLEFGMVFpcE1CcWRPbXA2TklYdDJMQ1l4SjhyQ2YtWkRoXzF0RWtTd1RZMjVI!2m2!1d-33.76603596305376!2d150.774744451046!3f340!4f0!5f0.4000000000000002" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div
								class="vc_row wpb_row vc_row-fluid flat-contact-form vc_custom_1489138931735" style="margin-top: 3%;">
								<div class="wpb_column vc_column_container vc_col-sm-4">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element ">
												<div class="wpb_wrapper">
													<h5>Address</h5>
													<p>122 Queen Street, St Marys. NSW-2760</p>
												</div>
											</div>
											<div class="vc_empty_space" style="height: 35px">
												<span class="vc_empty_space_inner"></span>
											</div>
											<div class="wpb_text_column wpb_content_element ">
												<div class="wpb_wrapper">
													<h5>Phone number</h5>
													<p>
														Call us: <a href="tel:02 86783298">02 86783298</a>
													</p>
												</div>
											</div>
											<div class="vc_empty_space" style="height: 35px">
												<span class="vc_empty_space_inner"></span>
											</div>
											<div class="wpb_text_column wpb_content_element ">
												<div class="wpb_wrapper">
													<h5>E-mail address</h5>
													<p>
														<a href="mailto:info@phonerepircentre.com.au">info@phonerepircentre.com.au</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-8">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div role="form" class="wpcf7" id="wpcf7-f328-p498-o2"
												lang="en-US" dir="ltr">
												<div class="screen-reader-response"></div>
												<form action="send" method="POST" class="wpcf7-form" novalidate="novalidate">
                										{{ csrf_field() }}
													
													<!-- <div style="display: none;">
														<input type="hidden" name="_wpcf7" value="328"> <input
															type="hidden" name="_wpcf7_version" value="5.1.3">
														<input type="hidden" name="_wpcf7_locale" value="en_US">
														<input type="hidden" name="_wpcf7_unit_tag"
															value="wpcf7-f328-p498-o2"> <input type="hidden"
															name="_wpcf7_container_post" value="498">
													</div> -->
													<div class="flat-wrap-field clearfix">
														<div class="flat-one-half">
															<span class="wpcf7-form-control-wrap your-name">
																<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																aria-required="true" aria-invalid="false" placeholder="Name"></span><br> <span
																class="wpcf7-form-control-wrap your-email">
																<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
																aria-required="true" aria-invalid="false" placeholder="Email"></span><br> <span
																class="wpcf7-form-control-wrap your-mobile">
																<input type="text" name="your-mobile" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																aria-required="true" aria-invalid="false" placeholder="Mobile"></span><br> <span
																class="wpcf7-form-control-wrap your-subject">
																<input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
																aria-required="true" aria-invalid="false" placeholder="Subject"></span><br> 
																<!-- <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit"><span
																class="ajax-loader"></span> -->
															<p></p>
														</div>
														<div class="flat-one-half">
															<span class="wpcf7-form-control-wrap your-message"><textarea
																	name="your-message" cols="40" rows="10"
																	class="wpcf7-form-control wpcf7-textarea"
																	aria-invalid="false" placeholder="Message"></textarea></span>

																	<button type="submit"  class="wpcf7-form-control">Send Message</button><span
																	class="ajax-loader"></span>
														</div>
													</div>
													<div class="wpcf7-response-output wpcf7-display-none"></div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div data-vc-full-width="true" data-vc-full-width-init="true"
								data-vc-stretch-content="true"
								class="vc_row wpb_row vc_row-fluid vc_row-no-padding"
								style="position: relative; left: -31.5px; box-sizing: border-box; width: 1263px;">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class="wpb_gmaps_widget wpb_content_element">
												<div class="wpb_wrapper">
													<div class="wpb_map_wraper">
													<iframe height="450"
																allowfullscreen=""
																data-rocket-lazyload="fitvidscompatible"
																data-lazy-src="https://www.google.com/maps/embed/v1/place?q=122%20Queen%20St%2C%20St%20Marys%20NSW%202760%2C%20Australia&amp;key=AIzaSyBKvpW36qwSACsa-My3dPc-jq-sTIbF8Iw"
																style="pointer-events: none;"></iframe>
															<noscript>
																<iframe height="450"
																	src="https://www.google.com/maps/embed/v1/place?q=122%20Queen%20St%2C%20St%20Marys%20NSW%202760%2C%20Australia&key=AIzaSyBKvpW36qwSACsa-My3dPc-jq-sTIbF8Iw"
																	allowfullscreen></iframe>
															</noscript>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row-full-width vc_clearfix"></div>
							</main>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		@endsection
    
        @section('afterBottom')

        
		
		@endsection