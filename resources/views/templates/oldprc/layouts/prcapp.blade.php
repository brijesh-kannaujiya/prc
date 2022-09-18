@php
    use Illuminate\Support\Facades\Route;
@endphp
@if (sc_config('SITE_STATUS') == 'off')
@include($templatePath . '.maintenance')
@else
<!DOCTYPE html>

<html lang="en-US">
<head>
<title>Phone Repair Shop &amp; Services | Phone Repair Centre</title>
<meta name="description"
	content="Looking for the best phone repair shop in Australia? Phone Repair Centre provide the best quality phone repair services at a very affordable price.">
<link rel="canonical" href="http://phonerepaircentre.com.au/">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title"
	content="Phone Repair Shop &amp; Services | Phone Repair Centre">
<meta property="og:description"
	content="Looking for the best phone repair shop in Australia? Phone Repair Centre provide the best quality phone repair services at a very affordable price.">
<meta property="og:url" content="http://phonerepaircentre.com.au/">
<meta property="og:site_name" content="PhoneRepairCenter">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:description"
	content="Looking for the best phone repair shop in Australia? Phone Repair Centre provide the best quality phone repair services at a very affordable price.">
<meta name="twitter:title"
	content="Phone Repair Shop &amp; Services | Phone Repair Centre">
<meta name="twitter:image"
	content="/prc/img/border.jpg">
{{--<script type="text/javascript" async=""
	src="/prc/js/analytics.js"></script>
<script type="text/javascript" async=""
	src="./prc/js"></script>
<script type="text/javascript" async=""
	src="./prc/f.txt"></script>--}}
