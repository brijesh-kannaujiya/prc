<footer id="colophon" class="site-footer footer-layout1 ft-main-r"><div class="container">
		{{--<div class="top-footer">
			<div class="row">
				<div class="col-lg-7 text-center text-left-lg">
					<h3 class="ft-newsletter-heading footer-widget-title">Free Monthly Newsletter</h3>
					<p class="ft-newsletter-text">Subscribe to our newsletter for all the latest news and cool tips and tricks to keep your <br>
						mobile devices safe &amp; secure. We promise we never spam, and you can unsubscribe easily.</p>
				</div>
				<div class="col-lg-5 text-center text-right-lg">
					<form method="post" action="#" class="tnp-subscription" style="">
						<input type="hidden" name="nlang" value=""><div class="tnp-field tnp-field-email"><label for="tnp-email"></label>
							<input class="tnp-email" type="email" name="ne" value="" required></div>
						<div class="tnp-field tnp-field-button"><input class="tnp-button" type="submit" value="Subscribe"></div></form>     </div>
			</div>
		</div>--}}
		<div class="bottom-footer">
			<div class="row">
				<div class="cms-footer-item col-xl-4 col-lg-12 col-md-12 col-sm-12">
					<section id="media_image-2" class="widget widget_media_image">
						<img width="205" height="43" src="/prc/images/Logo.png" class="image wp-image-254  attachment-full size-full" alt="" loading="lazy" style="max-width: 100%; height: auto;">
					</section>
					<section id="text-2" class="widget widget_text">
						<div class="textwidget">
							<p>PRC repair all sorts of device at reasonable prices. Our customers can rely on us without second thoughts, as we do not compromise in the quality of our services.
							</p>
						</div>
					</section>
					<section id="cs_social_widget-3" class="widget widget_cs_social_widget">
						<ul class="cms-social">
							<li><a target="_blank" href="{{ $adminStore->facebook }}"><i class="zmdi zmdi-facebook"></i><span>Facebook</span></a></li>
							<li><a target="_blank" href="{{ $adminStore->twitter }}"><i class="zmdi zmdi-twitter"></i><span>Twitter</span></a></li>
							<li><a target="_blank" href="{{ $adminStore->instagram }}"><i class="zmdi zmdi-instagram"></i><span>Google+</span></a></li>
							<li><a target="_blank" href="{{ $adminStore->youtube }}"><i class="zmdi zmdi-youtube"></i><span>Linkedin</span></a></li>
						</ul>
					</section>
				</div>
				<div class="cms-footer-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
					<section id="nav_menu-2" class="widget widget_nav_menu">
						<h2 class="footer-widget-title">Quick Link</h2>
						<div class="menu-pages-container">
							<ul id="menu-pages" class="menu">
								@if (!empty($layoutsUrlFooter['footer-1']))
									@foreach ($layoutsUrlFooter['footer-1'] as $url)
										<li id="menu-item-759" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-759">
											<a {{ ($url->target =='_blank')?'target=_blank':''  }}
											   href="{{ sc_url_render($url->url) }}">{{$url->name}}</a>
										</li>
									@endforeach
								@endif
								{{--<li id="menu-item-757" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-30 current_page_item menu-item-757"><a href="/home" aria-current="page">Home</a></li>
								<li id="menu-item-759" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-759"><a
											href="{{   route('frontend.aboutus') }}">About Us</a></li>
								<li id="menu-item-760" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-760"><a
											href="{{   route('frontend.contact') }}">Contact</a></li>
								<li id="menu-item-758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-758"><a
											href="{{   route('product.showbrand') }}">Repair</a></li>
								--}}{{--<li id="menu-item-761" class="menu-item menu-item-type-post_type menu-item-object-services menu-item-761"><a
											href="{{   route('frontend.casr') }}">Corporate
										and School Repair</a></li>--}}{{--
								<li id="menu-item-762" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-762"><a
											href="{{   route('service-insurance') }}">Insurance
										Diagnose Report</a></li>
								<li id="menu-item-762" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-762"><a
											href="{{   route('sellyour-device') }}">Sell
										Broken Device</a></li>--}}
							</ul>
						</div>
					</section>
				</div>
				<div class="cms-footer-item col-xl-3 col-lg-4 col-md-6 col-sm-6">
					<section id="nav_menu-3" class="widget widget_nav_menu">
						<h2 class="footer-widget-title">Services</h2>
						<div class="menu-services-container">
							<ul id="menu-services" class="menu">
								@if (!empty($layoutsUrlFooter['footer-2']))
									@foreach ($layoutsUrlFooter['footer-2'] as $url)
										<li id="menu-item-759" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-759">
											<a {{ ($url->target =='_blank')?'target=_blank':''  }}
											   href="{{ sc_url_render($url->url) }}">{{$url->name}}</a>
										</li>
									@endforeach
								@endif
								{{--<li id="menu-item-764" class="menu-item menu-item-type-taxonomy menu-item-object-service-type menu-item-764"><a
											href="{{   route('mackbook-repairs') }}">Macbook</a></li>
								<li id="menu-item-768" class="menu-item menu-item-type-taxonomy menu-item-object-service-type menu-item-768"><a
											href="{{   route('data-recovery') }}">Data Recovery</a></li>
								<li id="menu-item-763" class="menu-item menu-item-type-taxonomy menu-item-object-service-type menu-item-763"><a
											href="{{   route('b2b-repairs') }}">B2B	Repair</a></li>
								<li id="menu-item-765" class="menu-item menu-item-type-taxonomy menu-item-object-service-type menu-item-765"><a
											href="{{   route('motherboard-repair') }}">Motherboard Repair</a></li>
								<li id="menu-item-767" class="menu-item menu-item-type-taxonomy menu-item-object-service-type menu-item-767"><a
											href="{{   route('liquid-damage') }}">Liquid
										Damage</a></li>
								<li id="menu-item-766" class="menu-item menu-item-type-taxonomy menu-item-object-service-type menu-item-766"><a
											href="{{   route('gaming-console-repair') }}">Game
										Console</a></li>
								<li id="menu-item-766" class="menu-item menu-item-type-taxonomy menu-item-object-service-type menu-item-766"><a
											href="{{   route('mail-in-repairs') }}">Main-In
										Repairs</a></li>--}}
							</ul>
						</div>
					</section>
				</div>
				<div class="cms-footer-item col-xl-2 col-lg-4 col-md-6 col-sm-12 no-padding">
					<section id="cs_contact_info-2" class="widget widget_cs_contact_info">
						<h2 class="footer-widget-title">Contact</h2>
						<div class="footer-quick-contact">
							<ul>
								<li class="clearfix">Phone: <a href="tel:{{ $adminStore->phone }}">{{ $adminStore->phone }}</a>
								</li>
								<li class="clearfix mail-to">Email: <a href="mailto:{{ $adminStore->email }}">{{ $adminStore->email }}</a></li>
								<li class="clearfix">Find Us: <a href="#" target="_blank">{{ $adminStore->address }}</a></li>
							</ul>
						</div>
					</section>
				</div>
			</div>
			<div class="row">
				<div class="bottom-col1  text-left-lg text-center text-copy-right">
					<p>PhoneRepairCentre  Copyright &copy; 2020. All Rights Reserved  </p>    </div>
			</div>
		</div>
	</div>
</footer><a href="#" class="scroll-top"><i class="zmdi zmdi-long-arrow-up"></i></a>