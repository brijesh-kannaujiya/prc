@extends('templates.newprc.layouts.prcapp')




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
            width: 250px;
            max-height: 300px;
            padding: 10px 0px 10px 0px;
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
        
        .flex, .flex-1 {
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
            line-height: calc( 1.75rem + (37 - 28) * ((100vw - 320px) / (1920 - 320)));
        }
        
        .font-medium {
            font-weight: 500;
        }

        .attributeCard{
            color: #aaaaaa;
            border: 2px solid;
            border-color: #d8d8d8;
            flex-direction: inherit;
             background-color: #f0f0f0;
            font-size: 12px;
        }

        table, th, td {
            border: none;
        }
        .twidth {
            width: 100px;
        }

        </style>
    <div class="container">
    {{--<div style="padding: 2%;">
    <a href="{{ route('product.showbrand') }}">All Brands</a> > <a href="{{ route('product.cat', $brand->alias) }}"> {{ $brand->name }}</a> > <a href="{{ route('product.category', [$brand->alias,$cat->alias]) }}">{{$cat->title}}</a> > {{  $product->name }}
        </div>--}}

        <div class="row" style=" border-radius: 10px;">
            {{--<div class="col-sm-12" style="background: #0e8ce4;"><h3 style="color: #e3c300">{{  $product->name }}</h3></div>--}}
            <div class="col-md-4" style="height: auto;">
                    <img style="padding-top: 10px; height: 450px" src="{{ $product->image  }}" id="product-image" />
            </div>
            <div class="col-md-3">

                @foreach($listAtt as $att)
                    @if($att->name == 'type' && $att->attribute_name == 'display')
                        <div class="layout card-margin  center-center">
                            <a title="Apple" class="jss147 flwidth flheight cursor card-shadow pad16 attributeCard"
                               href="#">
                                <div class="col-sm-2">
                                    <span class="fa fa-mobile fa-3x" style="height: 50px;width: 50px"></span></div>
                                <div class="col-sm-10">
                                    <b><span>Display</span></b><br>
                                    <span>{!! sc_html_render($att->attribute_value) !!}</span>
                                </div>

                            </a>
                        </div>
                    @endif

                    @if($att->name == 'announced' )
                        <div class="layout card-margin  center-center">
                            <a title="Apple" class="jss147 flwidth flheight cursor card-shadow pad16 attributeCard"
                               href="#">
                                <div class="col-sm-2">
                                    <span class="fa fa-calendar fa-2x" style="height: 50px;width: 50px"></span></div>
                                <div class="col-sm-10">
                                    <b><span>Release On</span></b><br>
                                    <span>{!! sc_html_render($att->attribute_value) !!}</span>
                                </div>

                            </a>
                        </div>
                    @endif
                    @if($att->name == 'internal' )
                        <div class="layout card-margin  center-center">
                            <a title="Apple" class="jss147 flwidth flheight cursor card-shadow pad16 attributeCard"
                               href="#">
                                <div class="col-sm-2">
                                    <span class="fa fa-database fa-2x"></span></div>
                                <div class="col-sm-10">
                                    <b><span>Memory</span></b><br>
                                    <span>{!! sc_html_render($att->attribute_value) !!}</span>
                                </div>

                            </a>
                        </div>
                    @endif
                        @if($att->name == 'os' )
                            <div class="layout card-margin  center-center">
                                <a title="Apple" class="jss147 flwidth flheight cursor card-shadow pad16 attributeCard"
                                   href="#">
                                    <div class="col-sm-2">
                                        <span class="fa fa-mobile-phone fa-3x" style="height: 50px;width: 50px"></span></div>
                                    <div class="col-sm-10">
                                        <b><span>OS</span></b><br>
                                        <span>{!! sc_html_render($att->attribute_value) !!}</span>
                                    </div>

                                </a>
                            </div>
                        @endif
                @endforeach

            </div>
            <div class="col-md-5">
                @unless(empty($product->description))
                    <span><h2 style="color: #0e8ce4;line-height: inherit">{{$product->name}}</h2><p style="font-size: 12px">{{$cat->title}}</p></span>
                <h4>Description</h4>
                <p class="text-secondary">{!!  nl2br($product->description) !!}</p>
                @endunless
            </div>
            </div>    
            <div>
            {{--<h2>Repair Guides</h2>--}}

            </div>

        <!-- ***** Frequently Question Start ***** -->
        <section class="section" id="frequently-question">
            <div class="container">
                <!-- ***** Section Title Start ***** -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading" style="text-align: center">
                            <h2><strong>RE</strong><strong style="color: #ceb807;">PAI</strong><strong>R G</strong><strong style="color: #ceb807;">UID</strong><strong>ES</strong></h2>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 2%">
                        <div class="section-heading">
                            <div class="row">
                                @foreach($repairs as $repair)
                                    <div class="col-3" style="margin-top:15px;background-color: lightgray;border-radius: 30px;padding: 10px 5px;flex: 0 0 22%;margin-right: 25px;">
                                        <a title="Apple" href="http://localhost:8000/showRepair/motherboard-repair">
                                            <div style="float: left;padding: 12px 5px;" class="col-4">
                                                <img src="{{ $repair->getImage()}}" alt="Motherboard Repair" style="width: 80px;height: 70px;position: relative;">
                                            </div>
                                            <div style="float: right;padding: 10%;color:gray;align-items: center;justify-content: center;text-align: center;position: relative;" class="text col-8">
                                                <h6>{{ $repair->title }}</h6>
                                            </div>
                                        </a>
                                    </div>
                                {{--<div class="col-3" style="margin-top:15px;background-color: lightgray;border-radius: 30px;padding: 10px 5px;flex: 0 0 22%;margin-right: 25px;">
                                    <a title="Apple" href="{{route('showRepair', [$repair->alias])}}">
                                        <div style="float: left;padding: 0px 5px;" class="col-4">
                                        <img src="{{ $repair->getImage()}}" alt="{{ $repair->title }}" style="width: 80px;height: 70px;">
                                    </div>
                                    <div style="float: right;padding: 20px;color:gray" class="text col-8">
                                        <h6>{{ $repair->title }}</h6>
                                    </div>
                                    </a>
                                </div>--}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Frequently Question End ***** -->



            <div class="col-md-12" style="padding-top:5%;padding-bottom: 5%; ">

                <div style="text-align: left;background-color: #F4F4F4;font-size: 20px;font-weight: bolder;padding: 10px;color: grey">SPECIFICATIONS</div>
               @foreach($groupAtt as $k=>$v)
                   <table style="width: inherit">
                       <tr><th colspan="2" style="text-align: left;text-transform: uppercase;font-size: 16px;font-weight: bolder;color: gray;padding: 10px 0px">{{$k}}</th></tr>
                       @foreach($v as $att)
                          {{-- <tr><td style="text-transform: capitalize"> {{ $att->name }}</td><td>{!! sc_html_render($product->content) !!}{{ $att->attribute_value }}</td></tr>--}}
                           <tr><td style="text-align: left;text-transform: capitalize;width: 40%;color: lightgrey"> {{ $att->name }}</td><td style="text-align: left;font-weight: bold;width: 60%;color: #aaaaaa">{!! sc_html_render($att->attribute_value) !!}</td></tr>
                       @endforeach
                   </table>

                @endforeach

            </div>




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
                                <img class="img-resp flwidth"
                                @if($product->hasImage())
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
                                --> <!--<img src="{{ $img  }}" id="product-image" /> -->
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
                                --><!-- <img src="{{ $img  }}" id="product-image" /> -->
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

jQuery(document).ready(function(){
    jQuery('#selectadd').on('change',function(){
                var val=jQuery("#selectadd").val();
                if(val == 1){
                    jQuery('#address2').addClass('displaynone');
                    jQuery('#address1').removeClass('displaynone');
                }else if(val == 2){
                    jQuery('#address1').addClass('displaynone');
                    jQuery('#address2').removeClass('displaynone');
                }

            })
});
        </script>
@endsection
