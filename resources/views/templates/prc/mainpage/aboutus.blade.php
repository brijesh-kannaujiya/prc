@extends('templates.prc.layouts.prcapp') @section('title')

    <title>About Us : Phone Repair Shop &amp; Services | Phone
        Repair Centre</title>
    <style type="text/css">
        img.wp-smiley, img.emoji {
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
    <style id='tekhfixers-theme-inline-css' type='text/css'>
        @media screen and(max-width:991px) {
        }

        .primary-menu>li>a {
            color: #b3bec8
        }

        .primary-menu>li>a:hover {
            color: #32eb9a
        }

        .primary-menu>li.current_page_item>a, .primary-menu>li.current-menu-item>a,
        .primary-menu>li.current_page_ancestor>a, .primary-menu>li.current-menu-ancestor>a
        {
            color: #32eb9a
        }

        #site-header-wrap.header-layout .headroom--pinned:not (.headroom--top ) .primary-menu>li>a
        {
            color: #b3bec8
        }

        #site-header-wrap.header-layout .headroom--pinned:not (.headroom--top ) .primary-menu>li>a:hover
        {
            color: #32eb9a
        }

        #site-header-wrap.header-layout .headroom--pinned:not (.headroom--top ) .primary-menu>li.current_page_item>a,
        .headroom--pinned:not (.headroom--top ) .primary-menu>li.current-menu-item>a,
        .headroom--pinned:not (.headroom--top ) .primary-menu>li.current_page_ancestor>a,
        .headroom--pinned:not (.headroom--top ) .primary-menu>li.current-menu-ancestor>a
        {
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
            .content-row #primary, .content-row #secondary {
                padding-left: 25px !important
            }
            .content-row #primary, .content-row #secondary {
                padding-right: 25px !important
            }
        }

        @media screen and(min-width:992px) {
        }

        .site-footer {
            background: #022243;
            background: -moz-linear-gradient(to right, #022243, #083260);
            background: -webkit-linear-gradient(to right, #022243, #083260);
            background: -o-linear-gradient(to right, #022243, #083260);
            background: -ms-linear-gradient(to right, #022243, #083260);
            background: linear-gradient(to right, #022243, #083260);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#022243",
            endColorstr="#083260", GradientType=0)
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
           /* margin-top: 66px !important;*/
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
@endsection @section('content')
    <div class="page-title-container">
        <div id="pagetitle" class="page-title page-title-layout1 has-subtitle">
            <div class="container">
                <div class="page-title-inner">
                    <div class="page-title-content clearfix">
                        <span class="back-link">What we’re about</span>
                        <h1 class="page-title ft-heading-b">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div id="content" class="site-content">
        <div class="content-inner">
            <svg style="fill: #B8F6DB; top: 0px; bottom:" id="svg-top"
                 xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 preserveAspectRatio="xMidYMid" width="195.875" height="1318.28"
                 viewBox="0 0 195.875 1318.28">
                <defs>
                    <filter id="gradient-overlay-2"
                            filterUnits="userSpaceOnUse">
                        <feImage x="-829.406" y="0"
                                 width="1025.281" height="1318.2800000000002"
                                 preserveAspectRatio="none"
                                 xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMTAyNS4yODEiIGhlaWdodD0iMTMxOC4yODAwMDAwMDAwMDAyIj48bGluZWFyR3JhZGllbnQgaWQ9ImdyYWQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB5MT0iMTQ2LjUiIHgyPSIxMDI1LjI4IiB5Mj0iMTE3MS43OCI+CiAgPHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjMWJkZDg4Ii8+CiAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMzJlYjlhIi8+CjwvbGluZWFyR3JhZGllbnQ+CjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiLz48L3N2Zz4=" />
                        <feComposite operator="in"
                                     in2="SourceGraphic" />
                        <feBlend in2="SourceGraphic"
                                 result="gradientFill" />
                    </filter>
                </defs>
                <path style="fill: #B8F6DB"
                      d="M-540.968,20.684 C-540.968,20.684 -687.378,86.487 -694.760,174.843 C-702.142,263.200 -643.186,274.374 -667.132,338.769 C-691.079,403.164 -765.483,413.324 -785.981,496.763 C-807.750,585.376 -722.107,571.956 -727.171,690.819 C-732.235,809.683 -978.187,852.597 -688.556,1167.735 C-398.925,1482.874 -139.906,1235.432 -115.898,1040.448 C-91.891,845.463 42.695,803.563 95.851,754.793 C149.006,706.023 316.246,497.102 46.140,203.210 C-223.966,-90.683 -540.968,20.684 -540.968,20.684 Z"
                      class="cls-2" />
            </svg>

            <svg style="top: 1200px; bottom: 0px" id="svg-bottom"
                 xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 preserveAspectRatio="xMidYMid" width="446.28" height="1030.78"
                 viewBox="0 0 446.28 1030.78">
                <defs>
                    <filter id="gradient-overlay-3"
                            filterUnits="userSpaceOnUse">
                        <feImage x="0" y="0" width="1318.16"
                                 height="1030.7800000000002" preserveAspectRatio="none"
                                 xlink:href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMTMxOC4xNiIgaGVpZ2h0PSIxMDMwLjc4MDAwMDAwMDAwMDIiPjxsaW5lYXJHcmFkaWVudCBpZD0iZ3JhZCIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIxNDMuNjkiIHgyPSIxMTc0LjQ3IiB5Mj0iMTAzMC43OCI+CiAgPHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjMDIyMjQzIi8+CiAgPHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMDgzMjYwIi8+CjwvbGluZWFyR3JhZGllbnQ+CjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiLz48L3N2Zz4=" />
                        <feComposite operator="in"
                                     in2="SourceGraphic" />
                        <feBlend in2="SourceGraphic"
                                 result="gradientFill" />
                    </filter>
                </defs>
                <path style="fill: #ABB8C3;"
                      d="M1299.583,301.566 C1299.583,301.566 1235.945,154.230 1147.697,145.545 C1059.449,136.859 1047.402,195.631 983.361,170.740 C919.320,145.850 910.260,71.319 827.122,49.594 C738.831,26.523 750.985,112.336 632.195,105.517 C513.405,98.698 474.127,-147.810 154.703,137.070 C-164.720,421.950 78.893,684.543 273.525,711.425 C468.157,738.308 508.066,873.470 556.051,927.329 C604.035,981.187 810.485,1151.462 1108.374,885.787 C1406.264,620.113 1299.583,301.566 1299.583,301.566 Z"
                      class="cls-3" />
            </svg>
            <div class="container content-container">
                <div class="row content-row">
                    <div id="primary" class="content-area content-full-width col-12">
                        <main id="main" class="site-main">

                            <article id="post-690"
                                     class="post-690 page type-page status-publish hentry">
                                <div class="entry-content clearfix">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner vc_custom_1548240256561">
                                                <div class="wpb_wrapper">
                                                    <div id="cms-heading"
                                                         class="cms-heading layout1  align-left align-left-md align-left-sm align-left-xs ">
                                                        {!! sc_html_render(sc_link_content('aboutus-heading-1')) !!}
                                                    </div>
                                                    <div
                                                            class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1547524006290 color-87">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            {!! sc_html_render(sc_link_content('aboutus-heading-1-content')) !!}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                                class="absolute-image-left wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner vc_custom_1548410880587">
                                                <div class="wpb_wrapper">
                                                    <div
                                                            class="wpb_single_image wpb_content_element vc_align_center">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <img width="580" height="542"
                                                                     src="/prc/images/iPhoneX.png"
                                                                     class="vc_single_image-img attachment-full" alt=""
                                                                     loading="lazy"
                                                                     srcset="/prc/images/iPhoneX.png 580w, /prc/images/iPhoneX-450x421.png 450w"
                                                                     sizes="(max-width: 580px) 100vw, 580px" />
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="">
                                                        <style type="text/css">
                                                            @media screen and (min-width: 992px) {
                                                                #fr-space-5fced5c2a96e7 .fr-space {
                                                                    height: 129px;
                                                                }
                                                            }

                                                            @media ( min-width : 768px) and (max-width: 991px) {
                                                                #fr-space-5fced5c2a96e7 .fr-space {
                                                                    height: 150px;
                                                                }
                                                            }

                                                            @media ( min-width : 576px) and (max-width: 767px) {
                                                                #fr-space-5fced5c2a96e7 .fr-space {
                                                                    height: 50px;
                                                                }
                                                            }
                                                        </style>
                                                        <div class="fr-space"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                                         class="vc_row wpb_row vc_row-fluid off-overflow">
                                        <div
                                                class="absolute-image-right wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner vc_custom_1548411031388">
                                                <div class="wpb_wrapper">
                                                    <div
                                                            class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1548295976419">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                <img width="780" height="542"
                                                                     src="/prc/images/google-pixel2-xl-v02.png"
                                                                     class="vc_single_image-img attachment-full" alt=""
                                                                     loading="lazy"
                                                                     srcset="/prc/images/google-pixel2-xl-v02.png 780w, /prc/images/google-pixel2-xl-v02-600x417.png 600w, /prc/images/google-pixel2-xl-v02-768x534.png 768w"
                                                                     sizes="(max-width: 780px) 100vw, 780px" />
                                                            </div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner vc_custom_1548668925244">
                                                <div class="wpb_wrapper">
                                                    <div id="cms-heading-2"
                                                         class="cms-heading layout1  align-right align-right-md align-right-sm align-right-xs ">
                                                        {!! sc_html_render(sc_link_content('aboutus-heading-2')) !!}
                                                    </div>
                                                    <div
                                                            class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1548411097022 color-87 text-align-right">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            {!! sc_html_render(sc_link_content('aboutus-heading-2-content')) !!}
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
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="fr-space-5fced5c2aab76">
                                                        <style type="text/css">
                                                            @media screen and (min-width: 992px) {
                                                                #fr-space-5fced5c2aab76 .fr-space {
                                                                    height: 130px;
                                                                }
                                                            }

                                                            @media ( min-width : 768px) and (max-width: 991px) {
                                                                #fr-space-5fced5c2aab76 .fr-space {
                                                                    height: 100px;
                                                                }
                                                            }

                                                            @media ( min-width : 576px) and (max-width: 767px) {
                                                                #fr-space-5fced5c2aab76 .fr-space {
                                                                    height: 50px;
                                                                }
                                                            }
                                                        </style>
                                                        <div class="fr-space"></div>
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
                                                        <p class="subtitle">How it Works</p>
                                                        <h3 class="title" style="color: #ffffff">Our Quick
                                                            &amp; Easy 3 Stages Process</h3>
                                                    </div>
                                                    <div
                                                            class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1547533039640">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div id="fr-step" class="fr-steps ">
                                                                        <div
                                                                                class="fr-step-item  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                                            <div class="fr-step-content">
                                                                                <h3 class="fr-title">
                                                                                    <img width="55" height="55"
                                                                                         src="/prc/images/Vector-Smart-Object.png"
                                                                                         class="attachment-full" alt="" loading="lazy" />Send
                                                                                    Us Your Device
                                                                                </h3>
                                                                                <p class="fr-content">
                                                                                    Once you have selected a service you require and have
                                                                                    completed checkout. Securely package your device(s)
                                                                                    in an insured box and send to the address shown in
                                                                                    your invoice.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-angle-right"></i>
                                                                        <div
                                                                                class="fr-step-item  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                                            <div class="fr-step-content">
                                                                                <h3 class="fr-title">
                                                                                    <img width="54" height="54"
                                                                                         src="/prc/images/Vector-Smart-Object-1.png"
                                                                                         class="attachment-full" alt="" loading="lazy" />We’ll
                                                                                    Get to Work
                                                                                </h3>
                                                                                <p class="fr-content">Then, once we receive your
                                                                                    package a trained technician will begin diagnosing
                                                                                    the issues. Once the repair has been completed your
                                                                                    package will be mailed back to you.</p>
                                                                            </div>
                                                                        </div>
                                                                        <i class="fa fa-angle-right"></i>
                                                                        <div
                                                                                class="fr-step-item  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                                            <div class="fr-step-content">
                                                                                <h3 class="fr-title">
                                                                                    <img width="53" height="53"
                                                                                         src="/prc/images/Vector-Smart-Object-2.png"
                                                                                         class="attachment-full" alt="" loading="lazy" />Return
                                                                                    Back to You
                                                                                </h3>
                                                                                <p class="fr-content">When all the necessary
                                                                                    repairs/replacements have been made, we then package
                                                                                    your device(s) in an insured package and aim to get
                                                                                    it with you the very next day!</p>
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
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1548411424106">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="cms-heading-4"
                                                         class="cms-heading layout1  align-center align-center-md align-center-sm align-center-xs ">
                                                        <p class="subtitle">Our Amazing Team</p>
                                                        <h3 class="title">Our Professional Technicians</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_custom_1548176129188 vc_row-o-content-middle vc_row-flex">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                            <div class="vc_column-inner vc_custom_1547538666554">
                                                <div class="wpb_wrapper">
                                                    <div id="fr-step-2" class="fr-team ">
                                                        <div class="fr-team-item ">
                                                            <div class="avatar">
                                                                <div class="over-image">
                                                                    <img width="170" height="170"
                                                                         src="/prc/images/dummy_image.png"
                                                                         class="attachment-full" alt="" loading="lazy" />
                                                                </div>
                                                            </div>
                                                            <h3 class="fr-title">Rakesh Waghela</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                            <div class="vc_column-inner vc_custom_1547538678230">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1547537702762">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div id="fr-step-3" class="fr-team ">
                                                                        <div class="fr-team-item ">
                                                                            <div class="avatar">
                                                                                <div class="over-image">
                                                                                    <img width="170" height="170"
                                                                                         src="/prc/images/dummy_image.png"
                                                                                         class="attachment-full" alt="" loading="lazy" />
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="fr-title">Bharat Dhingra</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                            <div class="vc_column-inner vc_custom_1547538684623">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1547537698645">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div id="fr-step-5" class="fr-team ">
                                                                        <div class="fr-team-item ">
                                                                            <div class="avatar">
                                                                                <div class="over-image">
                                                                                    <img width="170" height="170"
                                                                                         src="/prc/images/dummy_image.png"
                                                                                         class="attachment-full" alt="" loading="lazy" />
                                                                                </div>
                                                                            </div>
                                                                            <h3 class="fr-title">Robin Narang</h3>
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
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1548412273834">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="cms-heading-5"
                                                         class="cms-heading layout1  align-center align-center-md align-center-sm align-center-xs ">
                                                        <p class="subtitle">Don’t be afraid to ask!</p>
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
                                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1548413243634">
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                            class="cms-button-wrapper  align-right align-right-md align-right-sm align-center-xs  ">

                                                        <a style="margin-bottom: 15px;"
                                                           href="{{   route('faq') }}"
                                                           target="_self" class="btn btn-primary size-default"> <span>All
														FAQ <i class="fa fa-angle-right"></i>
												</span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div
                                                            class="cms-button-wrapper  align-left align-left-md align-left-sm align-center-xs  ">

                                                        <a
                                                                href="{{ route('product.showbrand') }}"
                                                                target="_self" class="btn btn-default size-default"> <span>Fix
														My Device <i class="fa fa-angle-right"></i>
												</span>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                                         class="vc_row wpb_row vc_row-fluid vc_custom_1548413422387 before-carousel-after">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="fr-testimonial-carousel"
                                                         class="fr-testimonial-carousel default owl-carousel  "
                                                         data-item-xs=1 data-item-sm=1 data-item-md=1 data-item-lg=1
                                                         data-margin=50 data-loop=true data-autoplay=false
                                                         data-autoplaytimeout=5000 data-smartspeed=250
                                                         data-center=true data-arrows=true data-bullets=true
                                                         data-stagepadding=150 data-rtl=false>
                                                        @foreach(sc_testimonial() as $testimonial)
                                                            <div class="fr-testimonial-item ">
                                                                <div class="fr-testimonial-item-inner">
                                                                    {!! sc_html_render($testimonial->content) !!}
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width vc_clearfix"></div>
                                </div>
                                <!-- .entry-content -->

                            </article>
                            <!-- #post-690 --> </main>
                        <!-- #main -->
                    </div>
                    <!-- #primary -->


                </div>
            </div>

        </div>
        <!-- #content inner -->
    </div>
    <!-- #content -->

@endsection @section('afterBottom')

    <script type="text/javascript">
        jQuery(function($) {
            $('.menu-page-title').removeClass('page-title-non-bg');
            $('.menu-page-title').removeClass('transparent');
            $('.menu-page-title').addClass('has-page-title');
            $('body').addClass('single-services');

        });
    </script>

@endsection
