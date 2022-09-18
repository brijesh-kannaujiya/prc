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
            margin-top: 70px !important;
            margin-bottom: 70px !important;
            padding-top: 85px !important;
            padding-bottom: 97px !important;
        }

        .vc_custom_1548411424106 {
            margin-top: 66px !important;
            margin-bottom: 66px !important;
        }

        .vc_custom_1548176129188 {
            margin-bottom: 10px !important;
        }

        .vc_custom_1548412273834 {
            padding-top: 74px !important;
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
    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1549883619914{padding-bottom: 10px !important;background-image: url(http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2018/11/slide-header.jpg?id=479) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1536051606545{margin-top: 100px !important;}.vc_custom_1548662727621{margin-top: -85px !important;background-image: url(http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2018/09/Rounded-Rectangle-28.png?id=301) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1544155523770{padding-top: 28px !important;padding-bottom: 70px !important;}.vc_custom_1544155726138{padding-top: 70px !important;padding-bottom: 70px !important;}.vc_custom_1548662119899{padding-top: 33px !important;}.vc_custom_1548835350924{margin-top: -8px !important;margin-bottom: -160px !important;padding-top: 0px !important;}.vc_custom_1538558312795{margin-bottom: 20px !important;padding-right: 0px !important;}.vc_custom_1548833661053{padding-top: 8px !important;}.vc_custom_1548662514192{padding-bottom: 17px !important;}.vc_custom_1548662602584{padding-top: 6px !important;}.vc_custom_1538550292798{margin-bottom: 100px !important;}.vc_custom_1548663507510{margin-top: 83px !important;padding-top: 80px !important;padding-bottom: 48px !important;background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}</style>
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

                                                            Repairing Your<br />
                                                            Broken Phones</h3>
                                                        <p class="subtitle  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown" >Accidents happen, and it’s our job to fix them when it comes to damaging your mobile device. It’s never been easier to render your device useless after dropping it. Our trained technicians will diagnose and repair your device within 24 hours.</p>
                                                        <a  href="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/services/" target="_self"  class="btn btn-default size-default  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown">
                                                            <span>Fix my Device   <i class="fa fa-angle-right"></i></span></a>
                                                    </div>
                                                    {{--<div class="cms-custom-menu-layout1" >
                                                        <div class="menu-custom-menu-container">
                                                            <ul id="menu-custom-menu" class="menu">
                                                                <li id="menu-item-389" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-389"><a href="#">Smartphones</a></li>
                                                                <li id="menu-item-390" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-390"><a href="#">Laptops &#038; Tablets</a></li>
                                                                <li id="menu-item-391" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-391"><a href="#">Smartwatches</a></li>
                                                                <li id="menu-item-392" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-392"><a href="#">Computers</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-sm vc_hidden-xs">
                                            <div class="vc_column-inner vc_custom_1548835350924">
                                                <div class="wpb_wrapper">
                                                    <div  class="wpb_single_image wpb_content_element vc_align_left  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown hover-parallax">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper hover-parallax  vc_box_border_grey"><img width="604" height="737" src="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2018/08/iPhone-X.png" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2018/08/iPhone-X.png 604w, https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2018/08/iPhone-X-600x732.png 600w" sizes="(max-width: 604px) 100vw, 604px" /></div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="/prc/images/slide-header.jpg" class="vc_row wpb_row vc_row-fluid header-hero vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving bg-primary bg-art rm-padding-right">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="fr-space-5fc3eeddf12b2">
                                                        <style type="text/css">
                                                            @media screen and (min-width: 992px) {
                                                                #fr-space-5fc3eeddf12b2 .fr-space {
                                                                    height: 50px;
                                                                }
                                                            }
                                                        </style>
                                                        <div class="fr-space">

                                                        </div>
                                                    </div>
                                                    <div id="cms-heading" class="cms-heading layout2  align-left align-left-md align-left-sm align-left-xs  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown">
                                                        <h3 class="title  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown">Professional<br>
                                                            Device Repairs</h3>
                                                        <p class="subtitle  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown">Accidents happen, and it&rsquo;s our job to fix them when it comes to damaging your mobile device. It&rsquo;s never been easier to render your device useless after dropping it. Our trained technicians will diagnose and repair your device within 24 hours.</p>
                                                        <a href="services.html" target="_self" class="btn btn-default size-default  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown"><span>Fix my Device   <i class="fa fa-angle-right"></i></span></a>
                                                    </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner vc_custom_1548661452955"><div class="wpb_wrapper">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown hover-parallax">

                                                        <figure class="wpb_wrapper vc_figure"><div class="vc_single_image-wrapper hover-parallax  vc_box_border_grey"><img width="604" height="737" src="/prc/images/08-iPhone-X.png" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="/prc/images/iPhone-X.png 604w, /prc/images/iPhone-X-600x732.png 600w" sizes="(max-width: 604px) 100vw, 604px"></div>
                                                        </figure></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}

                                    <div class="vc_row-full-width vc_clearfix"></div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="fr-space-5fd568fa391f2">
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
                                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1548666921886 carousel-stretch-right">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="fr-service-carousel" class="fr-service-carousel-default owl-carousel  " data-item-xs="1" data-item-sm="2" data-item-md="3" data-item-lg="4" data-margin="0" data-loop="true" data-autoplay="false" data-autoplaytimeout="5000" data-smartspeed="250" data-center="false" data-arrows="true" data-bullets="false" data-stagepadding="0" data-rtl="false">
                                                        <div class="fr-carousel-item ">
                                                            <div id="post-198" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                <a href="water-damagerepair.html">
                                                                    <div class="entry-featured ">
                                                                        <div class="post-image" style="background: url(/prc/images/Phone-e1563262008564.png)"></div>
                                                                    </div>
                                                                </a>
                                                               {{-- <div class="overlay"></div>
                                                                <div class="entry-holder text-center">
                                                                    <div class="post-meta">
                                                                        <h2 class="entry-title">
                                                                            <span>Liquid Damage</span></h2>
                                                                    </div>
                                                                    <div class="entry-more">
                                                                        <a class="read-more" href="{{ route('liquid-damage') }}">Read More</a>
                                                                    </div>
                                                                </div>--}}
                                                            </div>
                                                        </div>
                                                        <div class="fr-carousel-item ">
                                                            <div id="post-196" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                <a href="home-buttonrepair.html">
                                                                    <div class="entry-featured ">
                                                                        <div class="post-image" style="background: url(/prc/images/Business-e1563261715452.png)"></div>                </div>
                                                                </a>
                                                               {{-- <div class="overlay"></div>
                                                                <div class="entry-holder text-center">
                                                                    <div class="post-meta">
                                                                        <h2 class="entry-title">
                                                                            <span>B2B Repairs</span></h2>
                                                                    </div>
                                                                    <div class="entry-more">
                                                                        <a class="read-more" href="{{   route('b2b-repairs') }}">Read More</a>
                                                                    </div>
                                                                </div>--}}
                                                            </div>
                                                        </div>
                                                        <div class="fr-carousel-item ">
                                                            <div id="post-194" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                <a href="speakerrepair.html">
                                                                    <div class="entry-featured ">
                                                                        <div class="post-image" style="background: url(/prc/images/DAta-e1563261878793.png)"></div>                </div>
                                                                </a>
                                                                {{--<div class="overlay"></div>
                                                                <div class="entry-holder text-center">
                                                                    <div class="post-meta">
                                                                        <h2 class="entry-title">
                                                                            <span>Motherboard Repair</span></h2>
                                                                    </div>
                                                                    <div class="entry-more">
                                                                        <a class="read-more" href="{{ route('motherboard-repair') }}">Read More</a>
                                                                    </div>
                                                                </div>--}}
                                                            </div>
                                                        </div>
                                                        <div class="fr-carousel-item ">
                                                            <div id="post-192" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                <a href="camerarepair.html">
                                                                    <div class="entry-featured ">
                                                                        <div class="post-image" style="background: url(/prc/images/GAme-e1563261769891.png)"></div>                </div>
                                                                </a>
                                                                {{--<div class="overlay"></div>
                                                                <div class="entry-holder text-center">
                                                                    <div class="post-meta">
                                                                        <h2 class="entry-title">
                                                                            <span>Data Recovery</span></h2>
                                                                    </div>
                                                                    <div class="entry-more">
                                                                        <a class="read-more" href="{{   route('data-recovery') }}">Read More</a>
                                                                    </div>
                                                                </div>--}}
                                                            </div>
                                                        </div>
                                                        <div class="fr-carousel-item ">
                                                            <div id="post-190" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                <a href="batteryreplacement.html">
                                                                    <div class="entry-featured ">
                                                                        <div class="post-image" style="background: url(/prc/images/Laptop-e1563262167551.png)"></div>                </div>
                                                                </a>
                                                                {{--<div class="overlay"></div>
                                                                <div class="entry-holder text-center">
                                                                    <div class="post-meta">
                                                                        <h2 class="entry-title">
                                                                            <span>Mail In Repairs</span></h2>
                                                                    </div>
                                                                    <div class="entry-more">
                                                                        <a class="read-more" href="{{   route('mail-in-repairs') }}">Read More</a>
                                                                    </div>
                                                                </div>--}}
                                                            </div>
                                                        </div>
                                                        <div class="fr-carousel-item ">
                                                            <div id="post-182" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                <a href="screenrepair.html">
                                                                    <div class="entry-featured ">
                                                                        <div class="post-image" style="background: url(/prc/images/Macbook1-e1563262053342.png)"></div>                </div>
                                                                </a>
                                                                {{--<div class="overlay"></div>
                                                                <div class="entry-holder text-center">
                                                                    <div class="post-meta">
                                                                        <h2 class="entry-title">
                                                                            <span>Sell Your Broken Device</span></h2>
                                                                    </div>
                                                                    <div class="entry-more">
                                                                        <a class="read-more" href="{{   route('sellyour-device') }}">Read More</a>
                                                                    </div>
                                                                </div>--}}
                                                            </div>
                                                        </div>
                                                    </div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="fr-space-5fc3eeddf3bf8">
                                                        <style type="text/css">
                                                            @media screen and (min-width: 992px) {
                                                                #fr-space-5fc3eeddf3bf8 .fr-space {
                                                                    height: 121px;
                                                                }
                                                            }


                                                        </style>
                                                        <div class="fr-space"></div>





                                                        <article id="post-1462" class="post-1462 page type-page status-publish hentry">
                                                            <div class="entry-content clearfix">
                                                                <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="cms-heading"
                                                                                                                                                                                                                                                                                           class="cms-heading  align-left align-left-md align-left-sm align-left-xs " >
                                                                                    <h3 class="cms-heading-tag  " style="margin-bottom:20px;color:#083260;font-size:54px;letter-spacing:-.016em;text-transform:none;font-weight:400;font-style:normal;display:inline-block; " >
                                                                                        Select your mobile device</h3>

                                                                                </div>
                                                                                <div class="wpb_text_column wpb_content_element " >
                                                                                    <div class="wpb_wrapper">
                                                                                        <p>Suspendisse porta eros et massa luctus, quis malesuada sapien aliquet. Proin venenatis turpis non felis consequat rhoncus. Maecenas varius nunc sed porttitor lacinia. Aliquam facilisis ipsum vel eros lobortis, non iaculis nibh vulputate. Curabitur sagittis fermentum diam, ut maximus diam dignissim eget.</p>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1561345237749"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                                                                <div id="fr-grid-device-category" class="cms-grid fr-grid fr-grid-device-category default  ">
                                                                                                    <div class="row">
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox">
                                                                                                            <div class="image-item">
                                                                                                                <img src="/prc/images/apple.png" alt="Iphone">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/iphone/">Iphone</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/samsung.png" alt="Samsung">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/samsung/">Samsung</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/google.png" alt="Google">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/google/">Google</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/huawei.png" alt="Huawei">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/huawei/">Huawei</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/oneplus.png" alt="OnePlus">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/oneplus/">OnePlus</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/oppo.png" alt="Oppo">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/oppo/">Oppo</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6  blogBox moreBox">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/htc.png" alt="HTC">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/htc/">HTC</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6  blogBox moreBox">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/sony.png" alt="Sony">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/sony/">Sony</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox " style="display: none;">
                                                                                                            <div class="image-item">
                                                                                                                <img src="/prc/images/apple.png" alt="Iphone">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/iphone/">Iphone</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox " style="display: none;">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/samsung.png" alt="Samsung">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/samsung/">Samsung</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox " style="display: none;">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/google.png" alt="Google">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/google/">Google</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox " style="display: none;">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/huawei.png" alt="Huawei">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/huawei/">Huawei</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox " style="display: none;">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/oneplus.png" alt="OnePlus">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/oneplus/">OnePlus</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 blogBox moreBox " style="display: none;">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/oppo.png" alt="Oppo">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/oppo/">Oppo</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6  blogBox moreBox " style="display: none;">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/htc.png" alt="HTC">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/htc/">HTC</a></h3>
                                                                                                        </div>
                                                                                                        <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6  blogBox moreBox " style="display: none;">
                                                                                                            <div class="image-item">
                                                                                                                <img src="http://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/06/sony.png" alt="Sony">
                                                                                                            </div>
                                                                                                            <h3><a href="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/device-category/sony/">Sony</a></h3>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div id="loadMore" style="">
                                                                                                        <a href="#">Load More</a>
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
                                                            </div><!-- .entry-content -->

                                                        </article><!-- #post-1462 -->
                                                        <div class="fr-space"></div>
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
                                                        <p class="subtitle">How We Can Help</p>
                                                        <h3 class="title">We Make<br>
                                                            Repairs<br>
                                                            Stress Free</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($repairs as $repair)
                                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="fr-fancybox-layout1" class="fr-service-grid-default ">
                                                            <div class="service-item-grid">
                                                                <div class="item-image">
                                                                    <img src="{{ $repair->getImage()}}" alt="{{ $repair->title }}"></div>
                                                                <div class="item-holder">
                                                                    <h3 class="item-title">{{ $repair->title }}</h3>
                                                                    <div class="item-excerpt">{{ $repair->content }}</div>
                                                                    <div class="item-readmore">
                                                                        <span>{{ $repair->repair_price }}</span>
                                                                        <a href="#">View more</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{--<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="fr-fancybox-layout1-2" class="fr-service-grid-default ">
                                                        <div class="service-item-grid">
                                                            <div class="item-image">
                                                                <img src="/prc/images/06-Icon@3x1.png" alt="Icon@3&times;1"></div>
                                                            <div class="item-holder">
                                                                <h3 class="item-title">Poor Battery Life</h3>
                                                                <div class="item-excerpt">As devices age, their batteries degrade. With a new battery you can enjoy many more hours of charge.</div>
                                                                <div class="item-readmore">
<span>from
$25     <sup>.00</sup></span>
                                                                    <a href="#">View more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="fr-fancybox-layout1-3" class="fr-service-grid-default ">
                                                        <div class="service-item-grid">
                                                            <div class="item-image">
                                                                <img src="/prc/images/06-Icon@3x4.png" alt="Icon@3&times;4"></div>
                                                            <div class="item-holder">
                                                                <h3 class="item-title">Cracked Screens</h3>
                                                                <div class="item-excerpt">Our most common repair! We only use genuine parts to avoid voiding your warranty.</div>
                                                                <div class="item-readmore">
<span>from
$59     <sup>.00</sup></span>
                                                                    <a href="#">View more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="fr-fancybox-layout1-4" class="fr-service-grid-default ">
                                                        <div class="service-item-grid">
                                                            <div class="item-image">
                                                                <img src="/prc/images/06-Icon@3x2.png" alt="Icon@3&times;2"></div>
                                                            <div class="item-holder">
                                                                <h3 class="item-title">Bent Chassis</h3>
                                                                <div class="item-excerpt">Sat on your phone? We can straighten your current chassis or replace it with a factory original.</div>
                                                                <div class="item-readmore">
<span>from
$75     <sup>.00</sup></span>
                                                                    <a href="#">View more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="fr-fancybox-layout1-5" class="fr-service-grid-default ">
                                                        <div class="service-item-grid">
                                                            <div class="item-image">
                                                                <img src="/prc/images/06-Icon@3x3.png" alt="Icon@3&times;3"></div>
                                                            <div class="item-holder">
                                                                <h3 class="item-title">Broken Speakers</h3>
                                                                <div class="item-excerpt">Many things can cause broken speakers, but we can replace them easily so you can hear again.</div>
                                                                <div class="item-readmore">
<span>from
$39     <sup>.00</sup></span>
                                                                    <a href="#">View more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div></div></div>--}}
                                        <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="fr-space-5fc3eede01766">
                                                            <style type="text/css">
                                                                @media screen and (min-width: 992px) {
                                                                    #fr-space-5fc3eede01766 .fr-space {
                                                                        height: 116px;
                                                                    }
                                                                }


                                                                @media (min-width: 768px) and (max-width: 991px) {
                                                                    #fr-space-5fc3eede01766 .fr-space {
                                                                        height: 50px;
                                                                    }
                                                                }

                                                                @media (min-width: 576px) and (max-width: 767px) {
                                                                    #fr-space-5fc3eede01766 .fr-space {
                                                                        height: 50px;
                                                                    }
                                                                }

                                                                @media screen and (max-width: 575px) {
                                                                    #fr-space-5fc3eede01766 .fr-space {
                                                                        height: 50px;
                                                                    }
                                                                }

                                                            </style><div class="fr-space"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                                             class="vc_row wpb_row vc_row-fluid vc_custom_1548411297501 background-linear-primary">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div id="cms-heading-3"
                                                             class="cms-heading layout1  align-center align-center-md align-center-sm align-center-xs ">
                                                            {{--<p class="subtitle">How it Works</p>--}}
                                                            <h3 class="title" style="color: #002e3b">Why Choose Us?</h3>
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

                                                                                        {{--<img width="55" height="55"
                                                                                             src="https://demo.cmssuperheroes.com/themeforest/wp-tekhfixers/wp-content/uploads/2019/01/Vector-Smart-Object.png"
                                                                                             class="attachment-full" alt="" loading="lazy" />S--}}Same Day Repairs
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

                                        <div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="fr-space-5fc3eede0336f">
                                                            <style type="text/css">
                                                                @media screen and (min-width: 992px) {
                                                                    #fr-space-5fc3eede0336f .fr-space {
                                                                        height: 239px;
                                                                    }
                                                                }


                                                                @media (min-width: 768px) and (max-width: 991px) {
                                                                    #fr-space-5fc3eede0336f .fr-space {
                                                                        height: 120px;
                                                                    }
                                                                }

                                                                @media (min-width: 576px) and (max-width: 767px) {
                                                                    #fr-space-5fc3eede0336f .fr-space {
                                                                        height: 120px;
                                                                    }
                                                                }

                                                                @media screen and (max-width: 575px) {
                                                                    #fr-space-5fc3eede0336f .fr-space {
                                                                        height: 120px;
                                                                    }
                                                                }

                                                            </style><div class="fr-space"></div>
                                                        </div></div></div></div></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1548834082409 vc_row-has-fill before-carousel-after"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1538550292798"><div class="wpb_wrapper"> <div id="fr-testimonial-carousel" class="fr-testimonial-carousel default owl-carousel  " data-item-xs="1" data-item-sm="1" data-item-md="1" data-item-lg="1" data-margin="50" data-loop="true" data-autoplay="false" data-autoplaytimeout="5000" data-smartspeed="250" data-center="true" data-arrows="true" data-bullets="true" data-stagepadding="150" data-rtl="false">
                                                            <div class="fr-testimonial-item ">
                                                                <div class="fr-testimonial-item-inner">
                                                                    <p class="fr-testimonial-content">PRC did a fantastic job fixing my iPhone X after<br>
                                                                        I dropped it and smashed the front and back. <br>
                                                                        You can&rsquo;t tell it&rsquo;s been replaced!</p>
                                                                    <p class="fr-testimonial-rating"><i class="star5"></i></p>
                                                                    <h3 class="fr-testimonial-title">Jefferey Williams</h3>
                                                                    <p class="fr-testimonial-service">iPhone Screen Replacement</p>
                                                                </div>
                                                            </div>
                                                            <div class="fr-testimonial-item ">
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
                                                            </div>
                                                        </div>

                                                    </div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1548661147937"><div class="wpb_wrapper">
                                                        <div id="fr-video-popup" class="fr-video-popup   ">
                                                            <div class="fr-video-popup-content">
                                                                <img class="img-bg" src="/prc/images/11-shutterstock_331922156.png" alt="shutterstock_331922156"><img class="small-image hover-parallax" src="/prc/images/10-Group-25.png" alt="Group 25" style="top:-118px;left:-280px;"><div class="content-button">
                                                                    <div class="hover-effect">
                                                                        <div class="element-holder">
                                                                            <p class="button-text">Watch our Explainer Video</p>
                                                                            <a class="video-autoplay play-video-button" href="#">
                                                                                <i class="fa fa-play"></i>
                                                                            </a>
                                                                            <p class="video-time">1:03</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1548661163582"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="cms-heading-4" class="cms-heading layout1  align-center align-center-md align-center-sm align-center-xs ">
                                                            <p class="subtitle">Keep up to date with us</p>
                                                            <h3 class="title">Latest News</h3>
                                                        </div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                        <div id="fr-blog-carousel" class="fr-blog-carousel tekhfixers-carousel  owl-carousel animation-time  " data-item-xs="1" data-item-sm="2" data-item-md="3" data-item-lg="3" data-margin="0" data-loop="false" data-autoplay="false" data-autoplaytimeout="5000" data-smartspeed="250" data-center="false" data-arrows="false" data-bullets="false" data-stagepadding="0" data-rtl="false">
                                                            <div class="cms-carousel-item ">
                                                                <div id="post-1" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                    <a href="our-top-5-iphone-x-cases-reviewed.html">
                                                                        <div class="entry-featured ">
                                                                            <div class="post-image" style="background: url(/prc/images/shutterstock_777073321.jpg)"></div>              </div>
                                                                    </a>
                                                                    <div class="overlay"></div>
                                                                    <div class="entry-holder text-center">
                                                                        <div class="post-meta">
                                                                            <a class="blog-post-cat" href="product-reviews.html">Product Reviews</a>
                                                                            <h2 class="entry-title">
                                                                                Our Top 5 iPhone X Cases Reviewed       </h2>
                                                                        </div>
                                                                        <div class="entry-more">
                                                                            <a class="read-more" href="our-top-5-iphone-x-cases-reviewed.html">Read Story</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cms-carousel-item ">
                                                                <div id="post-17" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                    <a href="why-we-only-use-genuine-parts-in-our-repairs.html">
                                                                        <div class="entry-featured">
                                                                            <div class="post-image" style="background: url(/prc/images/shutterstock_684391222.png)"></div>              </div>
                                                                    </a>
                                                                    <div class="overlay"></div>
                                                                    <div class="entry-holder text-center">
                                                                        <div class="post-meta">
                                                                            <a class="blog-post-cat" href="company-news.html">Company News</a>
                                                                            ,
                                                                            <a class="blog-post-cat" href="tips-tricks.html">Tips &amp; Tricks</a>
                                                                            <h2 class="entry-title">
                                                                                Why We Only Use Genuine Parts in our Repairs       </h2>
                                                                        </div>
                                                                        <div class="entry-more">
                                                                            <a class="read-more" href="why-we-only-use-genuine-parts-in-our-repairs.html">Read Story</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cms-carousel-item ">
                                                                <div id="post-19" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                    <a href="what-to-do-after-dropping-your-phone-in-water.html">
                                                                        <div class="entry-featured">
                                                                            <div class="post-image" style="background: url(/prc/image/shutterstock_674357041.jpg)"></div>              </div>
                                                                    </a>
                                                                    <div class="overlay"></div>
                                                                    <div class="entry-holder text-center">
                                                                        <div class="post-meta">
                                                                            <a class="blog-post-cat" href="tips-tricks.html">Tips &amp; Tricks</a>
                                                                            <h2 class="entry-title">
                                                                                What to Do After Dropping Your Phone in Water       </h2>
                                                                        </div>
                                                                        <div class="entry-more">
                                                                            <a class="read-more" href="what-to-do-after-dropping-your-phone-in-water.html">Read Story</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cms-carousel-item ">
                                                                <div id="post-21" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                    <a href="what-to-beware-of-when-fixing-your-device-yourself.html">
                                                                        <div class="entry-featured">
                                                                            <div class="post-image" style="background: url(/prc/images/DIY.jpg)"></div>              </div>
                                                                    </a>
                                                                    <div class="overlay"></div>
                                                                    <div class="entry-holder text-center">
                                                                        <div class="post-meta">
                                                                            <a class="blog-post-cat" href="lastest-news.html">Lastest News</a>
                                                                            ,
                                                                            <a class="blog-post-cat" href="tips-tricks.html">Tips &amp; Tricks</a>
                                                                            <h2 class="entry-title">
                                                                                What to Beware of When Fixing Your Device Yourself       </h2>
                                                                        </div>
                                                                        <div class="entry-more">
                                                                            <a class="read-more" href="what-to-beware-of-when-fixing-your-device-yourself.html">Read Story</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cms-carousel-item ">
                                                                <div id="post-60" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                    <a href="replacing-a-li-ion-battery-yourself.html">
                                                                        <div class="entry-featured">
                                                                            <div class="post-image" style="background: url(/prc/image/08-battery.jpg)"></div>              </div>
                                                                    </a>
                                                                    <div class="overlay"></div>
                                                                    <div class="entry-holder text-center">
                                                                        <div class="post-meta">
                                                                            <a class="blog-post-cat" href="diy.html">DIY</a>
                                                                            <h2 class="entry-title">
                                                                                Replacing a Li-Ion Battery Yourself       </h2>
                                                                        </div>
                                                                        <div class="entry-more">
                                                                            <a class="read-more" href="replacing-a-li-ion-battery-yourself.html">Read Story</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cms-carousel-item ">
                                                                <div id="post-65" class="single-hentry-blog-post post-30 page type-page status-publish hentry">
                                                                    <a href="the-5-most-common-reasons-why-screens-break.html">
                                                                        <div class="entry-featured">
                                                                            <div class="post-image" style="background: url(/prc/images/08-smashed.jpg)"></div>              </div>
                                                                    </a>
                                                                    <div class="overlay"></div>
                                                                    <div class="entry-holder text-center">
                                                                        <div class="post-meta">
                                                                            <a class="blog-post-cat" href="lastest-news.html">Lastest News</a>
                                                                            <h2 class="entry-title">
                                                                                5 Most Common Reasons Why Screens Break       </h2>
                                                                        </div>
                                                                        <div class="entry-more">
                                                                            <a class="read-more" href="the-5-most-common-reasons-why-screens-break.html">Read Story</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1544155726138"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="cms-heading-5" class="cms-heading layout1  align-center align-center-md align-center-sm align-center-xs ">
                                                            <p class="subtitle">Don&rsquo;t be afraid to ask!</p>
                                                            <h3 class="title">Frequently Asked Questions</h3>
                                                        </div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="cms-heading-6" class="cms-heading  align-left align-left-md align-left-sm align-left-xs ">
                                                            <h3 class="cms-heading-tag  " style="margin-bottom:28px;color:#032549;font-size:20px;letter-spacing:0px;text-transform:none;font-weight:400;font-style:normal;font-family:AktivGrotesk-XBold;display:inline-block; ">
                                                                My Device Doesn&rsquo;t Switch On</h3>

                                                            <p class="cms-heading-desc" style="color:#032549;line-height:1.9;font-weight:400;margin-bottom:55px;">
                                                                An electronic device not switching on can be the result of many things. Most commonly there is a fault with the mainboard or the battery. We can diagnose a range of issues and replace only what's needed to be. </p>
                                                        </div><div id="cms-heading-7" class="cms-heading  align-left align-left-md align-left-sm align-left-xs ">
                                                            <h3 class="cms-heading-tag  " style="margin-bottom:28px;color:#032549;font-size:20px;letter-spacing:0px;text-transform:none;font-weight:400;font-style:normal;font-family:AktivGrotesk-XBold;display:inline-block; ">
                                                                My Touchscreen Doesn&rsquo;t Work</h3>

                                                            <p class="cms-heading-desc" style="color:#032549;line-height:1.9;font-weight:400;margin-bottom:55px;">
                                                                Many touchscreens won't work if the device has been a victim to a heavy fall or if the device has previously been 'repaired' and a genuine screen wasn't used in the replacement. All our replacement parts come with a 6 month warranty. </p>
                                                        </div><div id="cms-heading-8" class="cms-heading  align-left align-left-md align-left-sm align-left-xs ">
                                                            <h3 class="cms-heading-tag  " style="margin-bottom:28px;color:#032549;font-size:20px;letter-spacing:0px;text-transform:none;font-weight:400;font-style:normal;font-family:AktivGrotesk-XBold;display:inline-block; ">
                                                                Flushed My Phone Down the Toilet</h3>

                                                            <p class="cms-heading-desc" style="color:#032549;line-height:1.9;font-weight:400;margin-bottom:43px;">
                                                                That was a bit silly, wasn't it? Some believe putting the device in a bag of rice will solve all your problems. But this isn't true and sometimes the damage has already been done. </p>
                                                        </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="cms-heading-9" class="cms-heading  align-left align-left-md align-left-sm align-left-xs ">
                                                            <h3 class="cms-heading-tag  " style="margin-bottom:28px;color:#032549;font-size:20px;letter-spacing:0px;text-transform:none;font-weight:400;font-style:normal;font-family:AktivGrotesk-XBold;display:inline-block; ">
                                                                What Happens if You Can&rsquo;t Fix My Device?</h3>

                                                            <p class="cms-heading-desc" style="color:#032549;line-height:1.9;font-weight:400;margin-bottom:55px;">
                                                                If we can't fix your device we will get in touch with you to discuss your options. We can either offer you a replacement device for a cost, or we can return the device to you and refund your service charge. </p>
                                                        </div><div id="cms-heading-10" class="cms-heading  align-left align-left-md align-left-sm align-left-xs ">
                                                            <h3 class="cms-heading-tag  " style="margin-bottom:28px;color:#032549;font-size:20px;letter-spacing:0px;text-transform:none;font-weight:400;font-style:normal;font-family:AktivGrotesk-XBold;display:inline-block; ">
                                                                Is The Postage Insured When You Send Back My Device?</h3>

                                                            <p class="cms-heading-desc" style="color:#032549;line-height:1.9;font-weight:400;margin-bottom:55px;">
                                                                Every device that leaves our store comes with a &euro;1,000 minimum insurance cover, so rest assured you won't be out of pocket if the worst happens. We also recommend insuring the mail to the value of your phone when you send it in for repairs. </p>
                                                        </div><div id="cms-heading-11" class="cms-heading  align-left align-left-md align-left-sm align-left-xs ">
                                                            <h3 class="cms-heading-tag  " style="margin-bottom:28px;color:#032549;font-size:20px;letter-spacing:0px;text-transform:none;font-weight:400;font-style:normal;font-family:AktivGrotesk-XBold;display:inline-block; ">
                                                                Can I Deliver My Device in Person?</h3>

                                                            <p class="cms-heading-desc" style="color:#032549;line-height:1.9;font-weight:400;margin-bottom:45px;">
                                                                Unfortunately, due to health and safety laws we cannot allow members of the public on our premises so we can only accept mail deliveries of your devices. </p>
                                                        </div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="cms-button-wrapper  align-right align-right-md align-right-sm align-center-xs  ">

                                                            <a style="margin-bottom:5px;" href="frequently-asked-questions.html" target="_self" class="btn btn-primary size-default">
                                                                <span>All FAQ <i class="fa fa-angle-right arrow"></i></span>
                                                            </a>

                                                        </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="cms-button-wrapper  align-left align-left-md align-left-sm align-center-xs  ">

                                                            <a href="services.html" target="_self" class="btn btn-default size-default">
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
            $('.smartphone').on('click',function(){
                console.log('hello');
                $('#post-1462').removeClass('hide');
                $('#post-1464').addClass('hide');
                $('#post-1466').addClass('hide');
            });
            $('.tab').on('click',function(){
                console.log('hello');
                $('#post-1464').removeClass('hide');
                $('#post-1462').addClass('hide');
                $('#post-1466').addClass('hide');
            });
            $('.laptop').on('click',function(){
                console.log('hello');
                $('#post-1466').removeClass('hide');
                $('#post-1464').addClass('hide');
                $('#post-1462').addClass('hide');
            });


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
    </script>

@endsection