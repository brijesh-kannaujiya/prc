@extends('templates.prc.layouts.prcapp')
<style id="themesflat-style-inline-css" type="text/css">
.page-title {
	background-image:
		url(/img/page-title.jpg)
}


</style>
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
							<span class="trail-end">Phone Unlocking</span>
						</div>
						<div class="page-title-heading">
							<h1 class="title">Phone Unlocking</h1>
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
								<div class="wpb_column vc_column_container vc_col-sm-6">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class="wpb_text_column wpb_content_element ">
												<div class="wpb_wrapper">
													<p>A lot of phones come locked to the carrier they were
														intended for and it asks you for a passcode whenever you
														insert a SIM card that wasn’t intended for the phone to
														use it. The easiest way around this is to purchase an
														unlock code. Unlock code suppliers submit your IMEI to the
														manufacturer or carrier and then get back an unlock code
														specific to that IMEI for you to input and unlock your
														phone. After that, your phone is now permanently unlocked
														and good to go.</p>
													<p>
														<strong>Important to Note Before Ordering:</strong>
													</p>
													<ol>
														<li>All phones, besides iPhones, must ask for an
															unlock code when inserting an unauthorized SIM.</li>
														<li>There cannot be an Unlock App on the phone.</li>
														<li>Refunds cannot be given while the order is in
															process.</li>
														<li>You must have a stock ROM on the phone.</li>
														<li>If the code doesn’t work, a video of inputting
															the code is required for a refund.</li>
													</ol>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-6">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div
												class="wpb_single_image wpb_content_element vc_align_left">
												<figure class="wpb_wrapper vc_figure">
													<div class="vc_single_image-wrapper   vc_box_border_grey">
														<img width="810" height="456"
															src="/img/phone-unlocking.jpg"
															class="vc_single_image-img attachment-full lazyloaded"
															alt=""
															data-lazy-srcset="/img/phone-unlocking.jpg 810w, /img/phone-unlocking-300x169.jpg 300w, /img/phone-unlocking-768x432.jpg 768w, /img/phone-unlocking-570x320.jpg 570w, /img/phone-unlocking-600x338.jpg 600w"
															data-lazy-sizes="(max-width: 810px) 100vw, 810px"
															data-lazy-src="/img/phone-unlocking.jpg"
															sizes="(max-width: 810px) 100vw, 810px"
															srcset="/img/phone-unlocking.jpg 810w, /img/phone-unlocking-300x169.jpg 300w, /img/phone-unlocking-768x432.jpg 768w, /img/phone-unlocking-570x320.jpg 570w, /img/phone-unlocking-600x338.jpg 600w"
															data-was-processed="true">
														
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="vc_row wpb_row vc_row-fluid">
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class="vc_empty_space" style="height: 60px">
												<span class="vc_empty_space_inner"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							</main>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		@endsection
    
        @section('afterBottom')

        
		
		@endsection