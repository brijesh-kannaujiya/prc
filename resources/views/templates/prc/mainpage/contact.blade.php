@extends('templates.prc.layouts.prcapp')
@section('title')

	<title>Service : Phone Repair Shop &amp; Services | Phone Repair Centre</title>
	<style id="cms_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">body .primary-menu > li > a, body .primary-menu .sub-menu li a{font-display:swap;}.site-footer{}.site-footer .bottom-footer .footer-widget-title,.site-footer .top-footer .footer-widget-title{font-display:swap;}a{color:#b3bec8;}a:hover{color:#27e491;}a:active{color:#27e491;}body{font-display:swap;}h1,.h1,.text-heading{font-display:swap;}h2,.h2{font-display:swap;}h3,.h3{font-display:swap;}h4,.h4{font-display:swap;}h5,.h5{font-display:swap;}h6,.h6{font-display:swap;}</style><style id="cms-page-dynamic-css" data-type="redux-output-css">footer.site-footer{}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1548669921817{margin-bottom: 51px !important;}.vc_custom_1543398798675{margin-bottom: 50px !important;}</style>
@endsection
@section('content')

	<div class="page-title-container">
		<div id="pagetitle"
			 class="page-title page-title-layout1 ">
			<div class="container">
				<div class="page-title-inner">
					<div class="page-title-content clearfix">
						<h1 class="page-title ft-heading-b">Contact Us</h1>   </div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<div id="content" class="site-content">
		<div class="content-inner" >
			<svg
					style="fill: #B8F6DB; top:0px;bottom:"
					id="svg-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
					preserveAspectRatio="xMidYMid" width="195.875" height="1318.28" viewBox="0 0 195.875 1318.28">
				<defs>
					<filter id="gradient-overlay-2" filterUnits="userSpaceOnUse">
						<feImage x="-829.406" y="0" width="1025.281" height="1318.2800000000002" preserveAspectRatio="none"
								 xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMTAyNS4yODEiIGhlaWdodD0iMTMxOC4yODAwMDAwMDAwMDAyIj48bGluZWFyR3JhZGllbnQgaWQ9ImdyYWQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB5MT0iMTQ2LjUiIHgyPSIxMDI1LjI4IiB5Mj0iMTE3MS43OCI+CiAgPHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjMWJkZDg4Ii8+CiAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMzJlYjlhIi8+CjwvbGluZWFyR3JhZGllbnQ+CjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiLz48L3N2Zz4="/>
						<feComposite operator="in" in2="SourceGraphic"/>
						<feBlend in2="SourceGraphic" result="gradientFill"/>
					</filter>
				</defs>
				<path style="fill: #B8F6DB"
					  d="M-540.968,20.684 C-540.968,20.684 -687.378,86.487 -694.760,174.843 C-702.142,263.200 -643.186,274.374 -667.132,338.769 C-691.079,403.164 -765.483,413.324 -785.981,496.763 C-807.750,585.376 -722.107,571.956 -727.171,690.819 C-732.235,809.683 -978.187,852.597 -688.556,1167.735 C-398.925,1482.874 -139.906,1235.432 -115.898,1040.448 C-91.891,845.463 42.695,803.563 95.851,754.793 C149.006,706.023 316.246,497.102 46.140,203.210 C-223.966,-90.683 -540.968,20.684 -540.968,20.684 Z"
					  class="cls-2"/>
			</svg>

			<div class="container content-container">
				<div class="row content-row">
					<div id="primary"  class="content-area content-full-width col-12">
						<main id="main" class="site-main">

							<article id="post-38" class="post-38 page type-page status-publish hentry">
								<div class="entry-content clearfix">
									<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-md-8"><div class="vc_column-inner vc_custom_1543398798675"><div class="wpb_wrapper"> <div
															class="fr-contact-form fr-contact-form-default    " >
														<h3>Get In Touch</h3>
														<div role="form" class="wpcf7" id="wpcf7-f1650-p38-o1" lang="en-US" dir="ltr">
															<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
															<form action="/contactusform" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
																<p>
																	<span class="wpcf7-form-control-wrap first-name">
																		<input type="hidden" name="_token" value="{{ csrf_token() }}">

																		<input type="text" name="first_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required
																			@if ($errors->has('first_name'))
																				wpcf7-not-valid
																				@endif " aria-required="true" aria-invalid="false" placeholder="First Name" />

																	</span>
																	<span class="wpcf7-form-control-wrap last-name">
																		<input type="text" name="last_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last Name" /></span>
																	<span class="wpcf7-form-control-wrap your-email">
																		<input type="email" name="mail_id" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email
																				@if ($errors->has('mail_id'))
																				wpcf7-not-valid
																				@endif " aria-required="true" aria-invalid="false" placeholder="Email Address" />
																	</span>
																	<span class="wpcf7-form-control-wrap your-phone">
																		<input type="tel" name="mobile_no" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel
																			@if ($errors->has('mail_id'))
																				wpcf7-not-valid
																				@endif " aria-required="true" aria-invalid="false" placeholder="Telephone Number" />
																	</span>
																	<span class="wpcf7-form-control-wrap your-message">
																		<textarea name="msg" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea>
																	</span>
																	<button type="submit" class="wpcf7-submit">Send Message <i class="fa fa-angle-right"></i>
																	</button>
																</p>
																@if ($errors->has('first_name'))
																	<div class="wpcf7-response-output" aria-hidden="true" style="display: block !important;">
																		{{ $errors->first('first_name') }}
																	</div>
																@endif
																@if ($errors->has('mail_id'))
																	<div class="wpcf7-response-output" aria-hidden="true" style="display: block !important;">
																		{{ $errors->first('mail_id') }}
																	</div>
																@endif
																@if ($errors->has('mobile_no'))
																	<div class="wpcf7-response-output" aria-hidden="true" style="display: block !important;">
																		{{ $errors->first('mobile_no') }}
																	</div>
																@endif
															</form>
														</div>
													</div>
												</div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div
															class="fr-contact-info-default   " >
														<div class="content">
															<h3>Find Us</h3>
															<h4>Phone Repair Centre</h4>
															<p>{{ $adminStore->address }}</p>
															<h4>Phone</h4>
															<p>{{ $adminStore->phone }}</p>
															<h4>Email</h4>
															<p>{{ $adminStore->email }}</p>
															<h4>Open Hours</h4>
															{!! sc_html_render(sc_link_content('store-timing')) !!}

														</div>
														<ul class="cms-social">
															<li><a href="{{ $adminStore->facebook }}"><i class="zmdi zmdi-facebook"></i></a>
															</li>
															<li><a href="{{ $adminStore->twitter }}"><i class="zmdi zmdi-twitter"></i></a>
															</li>
															<li><a href="{{ $adminStore->instagram }}"><i class="fa fa-instagram"></i></a>
															</li>
															<li><a href="{{ $adminStore->youtube }}"><i class="zmdi zmdi-youtube"></i></a>
															</li>

														</ul>
													</div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1548669921817"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div
															class="fr-call-to-action default  style2 " >
														<div class="fr-cta-content">
															<h3>Are You Sending a Device to Us?</h3>
															<p>Please remember to insure your package as we cannot accept responsibility for any devices that are lost in transit.</p>
														</div>
														<div class="fr-cta-button">
															<a href="{{route ('faq')}}" target="_self" class="btn">
																Frequent Questions    <i class="fa fa-angle-right"></i>
															</a>
														</div>
													</div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
													<div
															class="fr-google-map style-default " >
														{{--<div class="map-render" data-address='New York, United States' data-marker='%7B%22markercoordinate%22%3A%2240.712776%2C%20-74.005974%22%2C%22markericon%22%3A%22https%3A%5C%2F%5C%2Fdemo.cmssuperheroes.com%5C%2Fthemeforest%5C%2Fwp-tekhfixers%5C%2Fwp-content%5C%2Fuploads%5C%2F2018%5C%2F11%5C%2FMap.png%22%7D' data-loader='%7B%22markericon%22%3A%22%3Cspan%3E%3C%5C%2Fspan%3E%22%7D' data-coordinate='' data-type='ROADMAP' data-zoom='13' data-template='' data-controls='%7B%22scrollwheel%22%3A0%2C%22pancontrol%22%3Afalse%2C%22zoomcontrol%22%3Atrue%2C%22scalecontrol%22%3Afalse%2C%22maptypecontrol%22%3Afalse%2C%22streetviewcontrol%22%3Atrue%2C%22overviewmapcontrol%22%3Afalse%2C%22infoclick%22%3Afalse%2C%22infowidth%22%3A%22200%22%2C%22style%22%3A%22%22%7D'      style="width:auto;height: 390px"></div>--}}
														<iframe src="https://www.google.com/maps/embed/v1/place?q=122%20Queen%20St%2C%20St%20Marys%20NSW%202760%2C%20Australia&key=AIzaSyBKvpW36qwSACsa-My3dPc-jq-sTIbF8Iw" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
													</div></div></div></div></div>
								</div><!-- .entry-content -->

							</article><!-- #post-38 -->
						</main><!-- #main -->
					</div><!-- #primary -->


				</div>
			</div>

		</div><!-- #content inner -->
	</div><!-- #content -->


@endsection

@section('afterBottom')
	<script type="text/javascript">
		jQuery(function($) {
			$('.menu-page-title').removeClass('page-title-non-bg');
			$('.menu-page-title').removeClass('transparent');
			$('.menu-page-title').addClass('has-page-title');
			$('body').addClass('single-services');

		});
	</script>
@endsection