@extends('templates.prc.layouts.prcapp')
@section('customstyle')
	<style type="text/css">
		.caret {
			cursor: pointer;
			user-select: none; /* Prevent text selection */
		}

		/* Create the caret/arrow with a unicode, and style it */
		.caret::before {
			content: "\25B6";
			color: black;
			display: inline-block;
			margin-right: 6px;
		}

		/* Rotate the caret/arrow icon when clicked on (using JavaScript) */
		.caret-down::before {
			transform: rotate(90deg);
		}

		/* Hide the nested list */
		.nested {
			display: none;
		}

		/* Show the nested list when the user clicks on the caret/arrow (with JavaScript) */
		.active {
			display: block;
		}

	</style>
@endsection

@section('title')

	<title>Service : Phone Repair Shop &amp; Services | Phone Repair Centre</title>

@endsection
		@section('content')

			<div class="page-title-container">
				<div id="pagetitle" class="page-title page-title-layout1 ">
					<div class="container">
						<div class="page-title-inner">
							<div class="page-title-content clearfix">
								<h1 class="page-title ft-heading-b">{!! sc_html_render(sc_link_content('sell-your-device-heading')) !!}</h1>   </div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			<div id="content" class="site-content">
				<div class="content-inner" >
					<svg
							style="fill: #fad33c; top:0px;bottom:"
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
						<path style="fill: #fad33c"
							  d="M-540.968,20.684 C-540.968,20.684 -687.378,86.487 -694.760,174.843 C-702.142,263.200 -643.186,274.374 -667.132,338.769 C-691.079,403.164 -765.483,413.324 -785.981,496.763 C-807.750,585.376 -722.107,571.956 -727.171,690.819 C-732.235,809.683 -978.187,852.597 -688.556,1167.735 C-398.925,1482.874 -139.906,1235.432 -115.898,1040.448 C-91.891,845.463 42.695,803.563 95.851,754.793 C149.006,706.023 316.246,497.102 46.140,203.210 C-223.966,-90.683 -540.968,20.684 -540.968,20.684 Z"
							  class="cls-2"/>
					</svg>

					<svg
							style="top:;bottom:0px"
							id="svg-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							preserveAspectRatio="xMidYMid" width="446.28" height="1030.78" viewBox="0 0 446.28 1030.78">
						<defs>
							<filter id="gradient-overlay-3" filterUnits="userSpaceOnUse">
								<feImage x="0" y="0" width="1318.16" height="1030.7800000000002" preserveAspectRatio="none"
										 xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMTMxOC4xNiIgaGVpZ2h0PSIxMDMwLjc4MDAwMDAwMDAwMDIiPjxsaW5lYXJHcmFkaWVudCBpZD0iZ3JhZCIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIxNDMuNjkiIHgyPSIxMTc0LjQ3IiB5Mj0iMTAzMC43OCI+CiAgPHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjMDIyMjQzIi8+CiAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMDgzMjYwIi8+CjwvbGluZWFyR3JhZGllbnQ+CjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiLz48L3N2Zz4="/>
								<feComposite operator="in" in2="SourceGraphic"/>
								<feBlend in2="SourceGraphic" result="gradientFill"/>
							</filter>
						</defs>
						<path style="fill: #fad33c;"
							  d="M1299.583,301.566 C1299.583,301.566 1235.945,154.230 1147.697,145.545 C1059.449,136.859 1047.402,195.631 983.361,170.740 C919.320,145.850 910.260,71.319 827.122,49.594 C738.831,26.523 750.985,112.336 632.195,105.517 C513.405,98.698 474.127,-147.810 154.703,137.070 C-164.720,421.950 78.893,684.543 273.525,711.425 C468.157,738.308 508.066,873.470 556.051,927.329 C604.035,981.187 810.485,1151.462 1108.374,885.787 C1406.264,620.113 1299.583,301.566 1299.583,301.566 Z"
							  class="cls-3"/>
					</svg>
					<div class="container content-container">
						<div class="row">
							<div id="primary" class="content-area col-12">
								<main id="main" class="site-main">
									<div class="post-type-inner">
										<div class="post-type-content">
											<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="cms-service-menu  ">
																<div id="fr-service-menu"
																	 class="fr-accordion  ">
																	<div class="content">
																		@foreach($itemsList as $item)

																			<div class="card">
																				<div class="card-header" id="brand_{{ $item->id }}" {{--onclick="functionGetCat({{ $item->id }})--}}">
																				<a data-toggle="collapse" data-target="#collapse-fr-service-menu2_{{ $item->id }}"
																				   aria-expanded="false" aria-controls="collapse-2">
																					{{ $item->name }}
																					<i class="zmdi zmdi-chevron-down"></i>
																				</a>
																			</div>
																			@if($item->categories->count() > 0)
																				<div id="collapse-fr-service-menu2_{{ $item->id }}" class="collapse" aria-labelledby="heading-2" data-parent="#fr-service-menu">
																					<div class="card-body">
																						<ul class="ul-categories" {{--id="list_{{ $item->id }}"--}}>
																							@foreach($item->categories as $cat)
																								<li class="categories">
                                                                                            <span class="caret">
                                                                                                <a href="/prc/brand/{{$item->alias}}/{{$cat->alias}}">
                                                                                                    {{$cat->description->title}}
                                                                                                </a>
                                                                                            </span>
																									@if($cat->products->count() > 0)
																										<ul class="nested">
																											@foreach($cat->products as $product)
																												<li class="product">
																													<a href="/prc/product/{{$product->alias}}">
																														<span>{{$product->descriptions->first()->name}}</span></a>
																												</li>
																											@endforeach

																										</ul>
																									@endif
																								</li>
																							@endforeach

																						</ul>
																					</div>
																				</div>
																			@endif
																	</div>
																	@endforeach
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-md-8"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="cms-heading"
																																																								class="cms-heading  align-left align-left-md align-left-sm align-left-xs " >
																<h3 class="cms-heading-tag  " style="margin-bottom:20px;color:#083260;font-size:54px;letter-spacing:-.016em;text-transform:none;font-weight:400;font-style:normal;display:inline-block; " >
																	{!! sc_html_render(sc_link_content('sell-your-device-heading')) !!}</h3>

															</div>
															{!! sc_html_render(sc_link_content('sell-your-device-content')) !!}


															<div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="fr-fancybox-carousel" class="service-option-container  ">
																				<h3>Repair Services</h3>
																				<div class="service-options">
																					<div class="repair-carousel owl-carousel" data-item-xs=1 data-item-sm=2 data-item-md=3 data-item-lg=3 data-margin=30 data-loop=true data-autoplay=false data-autoplaytimeout=5000 data-smartspeed=250 data-center=false data-arrows=false data-bullets=true data-stagepadding=0 data-rtl=false >
																						@foreach($repairlist as $repair)
																							<div class="repair-item">
																								<div class="image-repair">
																									<a href="/showRepair/{{$repair->alias}}">
																										<img src="{{ $repair->image }}" alt="{{ $repair->title }}">
																									</a>
																								</div>
																								<h3>{{ $repair->title }}</h3>
																								<p class="content">{{ $repair->description }}</p>
																								<div class="meta">
																									{{ $repair->repair_price }}
																									<a href="/showRepair/{{$repair->alias}}">Choose Service</a>
																								</div>
																							</div>
																						@endforeach
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</main><!-- #main -->
							</div><!-- #primary -->
						</div>
					</div>
				</div><!-- #content inner -->
			</div><!-- #content -->


		@endsection

@section('afterBottom')
	<script src="{{ asset('admin/AdminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$('.menu-page-title').removeClass('page-title-non-bg');
			$('.menu-page-title').removeClass('transparent');
			$('.menu-page-title').addClass('has-page-title');
			$('body').addClass('single-services');

			var toggler = document.getElementsByClassName("caret");
			var i;

			for (i = 0; i < toggler.length; i++) {
				toggler[i].addEventListener("click", function() {
					this.parentElement.querySelector(".nested").classList.toggle("active");
					this.classList.toggle("caret-down");
				});
			}


		});

		function functionGetCat(id) {
			var ids = id;

			$.ajax({
				url: '/frontend/getCatByBrand/id?brandId=' + ids,
				crossDomain: true,
				dataType: 'json'
			}).done(function(b) {
				var list='';
				b.forEach(function(b) {
					list +=  '<li class="">';
					list +=  '<a href="/shop/c/'+b.brand.alias+'/'+b.alias+'" </a>';
					list +=  '<i class="zmdi zmdi-chevron-right"></i>';
					list +=  '<span>'+b.description.title+'</span></a></li>';
				});
				$('#list_'+ids).html('');
				$('#list_'+ids).append(list);
			});

		}
	</script>

@endsection