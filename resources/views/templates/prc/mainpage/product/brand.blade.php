@extends('templates.prc.layouts.prcapp')
@section('customstyle')
    <style type="text/css">
        /* manoj custom start */
        /* :root {
            --swiper-theme-color: #ffe303 !important;
            --site-border-radius: 5px;
            --primary-color: #ffe303;
            --secondary-color: #02303e;
        } */

        body.openResourceNav #content {
            position: relative;
            z-index: 1000;
        }

        .site-content {
            margin-top: 0 !important;
            padding-top: 0 !important;
        ;
        }

        .post-type-content {
            margin-top: 30px;
        }


        .mk-repair-item-wrap {
            background: #fff;
            padding: 15px;
            /* margin-bottom: 30px; */
            border-radius: 15px;
            border: 1px solid var(--secondary-color);
        }

        .mk-repair-item-wrap h3 {
            margin-bottom: 0px;
            font-size: calc(0.1vw + 15px) !important;
            margin-top: 15px !important;
        }

        .mk-repair-item-wrap .image-item {
            margin: 0 auto !important;
            background: unset !important;
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            max-width: 100% !important;
            max-height: auto !important;
            min-height: unset !important;
            height: 170px;
            width: 170px;
            border: none !important;
        }

        .mk-repair-item-wrap .image-item img {
            padding: 0 !important;
            max-width: 100% !important;
            min-width: unset !important;
            min-height: unset !important;
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            padding: 1em !important;
        }

        .image-item>a {
            position: relative;
        }

        .image-item:before {
            content: '';
            border: 6px solid var(--secondary-color);
            border-left-color: var(--primary-color);
            border-right-color: var(--primary-color);
            display: block;
            height: 100%;
            width: 100%;
            border-radius: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: #fff;
        }

        .categoryActive+a {
            display: none !important;
        }

        .categoryActive.active+a {
            display: inline-block !important;
        }

        .mk-search-input {
            line-height: 1 !important;
            margin-bottom: 1rem !important;

        }

        .cms-service-menu .fr-accordion .card {
            margin-bottom: 10px !important;
        }

        .paginatonWrap {
            margin-top: 15px;
            margin-bottom: 30px;
        }

        .paginatonWrap .pagination {
            margin-left: 0;
            flex-wrap: wrap;
        }

        .paginatonWrap .page-item .page-link {
            color: var(--secondary-color) !important;
        }

        .paginatonWrap .page-item.active .page-link {
            background-color: var(--secondary-color);
            background: var(--secondary-color);
            border-color: var(--secondary-color);
            color: #fff !important;
        }

        a.closeResourceSidebar {
            display: none;
        }

        .floating-button-resource-page {
            display: none;
        }

        .mk-no-results-wrap {
            margin-bottom: 1rem;
        }

        .mk-no-results-wrap h4 {
            margin-bottom: 1rem;
        }

        .mk-no-results-wrap button {
            display: none;
        }

        .header-product-search {
            top: 0;
            left: 0;
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
            background: var(--primary-color);
            z-index: 99;
            margin-bottom: 1rem;
            display: none !important;
            position: sticky;
        }

        .header-product-search.sticky {
            position: fixed;
        }

        .header-product-search .btn-primary {
            position: relative;
        }

        .header-product-search .zmdi-search {
            font-size: 32px;
            position: absolute;
            left: 15px;
            top: 15px;
        }

        @media screen and (max-width:991px) {

            .mk-no-results-wrap button {
                display: inline-block;
            }

            div#tidio-chat {
                display: none;
            }

            .floating-button-resource-page {
                display: inline-block;
                position: fixed;
                cursor: pointer;
                z-index: 99 !important;
                font-size: 15px !important;
                padding: 10px 15px !important;
                transform: translate(-50%, -50%) !important;
                bottom: 10px !important;
                left: 50% !important;
                background: var(--secondary-color);
                color: #fff;
                border-radius: 50px;
                width: max-content;
            }

            .floating-button-resource-page i {
                font-size: 20px;
            }

            .resource-page-sidebar-col-wrap {
                background-color: #fff;
                position: fixed;
                top: 0;
                left: -310px;
                z-index: 1000;
                width: 300px;
                height: 100%;
                -webkit-transition-duration: .5s;
                transition-duration: .5s;
                padding: 15px;
                box-shadow: 0 5px 20px rgb(0 0 0 / 10%);
                display: block;
                overflow-x: hidden;
                overflow-y: scroll;

            }

            .resource-page-sidebar-col-wrap .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            a.closeResourceSidebar {
                position: absolute;
                top: 15px;
                right: 15px;
                z-index: 10;
                display: block;
                font-size: 22px;
                line-height: 1.4;
            }
        }

        @media screen and (max-width:576px) {
            .header-product-search {
                display: block !important;
            }

            .mk-repair-item-wrap .image-item {
                height: 130px;
                width: 130px;
            }

            .mk-repair-item-wrap .image-item>a {
                height: 100px;
                width: 100px;
            }
        }

        /* end manoj custom */
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

        footer.site-footer {}
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

        .swiper {
            width: 100%;
        }
    </style>
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

        footer.site-footer {}
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
    </style>
