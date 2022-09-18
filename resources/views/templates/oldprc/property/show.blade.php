@extends('layouts.prcapp')


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
        
            <div ><h2 style="text-align: center;">{{ $property->name }}</h2>
            <div>
            <div class="row" style="margin:2%;">
                <div class="col-sm-9 padding-right" style="border: 1px solid; border: ridge; block-size: 250px;">
                    @foreach($property->values() as $propertyValue)
                    <li>
                    {{ $propertyValue->title }}
                    </li>
                    @endforeach  
                </div>
                <div class="col-sm-2 text-right" style="border: ridge;block-size: 250px;margin-left: 1%;">
                    {{ $property->getMedia()->first() }}
                </div>
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
