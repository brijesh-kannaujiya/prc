@extends('templates.prc.layouts.prcapp')

@section('content')
    <style>
        .thumbnail-container {
            overflow-x: scroll;
        }

        .thumbnail {
            width: 64px;
            height: auto;
            display: block;
            float: left;
        }

        .thumbnail img {
            cursor: pointer;
        }

        .padding-right {
            padding-right: 75px !important;
            padding-top: 5%;
        }

        .genuine {
            text-align: -webkit-right;
        }

        .padding-left {
            padding-left: 75px !important;
            padding-top: 5%;
        }
    </style>
    <style>
        .layout {
            display: inline-block;
        }

        .wrap {
            flex-wrap: wrap;
        }

        .mar-b40 {
            margin-bottom: 40px;
        }

        .card-margin.brand-height {
            height: 300px;
        }

        .card-margin {
            flex-basis: 16%;
            padding: 10px 0px 10px 0px;
            display: block;
        }

        .layout.center-center {
            justify-content: center;
            align-items: center;
        }

        .jss147 {
            display: flex;
            max-width: 100%;
            max-height: 100%;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            background-color: white;
        }

        .jss148 {
            display: flex;
            max-width: 200px;
            max-height: 250px;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            background-color: white;
        }

        .flwidth {
            width: 100%;
            overflow: hidden;
        }

        .flheight {
            height: 100%;
        }

        .cursor {
            cursor: pointer;
        }

        .pad16 {
            padding: 5px;
        }

        .card-shadow {
            border-radius: 10px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.11);
        }

        .img-resp {
            display: block;
            max-width: 100%;
            max-height: 100%;
            vertical-align: middle;
        }

        .jss109 {
            width: 100%;
            max-height: 50px;
        }

        .text-center {
            text-align: center;
        }

        .font12-10 {
            font-size: calc(1.200rem + (12 - 10) * ((100vw - 320px) / (1920 - 320)));
            line-height: calc(1.0rem + (18 - 12) * ((100vw - 320px) / (1920 - 320)));
        }

        .flex,
        .flex-1 {
            flex: 1;
        }


        .layout.vertical {
            flex-direction: column;
        }

        .jss110 {
            margin: 15px 0px;
        }


        .jss109 {
            position: relative;
            text-align: center;

        }

        .font27-18 {
            font-size: calc(1.125rem + (27 - 18) * ((100vw - 320px) / (1920 - 320)));
            line-height: calc(1.75rem + (37 - 28) * ((100vw - 320px) / (1920 - 320)));
        }

        .font-medium {
            font-weight: 500;
        }

        .attributeCard {
            color: #000;
            border: 2px solid;
            border-color: #d8d8d8;
            flex-direction: inherit;
            background-color: #f0f0f0;
            font-size: 16px;
        }

        table,
        th,
        td {
            border: none;
        }

        .twidth {
            width: 100px;
        }

        .service-options .repair-carousel .owl-stage-outer {
            padding: 0px 10px 80px;
            margin-left: 0px;
            width: calc(100% + 45px);
        }

        @media screen and (max-width: 767px) {
            iframe#tidio-chat-iframe {
                display: none !important;
            }
        }
    </style>

    <style>
        .browser-faults-float-btn {
            display: none;
        }
        @media screen and (max-width: 576px) {
            .header-product-search {
                display: block !important;
            }

            .mk-repair-item-wrap .image-item {
                height: 130px;
                width: 130px;
            }

            .mk-repair-item-wrap .image-item > a {
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
            font-size: 22px;
            line-height: 1.4;
            display: none;
        }

        @media screen and (max-width: 991px) {

            .browser-faults-float-btn {
                display: inline-block;
                position: fixed;
                cursor: pointer;
                z-index: 999 !important;
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
            .browser-faults-float-btn a {
                color: #fff;
            }

            a.closeResourceSidebar {
                display: block;
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
                padding: 4rem 15px 15px 15px;
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

        }
    </style>

    <div class="container-fluid product-page-breadcrumb">
        <div>
            <a href="{{ route('product.showbrand') }}">Brands</a> > <a
                    href="{{ route('product.cat', $brand->alias) }}"> {{ $brand->name }}</a> > <a
                    href="{{ route('product.category', [$brand->alias,$cat->alias]) }}">{{$cat->title}}</a>
            > {{ $product->name }}
        </div>
    </div>

    <div class="container section-top-margin">
        <div class="browser-faults-float-btn" onclick="openResourceNav()">
            <a href="#">
                Browse Category
            </a>
        </div>
        <div class="row">
            <div id="resource-page-sidebar-col-wrap" class="col-md-12 col-lg-3 resource-page-sidebar-col-wrap">
                <a href="javascript:void(0)" class="closeResourceSidebar" onclick="closeNav()">×</a>
                <div class="resource-page-sidebar">
                    <form id="productSearchForm">
                        <input type="hidden" id="catid" name="catid" value="">
                        <div class="cms-service-menu  ">
                            <?php echo \App\WebwilaHelpers\Bz::getCommonCategorySideBar(); ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wpb_wrapper" id="browse-faults">
                            <div id="fr-fancybox-carousel" class="service-option-container  ">
                                @if($prodrepairs->count() > 0)
                                    <h3>{{$product->name}} Repair Services</h3>

                                    <div class="row">
                                        @foreach($prodrepairs as $repair)
                                            <div class="col-sm-6 col-md-6">
                                                <div class="repair-item mk-repair-item-single-product">
                                                    <div class="image-product-repair">
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
                                    <!-- <div class="service-options">
                                        <div class="repair-carousel owl-carousel" data-item-xs=1 data-item-sm=2 data-item-md=3 data-item-lg=3 data-margin=30 data-loop=true data-autoplay=false data-autoplaytimeout=5000 data-smartspeed=250 data-center=false data-arrows=true data-bullets=true data-stagepadding=0 data-rtl=false>

                                        </div>
                                    </div> -->
                            </div>
                            @else
                                <h3><a href="{{   route('frontend.contact') }}">Contact Us For {{$product->name}}
                                        Repair
                                        Services</a></h3>
                            @endif
                        </div>
                    </div>
                    <hr>
                    @unless(empty($product->content))
                        <div class="col-sm-12">
                            <p style="color: #00303e">{!! sc_html_render($product->content) !!}</p>
                        </div>
                    @endunless
                    <div class="col-md-12 pt-4">
                        <div class="row">
                            <div class="col-md-4 mb-1">
                                <img style="padding-top: 10px; height: 450px" src="{{ $product->image  }}"
                                     id="product-image"/>
                            </div>
                            <div class="col-md-4">
                                @foreach($listAtt as $att)
                                    @if($att->name == 'type' && $att->attribute_name == 'display')
                                        <div class="layout card-margin  center-center">
                                            <a title="Apple"
                                               class="jss147 flwidth flheight cursor card-shadow pad16 attributeCard"
                                               href="#">
                                                <div class="col-sm-2 col-2">
                                                <span class="fa fa-mobile fa-3x"
                                                      style="height: 50px;width: 50px"></span>
                                                </div>
                                                <div class="col-sm-10 col-10">
                                                    <b><span>Display</span></b><br>
                                                    <span>{!! sc_html_render($att->attribute_value) !!}</span>
                                                </div>

                                            </a>
                                        </div>
                                    @endif

                                    @if($att->name == 'announced' )
                                        <div class="layout card-margin  center-center">
                                            <a title="Apple"
                                               class="jss147 flwidth flheight cursor card-shadow pad16 attributeCard"
                                               href="#">
                                                <div class="col-sm-2 ">
                                                <span class="fa fa-calendar fa-2x"
                                                      style="height: 50px;width: 50px"></span>
                                                </div>
                                                <div class="col-sm-10">
                                                    <b><span>Release On</span></b><br>
                                                    <span>{!! sc_html_render($att->attribute_value) !!}</span>
                                                </div>

                                            </a>
                                        </div>
                                    @endif
                                    @if($att->name == 'internal' )
                                        <div class="layout card-margin  center-center">
                                            <a title="Apple"
                                               class="jss147 flwidth flheight cursor card-shadow pad16 attributeCard"
                                               href="#">
                                                <div class="col-sm-2">
                                                    <span class="fa fa-database fa-2x"></span>
                                                </div>
                                                <div class="col-sm-10">
                                                    <b><span>Memory</span></b><br>
                                                    <span>{!! sc_html_render($att->attribute_value) !!}</span>
                                                </div>

                                            </a>
                                        </div>
                                    @endif
                                    @if($att->name == 'os' )
                                        <div class="layout card-margin  center-center">
                                            <a title="Apple"
                                               class="jss147 flwidth flheight cursor card-shadow pad16 attributeCard"
                                               href="#">
                                                <div class="col-sm-2">
                                            <span class="fa fa-mobile-phone fa-3x"
                                                  style="height: 50px;width: 50px"></span>
                                                </div>
                                                <div class="col-sm-10">
                                                    <b><span>OS</span></b><br>
                                                    <span>{!! sc_html_render($att->attribute_value) !!}</span>
                                                </div>

                                            </a>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-md-4">
                                @unless(empty($product->description))
                                    <h2 style="color: #0e8ce4;line-height: inherit">{{$product->name}}</h2>
                                    <p style="font-size: 12px"><?php echo @$cat->title; ?></p>
                                    <h4>Description</h4>
                                    <p class="text-secondary">{!! nl2br($product->description) !!}</p>
                                @endunless
                            </div>
                        </div>

                        <div class="mt-4">
                            {{--<h2>Repair Guides</h2>--}}
                            @unless(empty($product->comment))
                                <div class="col-sm-12" style="background: #fad33c;">
                                    <p class="pt-2 pb-2 mb-0" style="color: #000;">{{ $product->comment }}</p>
                                </div>
                            @endunless
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <div style="text-align: left;background-color: #F4F4F4;font-size: 20px;font-weight: bolder;padding: 10px;color: grey">
                            SPECIFICATIONS
                        </div>
                        @foreach($groupAtt as $k=>$v)
                            <table style="width: inherit">
                                <tr>
                                    <th colspan="2"
                                        style="text-align: left;text-transform: uppercase;font-size: 16px;font-weight: bolder;color: gray;padding: 10px 0px">{{$k}}</th>
                                </tr>
                                @foreach($v as $att)
                                    {{-- <tr><td style="text-transform: capitalize"> {{ $att->name }}</td>
                                    <td>{!! sc_html_render($product->content) !!}{{ $att->attribute_value }}</td>
                                    </tr>--}}
                                    <tr>
                                        <td class="specification-label"> {{ $att->name }}</td>
                                        <td class="specification-value">{!! sc_html_render($att->attribute_value) !!}</td>
                                    </tr>
                                @endforeach
                            </table>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('js')
        <script src="{{ asset('admin/AdminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script>

            function openResourceNav() {
                document.getElementById("resource-page-sidebar-col-wrap").style.left = "0";
                $('body').addClass('openResourceNav');
            }

            function closeNav() {
                document.getElementById("resource-page-sidebar-col-wrap").style.left = "-310px";
                $('body').removeClass('openResourceNav');
            }

            $('.caret').on('click', function () {

                $(this).parents('li.categories').find('ul.nested').toggle();
            })
        </script>

        @endpush


        {{-- @unless(empty($product->propertyValues))
                    <div class="row" style="padding-bottom: 10px;">

                        <div class="col-md-12">
                        <div class="layout wrap mar-b40">
                            @foreach($product->propertyValues as $propertyValue)
                            <div class="layout card-margin brand-height center-center">
                                <a title="{{ $product->name }}" class="jss147 flwidth flheight cursor card-shadow pad16"
        href="{{ route('showProperty', $propertyValue->property) }}">
        <div class="">
            <span class="jss148">
                <img class="img-resp flwidth" @if($product->hasImage())
                src=" {{ $propertyValue->property->getMedia()->first()->getUrl('medium') }}"
                @else
                src="/images/product.jpg"
                @endif
                alt="{{ $propertyValue->property->name }}" />
            </span>

        </div>
        <span class="font12-10 text-center tc-primary flex-1 line-clamp-3 layout horizontal center-center jss109">{{ $propertyValue->property->name }}</span>
        </a>
        </div>
        @endforeach
        </div>
        </div>

        </div>


        <!--  @foreach($product->propertyValues as $propertyValue)


                                @if ($loop->index % 2 === 0)
                                <div class="col-sm-12" style="background: #015b7e;margin-top: 1%;border-radius: 35px;">
                                <a href="{{ route('showProperty', $propertyValue->property) }}"><h3 style="color: #ffe302;text-align: center;"><u>{{ $propertyValue->property->name }}</u></h3></a>
                                </div>
                                <div class="row" style="border: 1px solid;border-color: #015b7e;border-radius: 20px;">


                                    <div class="col-sm-9 padding-right">
                                    @foreach($propertyValue->property->values() as $propValue)
                                    <li>{{ $propValue->title }}</li>
                                    @endforeach -->
        <!--  <p>
                                        {{ $propertyValue->title }}
                                        </p> -->
        <!--  </div>
                                    <div class="col-sm-2 text-right" style="border: 3px solid;border-radius: 10px;margin: 10px;">
                                     <?php $img = $product->getMedia()->first() ? $product->getMedia()->first()->getUrl('medium') : '/images/product-medium.jpg' ?>
                                        -->
        <!--<img src="{{ $img  }}" id="product-image" /> -->
        <!-- {{ $propertyValue->property->getMedia()->first() }}
                                    </div>

                                </div> -->
        <!-- <th>{{ $propertyValue->property->name }}</th>
                                    <td>{{ $propertyValue->title }}</td> -->
        <!--   <hr>
                                 @else

                                 <div class="col-sm-12" style="background: #015b7e;margin-top: 1%;border-radius: 35px;">
                                 <a href="{{ route('showProperty', $propertyValue->property) }}">
                                    <h3 style="color: #ffe302;text-align: center;">
                                        <u>{{ $propertyValue->property->name }}</u>
                                    </h3>
                                 </a>
                                </div>
                                <div class="row" style="border: 1px solid;border-color: #015b7e;border-radius: 20px;">

                                    <div class="col-sm-2 genuine" style="border: 3px solid;border-radius: 10px;margin: 10px;">
                                     <?php $img = $product->getMedia()->first() ? $product->getMedia()->first()->getUrl('medium') : '/images/product-medium.jpg' ?>
                                        -->
        <!-- <img src="{{ $img  }}" id="product-image" /> -->
        <!--  {{ $propertyValue->property->getMedia()->first() }}
                                    </div>
                                    <div class="col-sm-9 padding-left">
                                    @foreach($propertyValue->property->values() as $propValue)
                                    <li>{{ $propValue->title }}</li>
                                    @endforeach -->
        <!--  <p>
                                        {{ $propertyValue->title }}
                                        </p> -->
        <!-- </div>

                                </div> -->
        <!-- <th>{{ $propertyValue->property->name }}</th>
                                    <td>{{ $propertyValue->title }}</td> -->
        <!-- <hr>
                                 @endif
                            @endforeach

                        @else
                            <hr>
                        @endunless --}}

        </div>


        @endsection
        @section('afterBottom')
            <script>

                jQuery(document).ready(function () {
                    jQuery('#selectadd').on('change', function () {
                        var val = jQuery("#selectadd").val();
                        if (val == 1) {
                            jQuery('#address2').addClass('displaynone');
                            jQuery('#address1').removeClass('displaynone');
                        } else if (val == 2) {
                            jQuery('#address1').addClass('displaynone');
                            jQuery('#address2').removeClass('displaynone');
                        }

                    })
                });
            </script>
            <script type="text/javascript">
                jQuery(function ($) {
                    $('.menu-page-title').removeClass('page-title-non-bg');
                    $('.menu-page-title').removeClass('transparent');
                    $('.menu-page-title').addClass('has-page-title');
                    $('body').addClass('single-services');
                });
            </script>
        @endsection

