@extends('admin.layout')

@section('main')
   <div class="row">
      <div class="col-md-12">
         <div class="box">
                <div class="box-header with-border">
                    <h2 class="box-title">{{ $title_description??'' }}</h2>

                    <div class="box-tools">
                        <div class="btn-group pull-right" style="margin-right: 5px">
                            <a href="{{ route('admin_link_content.index') }}" class="btn  btn-flat btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs"> {{trans('admin.back_list')}}</span></a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ $url_action }}" method="post" accept-charset="UTF-8" class="form-horizontal" id="form-main"  enctype="multipart/form-data">


                    <div class="box-body">
                        <div class="fields-group">

                            <div class="form-group   {{ $errors->has('page_name') ? ' has-error' : '' }}">
                                <label for="name" class="col-sm-2 col-form-label">{{ trans('linkcontent.page_name') }}</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        <input type="text" id="page_name" name="page_name" value="{!! old()?old('page_name'):$linkcontent['page_name']??'' !!}" class="form-control" placeholder="" {{ $readonly?$readonly:'' }} />
                                    </div>
                                        @if ($errors->has('page_name'))
                                            <span class="help-block">
                                                <i class="fa fa-info-circle"></i> {{ $errors->first('page_name') }}
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group   {{ $errors->has('keyword') ? ' has-error' : '' }}">
                                <label for="keyword" class="col-sm-2 col-form-label">{{ trans('linkcontent.keyword') }}</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        <input type="text" id="keyword" name="keyword" value="{!! old()?old('keyword'):$linkcontent['keyword']??'' !!}" class="form-control" placeholder="" {{ $readonly?$readonly:'' }} />
                                    </div>
                                        @if ($errors->has('keyword'))
                                            <span class="help-block">
                                                <i class="fa fa-info-circle"></i> {{ $errors->first('keyword') }}
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div
                                    class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                                <label for="content"
                                       class="col-sm-2 col-form-label">{{ trans('linkcontent.content') }}</label>
                                <div class="col-sm-8">
                                <textarea id="content" class="editor"
                                          name="content">
                                    {!! old()?old('content'):$linkcontent['content']??'' !!}</textarea>
                                    @if ($errors->has('content'))
                                        <span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('content') }}
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group  ">
                                <label for="status" class="col-sm-2 col-form-label">{{ trans('link.status') }}</label>
                                <div class="col-sm-8">
                                <input class="input" type="checkbox" name="status"  {{ old('status',(empty($linkcontent['status'])?0:1))?'checked':''}}>

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


<script type="text/javascript">

$(document).ready(function() {
    $('.select2').select2()

});


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
