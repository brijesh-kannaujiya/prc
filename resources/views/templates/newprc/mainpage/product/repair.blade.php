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
            width: 350px;
            max-height: 300px;
            padding: 16px 0px 16px 20px;
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
            padding: 16px;
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

    </style>
    <div class="container">
        <div style="padding: 2%;">
            {{--<a href="{{ route('product.showbrand') }}">All Brands</a>--}} {{--> <a href="{{ route('product.cat', $brand) }}"> {{ $brand->name }}</a> > <a href="{{ route('product.category', [$cat->alias, $cat]) }}">{{$cat->title}}</a> > {{  $product->name }}--}}
        </div>

        <div class="row" style=" border-radius: 10px; box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.11);">
            <div class="col-sm-12" style="background: #0e8ce4;"><h3 style="color: #e3c300">{{  $repair->title }}</h3></div>
            <div class="col-md-6" style="text-align: center;height: auto;padding: 5px">
                <img src="{{ $repair->image  }}" id="product-image" style="width: 450px;height: 450px;"/>
            </div>
            <div class="col-md-6">
                @unless(empty($repair->description))
                    <h3>Description</h3>
                    <p class="text-secondary">{!!  nl2br($repair->description) !!}</p>
                @endunless
            </div>
        </div>
        <div>
            {{--<h2>Repair Guides</h2>--}}
            <hr>
        </div>




        <div class="col-md-12">
            {!! sc_html_render($repair->content) !!}
            <hr>
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
