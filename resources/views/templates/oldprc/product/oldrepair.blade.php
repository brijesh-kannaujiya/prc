@extends('templates.newprc.layouts.prcapp')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

		@section('content')
		<style>
        .layout {
            flex-direction: row;
            display: flex;
            flex-direction: row;
        }
        .wrap {
            flex-wrap: wrap;
        }
        .mar-b40 {
            margin-bottom: 40px;
        }

        .card-margin.brand-height {
            height: 250px;
        }

        .card-margin {
            flex-basis: 16%;
            width: 180px;
            max-height: 250px;
            padding: 16px 0px 16px 35px;
        }

        .layout.center-center {
            justify-content: center;
            align-items: center;
        }

        .jss147 {
            display: flex;
            max-width: 250px;
            max-height: 250px;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            background-color: white;
        }

        .flwidth {
            width: 100%;
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
            text-align: start;
            
        }
        
        .font27-18 {
            font-size: calc(1.125rem + (27 - 18) * ((100vw - 320px) / (1920 - 320)));
            line-height: calc( 1.75rem + (37 - 28) * ((100vw - 320px) / (1920 - 320)));
        }
        
        .font-medium {
            font-weight: 500;
        }

        </style>

    <div style="padding: 2%;">
    
        <a href="{{ route('product.showbrand') }}">All Brands</a> > <a href="{{ route('product.cat', $brand->alias) }}"> {{ $brand->name }}</a> > <a href="{{ route('product.category', [$brand->alias,$cat->alias]) }}">{{$cat->title}}</a>
         <div class="row" style="padding-bottom: 10px;">
                 <div class="col-md-12" style="background: rgb(34,193,195);background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(121,45,253,1) 100%);">
                     <div class="row">
                         <div class="col-sm-12" style="text-align: center">
                             <h3><span style="color: whitesmoke">Select Your </span><span style="color:#e3c300 ">{{$cat->title}} Model</span></h3>
                         </div>
                     </div>
           <div class="col-md-12">
                @if(!$productList->isEmpty())
                <div class="layout wrap mar-b40">
                    @foreach($productList as $product)
                    @include('templates.prc.product.index._newproduct')
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
    </div>
			@endsection
			<script src="{{ asset('js/app.js') }}"></script>
        @section('afterBottom')

        
		<script type="text/javascript">
            var toggler = document.getElementsByClassName("category_list");
            var i;

            for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function() {
                this.querySelector(".subcategory_list").classList.toggle("displaynone");
                });
            }
        </script>
		@endsection