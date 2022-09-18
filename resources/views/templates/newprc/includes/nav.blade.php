<div class="col-12 container top-header">
	<div class="row">
		<div class="col-6">
			<a href="#" class="logo"><img src="/newassets/images/Logo.png" alt=""></a>
		</div>
		<div class="col-6 icon">
			<i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;{{ $adminStore->phone }}
			&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;{{ $adminStore->email }}
		</div>
	</div>
</div>
<!-- ***** Header Area Start ***** -->

<header class="header-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav class="main-nav">

					<!-- ***** Menu Start ***** -->
					<ul class="nav">
						<li class="scroll-to-section"><a href="{{ ('/') }}" class="{{ !empty($home)?'active':'' }}">Home</a></li>
						<li class="scroll-to-section"><a href="{{   route('frontend.service') }}" class="{{ !empty($service)?'active':'' }}">Services</a></li>
						<li class="scroll-to-section"><a href="{{  route('frontend.repair') }}" class="{{ !empty($repair)?'active':'' }}">Repair</a></li>
						<li class="scroll-to-section"><a href="{{   route('frontend.casr') }}" class="{{ !empty($casr)?'active':'' }}">Corporate and School Repair</a></li>
						<li class="scroll-to-section"><a href="{{   route('frontend.b2b') }}" class="{{ !empty($b2b)?'active':'' }}">B2B Repairs</a></li>
						<li class="scroll-to-section"><a href="{{   route('frontend.aboutus') }}" class="{{ !empty($aboutus)?'active':'' }}">About Us</a></li>
						<li class="scroll-to-section"><a href="{{   route('frontend.contact') }}" class="{{ !empty($contact)?'active':'' }}">Contact Us</a></li>
						{{--<li class="scroll-to-section"><a href="{{ route('news') }}">{{ trans('front.blog') }}</a></li>--}}
						@if (!empty($layoutsUrl['menu']))
							@foreach ($layoutsUrl['menu'] as $url)
								<li class="scroll-to-section">
									<a {{ ($url->target =='_blank')?'target=_blank':''  }}
									href="{{ sc_url_render($url->url).'.html' }}">{{ ($url->name) }}</a>
								</li>
							@endforeach
						@endif
					</ul>
					<a class='menu-trigger'>
						<span>Menu</span>
					</a>
					<!-- ***** Menu End ***** -->
				</nav>
			</div>
		</div>
	</div>
</header>
<!-- ***** Header Area End ***** -->