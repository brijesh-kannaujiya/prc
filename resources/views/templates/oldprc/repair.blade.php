@extends('layouts.prcapp')

		@section('content')
		<div class="page-title pagetitle_style_2">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 page-title-container">
						<div class="breadcrumb-trail breadcrumbs">
							<span class="trail-browse"></span> <span class="trail-begin"><a
								href="{{ ('/') }}"
								title="PhoneRepairCenter" rel="home">Home</a></span> <span class="sep">&gt;</span>
							<span class="trail-end">Repair</span>
						</div>
						<div class="page-title-heading">
							<h1 class="title">Repair</h1>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div id="content" class="page-wrap sidebar-left">
			<div class="container content-wrapper">
				<div class="row">
					<div class="col-md-12">
						<div id="primary" class="content-area fullwidth">
							<main id="main" class="post-wrap" role="main">
							<article id="post-2184"
								class="post-2184 page type-page status-publish hentry">
								<div class="entry-content">
									<!-- <div class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="vc_empty_space" style="height: 80px">
														<span class="vc_empty_space_inner"></span>
													</div>
												</div>
											</div>
										</div>
									</div> -->
									<div data-vc-full-width="true" data-vc-full-width-init="true"
										data-vc-stretch-content="true"
										class="vc_row wpb_row vc_row-fluid vc_custom_1546429263179"
										>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="wpb_raw_code wpb_content_element wpb_raw_html">
														<div class="wpb_wrapper">
															<div class="woocommerce columns-5">
                                                            
																<ul class="products columns-5">
                                                                @foreach($taxonomies as $taxonomy)
                                                                <li class="product-category product"><a
																		href="https://phonerepaircentre.com.au/product-category/apple/"><img
																			src="./Repair - PhoneRepairCenter_files/APPLE-.jpg"
																			alt="Apple" width="300" height="300"
																			data-lazy-srcset="https://phonerepaircentre.com.au/wp-content/uploads/2019/07/APPLE-.jpg 300w, https://phonerepaircentre.com.au/wp-content/uploads/2019/07/APPLE--150x150.jpg 150w, https://phonerepaircentre.com.au/wp-content/uploads/2019/07/APPLE--100x100.jpg 100w"
																			data-lazy-sizes="(max-width: 300px) 100vw, 300px"
																			data-lazy-src="https://phonerepaircentre.com.au/wp-content/uploads/2019/07/APPLE-.jpg"
																			class="lazyloaded"
																			sizes="(max-width: 300px) 100vw, 300px"
																			srcset="https://phonerepaircentre.com.au/wp-content/uploads/2019/07/APPLE-.jpg 300w, https://phonerepaircentre.com.au/wp-content/uploads/2019/07/APPLE--150x150.jpg 150w, https://phonerepaircentre.com.au/wp-content/uploads/2019/07/APPLE--100x100.jpg 100w"
																			data-was-processed="true">
																		<noscript>
																				<img
																					src="https://phonerepaircentre.com.au/wp-content/uploads/2019/07/APPLE-.jpg"
																					alt="Apple" width="300" height="300"
																					srcset="https://phonerepaircentre.com.au/wp-content/uploads/2019/07/APPLE-.jpg 300w, https://phonerepaircentre.com.au/wp-content/uploads/2019/07/APPLE--150x150.jpg 150w, https://phonerepaircentre.com.au/wp-content/uploads/2019/07/APPLE--100x100.jpg 100w"
																					sizes="(max-width: 300px) 100vw, 300px" />
																			</noscript>
																			<h2 class="woocommerce-loop-category__title">
                                                                            {{ $taxonomy->name }}
																				<mark class="count">(44)</mark>
																			</h2> </a></li>
                                                                            @endforeach
                                                                            </ul>
															</div>
															<style>
                                                            .page-wrap.sidebar-left .widget-area {
                                                                background-color: #fff;
                                                                border: 1px solid #fff;
                                                                border-radius: 4px;
                                                                box-shadow: none
                                                            }
                                                            </style>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_row-full-width vc_clearfix"></div>
								</div>
                                </article>
							</main>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		@endsection
    
        @section('afterBottom')

        
		
		@endsection