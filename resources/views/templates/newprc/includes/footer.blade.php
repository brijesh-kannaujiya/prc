<!-- ***** Footer Start ***** -->
<footer>
	<div class="container">
		<div class="col-12">
			<a href="#" class="footerlogo"><img src="/newassets/images/Logo.png" alt=""></a>
		</div>
		<hr>
		<div class="row">
			<div class="col-lg-3 col-md-12 col-sm-1">
				<p class="text">
					Address:<br> 122 Queen Street, St Marys. NSW-2760
				</p>
				<p>
					Email:<br> info@phonerepaircentre.com.au
				</p>
				<p class="desc">
					Store Timing:<br> Monday – Friday: 9:00AM-5:30PM<br>
					Sat-10AM-4PM<br> Sunday Closed
				</p>
				<p>
					Phone Number:<br> <a href="tel:0286783298">02 86783298</a>
				</p>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12">
				<h4>Quick Links</h4>
				<ul id="menu-footer" class="menu">
					<li><a href="{{   route('frontend.aboutus') }}">About Us</a></li>
					<li><a href="{{   route('frontend.contact') }}">Contact</a></li>
					<li><a href="{{   route('frontend.service') }}">Services</a></li>
					<li><a href="{{   route('frontend.repair') }}">Repair</a></li>
					<li><a href="{{   route('frontend.casr') }}">Corporate and School Repair</a></li>
					<li><a href="{{   route('frontend.service') }}">Insurance Diagnose Report</a></li>
					<li><a href="{{   route('frontend.service') }}">Accessories</a></li>
					<li><a href="{{   route('frontend.service') }}">Sell Broken Device</a></li>
					<li><a href="/#">Terms Conditions</a></li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-12 col-sm-12">
				<h4>Repair Services</h4>
				<ul>
					<li><a href="{{   route('frontend.service') }}">Macbook</a></li>
					<li><a href="{{   route('frontend.service') }}">Data	Recovery</a></li>
					<li><a href="{{   route('frontend.b2b') }}">B2B Repair</a></li>
					<li><a href="{{   route('frontend.service') }}">Motherboard Repair</a></li>
					<li><a href="{{   route('frontend.service') }}">Liquid Damage</a></li>
					<li><a href="{{   route('frontend.service') }}">Game Console</a></li>
					<li><a href="{{   route('frontend.service') }}">Main-In Repairs</a></li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-12 col-sm-12">
				<h4>Information</h4>
				<ul id="menu-main-1" class="menu widget-links">
					<li><a href="/#">Find A Store</a></li>
					<li><a href="{{   route('frontend.contact') }}">Locations</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="{{   route('admin.login') }}">Login</a></li>
				</ul>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<hr>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="social">
					<li><a href="{{ $adminStore->facebook }}"><img src="/newassets/images/FAcebook.png" alt=""></a></li>
					<li><a href="{{ $adminStore->instagram }}"><img src="/newassets/images/Instaa.png" alt=""></a></li>
					<li><a href="{{ $adminStore->twitter }}"><img src="/newassets/images/Twitter.png" alt=""></a></li>
					<li><a href="{{ $adminStore->amazone }}"><img src="/newassets/images/Amazone.png" alt=""></a></li>
					<li><a href="{{ $adminStore->ebay }}"><img src="/newassets/images/Ebay.png" alt=""></a></li>
				</ul>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p class="copyright"><a rel="nofollow" href="#">PhoneRepairCenter</a> &copy; 2019. All Rights	Reserved. </p>
			</div>

		</div>
	</div>
</footer>