@endsection
@section('content')



    <div class="page-title-container d-none">
        <div id="pagetitle" class="page-title page-title-layout1 ">
            <!-- <div class="page-title-inner">
                    <div class="page-title-content clearfix">
                        {!! sc_html_render(sc_link_content('repair-title')) !!}   </div>
                </div> -->
        </div>
    </div>
    </div>
    </div>


    <div id="content" class="site-content">
        <div class="content-inner">
            <div class="container-fluid p-0 overflow-hidden">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php
                        $banners = \App\Models\ShopBanner::where('status', 1)->get();
                        foreach ($banners as $banner) {
                            // echo '<pre>';
                            // print_r($value->toArray());
                            // echo '</pre>';
                            // die();
                            ?>
                        <div class="swiper-slide">
                            <a href="{{ route('banner.click',['id' => $banner->id]) }}" target="{{ $banner->target }}">
                                <img src="{{ asset($banner->image) }}" style="width:100%">
                            </a>
                        </div>
                            <?php
                        }
                        ?>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>

            </div>
            <div class="container content-container">
                <div class="row">
                    <div id="primary" class="content-area col-12">
                        <main id="main" class="site-main">
                            <div class="post-type-inner">
                                <div class="post-type-content">
                                    <div class="row">
                                        <div onclick="openResourceNav()" class="floating-button-resource-page">Browse Categories</div>
                                        <div id="resource-page-sidebar-col-wrap" class="col-md-12 col-lg-4 resource-page-sidebar-col-wrap">
                                            <a href="javascript:void(0)" class="closeResourceSidebar" onclick="closeNav()">×</a>
                                            <div class="resource-page-sidebar">
                                                <form id="productSearchForm">
                                                    <input type="hidden" id="catid" name="catid" value="">
                                                    <div class="cms-service-menu  ">
                                                        <div id="fr-service-menu" class="fr-accordion">
                                                            <div class="content">
                                                                <div class="page-title-inner ml-2">
                                                                    <h4 class="page-title ft-heading-b">Filters</h4>
                                                                </div>
                                                                <div class="mb-4">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <label class="mb-2">Search model</label>
                                                                            <input type="search" name="filter" class="form-control mk-search-input" placeholder="ex: samsung galaxy note" />
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <button type="button" onclick="loadDataFromSearchForm()" class="btn btn-primary mk-search-btn">Search</button>
                                                                            <button type="button" onclick="resetSearchFilters()" class="btn btn-secondary mk-search-btn">Reset filters</button>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                @foreach($itemsList as $item)
                                                                    <div class="card">
                                                                        <div class="card-header" id="brand_{{ $item->id }}" {{--onclick="functionGetCat({{ $item->id }})--}}">
                                                                        <a data-toggle="collapse" data-target="#collapse-fr-service-menu2_{{ $item->id }}" aria-expanded="false" aria-controls="collapse-2">
                                                                            {{ $item->name }}
                                                                            <i class="zmdi zmdi-chevron-down"></i>
                                                                        </a>
                                                                    </div>
                                                                    @if($item->categories->count() > 0)

                                                                        <div id="collapse-fr-service-menu2_{{ $item->id }}" class="collapse" aria-labelledby="heading-2" data-parent="#fr-service-menu">
                                                                            <div class="card-body">
                                                                                <ul class="ul-categories" {{--id="list_{{ $item->id }}"--}}>
                                                                                    @php $i=0; @endphp
                                                                                    @foreach($item->categories as $cat)
                                                                                        <li class="categories">
                                                                                        
                                                                                <span class="caret">
                                                                                    <!-- <a href="/prc/brand/{{$item->alias}}/{{$cat->alias}}">
                                                                                                {{$cat->description->title}}
                                                                                    </a> -->
                                                                                   
                                                                                </span>
                                                                                 <a href="javascript:void(0)" data-category-title="{{$cat->description->title}}" data-categoryId="{{$cat->id}}" id="categoryActive{{$cat->id}}" class="categoryActive">
                                                                                        {{$cat->description->title}}
                                                                                    </a>
                                                                                    <a href="javascript:void(0)" onclick="resetCatIDFilter()">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                                                                        </svg>
                                                                                    </a>
                                                                                            @if($i==0)
                                                                                                <input type="hidden" id="defaultitem" value="{{$cat->id}}" />
                                                                                            @endif
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
                                                                                        @php $i++; @endphp
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
                                            </form>
                                        </div>
                                    </div>



                                    <div class="col-md-12 col-lg-8" id="mainProductItemColWrap">

                                        <div class="header-product-search">
                                            <div class="container">
                                                <form id="headerProductSearchForm">
                                                    <div class="input-group">
                                                        <input placeholder="ex: samsung galaxy note" required type="text" class="form-control header-product-search-text" placeholder="Search">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-primary" type="submit">
                                                                <i class="zmdi zmdi-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div style="display:none;" class="col-md-12 productPreloaderWrap">
                                                <h4>Loading...</h4>
                                            </div>


                                            <div class="col-md-12">
                                                <p>
                                                    <b>Showing: </b> <span class="from_result"></span>
                                                    - <span class="to_result"></span> of <span class="total_result"></span>
                                                </p>
                                            </div>
                                            <div style="display: none;" class="col-md-12 selectedBrandWrap">
                                                <p>
                                                    <b id="SearchedAreiaBrand">Searched Brand: </b> <span class="selectedSearchBrandext"></span>
                                                    <a onclick="resetSearchFilters()"  href="javascript:void(0)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"></path>
                                                        </svg>
                                                    </a>
                                                </p>
                                            </div>


                                            <div style="display: none;" class="col-md-12 selectedCategoryWrap">
                                                <p>
                                                    <b id="SearchedAreia">Searched category: </b> <span class="selectedSearchCategoryText"></span>
                                                    <a onclick="resetSearchFilters()" id="BrandFileter"  href="javascript:void(0)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"></path>
                                                        </svg>
                                                    </a>
                                                </p>
                                            </div>

                                            <div style="display: none;" class="col-md-12 selectedSearchTextWrap">
                                                <p>
                                                    <b>Searched model: </b> <span class="selectedSearchText">Phone name</span>
                                                    <a onclick="unsetSearchFilterFromManual()" href="javascript:void(0)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"></path>
                                                        </svg>
                                                    </a>
                                                </p>
                                            </div>

                                            <div style="display:none;" class="col-md-12 mk-no-results-wrap">
                                                <h4>No results found.</h4>
                                                <button onclick="openResourceNav()" class="btn">Browse Categories</button>
                                            </div>

                                            <div class="col-md-12 itemContentWrap" style="display:none ;">
                                                <div class="row">
                                                    <div class="col-md-12" id="productsHtmlmodel">
                                                        <h4>Choose Your Model</h4>
                                                    </div>
                                                </div>
                                                <div class="row productsHtmlWrap">
                                                </div>
                                                <div class="row">
                                                    <div class="paginatonWrap col-md-12">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row itemlist">
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <p>{!! sc_html_render(sc_link_content('repair-content')) !!}</p>
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script type="text/javascript">
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
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
                    // this.parentElement.querySelector(".nested").classList.toggle("active");
                    // this.classList.toggle("caret-down");
                });
            }

        });

        function functionGetCat(id) {
            var ids = id;
            $.ajax({
                url: '/frontend/getCatByBrand/id?brandId=' + ids,
                crossDomain: true,
                dataType: 'json'
            }).done(function(b) {
                console.log("result is " + b);
                var list = '';
                b.forEach(function(b) {
                    list += '<li class="">';
                    list += '<a href="/shop/c/' + b.brand.alias + '/' + b.alias + '" </a>';
                    list += '<i class="zmdi zmdi-chevron-right"></i>';
                    list += '<span>' + b.description.title + '</span></a></li>';
                });
                $('#list_' + ids).html('');
                $('#list_' + ids).append(list);
            });

        }


        var productApiURL = '/api/productslist';
        var brandApiURL = '/api/brands'
        var productSearchFormEl = $('#productSearchForm');
        var catIDEL = $('#catid');
        var catArchiveEls = $(".categoryActive");

        function openResourceNav() {
            document.getElementById("resource-page-sidebar-col-wrap").style.left = "0";
            $('body').addClass('openResourceNav');
        }

        function closeNav() {
            document.getElementById("resource-page-sidebar-col-wrap").style.left = "-310px";
            $('body').removeClass('openResourceNav');
        }

        /**
         * resetCatIDFilter
         */
        function resetCatIDFilter() {
            event.preventDefault();
            $(".categoryActive").removeClass('active');
            catIDEL.val('');
            setTimeout(function() {
                showProducts();
            });
        }
        /**
         * resetSearchFilters
         */
        function resetSearchFilters() {
            productSearchFormEl.trigger("reset");
            catArchiveEls.removeClass('active'); // unset active class from selected category
            catIDEL.val(''); // do blank category id filter
              $('#SearchedAreia').text('')
                         selectedCategoryWrap.hide();
                         selectedBrandWrap.hide();
            setTimeout(function() {
                // showProducts();
                showBrands();
            });
        }




        catIDEL.on("change paste keyup", function() {
            let catId = $(this).val();
            if (typeof catId == 'undefined' || !catId) {

                catArchiveEls.removeClass('active'); // unset active class from selected category
            }
        });

        /**
         * loadDataFromSearchForm
         * Manage data from search filters
         */
        function loadDataFromSearchForm() {
            // load data
            let action_url = productApiURL;
            showProducts(action_url);
        }


        $(document).on('submit', '#productSearchForm', function() {
            event.preventDefault();
            loadDataFromSearchForm();
        });

        // headerProductSearchForm
        $(document).on('submit', '#headerProductSearchForm', function() {
            event.preventDefault();
            searchInput.val(headerSearchInput.val());
            loadDataFromSearchForm();
        });



        var lastSelectedCategoryEL = null;
        // manage active class in category
        $(document).on('click', '.categoryActive', function() {
            lastSelectedCategoryEL = $(this);
            $(".categoryActive").removeClass('active');
            $(this).addClass('active');

            // set form id
            let categoryId = $(this).attr('data-categoryId');
            catIDEL.val(categoryId);

            setTimeout(function() {
                showProducts();
            });
        });
        $(document).on('click', '.paginatonWrap .page-item', function() {
            event.preventDefault();
            if (!$(this).find('a').length) {
                return false;
            }
            let action_url = $(this).find('a').attr('href');
            setTimeout(function() {
                showProducts(action_url);
            });
        });


        var selectedSearchTextEL = $('.selectedSearchText');
        var selectedSearchTextWrap = $('.selectedSearchTextWrap');

        var selectedSearchCategoryText = $('.selectedSearchCategoryText');
        var selectedCategoryWrap = $('.selectedCategoryWrap');
        var selectedSearchBrandext = $('.selectedSearchBrandext');
        var searchInput = $('.mk-search-input');
        var headerSearchInput = $('.header-product-search-text');
        var headerSearchWrap = $('.header-product-search');

        var selectedBrandWrap = $('.selectedBrandWrap');
        /**
         * unsetSearchFilterFromManual
         */

        function unsetSearchFilterFromManual() {
            selectedSearchTextWrap.hide();
            searchInput.val("").trigger('change');
            headerSearchInput.val("").trigger('change');
            selectedSearchTextEL.text("");
            setTimeout(function() {
                showProducts();
            });
        }

        // setSelectedSearchTextFilter
        $(document).on('setSelectedFilters', function() {
            // manage serach
            if (searchInput.val()) {
                let selectedText = searchInput.val();
                headerSearchInput.val(selectedText); // header text
                selectedSearchTextEL.text(selectedText);
                selectedSearchTextWrap.show();

            } else {
                headerSearchInput.val(""); // header text
                selectedSearchTextEL.text("");
                selectedSearchTextWrap.hide();
            }


            // set category
            // if (catIDEL.val()) {
            //     selectedSearchCategoryText.text(lastSelectedCategoryEL.attr('data-category-title'));
            //     selectedCategoryWrap.show();
            // } else {
            //     selectedSearchCategoryText.text("");
            //     selectedCategoryWrap.hide();
            // }


            console.log("setSelectedSearchTextFilter");
        });

        function showProductsList(brand_id,cat_id){
            $('#catid').val(cat_id);
            showProducts();
            // console.log(catIDEL);
        }

        // $('.categories').on('click',function(){
        //     $('.nested').toggle();
        // });

        /**
         * showProducts
         */
        function showProducts(actionURl) {
            // dom vars
            let noResultsWrap = $('.mk-no-results-wrap');
            let itemContentWrap = $('.itemContentWrap');
            let productsHtmlWrap = $('.productsHtmlWrap');
             let productsHtmlmodel = $('#productsHtmlmodel');
            let paginatonWrap = $('.paginatonWrap');
            let productPreloaderWrap = $('.productPreloaderWrap');
            // set default action url
            if (typeof actionURl == "undefined" || !actionURl) {
                actionURl = productApiURL;
            }
             console.log(actionURl);
            // set selected filters
            $(document).trigger('setSelectedFilters');


            $.ajax({
                url: actionURl,
                type: 'GET',
                dataType: 'json',
                data: productSearchFormEl.serialize(),
                beforeSend: function() {
                    // show preloader
                    productPreloaderWrap.show();
                    noResultsWrap.hide();
                    itemContentWrap.hide(); // hide content

                    // $('.itemlist').html('<div id="loading-image"><h4>Loading results...</h4></div>');
                },
                success: function(res) {
                    productPreloaderWrap.hide();
                    if (res.succ) {
                         productsHtmlmodel.html(res.productsHtmlWrap).show();
                        productsHtmlWrap.html(res.cardHtml).show(); // append content and show
                        paginatonWrap.html(res.pagination).show(); // append content and show
                        itemContentWrap.show(); // show main item wrapper
                        if(res.barndname != null){

                            if(res.category_id != null){
                                $("#BrandFileter"). attr("onclick","GetCategory("+ res.category_id+")"); 
                        }
                            selectedSearchBrandext.text(res.barndname);
                        selectedSearchCategoryText.text(res.category_name);
                         $('#SearchedAreia').text('Searched Category :-')
                         selectedCategoryWrap.show();
                         selectedBrandWrap.show();

                       


                        }
                    } else {
                        noResultsWrap.show();
                    }

                    $('.from_result').text(res.products.from);
                    $('.to_result').text(res.products.to);
                    $('.total_result').text(res.products.total);


                    // screen
                    if (window.matchMedia("(max-width: 991px)").matches) {
                        closeNav();
                    }

                    // onShowProductReadyState
                    if (!onShowProductReadyState) {
                        $('html, body').animate({
                            scrollTop: $('#mainProductItemColWrap').offset().top - 200 //#DIV_ID is an example. Use the id of your destination on the page
                        }, 'slow');
                    }
                    onShowProductReadyState = 0;
                },
            });
        }


        function showBrands(actionURl) {
            // dom vars
            let noResultsWrap = $('.mk-no-results-wrap');
            let itemContentWrap = $('.itemContentWrap');
            let productsHtmlWrap = $('.productsHtmlWrap');
             let productsHtmlmodel = $('#productsHtmlmodel');
            let paginatonWrap = $('.paginatonWrap');
            let productPreloaderWrap = $('.productPreloaderWrap');
            // set default action url
            if (typeof actionURl == "undefined" || !actionURl) {
                actionURl = brandApiURL;
            }

            console.log(brandApiURL);
            // alert(actionURl);
            // set selected filters
            $(document).trigger('setSelectedFilters');


            $.ajax({
                url: actionURl,
                type: 'GET',
                dataType: 'json',
                data: productSearchFormEl.serialize(),
                beforeSend: function() {
                    // show preloader
                    productPreloaderWrap.show();
                    noResultsWrap.hide();
                    itemContentWrap.hide(); // hide content

                    // $('.itemlist').html('<div id="loading-image"><h4>Loading results...</h4></div>');
                },
                success: function(res) {
                    productPreloaderWrap.hide();
                    if (res.succ) {
                        productsHtmlmodel.html(res.productsHtmlWrap).show();
                        productsHtmlWrap.html(res.cardHtml).show(); // append content and show
                        paginatonWrap.html(res.pagination).show(); // append content and show
                        itemContentWrap.show(); // show main item wrapper
                    } else {
                        noResultsWrap.show();
                    }

                    $('.from_result').text(res.products.from);
                    $('.to_result').text(res.products.to);
                    $('.total_result').text(res.products.total);


                    // screen
                    if (window.matchMedia("(max-width: 991px)").matches) {
                        closeNav();
                    }

                    // onShowProductReadyState
                    if (!onShowProductReadyState) {
                        $('html, body').animate({
                            scrollTop: $('#mainProductItemColWrap').offset().top - 200 //#DIV_ID is an example. Use the id of your destination on the page
                        }, 'slow');
                    }
                    onShowProductReadyState = 0;
                },
            });
        }





        var onShowProductReadyState = 0;
        $(function() {
            $('#collapse-fr-service-menu2_1').addClass('show');
            // showProducts($("#defaultitem").val())

            onShowProductReadyState = 1;
            showBrands(); // load image on ready
            // showProducts();
        });

        var tableEl = $('#mainProductItemColWrap');
        var browseCatEl = $('.floating-button-resource-page');
        var tableElOffset = tableEl.offset().top + 100;
        var footerEl = $('footer#colophon');
        $(window).on('scroll', function() {
            if (window.matchMedia("(max-width: 991px)").matches) {
                var windowTop = $(window).scrollTop();
                if (windowTop >= footerEl.offset().top - window.innerHeight) {
                    browseCatEl.fadeOut();
                    return;
                } else {
                    browseCatEl.fadeIn();
                }
                if (windowTop >= tableElOffset) {
                    // browseCatEl.fadeIn();
                    headerSearchWrap.addClass('sticky');
                } else {
                    // browseCatEl.fadeOut();
                    headerSearchWrap.removeClass('sticky');
                }
            } else {
                return;
            }
        });


        function GetCategory(brand_id) {
            let noResultsWrap = $('.mk-no-results-wrap');
            let itemContentWrap = $('.itemContentWrap');
            let productsHtmlWrap = $('.productsHtmlWrap');
            let productsHtmlmodel = $('#productsHtmlmodel');
            let paginatonWrap = $('.paginatonWrap');
            let productPreloaderWrap = $('.productPreloaderWrap');
            // set default action url
            var  actionURl = 'api/category/'+brand_id;
            // set selected filters
            $(document).trigger('setSelectedFilters');
            console.log(actionURl);

            $.ajax({
                url: actionURl,
                type: 'GET',
                dataType: 'json',
                // data: productSearchFormEl.serialize(),
                beforeSend: function() {
                    // show preloader
                    productPreloaderWrap.show();
                    noResultsWrap.hide();
                    itemContentWrap.hide(); // hide content

                    // $('.itemlist').html('<div id="loading-image"><h4>Loading results...</h4></div>');
                },
                success: function(res) {
                    productPreloaderWrap.hide();
                    $('#SearchedAreia').text('')
                         selectedCategoryWrap.hide();
                    if (res.succ) {
                         productsHtmlmodel.html(res.productsHtmlWrap).show();
                        productsHtmlWrap.html(res.cardHtml).show(); // append content and show
                        paginatonWrap.html(res.pagination).show(); // append content and show
                        itemContentWrap.show(); // show main item wrapper
                        // $selectedCategoryWrap.hide();
                         $('.selectedSearchBrandext').text(res.barndname);
                         $('#SearchedAreiaBrand').text('Searched Brand :-')
                        //  selectedCategoryWrap.show();
                         selectedBrandWrap.show();
                    } else {
                        noResultsWrap.show();
                    }

                    $('.from_result').text(res.products.from);
                    $('.to_result').text(res.products.to);
                    $('.total_result').text(res.products.total);


                    // screen
                    // if (window.matchMedia("(max-width: 991px)").matches) {
                    //     closeNav();
                    // }

                    // onShowProductReadyState
                    if (!onShowProductReadyState) {
                        $('html, body').animate({
                            scrollTop: $('#mainProductItemColWrap').offset().top - 200 //#DIV_ID is an example. Use the id of your destination on the page
                        }, 'slow');
                    }
                    onShowProductReadyState = 0;
                },
            });
        }

$('.caret').on('click',function(){

    $(this).parents('li.categories').find('ul.nested').toggle();
})
    </script>

@endsection