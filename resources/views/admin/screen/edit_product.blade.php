@extends('admin.layout')

@section('main')
<style>
    #start-add {
        margin: 20px;
    }

    .select-product {
        margin: 10px 0;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">{{ $title_description??'' }}</h2>

                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('admin_product.index') }}" class="btn  btn-flat btn-default" title="List"><i
                                class="fa fa-list"></i><span class="hidden-xs"> {{trans('admin.back_list')}}</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('admin_product.edit',['id'=>$product['id']]) }}" method="post" accept-charset="UTF-8"
                class="form-horizontal" id="form-main" enctype="multipart/form-data">

                <div class="box-body">
                    <div class="fields-group">

                        {{-- Descriptions --}}
                        @php
                        $descriptions = $product->descriptions->keyBy('lang')->toArray();
                        @endphp

                        @foreach ($languages as $code => $language)
                        <legend>{{ $language->name }} {!! sc_image_render($language->icon,'20px','20px', $language->name) !!}</legend>

                        <div class="form-group   {{ $errors->has('descriptions.'.$code.'.name') ? ' has-error' : '' }}">
                            <label for="{{ $code }}__name"
                                class="col-sm-2 col-form-label">{{ trans('product.name') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>

                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="{{ $code }}__name" name="descriptions[{{ $code }}][name]"
                                        value="{!!old('descriptions.'.$code.'.name',($descriptions[$code]['name']??'')) !!}"
                                        class="form-control {{ $code.'__name' }}" placeholder="" />
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
                            class="form-group   {{ $errors->has('descriptions.'.$code.'.keyword') ? ' has-error' : '' }}">
                            <label for="{{ $code }}__keyword"
                                class="col-sm-2 col-form-label">{{ trans('product.keyword') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="{{ $code }}__keyword"
                                        name="descriptions[{{ $code }}][keyword]"
                                        value="{!! old('descriptions.'.$code.'.keyword',($descriptions[$code]['keyword']??'')) !!}"
                                        class="form-control {{ $code.'__keyword' }}" placeholder="" />
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
                            class="form-group   {{ $errors->has('descriptions.'.$code.'.description') ? ' has-error' : '' }}">
                            <label for="{{ $code }}__description"
                                class="col-sm-2 col-form-label">{{ trans('product.description') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                    <textarea  id="{{ $code }}__description"
                                        name="descriptions[{{ $code }}][description]"
                                        class="form-control {{ $code.'__description' }}" placeholder="" />{{ old('descriptions.'.$code.'.description',($descriptions[$code]['description']??'')) }}</textarea>
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
                            class="form-group {{ $errors->has('descriptions.'.$code.'.content') ? ' has-error' : '' }}">
                            <label for="{{ $code }}__content"
                                class="col-sm-2 col-form-label">{{ trans('product.content') }}</label>
                            <div class="col-sm-8">
                                <textarea id="{{ $code }}__content" class="editor"
                                    name="descriptions[{{ $code }}][content]">
                                    {!! old('descriptions.'.$code.'.content',($descriptions[$code]['content']??'')) !!}</textarea>
                                @if ($errors->has('descriptions.'.$code.'.content'))
                                <span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('descriptions.'.$code.'.content') }}
                                </span>
                                @endif
                            </div>
                        </div>

                        @endforeach
                        {{-- //Descriptions --}}

                        <hr>
                        {{-- Category --}}

                        @php
                        $listCate = [];
                        $category = old('category',$product->categories->pluck('id')->toArray());
                        if(is_array($category)){
                            foreach($category as $value){
                                $listCate[] = (int)$value;
                            }
                        }
                        @endphp

                        <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
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
                        {{-- //Category --}}


                        {{-- Repair --}}

                        {{--@php
                            $listRepairs = [];
                            $repair = $product->repairs()->pluck('repair_id')->toArray();
                            if(is_array($repair)){
                                foreach($repair as $value){
                                    $listRepairs[] = (int)$value;
                                }
                            }
                        @endphp

                        <div class="form-group {{ $errors->has('repair') ? ' has-error' : '' }}">
                            <label for="category"
                                   class="col-sm-2 col-form-label">{{ trans('product.admin.select_repair') }}</label>
                            <div class="col-sm-8">
                                <select class="form-control input-sm category select2" multiple="multiple"
                                        data-placeholder="{{ trans('product.admin.select_repair') }}" style="width: 100%;"
                                        name="repair[]">
                                    <option value=""></option>
                                    @foreach ($repairs as $k => $v)
                                        <option value="{{ $v->id }}"
                                                {{ (count($listRepairs) && in_array($v->id, $listRepairs))?'selected':'' }}>{{ $v->title }}
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
                        {{-- //Repair --}}

                        {{-- Images --}}
                        <div class="form-group   {{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-sm-2 col-form-label">{{ trans('product.image') }}</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" id="image" name="image"
                                        value="{!! old('image',$product->image) !!}" class="form-control input-sm image"
                                        placeholder="" />
                                    <span class="input-group-btn">
                                        <a data-input="image" data-preview="preview_image" data-type="product"
                                            class="btn btn-sm btn-primary lfm">
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
                                    @if (old('image',$product->image))
                                        <img src="{{ asset(old('image',$product->image)) }}">
                                    @endif
                                </div>

                            </div>
                        </div>
                        {{-- //Images --}}



                        {{-- Alias --}}
                        <div class="form-group {{ $errors->has('alias') ? ' has-error' : '' }}">
                            <label for="alias" class="col-sm-2 col-form-label">{!! trans('product.alias') !!}</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="alias" name="alias"
                                        value="{!! old('alias', $product->alias) !!}" class="form-control input-sm alias"
                                        placeholder="" />
                                </div>
                                @if ($errors->has('alias'))
                                <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('alias') }}
                                </span>
                                @else
                                <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ trans('product.alias_validate') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- //Alias --}}

 {{-- comment --}}
                        <div class="form-group {{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="alias" class="col-sm-2 col-form-label">{!! trans('product.comment') !!}</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="comment" name="comment"
                                        value="{!! old('alias', $product->comment) !!}" class="form-control input-sm alias"
                                        placeholder="" />
                                </div>
                                @if ($errors->has('comment'))
                                <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('comment') }}
                                </span>
                               @endif
                            </div>
                        </div>
                        {{-- //comment --}}

                        {{-- Brand --}}
                        {{--<div class="form-group  {{ $errors->has('brand_id') ? ' has-error' : '' }}">
                            <label for="brand_id" class="col-sm-2 col-form-label">{{ trans('product.brand') }}</label>
                            <div class="col-sm-8">
                                <select class="form-control input-sm brand_id select2" style="width: 100%;"
                                    name="brand_id">
                                    <option value=""></option>
                                    @foreach ($brands as $k => $v)
                                    <option value="{{ $k }}"
                                        {{ (old('brand_id') ==$k || (!old() && $product->brand_id ==$k) ) ? 'selected':'' }}>
                                        {{ $v->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('brand_id'))
                                <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('brand_id') }}
                                </span>
                                @endif
                            </div>
                        </div>--}}
                        {{-- //Brand --}}




                        {{-- Sort --}}
                        <div class="form-group   {{ $errors->has('sort') ? ' has-error' : '' }}">
                            <label for="sort" class="col-sm-2 col-form-label">{{ trans('product.sort') }}</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="number" style="width: 100px;" id="sort" name="sort"
                                        value="{!! old('sort',$product['sort']) !!}" class="form-control sort"
                                        placeholder="" />
                                </div>
                                @if ($errors->has('sort'))
                                <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('sort') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- //Sort --}}

                        {{-- Status --}}
                        <div class="form-group  ">
                            <label for="status" class="col-sm-2 col-form-label">{{ trans('product.status') }}</label>
                            <div class="col-sm-8">
                                @if (old())
                                <input class="input" type="checkbox" name="status" {{ old('status',$product['status'])?'checked':''}}>
                                @else
                                <input class="input" type="checkbox" name="status" checked>
                                @endif

                            </div>
                        </div>
                        {{-- //Status --}}

                        {{-- select repairs --}}
                        @php
                            $listRepairs = [];
                            $listRepairs = $product->repairPrice()->get();
                        @endphp

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

                                    @foreach($listRepairs as $oldrepair)
                                        <tr>
                                            <td>
                                                <select class="form-control input-sm category select2"  data-placeholder="{{ trans('product.admin.select_repair') }}" style="width: 100%;"
                                                        name="product[repair_id][]">
                                                    <option value=""></option>
                                                    @foreach ($repairs as $repair)
                                                        <option value="{{ $repair->id }}" {{ $oldrepair->repair_id==$repair->id ? 'selected':'' }} >{{ $repair->title}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="text" name="product[price][]" value="{{$oldrepair->price_range}}" class="form-control input-sm" placeholder="{{trans('product.admin.add_product_repair_price')}}" /></td>
                                            <td><span title="Remove" class="btn btn-flat btn-sm btn-danger removeProductPrice"><i class="fa fa-times"></i></span></td>
                                        </tr>
                                    @endforeach

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
                        <hr>
                        @if (!empty($attributeGroup))
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label>{{ trans('product.attribute') }}
                            </div>
                            <div class="col-sm-8">

                                @php
                                $getDataAtt = $product->attributes->groupBy('attribute_group_id')->toArray();
                                $arrAtt = [];
                                foreach ($getDataAtt as $groupId => $row) {
                                    foreach ($row as $key => $value) {
                                        $arrAtt[$groupId]['name'][] = $value['name'];
                                        $arrAtt[$groupId]['add_value'][] = $value['attribute_value'];
                                    }
                                }
                                $dataAtt = old('attribute', $arrAtt);
                                @endphp

                                @foreach ($attributeGroup as $attGroupId => $attName)
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
                                            $newHtml = str_replace('attribute_value', $dataAtt[$attGroupId]['add_value'][$key], $newHtml);
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
                                @endforeach
                            </div>
                        </div>
                        @endif
                        {{-- //end List product attributes --}}

                    </div>
                </div>



                <!-- /.box-body -->

                <div class="box-footer">
                    @csrf
                    <div class="col-md-2"></div>

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
            </form>
        </div>
    </div>
</div>



@endsection

@push('styles')

{{-- input image --}}
{{-- <link rel="stylesheet" href="{{ asset('admin/plugin/fileinput.min.css')}}"> --}}

@endpush

@push('scripts')
@include('admin.component.ckeditor_js')



{{-- input image --}}
{{-- <script src="{{ asset('admin/plugin/fileinput.min.js')}}"></script> --}}





<script type="text/javascript">

// Add sub images
/*var id_sub_image = {{ old('sub_image')?count(old('sub_image')):0 }};
$('#add_sub_image').click(function(event) {
    id_sub_image +=1;
    $(this).before('<div class="group-image"><div class="input-group"><input type="text" id="sub_image_'+id_sub_image+'" name="sub_image[]" value="" class="form-control input-sm sub_image" placeholder=""  /><span class="input-group-btn"><span><a data-input="sub_image_'+id_sub_image+'" data-preview="preview_sub_image_'+id_sub_image+'" data-type="product" class="btn btn-sm btn-flat btn-primary lfm"><i class="fa fa-picture-o"></i> {{trans('product.admin.choose_image')}}</a></span><span title="Remove" class="btn btn-flat btn-sm btn-danger removeImage"><i class="fa fa-times"></i></span></span></div><div id="preview_sub_image_'+id_sub_image+'" class="img_holder"></div></div>');
    $('.removeImage').click(function(event) {
        $(this).closest('div').remove();
    });
    $('.lfm').filemanager();
});
    $('.removeImage').click(function(event) {
        $(this).closest('.group-image').remove();
    });*/
//end sub images

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

$(document).ready(function() {
    $('.select2').select2()
});

//Date picker
$('.date_time').datepicker({
  autoclose: true,
  format: 'yyyy-mm-dd'
})

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

@endpush