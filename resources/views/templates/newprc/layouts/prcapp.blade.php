@php
    use Illuminate\Support\Facades\Route;
@endphp
@if (sc_config('SITE_STATUS') == 'off')
@include($templatePath . '.maintenance')
@else
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Template Mo">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

@yield('title')
	<!--

    ART FACTORY

    https://templatemo.com/tm-537-art-factory

    -->

	<link rel="icon" href="/prc/img/favicon_icon/favicon.png" sizes="32x32">
	<link rel="icon" href="/prc/img/favicon_icon/favicon.png" sizes="192x192">
	<link rel="apple-touch-icon-precomposed" href="/prc/img/favicon_icon/favicon.png">
	<!-- Additional CSS Files -->

	<link rel="stylesheet" type="text/css" href="/newassets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/newassets/gotham/gotham.css">
	<link rel="stylesheet" type="text/css" href="/newassets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/newassets/css/templatemo-art-factory.css">
	<link rel="stylesheet" type="text/css" href="/newassets/css/owl-carousel.css">
	<style>



		.active {
			color: red;
		}

		.leftbox {
			float: left;
			top: 15%;
			left: 3%;
			position: initial;
			width: 20%;
			height: 110%;
			background: $green;
			box-shadow: 3px 3px 10px rgba($gray, .5);
		}

		.leftbox nav a {
			list-style: none;
			padding: 10px;
			color: white;
			font-size: .8em;
			display: block;
			transition: all .3s ease-in-out;
		&:hover {
			 color: aqua;
			 transform: scale(1.2);
			 cursor: pointer;
		 }
		&:first-child {
			 margin-top: 7px;
		 }
		}

		.leftbox nav .active {
			color: gray;
			font-weight: bold;
			border: 1px;
			border-radius: 13px;
			background-color: #ceb807;
		}

		.rightbox {
			float: right;
			width: 50%;
			height: 100%;
		}

		.heading {
			float: left;
			width: 5%;
			height: 100%;
			color: #DFE0E1;
		}

		.wrapper {
			position: relative;
			width: 40px;
			height: 365px;

		}

		.line {
			position: absolute;
			left: 40%;
			top: 0;
			bottom: 0;
			width: 1px;
			background: #ccc;
			z-index: 1;
		}

		.wordwrapper {
			text-align: center;
			height: 100%;
			position: absolute;
			left: 0;
			right: 0;
			top: 27%;
			margin-top: -12px;
			z-index: 2;
			writing-mode: vertical-lr;
		}

		.word {
			color: #ccc;
			letter-spacing: 1px;
			padding: 3px;
			background: #fff;
		}

		.noshow {
			opacity: 0;
		}


		.settings h2{
			margin-top: 25px;
		}

		.mailinrepair, .macbookrepair, .laptoprepair, .motherboardrepair, .liquidrepair,.b2brepair,.idr,.accessories,.sbd,.phoneunlocking,.datarecovery,.gameconsole {
			transition: opacity .5s ease-in;
			position: absolute;
			width: 40%;
		}

	</style>

	<script src="/newassets/js/jquery-2.1.0.min.js"></script>

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
	<div class="jumper">
		<div></div>
		<div></div>
		<div></div>
	</div>
</div>
<!-- ***** Preloader End ***** -->
            @include($templatePath.'.includes.nav')

                @yield('content')
            
			@include($templatePath.'.includes.footer')
        </div>
		@include($templatePath.'.includes.bottom')
      @yield('afterBottom')
        
    </body>
</html>
@endif