@extends('admin.layout')

@section('main')

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
            <form action="{{ route('admin_product.create') }}" method="post" name="form_name" accept-charset="UTF-8" 
                class="form-horizontal" id="form-main" enctype="multipart/form-data">

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
                       {{-- <div class="form-group  kind kind0 kind1 {{ $errors->has('repair') ? ' has-error' : '' }}">
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
                                        placeholder="" />
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


@if (sc_config('product_attribute'))
                        {{-- List product attributes --}}

                        @if (!empty($attributeGroup))

                        @php
                        $dataAtt = old('attribute');
                        @endphp


                        <hr class="kind kind0">
                        <div class="form-group kind kind0">
                            <div class="col-sm-2">
                                <label>{{ trans('product.attribute') }}</label>
                            </div>
                            <div class="col-sm-8">
                                @foreach ($attributeGroup as $attGroupId => $attName)
                                <table width="100%">
                                    <tr>
                                        <td colspan="3"><p><b>{{ $attName }}:</b></p></td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('product.admin.add_attribute_name') }}</td>
                                        <td>{{ trans('product.admin.add_attribute_place') }}</td>
                                        <td></td>
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
                                @endforeach
                            </div>
                        </div>
                        @endif
                        {{-- //end List product attributes --}}
@endif

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
        </div>
    </div>
</div>


@endsection

@push('styles')
<style>
    #start-add {
        margin: 20px;
    }


    .select-product {
        margin: 10px 0;
    }
</style>

@endpush

@push('scripts')
@include('admin.component.ckeditor_js')

<script type="text/javascript">
// Add sub images
var id_sub_image = {{ old('sub_image')?count(old('sub_image')):0 }};
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
    });
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
    $('.select2').select2();
});
// image
// with plugin options
//$("input.image").fileinput({"browseLabel":"Browse","cancelLabel":"Cancel","showRemove":true,"showUpload":false,"dropZoneEnabled":false});

/* process_form(); */

/*$('[name="kind"]').change(function(event) {
    process_form();
});*/

/*function process_form(){
    var kind = $('[name="kind"] option:selected').val();
    if(kind){
        $('#loading').show();
        setTimeout(
            function(){
                $('.kind').hide();
                $('.kind'+kind).show();
                $('#main-add').show();
                 $('#loading').hide();
                  }
            , 500);
    }else{
        Swal.fire(
          '{{ trans('product.admin.select_kind') }}',
          '',
          'error'
        );
        $('#main-add').hide();
        $('#box-footer').hide();
    }
}*/

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