@extends('templates.prc.layouts.prcapp')
@section('customstyle')
    <style type="text/css">
        .caret {
            cursor: pointer;
            user-select: none;
            /* Prevent text selection */
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
    <style id="cms_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">
        body .primary-menu > li > a,
        body .primary-menu .sub-menu li a {
            font-display: swap;
        }

        .site-footer {
        }

        .site-footer .bottom-footer .footer-widget-title,
        .site-footer .top-footer .footer-widget-title {
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
    <style id="cms_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">
        body .primary-menu > li > a,
        body .primary-menu .sub-menu li a {
            font-display: swap;
        }

        .site-footer {
        }

        .site-footer .bottom-footer .footer-widget-title,
        .site-footer .top-footer .footer-widget-title {
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
        #content {
            padding-top: 0px;
            padding-bottom: 98px;
        }

        footer.site-footer {
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1549883619914 {
            padding-bottom: 10px !important;
            background-image: url(/prc/images/slide-header.jpg) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1536051606545 {
            margin-top: 100px !important;
        }

        .vc_custom_1548662727621 {
            margin-top: -85px !important;
            background-image: url(/prc/images/Rounded-Rectangle-28.png) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1544155523770 {
            padding-top: 28px !important;
            padding-bottom: 70px !important;
        }

        .vc_custom_1544155726138 {
            padding-top: 70px !important;
            padding-bottom: 70px !important;
        }

        .vc_custom_1548662119899 {
            padding-top: 33px !important;
        }

        .vc_custom_1548835350924 {
            margin-top: -8px !important;
            margin-bottom: -160px !important;
            padding-top: 0px !important;
        }

        .vc_custom_1538558312795 {
            margin-bottom: 20px !important;
            padding-right: 0px !important;
        }

        .vc_custom_1548833661053 {
            padding-top: 8px !important;
        }

        .vc_custom_1548662514192 {
            padding-bottom: 17px !important;
        }

        .vc_custom_1548662602584 {
            padding-top: 6px !important;
        }

        .vc_custom_1538550292798 {
            margin-bottom: 100px !important;
        }

        .vc_custom_1548663507510 {
            margin-top: 83px !important;
            padding-top: 80px !important;
            padding-bottom: 48px !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: contain !important;
        }

        .mkGetEasyShareLinks-wrap {
    padding-top: 5px;
    padding-bottom: 5px;
    border-top: 1px solid #ebebeb;
    border-bottom: 1px solid #ebebeb;
    margin-bottom: 1rem;
}
.mk-any-share-links a {
    margin-right: 10px;
}
 
.mk-any-share-links svg {
    height: 18px;
    width: 18px;
    top: 3px;
    position: relative;
}
    </style>
@endsection
@section('content')

    <div class="page-title-container">
        <div id="pagetitle" class="page-title page-title-layout1 ">
            <div class="container">
                <div class="page-title-inner">
                    <div class="page-title-content clearfix">
                        <span class="back-link">Fix my device</span>
                        <strong>
                            <h1 class="page-title ft-heading-b">{{$repair->title }}
                                @unless(empty($product->name))
                                    : {{$product->name}}
                                @endunless
                            </h1>
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    


    <div id="content" class="site-content">
        <div class="content-inner">

            <div class="container content-container">
                <div class="row">
                    <div id="primary" class="content-area col-12">
                        <main id="main" class="site-main">
                            <div class="post-type-inner">
                                <div class="post-type-content">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="cms-service-menu  ">
                                                        <div id="fr-service-menu" class="fr-accordion  ">
                                                            <div class="content">

                                                                @foreach($itemsList as $item)

                                                                    <div class="card">
                                                                        <div class="card-header"
                                                                             id="brand_{{ $item->id }}" {{--onclick="functionGetCat({{ $item->id }})--}}
                                                                        ">
                                                                        <a data-toggle="collapse"
                                                                           data-target="#collapse-fr-service-menu2_{{ $item->id }}"
                                                                           aria-expanded="false"
                                                                           aria-controls="collapse-2">
                                                                            {{ $item->name }}
                                                                            <i class="zmdi zmdi-chevron-down"></i>
                                                                        </a>
                                                                    </div>
                                                                    @if($item->categories->count() > 0)
                                                                        <div id="collapse-fr-service-menu2_{{ $item->id }}"
                                                                             class="collapse"
                                                                             aria-labelledby="heading-2"
                                                                             data-parent="#fr-service-menu">
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
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-md-8">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                            <div id="cms-heading"
                                                     class="cms-heading  align-left align-left-md align-left-sm align-left-xs ">
                                                    <h3 class="cms-heading-tag  "
                                                        style="margin-bottom: 20px; color: #083260; font-size: 54px; letter-spacing: -.016em; text-transform: none; font-weight: 400; font-style: normal; display: inline-block;">
                                                        {{ $repair->title }}
                                                    </h3>

                                                </div>
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        @unless(empty($repair->description))
                                                            <p class="text-secondary">{!! nl2br($repair->description) !!}</p>
                                                        @endunless
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1561345237749">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div id="fr-grid-device-category"
                                                                     class="cms-grid fr-grid fr-grid-device-category default  ">
                                                                    <div class="row"> 
                                                                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12"
                                                                                 style="text-align: center;height: auto;padding: 5px; border-radius: 10px; box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.11);width: 100%" >
                                                                                <img src="{{ $repair->image  }}"
                                                                                     id="product-image"
                                                                                     style="max-width: 450px;max-height: 450px;"/>
                                                                            </div>
                                                                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                                                                           





                                                                            <div class="mkGetEasyShareLinks-wrap">
                        
                        <div class="mk-any-share-links wow animate__flipInX" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: flipInX;">
                            <a style="color: inherit !important;">&nbsp;&nbsp; Share this:</a>
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}">
                                <i class="fa fa-facebook"></i>
                                <img src="https://thelegalaffair.com/wp-content/themes/digitaleye/assets/img/icons/facebook.svg" class="img-fluid d-none" alt="facebook">
                            </a>
                    
                            <a target="_blank" href="https://twitter.com/intent/tweet?text=Awesome%20Blog!&amp;url={{url()->current()}}">
                                <i class="fa fa-twitter"></i>
                                <img src="https://thelegalaffair.com/wp-content/themes/digitaleye/assets/img/icons/twitter.svg" class="img-fluid d-none" alt="twitter">
                            </a>
                    
                            <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url={{url()->current()}}">
                                <i class="fa fa-linkedin"></i>
                                <img src="https://thelegalaffair.com/wp-content/themes/digitaleye/assets/img/icons/linkedin.svg" class="img-fluid d-none" alt="linkedin">
                            </a>
                    
                            <a target="_blank" href="https://wa.me/?text={{url()->current()}}/">
                                <i class="fa fa-whatsapp"></i>
                                <img src="https://thelegalaffair.com/wp-content/themes/digitaleye/assets/img/icons/whatsapp.svg" class="img-fluid d-none" alt="whatsapp">
                            </a>
                    
                    
                    
                            <a target="_blank" href="https://www.blogger.com/blog_this.pyra?u={{url()->current()}}">
                                <!-- <i class="fa fa-blogger"></i> -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M22.814 9.031h-1.95c-1 0-1.185-.764-1.185-1.707.001-4.045-3.272-7.324-7.308-7.324h-5.062c-4.037 0-7.309 3.279-7.309 7.324v9.352c0 4.045 3.272 7.324 7.309 7.324h9.383c4.036 0 7.308-3.279 7.308-7.324v-6.457c0-.657-.531-1.188-1.186-1.188zm-15.428-3.031h4.229c.765 0 1.385.671 1.385 1.5s-.62 1.5-1.386 1.5h-4.228c-.766 0-1.386-.671-1.386-1.5s.62-1.5 1.386-1.5zm9.134 12h-9.04c-.817 0-1.48-.672-1.48-1.5 0-.83.663-1.5 1.48-1.5h9.039c.817 0 1.48.67 1.48 1.5.001.828-.662 1.5-1.479 1.5z"></path>
                                </svg>
                                <img src="https://thelegalaffair.com/wp-content/themes/digitaleye/assets/img/icons/blogger.svg" class="img-fluid d-none" alt="blogger">
                            </a>
                    
                            <!-- <a href="javascript:void(0)" onclick="mkCopyCurrentPageUrl()">
                                <i class="fa fa-link"></i>
                            </a> -->
                        </div>
                                        </div>












                                                                            @if(empty($productrepairprice->price_range))
                                                                            <div class="col-sm-12"
                                                                                 style="background: #fad33c;margin: 5px;text-align: center;border-radius: 30px">
                                                                                <p style="color: #00303e;margin: 10px auto;">
                                                                                    Repair Price :
                                                                                    {{$repair->repair_price}}
                                                                                </p>
                                                                            </div>
                                                                        @endif
                                                                     
                                                                        {!! sc_html_render($repair->content) !!}
                                                                            </div> 
                                                                             
                                                                        
                                                                       
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div id="fr-fancybox-carousel"
                                                                     class="service-option-container  ">
                                                                    <h3>Repair Services</h3>
                                                                    <div class="service-options">


                                                                        {{--                                                                        Manoj added repair card --}}
                                                                        @unless(empty($repairs))
                                                                            <div class="row">
                                                                                @foreach($repairs as $repair)
                                                                                    <div class="col-md-6  col-xl-4">
                                                                                        <div class="repair-item">
                                                                                            <div class="image-repair">
                                                                                                <a href="/showRepair/{{$product->alias}}/{{$repair->alias}}">
                                                                                                    <img src="{{ $repair->image }}"
                                                                                                         alt="{{ $repair->title }}">
                                                                                                </a>
                                                                                            </div>
                                                                                            <h3>{{ $repair->title }}</h3>
                                                                                            <p class="content">{{ $repair->description }}</p>
                                                                                            <div class="meta">
                                                                                                {{ $repair->repair_price }}
                                                                                                <a href="/showRepair/{{$product->alias}}/{{$repair->alias}}">Choose
                                                                                                    Service</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        @endunless

                                                                        @if(empty($repairs))
                                                                            <div class="row">
                                                                                @foreach($repairlist as $repair2)
                                                                                    <div class="col-md-6  col-xl-4">
                                                                                        <div class="repair-item">
                                                                                            <div class="image-repair">
                                                                                                <a href="/showRepair/{{$repair2->alias}}">
                                                                                                    <img src="{{ $repair2->image }}"
                                                                                                         alt="{{ $repair2->title }}">
                                                                                                </a>
                                                                                            </div>
                                                                                            <h3>{{ $repair2->title }}</h3>
                                                                                            <p class="content">{{ $repair2->description }}</p>
                                                                                            <div class="meta">
                                                                                                {{ $repair2->repair_price }}
                                                                                                <a href="/showRepair/{{$repair2->alias}}">Choose
                                                                                                    Service</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>

                                                                        @endif


                                                                        {{--                                                                        End Manoj added repair card --}}

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
        jQuery(function ($) {
            $('.menu-page-title').removeClass('page-title-non-bg');
            $('.menu-page-title').removeClass('transparent');
            $('.menu-page-title').addClass('has-page-title');
            $('body').addClass('single-services');

            var toggler = document.getElementsByClassName("caret");
            var i;

            for (i = 0; i < toggler.length; i++) {
                toggler[i].addEventListener("click", function () {
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
            }).done(function (b) {
                var list = '';
                b.forEach(function (b) {
                    list += '<li class="">';
                    list += '<a href="/shop/c/' + b.brand.alias + '/' + b.alias + '" </a>';
                    list += '<i class="zmdi zmdi-chevron-right"></i>';
                    list += '<span>' + b.description.title + '</span></a></li>';
                });
                $('#list_' + ids).html('');
                $('#list_' + ids).append(list);
            });

        }
    </script>

@endsection