<link rel="dns-prefetch" href="http://ajax.googleapis.com/">
<link rel="dns-prefetch" href="http://fonts.googleapis.com/">
{{--
<link rel="stylesheet" id="bxslider-style-css"
	href="/prc/css/jquery.bxslider-1.8.2.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}
<link rel="stylesheet" id="gs-main-style-css"
	href="/prc/css/gs-main-1.8.2.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
<link rel="stylesheet" id="vc_extend_shortcode-css"
	href="/prc/css/shortcodes.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
{{--
<link rel="stylesheet" id="vc_extend_style-css"
	href="/prc/css/shortcodes-3rd.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}
<link rel="stylesheet" id="bootstrap-css"
	href="/prc/css/bootstrap-1.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
{{--
<link rel="stylesheet" id="wp-block-library-css"
	href="/prc/css/style.min.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}
{{--
<link rel="stylesheet" id="wc-block-style-css"
	href="/prc/css/style-3.6.4.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}
{{--
<link rel="stylesheet" id="contact-form-7-css"
	href="/prc/css/styles-5.1.3.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}
{{--
<link rel="stylesheet" id="jquery-ui-theme-css"
	href="/prc/css/jquery-ui.min.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}
{{--
<link rel="stylesheet" id="jquery-ui-timepicker-css"
	href="/prc/css/jquery-ui-timepicker-addon.min.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}
{{--
<link rel="stylesheet" id="theme.css-css"
	href="/prc/css/theme-3.51.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}
{{--
<link rel="stylesheet" id="rs-plugin-settings-css"
	href="/prc/css/settings-5.4.7.4.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}

	{{--<link rel="stylesheet"
	href="/prc/css/custom2.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">--}}


{{--
<link rel="stylesheet" id="woocommerce-layout-css"
	href="/prc/css/woocommerce-layout-3.6.4.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}
{{--
<link rel="preload" id="woocommerce-smallscreen-css"
	href="/prc/css/woocommerce-smallscreen-3.6.4.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="only screen and (max-width: 768px)">
--}}
{{--
<link rel="stylesheet" id="woocommerce-general-css"
	href="/prc/css/woocommerce-3.6.4.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}
{{--
<style id="woocommerce-inline-inline-css" type="text/css">
.woocommerce form .form-row .required {
	visibility: visible
}
</style> 
--}}
<link rel="stylesheet" id="themesflat-main-css"
	href="/prc/css/main.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
<link rel="stylesheet" id="themesflat-style-css"
	href="/prc/css/style.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">

{{--
	<link rel="stylesheet"
	href="/prc/css/custom3.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}

<link rel="stylesheet" id="font-fontawesome-css"
	href="/prc/css/font-awesome.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
<link rel="stylesheet" id="font-ionicons-css"
	href="/prc/css/ionicons.min.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
{{--
<link rel="stylesheet" id="flexslider-css"
	href="/prc/css/flexslider.min-5.5.2.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
--}}

	{{--<link rel="stylesheet" id="vc_tta_style-css"
		href="/prc/css/js_composer_tta.min-5.5.2.css"
		as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
		type="text/css" media="all">
--}}

<!--[if lte IE 9]>
<link rel='preload' id='ie9-css'  href='http://phonerepaircentre.com.au/wp-content/themes/finance/prc/css/ie.css?ver=5.1.4' as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' /> <![endif]-->
<link rel="stylesheet" id="animate-css"
	href="/prc/css/animate.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
<link rel="stylesheet" id="responsive-css"
	href="/prc/css/responsive.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
<link rel="stylesheet" id="js_composer_front-css"
	href="/prc/css/js_composer_front_custom-5.5.2.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">
<!-- <script>if (document.location.protocol != "http:") {document.location = document.URL.replace(/^http:/i, "http:");}</script> -->
<script type="text/javascript"
	src="/prc/js/jquery-1.12.4.js"></script>
<script type="text/javascript"
	src="/prc/js/jquery-migrate.min-1.4.1.js"
	defer=""></script>
<script type="text/javascript">/* <![CDATA[ */ var sgpbPublicUrl = "http:\/\/phonerepaircentre.com.au\/wp-content\/plugins\/popup-builder\/public\/"; /* ]]> */</script>
<script type="text/javascript"
	src="/prc/js/Popup-3.51.js"
	defer=""></script>
<script type="text/javascript"
	src="/prc/js/PopupConfig-3.51.js"
	defer=""></script>

	<script type="text/javascript"
	src="/prc/js/custom.js"
	defer=""></script>

<script type="text/javascript"
	src="/prc/js/PopupBuilder-3.51.js"
	defer=""></script>
<script type="text/javascript"
	src="/prc/js/jquery.themepunch.tools.min-5.4.7.4.js"
	defer=""></script>
<script type="text/javascript"
	src="/prc/js/jquery.themepunch.revolution.min-5.4.7.4.js"
	defer=""></script>
<script type="text/javascript"
	src="/prc/js/isotope.min-1.js"
	defer=""></script>
<script type="text/javascript"
	src="/prc/js/imagesloaded.min-1.js"
	defer=""></script>
<script type="text/javascript"
	src="/prc/js/jquery.blockUI.min-2.70.js"
	defer=""></script>
<script type="text/javascript"
	src="/prc/js/add-to-cart.min-3.6.4.js"
	defer=""></script>
<script type="text/javascript"
	src="/prc/js/woocommerce-add-to-cart-5.5.2.js"
	defer=""></script>
<!-- <link rel="http://api.w.org/"
	href="http://phonerepaircentre.com.au/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD"
	href="http://phonerepaircentre.com.au/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml"
	href="http://phonerepaircentre.com.au/wp-includes/wlwmanifest.xml">
<meta name="generator" content="WordPress 5.1.4">
<meta name="generator" content="WooCommerce 3.6.4">
<link rel="shortlink" href="http://phonerepaircentre.com.au/"> -->
<!-- <style type="text/css">
.ae_data .elementor-editor-element-setting {
	display: none !important
}
</style> -->
<!-- <meta name="google-site-verification"
	content="mc0LpLSnLQt1LcAeIUE9VySQ1iK5m3SbYo58oINDFj8">
<noscript>
	<style>
.woocommerce-product-gallery {
	opacity: 1 !important
}
</style>
</noscript> -->
<link rel="icon"
	href="/prc/img/favicon_icon/favicon.png"
	sizes="32x32">
<link rel="icon"
	href="/prc/img/favicon_icon/favicon.png"
	sizes="192x192">
<link rel="apple-touch-icon-precomposed"
	href="/prc/img/favicon_icon/favicon.png">
<meta name="msapplication-TileImage"
	content="/prc/img/favicon_icon/favicon.png">


	<link rel="stylesheet" 
	href="/prc/css/custom4.css"
	as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;"
	type="text/css" media="all">



<script>/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
(function(w){
    "use strict";
    if(!w.loadCSS){
        w.loadCSS=function(){}
        }
var rp=loadCSS.relpreload={};
rp.support=(function(){
    var ret;
    try{ret=w.document.createElement("link").relList.supports("preload")}catch(e){ret=!1}
return function(){
    return ret
    }
    })();
    rp.bindMediaToggle=function(link){
        var finalMedia=link.media||"all";
        function enableStylesheet(){link.media=finalMedia}
if(link.addEventListener){
    link.addEventListener("load",enableStylesheet)
    }else if(link.attachEvent){
        link.attachEvent("onload",enableStylesheet)
        }
setTimeout(function(){
    link.rel="stylesheet";link.media="only x"
    });
    setTimeout(enableStylesheet,3000)
    };
    rp.poly=function(){
        if(rp.support()){
            return
            }
var links=w.document.getElementsByTagName("link");
for(var i=0;i<links.length;i++){
    var link=links[i];
    if(link.rel==="preload"&&link.getAttribute("as")==="style"&&!link.getAttribute("data-loadcss")){
        link.setAttribute("data-loadcss",!0);
        rp.bindMediaToggle(link)}}};
        if(!rp.support()){rp.poly();
        var run=w.setInterval(rp.poly,500);
        if(w.addEventListener){
            w.addEventListener("load",function(){
                rp.poly();w.clearInterval(run)
                })
                }else if(w.attachEvent){
                    w.attachEvent("onload",function(){
                        rp.poly();w.clearInterval(run)
                        })
                    }
                 }
if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}
else{w.loadCSS=loadCSS}}(typeof global!=="undefined"?global:this))</script>

@yield('pageScript')

</head>

<body data-rsssl="1"
	class="home page-template page-template-tpl page-template-front-page page-template-tplfront-page-php page page-id-5 woocommerce-js has-topbar header_sticky wide sidebar-left wpb-js-composer js-comp-ver-5.5.2 vc_responsive">
	
		<div class="themesflat-boxed">
            @include('templates.prc.includes.nav')

            
                @yield('content')
            
			@include('templates.prc.includes.footer')
        </div>
		@include('templates.prc.includes.bottom')
      @yield('afterBottom')
        
    </body>
</html>
@endif