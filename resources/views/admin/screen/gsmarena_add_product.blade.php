@extends('admin.layout')


@section('main')
	<form action="{{ route('admin_product.create') }}" method="post" name="form_name" accept-charset="UTF-8"
		  class="form-horizontal" id="form-main" enctype="multipart/form-data">
			<table align="center">
                <tr>
                    <td>
                        Brand:
                    </td>
                    <td>
                        <select id="brand" class="form-control">
                           {{-- <?php
                            use App\Plugins\GsmArena\Gsm;
                            $gsm = new Gsm();
                            $brands = $gsm->getBrands();
                            if ($brands['data']) {
                                foreach ($brands['data'] as $key => $brand) {
                                    ?>
                                        <option
                                                value="<?php print($key) ?>"
                                                data-name="<?php print $brand['title'] ?>"
                                                data-href="<?php print $brand['href'] ?>">
                                            <?php print $brand['title'] ?>
                                        </option>
                                    <?php
                                }
                            }
                            ?>--}}
							{{--<option value="">Select Brand</option>--}}
							@foreach ($brands as $k => $v)
								<option value="{{ $k }}" data-name="{{ $v->name }}" >{{ $v->name }}
								</option>
							@endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Keyword:
                    </td>
                    <td>
                        <input type="text" placeholder="Asus Zenfone" id="query" value="Zenfone" class="form-control"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <select id="nama" class="form-control"></select>
                    </td>
                </tr>
                {{--<tr>
                    <td colspan="3" style="text-align:center">
                        <input type="button" value="Ok" class="btn btn-danger" id="ok"/>
                    </td>
                </tr>--}}
			</table>
			<div id='spek' align="center"></div>


		<div class="col-xs-12" id="start-add">
			<div class="col-md-4"></div>
			<div class="box-body" id="main-add">
				<div class="fields-group">

					{{-- descriptions --}}
					@foreach ($languages as $code => $language)

						<legend>{{ $language->name }} {!! sc_image_render($language->icon,'20px','20px', $language->name) !!}</legend>
						<div
								class="form-group  {{ $errors->has('descriptions.'.$code.'.name') ? ' has-error' : '' }}">
							<label for="{{ $code }}__name"
								   class="col-sm-2 col-form-label">{{ trans('product.name') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
							<div class="col-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
									<input type="text" id="{{ $code }}__name" name="descriptions[{{ $code }}][name]"
										   value="{!! old('descriptions.'.$code.'.name') !!}"
										   class="form-control input-sm {{ $code.'__name' }}" placeholder="" />
								</div>
								@if ($errors->has('descriptions.'.$code.'.name'))
									<span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('descriptions.'.$code.'.name') }}
                                </span>
								@else
									<span class="help-block">
                                        <i class="fa fa-info-circle"></i> {{ trans('admin.max_c',['max'=>200]) }}
                                    </span>
								@endif
							</div>
						</div>

						<div
								class="form-group    {{ $errors->has('descriptions.'.$code.'.keyword') ? ' has-error' : '' }}">
							<label for="{{ $code }}__keyword"
								   class="col-sm-2 col-form-label">{{ trans('product.keyword') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
							<div class="col-sm-8">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
									<input type="text" id="{{ $code }}__keyword"
										   name="descriptions[{{ $code }}][keyword]"
										   value="{!! old('descriptions.'.$code.'.keyword') !!}"
										   class="form-control input-sm {{ $code.'__keyword' }}" placeholder="" />
								</div>
								@if ($errors->has('descriptions.'.$code.'.keyword'))
									<span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('descriptions.'.$code.'.keyword') }}
                                </span>
								@else
									<span class="help-block">
                                        <i class="fa fa-info-circle"></i> {{ trans('admin.max_c',['max'=>200]) }}
                                    </span>
								@endif
							</div>
						</div>

						<div
								class="form-group  {{ $errors->has('descriptions.'.$code.'.description') ? ' has-error' : '' }}">
							<label for="{{ $code }}__description"
								   class="col-sm-2 col-form-label">{{ trans('product.description') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
							<div class="col-sm-8">
                                    <textarea id="{{ $code }}__description"
											  name="descriptions[{{ $code }}][description]"
											  class="form-control input-sm {{ $code.'__description' }}" placeholder="" />{{ old('descriptions.'.$code.'.description') }}</textarea>
								@if ($errors->has('descriptions.'.$code.'.description'))
									<span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('descriptions.'.$code.'.description') }}
                                </span>
								@else
									<span class="help-block">
                                        <i class="fa fa-info-circle"></i> {{ trans('admin.max_c',['max'=>300]) }}
                                    </span>
								@endif
							</div>
						</div>

						<div
								class="form-group   kind kind0  {{ $errors->has('descriptions.'.$code.'.content') ? ' has-error' : '' }}">
							<label for="{{ $code }}__content"
								   class="col-sm-2 col-form-label">{{ trans('product.content') }}</label>
							<div class="col-sm-8">
                                <textarea id="{{ $code }}__content" class="editor"
										  name="descriptions[{{ $code }}][content]">
                                        {!! old('descriptions.'.$code.'.content') !!}
                                    </textarea>
								@if ($errors->has('descriptions.'.$code.'.content'))
									<span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('descriptions.'.$code.'.content') }}
                                </span>
								@endif
							</div>
						</div>

					@endforeach
					{{-- //descriptions --}}

					<hr>

					{{-- select category --}}
					<div class="form-group  kind kind0 kind1 {{ $errors->has('category') ? ' has-error' : '' }}">
						@php
							$listCate = [];
                            if(is_array(old('category'))){
                            foreach(old('category') as $value){
                            $listCate[] = (int)$value;
                            }
                            }
						@endphp
						<label for="category"
							   class="col-sm-2 col-form-label">{{ trans('product.admin.select_category') }}</label>
						<div class="col-sm-8">
							<select class="form-control input-sm category select2" multiple="multiple"
									data-placeholder="{{ trans('product.admin.select_category') }}" style="width: 100%;"
									name="category[]">
								<option value=""></option>
								@foreach ($categories as $k => $v)
									<option value="{{ $k }}"
											{{ (count($listCate) && in_array($k, $listCate))?'selected':'' }}>{{ $v }}
									</option>
								@endforeach
							</select>
							@if ($errors->has('category'))
								<span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('category') }}
                                </span>
							@endif
						</div>
					</div>
					{{-- //select category --}}

					{{-- select repairs --}}
					{{--<div class="form-group  kind kind0 kind1 {{ $errors->has('repair') ? ' has-error' : '' }}">
						<label for="repair"
							   class="col-sm-2 col-form-label">{{ trans('product.admin.select_repair') }}</label>
						<div class="col-sm-8">
							<select class="form-control input-sm category select2" multiple="multiple"
									data-placeholder="{{ trans('product.admin.select_repair') }}" style="width: 100%;"
									name="repair[]">
								<option value=""></option>
								@foreach ($repairs as $repair)
									<option value="{{ $repair->id }}" >{{ $repair->title}}
									</option>
								@endforeach
							</select>
							@if ($errors->has('repair'))
								<span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('repair') }}
                                </span>
							@endif
						</div>
					</div>--}}
					{{-- //select repairs --}}

					{{-- images --}}
					<div class="form-group  kind kind0 kind1 {{ $errors->has('image') ? ' has-error' : '' }}">
						<label for="image"
							   class="col-sm-2 col-form-label">{{ trans('product.image') }}</label>
						<div class="col-sm-8">
							<div class="input-group">
								<input type="text" id="image" name="image" value="{!! old('image') !!}"
									   class="form-control input-sm image" placeholder="" />
								<span class="input-group-btn">
                                        <a data-input="image" data-preview="preview_image" data-type="product"
										   class="btn btn-sm btn-flat btn-primary lfm">
                                            <i class="fa fa-picture-o"></i> {{trans('product.admin.choose_image')}}
                                        </a>
                                    </span>
							</div>
							@if ($errors->has('image'))
								<span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('image') }}
                                </span>
							@endif
							<div id="preview_image" class="img_holder">
								@if (old('image'))
									<img src="{{ asset(old('image')) }}">
								@endif

							</div>

							{{--@if (!empty(old('sub_image')))
                            @foreach (old('sub_image') as $key => $sub_image)
                            @if ($sub_image)
                            <div class="group-image">
                                <div class="input-group"><input type="text" id="sub_image_{{ $key }}"
                                        name="sub_image[]" value="{!! $sub_image !!}"
                                        class="form-control input-sm sub_image" placeholder="" /><span
                                        class="input-group-btn"><span><a data-input="sub_image_{{ $key }}"
                                                data-preview="preview_sub_image_{{ $key }}" data-type="product"
                                                class="btn btn-sm btn-flat btn-primary lfm"><i
                                                    class="fa fa-picture-o"></i>
                                                {{trans('product.admin.choose_image')}}</a></span><span
                                            title="Remove" class="btn btn-flat btn-sm btn-danger removeImage"><i
                                                class="fa fa-times"></i></span></span></div>
                                <div id="preview_sub_image_{{ $key }}" class="img_holder"><img
                                        src="{{ asset($sub_image) }}"></div>
                            </div>

                            @endif
                            @endforeach
                            @endif--}}

							{{--<button type="button" id="add_sub_image" class="btn btn-flat btn-success">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                {{ trans('product.admin.add_sub_image') }}
                            </button>--}}
						</div>

					</div>
					{{-- //images --}}

					{{-- sku --}}
					{{--<div class="form-group  kind kind0 kind1 kind2 {{ $errors->has('sku') ? ' has-error' : '' }}">
                        <label for="sku" class="col-sm-2 col-form-label">{{ trans('product.sku') }}</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                <input type="text" style="width: 100px;" id="sku" name="sku"
                                    value="{!! old('sku')??'' !!}" class="form-control input-sm sku"
                                    placeholder="" />
                            </div>
                            @if ($errors->has('sku'))
                            <span class="help-block">
                                <i class="fa fa-info-circle"></i> {{ $errors->first('sku') }}
                            </span>
                            @else
                            <span class="help-block">
                                {{ trans('product.sku_validate') }}
                            </span>
                            @endif
                        </div>
                    </div>--}}
					{{-- //sku --}}


					{{-- alias --}}
					<div class="form-group  kind kind0 kind1 kind2 {{ $errors->has('alias') ? ' has-error' : '' }}">
						<label for="alias" class="col-sm-2 col-form-label">{!! trans('product.alias') !!}</label>
						<div class="col-sm-8">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
								<input type="text"  id="alias" name="alias"
									   value="{!! old('alias')??'' !!}" class="form-control input-sm alias"
									   placeholder="" readonly="readonly"/>
							</div>
							@if ($errors->has('alias'))
								<span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('alias') }}
                                </span>
							@else
								<span class="help-block">
                                    {{ trans('product.alias_validate') }}
                                </span>
							@endif
						</div>
					</div>
					{{-- //alias --}}


					{{-- comment --}}
					<div class="form-group  kind kind0 kind1 kind2 {{ $errors->has('comment') ? ' has-error' : '' }}">
						<label for="alias" class="col-sm-2 col-form-label">{!! trans('product.comment') !!}</label>
						<div class="col-sm-8">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
								<input type="text"  id="comment" name="comment"
									   value="{!! old('comment')??'' !!}" class="form-control input-sm alias"
									   placeholder="" />
							</div>
							@if ($errors->has('comment'))
								<span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('comment') }}
                                </span>
							@else

							@endif
						</div>
					</div>
					{{-- //comment --}}

					{{-- select brand --}}
					{{-- <div class="form-group  kind kind0 kind1  {{ $errors->has('brand_id') ? ' has-error' : '' }}">
                         <label for="brand_id"
                             class="col-sm-2 col-form-label">{{ trans('product.brand') }}</label>
                         <div class="col-sm-8">
                             <select class="form-control input-sm brand_id select2" style="width: 100%;"
                                 name="brand_id">
                                 <option value=""></option>
                                 @foreach ($brands as $k => $v)
                                 <option value="{{ $k }}" {{ (old('brand_id') ==$k) ? 'selected':'' }}>{{ $v->name }}
                                 </option>
                                 @endforeach
                             </select>
                             @if ($errors->has('brand_id'))
                             <span class="help-block">
                                 <i class="fa fa-info-circle"></i> {{ $errors->first('brand_id') }}
                             </span>
                             @endif
                         </div>
                     </div>--}}
					{{-- //select brand --}}

					{{-- sort --}}
					<div class="form-group    {{ $errors->has('sort') ? ' has-error' : '' }}">
						<label for="sort" class="col-sm-2 col-form-label">{{ trans('product.sort') }}</label>
						<div class="col-sm-8">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
								<input type="number" style="width: 100px;" id="sort" name="sort"
									   value="{!! old('sort')??0 !!}" class="form-control input-sm sort"
									   placeholder="" />
							</div>
							@if ($errors->has('sort'))
								<span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('sort') }}
                                </span>
							@endif
						</div>
					</div>
					{{-- //sort --}}


					{{-- status --}}
					<div class="form-group  ">
						<label for="status" class="col-sm-2 col-form-label">{{ trans('product.status') }}</label>
						<div class="col-sm-8">
							@if (old())
								<input class="input" type="checkbox" name="status" {{ ((old('status') ==='on')?'checked':'')}}>
							@else
								<input class="input" type="checkbox" name="status" checked>
							@endif

						</div>
					</div>
					{{-- //status --}}

					{{-- select repairs --}}
					<hr class="kind kind0">
					<div class="form-group kind kind0">
						<div class="col-sm-2">
							<label>Add Repair Price:</label>
						</div>
						<div class="col-sm-8">
							<table width="100%" id="repair_price_table">
								<tr>
									<td>{{ trans('product.admin.select_repair') }}</td>
									<td>{{ trans('product.admin.add_product_repair_price') }}</td>
								</tr>
								<tr id="repair_1">
									<td>
										<select class="form-control input-sm category select2"  data-placeholder="{{ trans('product.admin.select_repair') }}" style="width: 100%;"
												name="product[repair_id][]">
											<option value=""></option>
											@foreach ($repairs as $repair)
												<option value="{{ $repair->id }}" >{{ $repair->title}}
												</option>
											@endforeach
										</select>
									</td>
									<td><input type="text" name="product[price][]" value="" class="form-control input-sm" placeholder="{{trans('product.admin.add_product_repair_price')}}" /></td>
									<td><span title="Remove" class="btn btn-flat btn-sm btn-danger removeProductPrice"><i class="fa fa-times"></i></span></td>
								</tr>
								<tr>
									<td colspan="3"><br>
										<button type="button" class="btn btn-flat btn-success add_repair_price">
											<i class="fa fa-plus" aria-hidden="true"></i>
											{{ trans('product.admin.add_repair_price') }}
										</button><br><br></td>

								</tr>
							</table>

						</div>
					</div>

					{{-- //select repairs --}}


						{{-- List product attributes --}}

						<hr class="kind kind0">
							<div class="form-group kind kind0">
								<div class="col-sm-2">
									<label>{{ trans('product.attribute') }}</label>
								</div>
								<div class="col-sm-8" id="addAttribute">
									{{--@foreach ($attributeGroup as $attGroupId => $attName)
										<table width="100%">
											<tr>
												<td colspan="3"><p><b>{{ $attName }}:</b></p></td>
											</tr>
											<tr>
												<td>{{ trans('product.admin.add_attribute_name') }}</td>
												<td>{{ trans('product.admin.add_attribute_place') }}</td>
											</tr>
											@if (!empty($dataAtt[$attGroupId]['name']))
												@foreach ($dataAtt[$attGroupId]['name'] as $key => $attValue)
													@php
														$newHtml = str_replace('attribute_group', $attGroupId, $htmlProductAtrribute);
                                                        $newHtml = str_replace('attribute_name', $attValue, $newHtml);
                                                        $newHtml = str_replace('add_value', $dataAtt[$attGroupId]['attribute_value'][$key], $newHtml);
													@endphp
													{!! $newHtml !!}
												@endforeach
											@endif
											<tr>
												<td colspan="3"><br><button type="button"
																			class="btn btn-flat btn-success add_attribute"
																			data-id="{{ $attGroupId }}">
														<i class="fa fa-plus" aria-hidden="true"></i>
														{{ trans('product.admin.add_attribute') }}
													</button><br><br></td>
											</tr>
										</table>
									@endforeach--}}
								</div>
							</div>
						{{-- //end List product attributes --}}

				</div>
			</div>



			<!-- /.box-body -->

			<div class="box-footer kind kind0  kind1 kind2" id="box-footer">
				@csrf
				<div class="col-md-2">
				</div>

				<div class="col-md-8">
					<div class="btn-group pull-right">
						<button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
					</div>

					<div class="btn-group pull-left">
						<button type="reset" class="btn btn-warning">{{ trans('admin.reset') }}</button>
					</div>
				</div>
			</div>

			<!-- /.box-footer -->
		</div>



	</form>
@endsection

@push('styles')
    <link type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <style>
        td{
            padding: 10px
        }
        a{
            color: #999;
            text-decoration: none;
            text-transform:uppercase
        }
        a:hover{
            text-decoration: none;
        }
        a.w{
            color: #999;
            text-decoration: none;
            font-size: 8px;
            text-transform: none
        }
		#start-add {
			margin: 20px;
		}


		.select-product {
			margin: 10px 0;
		}
    </style>
@endpush
@push('scripts')


		{{--<script type="text/javascript" src="//code.jquery.com/jquery-2.2.0.min.js"></script>--}}

		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
		@include('admin.component.ckeditor_js')
		<script type="text/javascript">
			$(document).ready(function() {

			    var brand_id = $('#brand').val();
			    brand_name = $('#brand option[value='+brand_id+']').attr('data-name');
                $('#query').val(brand_name);
				cari(brand_name);
			});
			$('#query').on('change', function () {
                $('#nama').html('');
                var x = $('#query').val();
                cari(x);
            });
			$('#brand').on('change', function () {
                var brand_id = $('#brand').val();
                brand_name = $('#brand option[value='+brand_id+']').attr('data-name');
                $('#query').val(brand_name);
                cari(brand_name);
            });

			$('#nama').on('change', function(){
				var prodalias = $('#nama').val();
				var prodName = $('#nama option:selected').text();

				$('input[id$="__name"]').val(prodName);
				$('#alias').val(prodalias);
				$.ajax({
					url: 'getProduct/id?slug=' + prodalias,
					crossDomain: true,
					dataType: 'json'
				}).done(function(b) {
					var img = b.img;
					$('#image').val(b.img);
					$('#comment').val(b.comment)

					$('#addAttribute').html();
					var attData = '<table width="100%">';
					var newAttr = [];
					$.each(b.data, function(index, value) {
						@foreach ($attributeGroup as $k => $v)
							if("{{$v}}" === index){
								attData += '<tr><td colspan="3"><p><b style="text-transform:uppercase">{{ $v }}:</b></p></td></tr>'
							$.each(value, function(i, v) {
								attData+='<tr><td><br><input type="text" name="attribute[{{ $k }}][name][]" value="'+ i.replace("_", " ") +'" class="form-control input-sm" placeholder="\' . trans(\'product.admin.add_attribute_name\') . \'" /></td><td><br><input type="text" name="attribute[{{$k}}][add_value][]" value="'+v+'" class="form-control input-sm" placeholder="\' . trans(\'product.admin.add_attribute_place\') . \'"></td><td><br><span title="Remove" class="btn btn-flat btn-sm btn-danger removeAttribute"><i class="fa fa-times"></i></span></td></tr>'
							})
								attData+='<tr><td colspan="3"><br><button type="button" class="btn btn-flat btn-success add_attribute" data-id="{{ $k }}"><i class="fa fa-plus" aria-hidden="true"></i>{{ trans('product.admin.add_attribute') }}</button><br><br></td></tr>'
						}else{
							newAttr = index;
						}
						@endforeach
					})
					console.log("new Attr "+newAttr);
					attData += '</table>'
					$('#addAttribute').html('');
					$('#addAttribute').append(attData);

					// Select product attributes
					$('.add_attribute').click(function(event) {
						var htmlProductAtrribute = '{!! $htmlProductAtrribute??'' !!}';
						var attGroup = $(this).attr("data-id");
						htmlProductAtrribute = htmlProductAtrribute.replace(/attribute_group/gi, attGroup);
						htmlProductAtrribute = htmlProductAtrribute.replace("attribute_value", "");
						htmlProductAtrribute = htmlProductAtrribute.replace("add_price_value", "0");
						$(this).closest('tr').before(htmlProductAtrribute);
						$('.removeAttribute').click(function(event) {
							$(this).closest('tr').remove();
						});
					});
					$('.removeAttribute').click(function(event) {
						$(this).closest('tr').remove();
					});
//end select attributes

				})
			});
			/*$('body').on('focus', '#query', function() {
				$(this).keydown(function() {
					setTimeout(function() {
						var d = $('#query').val(),
							jum = d.length;
						if (jum > 2) {
							cari(d);
						}
					}, 50);
				});
			});*/
				
			$('body').on('click', '#ok', function() {
				$("#spek").html('<img src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="Process.."/>');
				var x = $('#nama').val();
				if(x != 'not found'){
					$.ajax({
						url: 'getProduct/id?slug=' + x,
						crossDomain: true,
						dataType: 'json'
					}).done(function(b) {
						var form = '<form action="gsmarena/addAttribute" method="post">';
						var formend = '</form>';
						var c = '<h3>'+b.title+'</h3>';
						c += '<img src="'+b.img+'"/>';
						c += '<div class = "panel-group" id = "accordion">';
						$.each(b.data, function(index, value) {
							c += '<div class = "panel panel-default">';
							c += '	<div class = "panel-heading">';
							c += '		<h4 class = "panel-title">';
							c += '			<a data-toggle = "collapse" data-parent = "#accordion" href = "#collapse'+index+'">';
							c += 				index;
							c += '			</a>';
							c += '		</h4>';
							c += '	</div>';
							c += '	<div id = "collapse'+index+'" class = "panel-collapse collapse">';
							c += '		<div class = "panel-body">';
							c += '			<table class = "table table-bordered">';
							$.each(value, function(i, v) {
								c += '			<tr><td><strong style="text-transform:uppercase">'+ i.replace("_", " ") +'</strong><form action="gsmarena/addAttribute" method="post">@csrf<input type="hidden" id="name" name="name" value="'+index+' '+ i.replace("_", " ") +'"/><input type="hidden" id="attribute" name="attribute_value" value="'+ v +'"/><input type="hidden" id="attribute" name="attribute_group_id" value="2"/><input type="hidden" id="attribute" name="product_id" value="4"/><button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i></button></form></td><td>'+ v +'</td></tr>';
							});
							c += '			</table>';
							c += '		</div>';
							c += '	</div>';
							c += '</div>';
						});
						$('#spek').html(c);
					});
				}else{
					$('#spek').html('Not Found.');
				}
				return false;
			});
				
			function cari(d) {
				$("#spek").html('<img src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="Process.."/>');
				$.ajax({
					url: 'getProduct/id?query=' + d,
					crossDomain: true,
					dataType: 'json'
				}).done(function(b) {
					var c = '<option value="" >Select Product</option>';
					if(b.status != 'error'){
						$.each(b.data, function(i, a) {
							$('input[id$="__name"]').val(b.data[0].title);
							$('#alias').val(b.data[0].slug);
							c += '<option value="' + b.data[i].slug + '">' + b.data[i].title + '</option>';
						});
					}else{
						c += '<option value="not found">Not Found</option>';
					}
					$('#nama').html(c);
					$("#spek").html('');
				});
			}

			$('textarea.editor').ckeditor(
					{
						filebrowserImageBrowseUrl: '{{ route('admin.home').'/'.config('lfm.url_prefix') }}?type=product',
						filebrowserImageUploadUrl: '{{ route('admin.home').'/'.config('lfm.url_prefix') }}/upload?type=product&_token={{csrf_token()}}',
						filebrowserBrowseUrl: '{{ route('admin.home').'/'.config('lfm.url_prefix') }}?type=Files',
						filebrowserUploadUrl: '{{ route('admin.home').'/'.config('lfm.url_prefix') }}/upload?type=file&_token={{csrf_token()}}',
						filebrowserWindowWidth: '900',
						filebrowserWindowHeight: '500'
					}
			);

		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.select2').select2();

				$('.add_repair_price').click(function(event) {
					var rowCount = $('#repair_price_table >tbody >tr').length;
					var newRepair = '<tr id="repair_"'+rowCount+'><td>'+
							'<select class="form-control input-sm category '+rowCount+'"  data-placeholder="{{ trans('product.admin.select_repair') }}" style="width: 100%;" name="product[repair_id][]">'+
							'<option value=""></option>'+
							@foreach ($repairs as $repair)
									'<option value="{{ $repair->id }}" >{{ $repair->title}}</option>'+
							@endforeach
									'</select></td>'+
							'<td><input type="text" name="product[price][]" value="" class="form-control input-sm" placeholder="{{trans('product.admin.add_product_repair_price')}}" /></td>'+
							'<td><span title="Remove" class="btn btn-flat btn-sm btn-danger removeProductPrice"><i class="fa fa-times"></i></span></td></tr>';
					$(this).closest('tr').before(newRepair);
					//$('.'+rowCount).select2();

					$('.removeProductPrice').click(function(event) {
						$(this).closest('tr').remove();
					});
					$('.select2').select2();
				});

				$('.removeProductPrice').click(function(event) {
					$(this).closest('tr').remove();
				});

				// Select product attributes
				$('.add_attribute').click(function(event) {
					var htmlProductAtrribute = '{!! $htmlProductAtrribute??'' !!}';
					var attGroup = $(this).attr("data-id");
					htmlProductAtrribute = htmlProductAtrribute.replace(/attribute_group/gi, attGroup);
					htmlProductAtrribute = htmlProductAtrribute.replace("attribute_value", "");
					htmlProductAtrribute = htmlProductAtrribute.replace("add_price_value", "0");
					$(this).closest('tr').before(htmlProductAtrribute);
					$('.removeAttribute').click(function(event) {
						$(this).closest('tr').remove();
					});
				});
				$('.removeAttribute').click(function(event) {
					$(this).closest('tr').remove();
				});
//end select attributes
			});
		</script>
@endpush
