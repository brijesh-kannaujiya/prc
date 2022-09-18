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
            height: 142px;
        }

        .card-margin {
            flex-basis: 16%;
            width: 160px;
            max-height: 220px;
            padding: 16px 16px 16px 35px;
        }

        .layout.center-center {
            justify-content: center;
            align-items: center;
        }

        .jss147 {
            display: flex;
            max-width: 160px;
            max-height: 142px;
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

        .img-resp{
            max-height: 75px;
        }

        </style>


    <div style="padding: 2%;">
   <a href="{{ route('product.showbrand') }}">All Brands</a>

         <div class="row" style="padding-bottom: 10px;">

            <div class="col-md-12" style="background: rgb(34,193,195);background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(121,45,253,1) 100%);">
                <div class="row">
                    <div class="col-sm-12" style="text-align: center">
                        <h3><span style="color: white">Select Your</span><span style="color: #e3c300"> Brand</span></h3>
                    </div>
                </div>

                <div class="layout wrap mar-b40">
                    @foreach($itemsList as $item)
                        <div class="layout card-margin brand-height center-center">
                        <a title="{{ $item->name }}" class="jss147 flwidth flheight cursor card-shadow pad16"
                            href="{{ route('product.cat', $item->alias) }}">
                            <div class="">
                                <span class="jss148"> <img class="img-resp flwidth"  src="{{ $item->getImage()}}"  alt="{{ $item->name }}" /></span>
                            </div>
                        </a>
                        </div>
                    @endforeach
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