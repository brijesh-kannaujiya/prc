@extends('templates.prc.layouts.prcapp')
@section('customstyle')
    <style type="text/css">
        .caret {
            cursor: pointer;
            user-select: none; /* Prevent text selection */
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
           /* padding-top: 74px !important;*/
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
    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1549883619914{padding-bottom: 10px !important;background-image: url(/prc/iamges/slide-header.jpg) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1536051606545{margin-top: 100px !important;}.vc_custom_1548662727621{margin-top: -85px !important;background-image: url(/prc/images/Rounded-Rectangle-28.png) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1544155523770{padding-top: 28px !important;padding-bottom: 70px !important;}.vc_custom_1544155726138{padding-top: 70px !important;padding-bottom: 70px !important;}.vc_custom_1548662119899{padding-top: 33px !important;}.vc_custom_1548835350924{margin-top: -8px !important;margin-bottom: -160px !important;padding-top: 0px !important;}.vc_custom_1538558312795{margin-bottom: 20px !important;padding-right: 0px !important;}.vc_custom_1548833661053{padding-top: 8px !important;}.vc_custom_1548662514192{padding-bottom: 17px !important;}.vc_custom_1548662602584{padding-top: 6px !important;}.vc_custom_1538550292798{margin-bottom: 100px !important;}.vc_custom_1548663507510{margin-top: 83px !important;padding-top: 80px !important;padding-bottom: 48px !important;background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}</style>
@endsection
@section('content')

    {{--<div class="page-title-container">
        <div id="pagetitle" class="page-title page-title-layout1 ">
            <div class="container">
                <div class="page-title-inner">
                    <div class="page-title-content clearfix">
                        <span class="back-link">Fix my device</span>
                        <h1 class="page-title ft-heading-b">Select Your Device Type</h1>   </div>
                </div>
            </div>
        </div>
    </div>--}}
    </div>
    </div>
    <div id="content" class="site-content">
        <div class="content-inner" >

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
                                                        <div id="fr-service-menu"
                                                             class="fr-accordion  ">
                                                            <div class="content">

                                                                @foreach($itemsList as $item)

                                                                    <div class="card">
                                                                        <div class="card-header" id="brand_{{ $item->id }}" {{--onclick="functionGetCat({{ $item->id }})--}}">
                                                                        <a data-toggle="collapse" data-target="#collapse-fr-service-menu2_{{ $item->id }}"
                                                                           aria-expanded="false" aria-controls="collapse-2">
                                                                            {{ $item->name }}
                                                                            <i class="zmdi zmdi-chevron-down"></i>
                                                                        </a>
                                                                    </div>
                                                                    @if($item->categories->count() > 0)
                                                                        <div id="collapse-fr-service-menu2_{{ $item->id }}"
                                                                             @if($brand->id != $item->id)
                                                                             class="collapse"
                                                                             @endif
                                                                             aria-labelledby="heading-2" data-parent="#fr-service-menu">

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
                                                            Choose Your Device Type</h3>

                                                    </div>
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">

                                                        </div>
                                                    </div>
                                                    <div
                                                            class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1561345237749">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div id="fr-grid-device-category"
                                                                         class="cms-grid fr-grid fr-grid-device-category default  ">
                                                                        <div class="row">
                                                                            @foreach($catList as $taxon)
                                                                                <div class="repair-item col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                                                                    <div class="image-item">
                                                                                        <a href="{{ route('product.category', [$brand->alias, $taxon->alias]) }}"><img src="{{ $taxon->getImage()}}" alt="{{ $taxon->name }}"></a>
                                                                                    </div>
                                                                                    <h3>
                                                                                        <a href="{{ route('product.category', [$brand->alias, $taxon->alias]) }}">{{ $taxon->title }}</a>
                                                                                    </h3>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div>
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
        jQuery(function($) {
            $('.menu-page-title').removeClass('page-title-non-bg');
            $('.menu-page-title').removeClass('transparent');
            $('.menu-page-title').addClass('has-page-title');
            $('body').addClass('single-services');

            var toggler = document.getElementsByClassName("caret");
            var i;

            for (i = 0; i < toggler.length; i++) {
                toggler[i].addEventListener("click", function() {
                    this.parentElement.querySelector(".nested").classList.toggle("active");
                    this.classList.toggle("caret-down");
                });
            }

        });

        function functionGetCat(id) {
            var ids = id;

            //console.log("this is brand id "+ids);
            $.ajax({
                url: '/frontend/getCatByBrand/id?brandId=' + ids,
                crossDomain: true,
                dataType: 'json'
            }).done(function(b) {
                //console.log("result is "+b);
                var list='';
                b.forEach(function(b) {
                    list +=  '<li class="">';
                    list +=  '<a href="/shop/c/'+b.brand.alias+'/'+b.alias+'" </a>';
                    list +=  '<i class="zmdi zmdi-chevron-right"></i>';
                    list +=  '<span>'+b.description.title+'</span></a></li>';
                });
                $('#list_'+ids).html('');
                $('#list_'+ids).append(list);
            });

        }
    </script>

@endsection