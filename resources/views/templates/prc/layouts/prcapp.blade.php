@php
use Illuminate\Support\Facades\Route;
@endphp
@if (sc_config('SITE_STATUS') == 'off')
@include($templatePath . '.maintenance')
@else
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png" sizes="16x16">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	@yield('title')
	<link rel="dns-prefetch" href="//code.jquery.com">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//s.w.org">
	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "/prc/js/wp-emoji-release.min.js"
			}
		};
		! function(e, a, t) {
			var r, n, o, i, p = a.createElement("canvas"),
				s = p.getContext && p.getContext("2d");

			function c(e, t) {
				var a = String.fromCharCode;
				s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
				var r = p.toDataURL();
				return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
			}

			function l(e) {
				if (!s || !s.fillText) return !1;
				switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
					case "flag":
						return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]));
					case "emoji":
						return !c([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
				}
				return !1
			}

			function d(e) {
				var t = a.createElement("script");
				t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
			}
			for (i = Array("flag", "emoji"), t.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]);
			t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
				t.DOMReady = !0
			}, t.supports.everything || (n = function() {
				t.readyCallback()
			}, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
				"complete" === a.readyState && t.readyCallback()
			})), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="acm-admin-css-css" href="/prc/css/css-acm-admin.css" type="text/css" media="all">
	<link rel="stylesheet" id="tekhfixers-admin-style-css" href="/prc/css/css-admin.css" type="text/css" media="all">
	<link rel="stylesheet" id="modal-css" href="/prc/css/css-modal.css" type="text/css" media="all">
	<link rel="stylesheet" id="font-material-icon-css" href="/prc/css/css-material-design-iconic-font.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="wp-block-library-css" href="/prc/css/block-library-style.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="wc-block-vendors-style-css" href="/prc/css/build-vendors-style.css" type="text/css" media="all">
	<link rel="stylesheet" id="wc-block-style-css" href="/prc/css/build-style.css" type="text/css" media="all">
	<link rel="stylesheet" id="cms-plugin-stylesheet-css" href="/prc/css/css-cms-style.css" type="text/css" media="all">
	<link property="stylesheet" rel="stylesheet" id="owl-carousel-css" href="/prc/css/css-owl.carousel.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="contact-form-7-css" href="/prc/css/css-styles.css" type="text/css" media="all">
	<link rel="stylesheet" id="swadmb-front.css-css" href="/prc/css/css-swadmb-front.css" type="text/css" media="all">
	<link rel="stylesheet" id="acm-jquery-ui-date-range-css-css" href="/prc/css/css-jquery-ui.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="acm-front-css-css" href="/prc/css/css-acm-front.css" type="text/css" media="all">
	<link rel="stylesheet" id="countrySelect.min.css-css" href="/prc/css/css-countrySelect.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="timetable_sf_style-css" href="/prc/css/style-superfish.css" type="text/css" media="all">
	<link rel="stylesheet" id="timetable_style-css" href="/prc/css/style-style.css" type="text/css" media="all">
	<link rel="stylesheet" id="timetable_event_template-css" href="/prc/css/style-event_template.css" type="text/css" media="all">
	<link rel="stylesheet" id="timetable_responsive_style-css" href="/prc/css/style-responsive.css" type="text/css" media="all">
	<link rel="stylesheet" id="timetable_font_lato-css" href="//fonts.googleapis.com/css?family=Lato%3A400%2C700&amp;ver=5.5.3" type="text/css" media="all">
	<link rel="stylesheet" id="woocommerce-layout-css" href="/prc/css/css-woocommerce-layout.css" type="text/css" media="all">
	<link rel="stylesheet" id="woocommerce-smallscreen-css" href="/prc/css/css-woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)">
	<link rel="stylesheet" id="woocommerce-general-css" href="/prc/css/css-woocommerce.css" type="text/css" media="all">
	<style id="woocommerce-inline-inline-css" type="text/css">
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel="stylesheet" id="bootstrap-css" href="/prc/css/css-bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="font-awesome-css" href="/prc/css/css-font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="magnific-popup-css" href="/prc/css/css-magnific-popup.css" type="text/css" media="all">
	<link rel="stylesheet" id="tekhfixers-theme-css" href="/prc/css/css-theme.css" type="text/css" media="all">
	<style id="tekhfixers-theme-inline-css" type="text/css">
		@media screen and(max-width:991px) {}

		

		.primary-menu>li.current_page_item>a,
		.primary-menu>li.current-menu-item>a,
		.primary-menu>li.current_page_ancestor>a,
		.primary-menu>li.current-menu-ancestor>a {
			color: #32eb9a
		}

		 

		#site-header-wrap.header-layout .headroom--pinned:not(.headroom--top) .primary-menu>li.current_page_item>a,
		.headroom--pinned:not(.headroom--top) .primary-menu>li.current-menu-item>a,
		.headroom--pinned:not(.headroom--top) .primary-menu>li.current_page_ancestor>a,
		.headroom--pinned:not(.headroom--top) .primary-menu>li.current-menu-ancestor>a {
			color: #32eb9a !important
		}

		@media screen and(max-width:991px) {
			body #pagetitle {
				padding-top: 16px;
				padding-bottom: 46px
			}
		}

		@media screen and(min-width:1280px) {
			.content-row {
				margin-left: -25px
			}

			.content-row {
				margin-right: -25px
			}

			.content-row #primary,
			.content-row #secondary {
				padding-left: 25px !important
			}

			.content-row #primary,
			.content-row #secondary {
				padding-right: 25px !important
			}
		}

		@media screen and(min-width:992px) {}

		.site-footer {
			background: #022243;
			background: -moz-linear-gradient(to right, #fad33c, #fad33c);
			background: -webkit-linear-gradient(to right, #fad33c, #fad33c);
			background: -o-linear-gradient(to right, #fad33c, #fad33c);
			background: -ms-linear-gradient(to right, #fad33c, #fad33c);
			background: linear-gradient(to right, #fad33c, #fad33c);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#022243", endColorstr="#083260", GradientType=0)
		}
	</style>
	<link rel="stylesheet" id="tekhfixers-video-popup-css" href="/prc/css/css-YouTubePopUp.css" type="text/css" media="all">
	<link rel="stylesheet" id="tekhfixers-style-css" href="/prc/css/tekhfixers-style.css" type="text/css" media="all">
	<link rel="stylesheet" id="tekhfixers-google-fonts-css" href="https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900&amp;subset=latin%2Clatin-ext&amp;ver=5.5.3" type="text/css" media="all">
	<link rel="stylesheet" id="newsletter-css" href="/prc/css/newsletter-style.css" type="text/css" media="all">
	<link rel="stylesheet" id="tawcvs-frontend-css" href="/prc/css/css-frontend.css" type="text/css" media="all">
	<link rel="stylesheet" id="js_composer_front-css" href="/prc/css/css-js_composer.min.css" type="text/css" media="all">
	@yield('customstyle')

	<script type="text/javascript" src="/prc/js/jquery-jquery.js" id="jquery-core-js"></script>
	<script type="text/javascript" src="/prc/js/js-jquery-ui.min.js" id="acm-jquery-ui-js-js"></script>
	<script type="text/javascript" src="/prc/js/jquery-blockui-jquery.blockUI.min.js" id="jquery-blockui-js"></script>

	<script type="text/javascript" src="/prc/js/frontend-add-to-cart.min.js" id="wc-add-to-cart-js"></script>
	<script type="text/javascript" src="/prc/js/vendors-woocommerce-add-to-cart.js" id="vc_woocommerce-add-to-cart-js-js"></script>
	<script type="text/javascript" src="/prc/js/js-owl.carousel.min.js" id="owl-carousel-js"></script>
	<meta name="generator" content="WordPress 5.5.3">
	<meta name="generator" content="WooCommerce 4.6.2">
	<meta name="framework" content="Redux 4.1.23">
</head>

<body>

	<div id="wp-theme-tekhfixers" style="display:none;"></div>
	<noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
	<style id="cms_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">
		body .primary-menu>li>a,
		body .primary-menu .sub-menu li a {
			font-display: swap;
		}

		.site-footer {}

		.site-footer .bottom-footer .footer-widget-title,
		.site-footer .top-footer .footer-widget-title {
			font-display: swap;
		}

		a {
			color: #325130;
		}

		a:hover {
			color: #27e491;
		}

		a:active {
			color: #27e491;
		}

		body {
			font-display: swap;
		}

		h1,
		.h1,
		.text-heading {
			font-display: swap;
		}

		h2,
		.h2 {
			font-display: swap;
		}

		h3,
		.h3 {
			font-display: swap;
		}

		h4,
		.h4 {
			font-display: swap;
		}

		h5,
		.h5 {
			font-display: swap;
		}

		h6,
		.h6 {
			font-display: swap;
		}
	</style>
	<style id="cms-page-dynamic-css" data-type="redux-output-css">
		body #page {
			background-color: #fcfcfc;
		}

		#content {
			padding-top: 0px;
			padding-bottom: 98px;
		}

		footer.site-footer {}
	</style>
	<style type="text/css" data-type="vc_shortcodes-custom-css">
		.vc_custom_1548666921886 {
			margin-top: 62px !important;
		}

		.vc_custom_1536051606545 {
			margin-top: 100px !important;
		}

		.vc_custom_1548834082409 {
			margin-top: -85px !important;
			background-image: url(/prc/images/Rounded-Rectangle-28.png) !important;
			background-position: center !important;
			background-repeat: no-repeat !important;
			background-size: cover !important;
		}

		.vc_custom_1548661163582 {
			padding-bottom: 70px !important;
		}

		.vc_custom_1544155726138 {
			padding-top: 70px !important;
			padding-bottom: 70px !important;
		}

		.vc_custom_1548661452955 {
			margin-top: -37px !important;
		}

		.vc_custom_1538558312795 {
			margin-bottom: 20px !important;
			padding-right: 0px !important;
		}

		.vc_custom_1548833688779 {
			padding-top: 8px !important;
		}

		.vc_custom_1548659399614 {
			padding-bottom: 17px !important;
		}

		.vc_custom_1548659559106 {
			padding-top: 8px !important;
		}

		.vc_custom_1538550292798 {
			margin-bottom: 100px !important;
		}

		.vc_custom_1548661147937 {
			/*margin-top: 83px !important;padding-top: 80px !important;padding-bottom: 76px !important;*/
			background-position: center !important;
			background-repeat: no-repeat !important;
			background-size: contain !important;
		}
	</style>
	<noscript>
		<style>
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>

	<div id="page" class="site">
		<div id="cms-loadding" class="cms-loader">
			<div class="loading-spin">
				<div class="spinner">
					<div class="right-side">
						<div class="bar"></div>
					</div>
					<div class="left-side">
						<div class="bar"></div>
					</div>
				</div>
				<div class="spinner color-2" style="">
					<div class="right-side">
						<div class="bar"></div>
					</div>
					<div class="left-side">
						<div class="bar"></div>
					</div>
				</div>
			</div>
		</div>



		@include($templatePath.'.includes.nav')
		@yield('content')
		@include($templatePath.'.includes.footer')
	</div>

	@stack('js')

	@include($templatePath.'.includes.bottom')
	@yield('afterBottom')
	<script src="//code.tidio.co/f7nkxcxuxboblnpzv82kzr1wjh6ih4fl.js" async></script>
</body>
<!-- Messenger Chat plugin Code -->
<!--    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>


 

<script>
	var chatbox = document.getElementById('fb-customer-chat');
	chatbox.setAttribute("page_id", "1577211032493893");
	chatbox.setAttribute("attribution", "biz_inbox");
</script>

<script>
	$ = jQuery;
	var browseFaultsEL = $('#browse-faults');
	var browseCatEl = $('.browser-faults-float-btn');
	var browseFaultsELOffset = browseFaultsEL.offset().top + 100;
	var footerEl = $('footer#colophon');
	$(window).on('scroll', function() {
		if (!browseFaultsEL.length) {
			return;
		}
		if (window.matchMedia("(max-width: 991px)").matches) {
			var windowTop = $(window).scrollTop();
			if (windowTop >= footerEl.offset().top - window.innerHeight) {
				browseCatEl.fadeOut();
				return;
			}
			if (windowTop >= browseFaultsELOffset) {
				browseCatEl.fadeIn();
			} else {
				browseCatEl.fadeOut();
			}
		} else {
			return;
		}
	});
</script>

<!-- Your SDK code -->
<!--   <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v13.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script> -->

</html>
@endif