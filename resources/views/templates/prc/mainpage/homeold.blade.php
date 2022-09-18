@extends('templates.prc.layouts.prcapp')
@section('title')
    <title>Phone Repair Shop &amp; Services | Phone Repair Centre</title>
@endsection

@section('customstyle')
    <style type="text/css">
        #loadMore {
            padding-bottom: 30px;
            padding-top: 30px;
            text-align: center;
            width: 100%;
        }
        #loadMore a {
            background: #042a63;
            border-radius: 3px;
            color: white;
            display: inline-block;
            padding: 10px 30px;
            transition: all 0.25s ease-out;
            -webkit-font-smoothing: antialiased;
        }
        #loadMore a:hover {
            background-color: #021737;
        }
    </style>
    <style id="cms_theme_options-dynamic-css" title="dynamic-css"
           class="redux-options-output">
        body .primary-menu>li>a, body .primary-menu .sub-menu li a {
            font-display: swap;
        }

        .site-footer {

        }

        .site-footer .bottom-footer .footer-widget-title, .site-footer .top-footer .footer-widget-title
        {
            font-display: swap;
        }

        a {
            color: #b3bec8;
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

        h1, .h1, .text-heading {
            font-display: swap;
        }

        h2, .h2 {
            font-display: swap;
        }

        h3, .h3 {
            font-display: swap;
        }

        h4, .h4 {
            font-display: swap;
        }

        h5, .h5 {
            font-display: swap;
        }

        h6, .h6 {
            font-display: swap;
        }
    </style>
    <style id="cms-page-dynamic-css" data-type="redux-output-css">
        #content {
            padding-top: 0px;
            padding-bottom: 0px;
        }

        footer.site-footer {

        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1548410731346 {
            border-bottom-width: 1px !important;
            padding-top: 25px !important;
            padding-bottom: 17px !important;
            background-color: #f6f6f6 !important;
            border-bottom-color: #e3e6ea !important;
            border-bottom-style: solid !important;
        }

        .vc_custom_1548411297501 {
            /*margin-top: 70px !important;*/
            margin-bottom: 70px !important;
            padding-top: 40px !important;
            padding-bottom: 45px !important;
        }

        .vc_custom_1548411424106 {
            /*margin-top: 66px !important;*/
            margin-bottom: 66px !important;
        }

        .vc_custom_1548176129188 {
            margin-bottom: 10px !important;
        }

        .vc_custom_1548412273834 {
            /*padding-top: 74px !important;*/
            padding-bottom: 69px !important;
        }

        .vc_custom_1548413243634 {
            margin-top: 6px !important;
            margin-bottom: 100px !important;
        }

        .vc_custom_1548413422387 {
            margin-bottom: 107px !important;
            padding-top: 6px !important;
        }

        .vc_custom_1542788902174 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1542788918496 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1542788928599 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1548240256561 {
            padding-top: 85px !important;
        }

        .vc_custom_1548410880587 {
            padding-top: 1px !important;
        }

        .vc_custom_1547524006290 {
            margin-top: 30px !important;
        }

        .vc_custom_1547524014771 {
            margin-top: -5px !important;
        }

        .vc_custom_1548411031388 {
            padding-top: 20px !important;
        }

        .vc_custom_1548668925244 {
            margin-top: -4px !important;
        }

        .vc_custom_1548295976419 {
            border-bottom-width: 30px !important;
        }

        .vc_custom_1548411097022 {
            margin-top: 32px !important;
        }

        .vc_custom_1547525343455 {
            margin-top: -5px !important;
        }

        .vc_custom_1547533039640 {
            margin-top: 50px !important;
        }

        .vc_custom_1547538666554 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1547538678230 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1547538684623 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1548411966083 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1547537702762 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1548412068344 {
            padding-top: 3px !important;
        }

        .vc_custom_1547537698645 {
            margin-bottom: 30px !important;
        }

        .vc_custom_1548412075083 {
            padding-top: 3px !important;
        }
    </style>
    <style id="cms_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">body .primary-menu > li > a, body .primary-menu .sub-menu li a{font-display:swap;}.site-footer{}.site-footer .bottom-footer .footer-widget-title,.site-footer .top-footer .footer-widget-title{font-display:swap;}a{color:#b3bec8;}a:hover{color:#27e491;}a:active{color:#27e491;}body{font-display:swap;}h1,.h1,.text-heading{font-display:swap;}h2,.h2{font-display:swap;}h3,.h3{font-display:swap;}h4,.h4{font-display:swap;}h5,.h5{font-display:swap;}h6,.h6{font-display:swap;}</style><style id="cms-page-dynamic-css" data-type="redux-output-css">#content{padding-top:0px;padding-bottom:98px;}footer.site-footer{}</style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1549883619914{padding-bottom: 10px !important;background-image: url(/prc/images/slide-header.jpg) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1536051606545{margin-top: 100px !important;}.vc_custom_1548662727621{margin-top: -85px !important;background-image: url(/prc/images/Rounded-Rectangle-28.png) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1544155523770{padding-top: 28px !important;padding-bottom: 70px !important;}.vc_custom_1544155726138{padding-top: 70px !important;padding-bottom: 70px !important;}.vc_custom_1548662119899{padding-top: 33px !important;}.vc_custom_1548835350924{margin-top: -8px !important;margin-bottom: -160px !important;padding-top: 0px !important;}.vc_custom_1538558312795{margin-bottom: 20px !important;padding-right: 0px !important;}.vc_custom_1548833661053{padding-top: 8px !important;}.vc_custom_1548662514192{padding-bottom: 17px !important;}.vc_custom_1548662602584{padding-top: 6px !important;}.vc_custom_1538550292798{margin-bottom: 100px !important;}.vc_custom_1548663507510{margin-top: 83px !important;padding-top: 80px !important;padding-bottom: 48px !important;background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}</style>
    @endsection
    @section('content')
    </div>
    </div>
    <div id="content" class="site-content">
        <div class="content-inner">
            <svg style="fill: #002933; top:1080px;bottom:" id="svg-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveaspectratio="xMidYMid" width="195.875" height="1318.28" viewbox="0 0 195.875 1318.28">
                <defs>
                    <filter id="gradient-overlay-2" filterunits="userSpaceOnUse">
                        <feimage x="-829.406" y="0" width="1025.281" height="1318.2800000000002" preserveaspectratio="none" xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMTAyNS4yODEiIGhlaWdodD0iMTMxOC4yODAwMDAwMDAwMDAyIj48bGluZWFyR3JhZGllbnQgaWQ9ImdyYWQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB5MT0iMTQ2LjUiIHgyPSIxMDI1LjI4IiB5Mj0iMTE3MS43OCI+CiAgPHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjMWJkZDg4Ii8+CiAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMzJlYjlhIi8+CjwvbGluZWFyR3JhZGllbnQ+CjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiLz48L3N2Zz4="></feimage>
                        <fecomposite operator="in" in2="SourceGraphic"></fecomposite>
                        <feblend in2="SourceGraphic" result="gradientFill"></feblend>
                    </filter>
                </defs>
                <path style="fill: #FAD33C" d="M-540.968,20.684 C-540.968,20.684 -687.378,86.487 -694.760,174.843 C-702.142,263.200 -643.186,274.374 -667.132,338.769 C-691.079,403.164 -765.483,413.324 -785.981,496.763 C-807.750,585.376 -722.107,571.956 -727.171,690.819 C-732.235,809.683 -978.187,852.597 -688.556,1167.735 C-398.925,1482.874 -139.906,1235.432 -115.898,1040.448 C-91.891,845.463 42.695,803.563 95.851,754.793 C149.006,706.023 316.246,497.102 46.140,203.210 C-223.966,-90.683 -540.968,20.684 -540.968,20.684 Z" class="cls-2"></path></svg>
            <svg style="top:;bottom:350px" id="svg-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveaspectratio="xMidYMid" width="446.28" height="1030.78" viewbox="0 0 446.28 1030.78"><defs>
                    <filter id="gradient-overlay-3" filterunits="userSpaceOnUse">
                        <feimage x="0" y="0" width="1318.16" height="1030.7800000000002" preserveaspectratio="none" xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMTMxOC4xNiIgaGVpZ2h0PSIxMDMwLjc4MDAwMDAwMDAwMDIiPjxsaW5lYXJHcmFkaWVudCBpZD0iZ3JhZCIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIxNDMuNjkiIHgyPSIxMTc0LjQ3IiB5Mj0iMTAzMC43OCI+CiAgPHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjMDIyMjQzIi8+CiAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMDgzMjYwIi8+CjwvbGluZWFyR3JhZGllbnQ+CjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiLz48L3N2Zz4="></feimage>
                        <fecomposite operator="in" in2="SourceGraphic"></fecomposite>
                        <feblend in2="SourceGraphic" result="gradientFill"></feblend></filter>
                </defs>
                <path style="fill: #FAD33C;" d="M1299.583,301.566 C1299.583,301.566 1235.945,154.230 1147.697,145.545 C1059.449,136.859 1047.402,195.631 983.361,170.740 C919.320,145.850 910.260,71.319 827.122,49.594 C738.831,26.523 750.985,112.336 632.195,105.517 C513.405,98.698 474.127,-147.810 154.703,137.070 C-164.720,421.950 78.893,684.543 273.525,711.425 C468.157,738.308 508.066,873.470 556.051,927.329 C604.035,981.187 810.485,1151.462 1108.374,885.787 C1406.264,620.113 1299.583,301.566 1299.583,301.566 Z" class="cls-3"></path></svg><div class="container content-container">
                <div class="row content-row">
                    <div id="primary" class="content-area content-full-width col-12">
                        <main id="main" class="site-main">
                            <article id="post-30" class="post-30 page type-page status-publish hentry">
                                <div class="entry-content clearfix">
                                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid header-hero vc_custom_1549883619914 vc_row-has-fill bg-primary rm-padding-right off-overflow">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                            <div class="vc_column-inner vc_custom_1548662119899">
                                                <div class="wpb_wrapper">
                                                    <div id="cms-heading" class="cms-heading layout2  align-left align-left-md align-left-sm align-left-xs  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown" >
                                                        <h3 class="title  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown" >
                                                            {!! sc_html_render(sc_link_content('home-heading-1')) !!}
                                                           </h3>
                                                        <p class="subtitle  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown" >{!! sc_html_render(sc_link_content('home-subheading-1')) !!}</p>
                                                        <a  href="{{   route('product.showbrand') }}" target="_self"  class="btn btn-default size-default  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown">
                                                            <span>Fix my Device   <i class="fa fa-angle-right"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs">
                                            <div class="vc_column-inner vc_custom_1548835350924">
                                                <div class="wpb_wrapper">
                                                    <div  class="wpb_single_image wpb_content_element vc_align_left  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown hover-parallax">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper hover-parallax  vc_box_border_grey"><img width="604" height="737" src="/prc/images/iPhone-X.png" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="/prc/images/iPhone-X.png 604w, /prc/images/iPhone-X-600x732.png 600w" sizes="(max-width: 604px) 100vw, 604px" /></div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="5fd568fa391f2">
                                                        <style type="text/css">
                                                            fr-service-carousel-default .owl-stage .owl-item {
                                                                max-width: 320.75px !important;
                                                            }
                                                            @media screen and (min-width: 992px) {
                                                                #fr-space-5fd568fa391f2 .fr-space {
                                                                    height: 50px;
                                                                }
                                                            }


                                                            @media (min-width: 768px) and (max-width: 991px) {
                                                                #fr-space-5fd568fa391f2 .fr-space {
                                                                    height: 25px;
                                                                }
                                                            }

                                                            @media (min-width: 576px) and (max-width: 767px) {
                                                                #fr-space-5fd568fa391f2 .fr-space {
                                                                    height: 10px;
                                                                }
                                                            }

                                                            @media screen and (max-width: 575px) {
                                                                #fr-space-5fd568fa391f2 .fr-space {
                                                                    height: 10px;
                                                                }
                                                            }

                                                        </style>
                                                        <div class="fr-space"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @php
                                        $banners = $modelBanner->start()->getBanner()->getData()
                                    @endphp
                                    <style>
                                        * {box-sizing:border-box}

                                        /* Slideshow container */
                                        .slideshow-container {
                                            max-width: 1280px;
                                            position: relative;
                                            margin: auto;
                                        }

                                        /* Hide the images by default */
                                        .mySlides {
                                            display: none;
                                        }

                                        /* Next & previous buttons */
                                        .prev, .next {
                                            cursor: pointer;
                                            position: absolute;
                                            top: 50%;
                                            width: auto;
                                            margin-top: -22px;
                                            padding: 16px;
                                            color: white;
                                            font-weight: bold;
                                            font-size: 18px;
                                            transition: 0.6s ease;
                                            border-radius: 0 3px 3px 0;
                                            user-select: none;
                                        }

                                        /* Position the "next button" to the right */
                                        .next {
                                            right: 0;
                                            border-radius: 3px 0 0 3px;
                                        }

                                        /* On hover, add a black background color with a little bit see-through */
                                        .prev:hover, .next:hover {
                                            background-color: rgba(0,0,0,0.8);
                                        }

                                        /* Caption text */
                                        .text {
                                            color: #f2f2f2;
                                            font-size: 15px;
                                            padding: 8px 12px;
                                            position: absolute;
                                            bottom: 8px;
                                            width: 100%;
                                            text-align: center;
                                        }

                                        /* Number text (1/3 etc) */
                                        .numbertext {
                                            color: #f2f2f2;
                                            font-size: 12px;
                                            padding: 8px 12px;
                                            position: absolute;
                                            top: 0;
                                        }

                                        /* The dots/bullets/indicators */
                                        .dot {
                                            cursor: pointer;
                                            height: 15px;
                                            width: 15px;
                                            margin: 0 2px;
                                            background-color: #bbb;
                                            border-radius: 50%;
                                            display: inline-block;
                                            transition: background-color 0.6s ease;
                                        }

                                        .active, .dot:hover {
                                            background-color: #717171;
                                        }

                                        /* Fading animation */
                                        .fade {
                                            -webkit-animation-name: fade;
                                            -webkit-animation-duration: 1.5s;
                                            animation-name: fade;
                                            animation-duration: 1.5s;
                                        }

                                        @-webkit-keyframes fade {
                                            from {opacity: .4}
                                            to {opacity: 1}
                                        }

                                        @keyframes fade {
                                            from {opacity: .4}
                                            to {opacity: 1}
                                        }

                                    </style>

                                    @if($banners->count()>0)
                                <!-- Slideshow container -->
                                    <div class="slideshow-container">

                                        @foreach ($banners as $key => $banner)
                                            <div class="mySlides">
                                                <a href="{{ route('banner.click',['id' => $banner->id]) }}" target="{{ $banner->target }}">
                                                <img src="{{ asset($banner->image) }}" style="width:100%">
                                                </a>
                                            </div>
                                        @endforeach
                                        <!-- Full-width images with number and caption text -->


                                        <!-- Next and previous buttons -->
                                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                    </div>
                                    <br>

                                    <!-- The dots/circles -->
                                    <div style="text-align:center">
                                        @foreach ($banners as $key => $banner)
                                        <span class="dot" onclick="currentSlide({{ $loop->index+1 }})"></span>
                                        @endforeach
                                    </div>

                                    @endif


                                    <div class="vc_row-full-width vc_clearfix"></div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="5fc3eeddf3bf8">
                                                        <style type="text/css">
                                                            @media screen and (min-width: 992px) {
                                                                #fr-space-5fc3eeddf3bf8 .fr-space {
                                                                    height: 121px;
                                                                }
                                                            }


                                                        </style>
                                                        <article id="post-1462" class="post-1462 page type-page status-publish hentry">
                                                            <div class="entry-content clearfix">
                                                                <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="cms-heading"
                                                                                                                                                                                                                                                                                           class="cms-heading  align-left align-left-md align-left-sm align-left-xs " >
                                                                                    <h3 class="cms-heading-tag  " style="margin-bottom:20px;color:#083260;font-size:54px;letter-spacing:-.016em;text-transform:none;font-weight:400;font-style:normal;display:inline-block; " >
                                                                                        {!! sc_html_render(sc_link_content('home-heading-2')) !!}</h3>

                                                                                </div>
                                                                                <div class="wpb_text_column wpb_content_element " >
                                                                                    <div class="wpb_wrapper">
                                                                                        <p>{!! sc_html_render(sc_link_content('home-subheading-2')) !!}</p>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1561345237749"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                                                                <div id="fr-grid-device-category" class="cms-grid fr-grid fr-grid-device-category default  ">
                                                                                                    <div class="row">
                                                                                                        @foreach($itemsList as $item)
                                                                                                            <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox">
                                                                                                                <div class="image-item">
                                                                                                                    <a href="{{ route('product.cat', $item->alias) }}"><img src="{{ $item->getImage()}}" alt="{{ $item->name }}"></a>
                                                                                                                </div>
                                                                                                                <h3>
                                                                                                                    <a href="{{ route('product.cat', $item->alias) }}">{{ $item->name }}</a>
                                                                                                                </h3>
                                                                                                            </div>
                                                                                                        @endforeach
                                                                                                    </div>
                                                                                                    {{--<div id="loadMore" style="">
                                                                                                        <a href="#">Load More</a>
                                                                                                    </div>--}}
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .entry-content -->

                                                        </article><!-- #post-1462 -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1536051606545">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-6">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="cms-heading-2" class="cms-heading layout1  align-left align-left-md align-left-sm align-left-xs ">
                                                        <p class="subtitle">{!! sc_html_render(sc_link_content('home-subheading-3')) !!}</p>
                                                        <h3 class="title">{!! sc_html_render(sc_link_content('home-heading-3')) !!}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($repairs as $repair)
                                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-6">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div id="fr-fancybox-layout1-3" class="fr-service-grid-default ">
                                                            <div class="service-item-grid">
                                                                <div class="item-image">
                                                                    <img src="{{ $repair->getImage()}}" alt="{{ $repair->title }}">
                                                                </div>
                                                                <div class="item-holder">
                                                                    <h3 class="item-title">{{ $repair->title }}</h3>
                                                                    <div class="item-excerpt">{!!  nl2br($repair->description) !!}</div>
                                                                    <div class="item-readmore">
                                                                        <span>{{ $repair->repair_price }}</span>
                                                                        <a href="/showRepair/{{$repair->alias}}">View more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                             class="vc_row wpb_row vc_row-fluid vc_custom_1548411297501 background-linear-primary">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms-heading-3"
                                                             class="cms-heading layout1  align-center align-center-md align-center-sm align-center-xs ">
                                                            {{--<p class="subtitle">How it Works</p>--}}
                                                            {!! sc_html_render(sc_link_content('home-heading-4')) !!}
                                                        </div>
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1547533039640">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div id="fr-step" class="fr-steps ">
                                                                            <div class="fr-step-item  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                                                <div class="fr-step-content">
                                                                                    <span class="fa fa-clock-o"></span>
                                                                                    <h3 class="fr-title">
                                                                                        Same Day Repairs
                                                                                    </h3>
                                                                                    <p class="fr-content">
                                                                                        When your phone breaks, you don’t want it fixed tomorrow—you need it fixed today
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <i class="fa fa-angle-right arrow"></i>
                                                                            <div class="fr-step-item  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                                                <div class="fr-step-content">
                                                                                    <span class="fa fa-money"></span>
                                                                                    <h3 class="fr-title">
                                                                                        Low Price Guarantee
                                                                                    </h3>
                                                                                    <p class="fr-content">Repairing beats replacing, and PRC beats all other phone repair companies.</p>
                                                                                </div>
                                                                            </div>
                                                                            <i class="fa fa-angle-right arrow"></i>
                                                                            <div class="fr-step-item  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                                                <div class="fr-step-content">
                                                                                    <span class="fa fa-shield"></span>
                                                                                    <h3 class="fr-title">
                                                                                        Superior Warranty
                                                                                    </h3>
                                                                                    <p class="fr-content">Stronger than any phone case, PRC offers the most reliable warranty on the market.</p>
                                                                                </div>
                                                                            </div>
                                                                            <i class="fa fa-angle-right arrow"></i>
                                                                            <div class="fr-step-item  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                                                <div class="fr-step-content">
                                                                                    <span class="fa fa-wrench"></span>
                                                                                    <h3 class="fr-title">
                                                                                        We do all repair
                                                                                    </h3>
                                                                                    <p class="fr-content">We do all repair in our premises. We do not outsource any repair to any other store.</p>
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

                                        <div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1548834082409 vc_row-has-fill before-carousel-after">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner vc_custom_1538550292798">
                                                <div class="wpb_wrapper">
                                                    <div id="fr-testimonial-carousel" class="fr-testimonial-carousel default owl-carousel  " data-item-xs="1" data-item-sm="1" data-item-md="1" data-item-lg="1" data-margin="50" data-loop="true" data-autoplay="true" data-autoplaytimeout="5000" data-smartspeed="250" data-center="true" data-arrows="true" data-bullets="true" data-stagepadding="150" data-rtl="false">

                                                        @foreach(sc_testimonial() as $testimonial)
                                                        <div class="fr-testimonial-item ">
                                                                <div class="fr-testimonial-item-inner">
                                                                    {!! sc_html_render($testimonial->content) !!}
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        {{--<div class="fr-testimonial-item ">
                                                                <div class="fr-testimonial-item-inner">
                                                                    <p class="fr-testimonial-content">Can&rsquo;t fault the work PRC carried out on my Samsung after I flushed it down the toilet. They Replaced the internals and dreid out all the wawater</p>
                                                                    <p class="fr-testimonial-rating"><i class="star5"></i></p>
                                                                    <h3 class="fr-testimonial-title">Laura Harding</h3>
                                                                    <p class="fr-testimonial-service">Samsung Screen Replacement</p>
                                                                </div>
                                                            </div>
                                                            <div class="fr-testimonial-item ">
                                                                <div class="fr-testimonial-item-inner">
                                                                    <p class="fr-testimonial-content">I previously had my phones screen replaced but it was a cheap replacement and after about a week the touch screen started to act faulty. PRC fixed this.</p>
                                                                    <p class="fr-testimonial-rating"><i class="star5"></i></p>
                                                                    <h3 class="fr-testimonial-title">Mike Jenkins</h3>
                                                                    <p class="fr-testimonial-service">iPhone Screen Replacement</p>
                                                                </div>
                                                            </div>
                                                            <div class="fr-testimonial-item ">
                                                                <div class="fr-testimonial-item-inner">
                                                                    <p class="fr-testimonial-content">PRC did a fantastic job fixing my iPhone X after <br>
                                                                        I dropped it and smashed the front and back.  <br>
                                                                        You can&rsquo;t tell it&rsquo;s been replaced!</p>
                                                                    <p class="fr-testimonial-rating"><i class="star5"></i></p>
                                                                    <h3 class="fr-testimonial-title">Harry Simpson</h3>
                                                                    <p class="fr-testimonial-service">iPhone Screen Replacement</p>
                                                                </div>
                                                            </div>
                                                            <div class="fr-testimonial-item ">
                                                                <div class="fr-testimonial-item-inner">
                                                                    <p class="fr-testimonial-content">PRC did a fantastic job fixing my iPhone X after <br>
                                                                        I dropped it and smashed the front and back.  <br>
                                                                        You can&rsquo;t tell it&rsquo;s been replaced!</p>
                                                                    <p class="fr-testimonial-rating"><i class="star5"></i></p>
                                                                    <h3 class="fr-testimonial-title">Jefferey Williams</h3>
                                                                    <p class="fr-testimonial-service">iPhone Screen Replacement</p>
                                                                </div>
                                                            </div>--}}
                                                        </div>

                                                    </div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1548661147937"><div class="wpb_wrapper">
                                                        <div id="fr-video-popup" class="fr-video-popup   ">
                                                            <div class="fr-video-popup-content">
                                                                <img class="img-bg" src="/prc/images/11-shutterstock_331922156.png" alt="shutterstock_331922156"><img class="small-image hover-parallax" src="/prc/images/10-Group-25.png" alt="Group 25" style="top:-118px;left:-280px;"><div class="content-button">
                                                                    <div class="hover-effect">
                                                                        <div class="element-holder">
                                                                            <p class="button-text">Watch our Explainer Video</p>
                                                                            <a class="video-autoplay play-video-button" href="{{ $adminStore->youtube }}">
                                                                                <i class="fa fa-play"></i>
                                                                            </a>
                                                                            <p class="video-time">1:03</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1548661163582">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner"><div class="wpb_wrapper">
                                                    <div id="cms-heading-4" class="cms-heading layout1  align-center align-center-md align-center-sm align-center-xs ">
                                                            <p class="subtitle">Keep up to date with us</p>
                                                            <h3 class="title">Latest News</h3>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                        <div id="fr-blog-carousel" class="fr-blog-carousel tekhfixers-carousel  owl-carousel animation-time  " data-item-xs="1" data-item-sm="2" data-item-md="3" data-item-lg="3" data-margin="0" data-loop="false" data-autoplay="false" data-autoplaytimeout="5000" data-smartspeed="250" data-center="false" data-arrows="false" data-bullets="false" data-stagepadding="0" data-rtl="false">
                                                            @foreach($newslist as $blog)
                                                            <div class="cms-carousel-item ">
                                                                <div id="post-1" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                    <a href="/blog/{{$blog->alias}}">
                                                                        <div class="entry-featured ">
                                                                            <div class="post-image" style="background: url({{$blog->image}})"></div>
                                                                        </div>
                                                                    </a>
                                                                    <div class="overlay"></div>
                                                                    <div class="entry-holder text-center">
                                                                        <div class="post-meta">
                                                                            <h2 class="entry-title">{{$blog->title}}</h2>
                                                                        </div>
                                                                        <div class="entry-more">
                                                                            <a class="read-more" href="/blog/{{$blog->alias}}">Read Story</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1544155726138"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="cms-heading-5" class="cms-heading layout1  align-center align-center-md align-center-sm align-center-xs ">
                                                            <p class="subtitle">Don&rsquo;t be afraid to ask!</p>
                                                            <h3 class="title">Frequently Asked Questions</h3>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vc_row wpb_row vc_row-fluid">
                                        @foreach($sc_faq_home as $faq)
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms-heading-6" class="cms-heading  align-left align-left-md align-left-sm align-left-xs ">
                                                            <h3 class="cms-heading-tag  " style="margin-bottom:28px;color:#032549;font-size:20px;letter-spacing:0px;text-transform:none;font-weight:400;font-style:normal;font-family:AktivGrotesk-XBold;display:inline-block; ">
                                                                {!! sc_html_render($faq->question) !!}</h3>

                                                            <p class="cms-heading-desc" style="color:#032549;line-height:1.9;font-weight:400;margin-bottom:55px;">
                                                                {!! sc_html_render($faq->answer) !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="cms-button-wrapper  align-right align-right-md align-right-sm align-center-xs  ">

                                                            <a style="margin-bottom:5px;" href="{{   route('faq') }}" target="_self" class="btn btn-primary size-default">
                                                                <span>All FAQ <i class="fa fa-angle-right arrow"></i></span>
                                                            </a>

                                                        </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="cms-button-wrapper  align-left align-left-md align-left-sm align-center-xs  ">

                                                            <a href="{{   route('product.showbrand') }}" target="_self" class="btn btn-default size-default">
                                                                <span>Fix My Device <i class="fa fa-angle-right"></i></span>
                                                            </a>

                                                        </div></div></div></div></div>
                                    </div><!-- .entry-content -->

                            </article><!-- #post-30 --></main><!-- #main --></div><!-- #primary -->


                </div>
            </div>

        </div><!-- #content inner -->
    </div><!-- #content -->

@endsection

@section('afterBottom')

    <script type="text/javascript">
        jQuery(function($) {
            $(".moreBox").slice(0, 1).show();
            if ($(".blogBox:hidden").length != 0) {
                $("#loadMore").show();
            }
            $("#loadMore").on('click', function (e) {
                e.preventDefault();
                $(".moreBox:hidden").slice(0, 4).slideDown();
                if ($(".moreBox:hidden").length == 0) {
                    $("#loadMore").fadeOut('slow');
                }
            });
        });

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");

            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
var intervalID;
        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            intervalID = setTimeout(showSlides, 10000); // Change image every 10 seconds
        }

        jQuery('.mySlides').on("mouseover",function(){
            clearInterval(intervalID);
        });

        jQuery('.mySlides').on("mouseout",function(){
            intervalID = setTimeout(showSlides, 10000);
        });

        var owl = jQuery(".owl-carousel");

        jQuery('#fr-testimonial-carousel').on('mouseover',function(e){
            owl.trigger('stop.owl.autoplay');
        })
        jQuery('#fr-testimonial-carousel').on('mouseleave',function(e){
            owl.trigger('play.owl.autoplay');
        })

    </script>

@endsection