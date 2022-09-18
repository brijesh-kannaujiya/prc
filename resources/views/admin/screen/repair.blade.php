@extends('admin.layout')

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">{{ $title_description??'' }}</h2>

                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('admin_repair.index') }}" class="btn  btn-flat btn-default" title="List"><i
                                class="fa fa-list"></i><span class="hidden-xs"> {{trans('admin.back_list')}}</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ $url_action }}" method="post" accept-charset="UTF-8" class="form-horizontal" id="form-main"
                enctype="multipart/form-data">


                <div class="box-body">
                    <div class="fields-group">
                        <div class="form-group   {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for=""
                                class="col-sm-2 col-form-label">{{ trans('repair.title') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="__title" name="title"
                                        value="{!! !empty($repair) ? $repair->title:null !!}"
                                        class="form-control {{ '__title' }}" placeholder="Please Enter Title here.. " />
                                </div>
                                @if ($errors->has('title'))
                                <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('title') }}
                                </span>
                                @else
                                    <span class="help-block">
                                        <i class="fa fa-info-circle"></i> {{ trans('admin.max_c',['max'=>200]) }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group    {{ $errors->has('keyword') ? ' has-error' : '' }}">
                            <label for="__keyword"
                                   class="col-sm-2 col-form-label">{{ trans('repair.keyword') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="__keyword"
                                           name="keyword"
                                           value="{!! !empty($repair) ? $repair->keyword:null !!}"
                                           class="form-control input-sm {{ 'keyword' }}" placeholder="Enter Keyword here.." />
                                </div>
                                @if ($errors->has('keyword'))
                                    <span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('keyword') }}
                                </span>
                                @else
                                    <span class="help-block">
                                        <i class="fa fa-info-circle"></i> {{ trans('admin.max_c',['max'=>200]) }}
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group   {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="__description"
                                class="col-sm-2 col-form-label">{{ trans('repair.description') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                    <textarea type="text" id="__description"
                                        name="description"
                                        class="form-control " placeholder="" />{{  !empty($repair) ? $repair->description:null  }}</textarea>
                                @if ($errors->has('description'))
                                <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('description') }}
                                </span>
                                @else
                                    <span class="help-block">
                                        <i class="fa fa-info-circle"></i> {{ trans('admin.max_c',['max'=>300]) }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>
{{--repair price start here--}}
                        <div class="form-group    {{ $errors->has('repair_price') ? ' has-error' : '' }}">
                            <label for="__repair_price"
                                   class="col-sm-2 col-form-label">{{ trans('repair.price') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="__repair_price"
                                           name="repair_price"
                                           value="{!! !empty($repair) ? $repair->repair_price:null !!}"
                                           class="form-control input-sm {{ 'repair_price' }}" placeholder="Enter Repair Price Here.." />
                                </div>
                                @if ($errors->has('repair_price'))
                                    <span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('repair_price') }}
                                </span>
                                @else
                                    <span class="help-block">
                                        <i class="fa fa-info-circle"></i> {{ trans('admin.max_c',['max'=>200]) }}
                                    </span>
                                @endif
                            </div>
                        </div>
{{--repair price end here--}}

                        {{--repair time start here--}}
                        <div class="form-group    {{ $errors->has('repair_time') ? ' has-error' : '' }}">
                            <label for="__repair_time"
                                   class="col-sm-2 col-form-label">{{ trans('repair.time') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="__repair_time"
                                           name="repair_time"
                                           value="{!! !empty($repair) ? $repair->repair_time:null !!}"
                                           class="form-control input-sm {{ 'repair_time' }}" placeholder="Enter Repair Time Here.." />
                                </div>
                                @if ($errors->has('repair_time'))
                                    <span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('repair_time') }}
                                </span>
                                @else
                                    <span class="help-block">
                                        <i class="fa fa-info-circle"></i> {{ trans('admin.max_c',['max'=>200]) }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--repair time end here--}}


                        {{-- select product --}}
                        <div class="form-group  kind kind0 kind1 {{ $errors->has('product') ? ' has-error' : '' }}">
                            @php
                                $listprod = [];
                                if(!empty($repair) ){
                                $product = $repair->repairs->pluck('id')->toArray();
                                }
                                if(is_array($product)){
                                foreach($product as $value){
                                $listprod[] = (int)$value;
                                }

                                }
                            @endphp
                            <label for="product"
                                   class="col-sm-2 col-form-label">{{ trans('repair.admin.select_product') }}</label>
                            <div class="col-sm-8">
                                <input hidden="true" name="product">
                                <select class="form-control input-sm category select2" multiple="multiple"
                                        data-placeholder="{{ trans('repair.admin.select_product') }}" style="width: 100%;"
                                        name="product[]">
                                    {{--<option value=""></option>--}}
                                    @foreach ($products as $k => $v)
                                        <option value="{{ $k }}"
                                                {{ (count($listprod) && in_array($k, $listprod))?'selected':'' }}>{{ $v }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('product'))
                                    <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('product') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- //select product --}}

                        <div class="form-group   kind kind0  {{ $errors->has('content') ? ' has-error' : '' }}">
                            <label for="__content"
                                   class="col-sm-2 col-form-label">{{ trans('repair.content') }}</label>
                            <div class="col-sm-8">
                                <textarea id="__content" class="editor"
                                          name="content">
                                        {{ !empty($repair) ? $repair->content:' ' }}
                                    </textarea>
                                @if ($errors->has('content'))
                                    <span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('content') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- images --}}
                        <div class="form-group  kind kind0 kind1 {{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image"
                                   class="col-sm-2 col-form-label">{{ trans('repair.image') }}</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" id="image" name="image" value="{{ !empty($repair)?$repair->image:'' }}"
                                           class="form-control input-sm image" placeholder="" />
                                    <span class="input-group-btn">
                                        <a data-input="image" data-preview="preview_image" data-type="repair"
                                           class="btn btn-sm btn-flat btn-primary lfm">
                                            <i class="fa fa-picture-o"></i> {{trans('repair.admin.choose_image')}}
                                        </a>
                                    </span>
                                </div>
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('image') }}
                                </span>
                                @endif
                                <div id="preview_image" class="img_holder">
                                        <img src="{{ !empty($repair)?$repair->image:'' }}">
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
                                                    {{trans('repair.admin.choose_image')}}</a></span><span
                                                                title="Remove" class="btn btn-flat btn-sm btn-danger removeImage"><i
                                                                    class="fa fa-times"></i></span></span></div>
                                                <div id="preview_sub_image_{{ $key }}" class="img_holder"><img
                                                            src="{{ asset($sub_image) }}"></div>
                                            </div>

                                        @endif
                                    @endforeach
                                @endif

                                <button type="button" id="add_sub_image" class="btn btn-flat btn-success">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    {{ trans('repair.admin.add_sub_image') }}
                                </button>--}}
                            </div>

                        </div>
                        {{-- //images --}}
                        {{-- alias --}}
                        <div class="form-group  kind kind0 kind1 kind2 {{ $errors->has('alias') ? ' has-error' : '' }}">
                            <label for="alias" class="col-sm-2 col-form-label">{!! trans('repair.alias') !!}</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text"  id="alias" name="alias"
                                           value="{{ !empty($repair) ? $repair->alias:null }}" class="form-control input-sm alias"
                                           placeholder="" />
                                </div>
                                @if ($errors->has('alias'))
                                    <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('alias') }}
                                </span>
                                @else
                                    <span class="help-block">
                                    {{ trans('repair.alias_validate') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- //alias --}}

                        <div class="form-group   {{ $errors->has('sort') ? ' has-error' : '' }}">
                            <label for="sort" class="col-sm-2 col-form-label">Sort</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="number" style="width: 100px;" min=0 id="sort" name="sort"
                                           value="{!! old('sort',($brand['sort']??0)) !!}"
                                           class="form-control sort" placeholder="" />
                                </div>
                                @if ($errors->has('sort'))
                                    <span class="help-block">
                                            <i class="fa fa-info-circle"></i> {{ $errors->first('sort') }}
                                        </span>
                                @endif
                            </div>
                        </div>

                        {{-- status --}}
                        <div class="form-group  ">
                            <label for="status" class="col-sm-2 col-form-label">{{ trans('repair.status') }}</label>
                            <div class="col-sm-8">
                                @if (!empty ($repair))
                                    <input class="input" type="checkbox" name="status" {{ (($repair->status == 0)?' ':'checked')}}>
                                @else
                                    <input class="input" type="checkbox" name="status" checked>
                                @endif

                            </div>
                        </div>
                        {{-- //status --}}



                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
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
            </form>

        </div>
    </div>
</div>
@endsection

@push('styles')

@endpush

@push('scripts')
@include('admin.component.ckeditor_js')
    {{-- //Pjax --}}
    {{--<script src="{{ asset('prc/js/jquery-1.12.4.js')}}"></script>--}}

<script type="text/javascript">
    $(document).ready(function() {
    $('.select2').select2();

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
});
</script>

@endpush