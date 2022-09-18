@extends('admin.layout')

@section('main')
   <div class="row">
      <div class="col-md-12">
         <div class="box">
                <div class="box-header with-border">
                    <h2 class="box-title">{{ $title_description??'' }}</h2>

                    <div class="box-tools">
                        <div class="btn-group pull-right" style="margin-right: 5px">
                            <a href="{{ route('faq.index') }}" class="btn  btn-flat btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs"> {{trans('admin.back_list')}}</span></a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ $url_action }}" method="post" accept-charset="UTF-8" class="form-horizontal" id="form-main"  enctype="multipart/form-data">


                    <div class="box-body">
                        <div class="fields-group">

                            <div class="form-group {{ $errors->has('question') ? ' has-error' : '' }}">
                                <label for="content"
                                       class="col-sm-2 col-form-label">{{ trans('langfaq.question') }}</label>
                                <div class="col-sm-8">
                                <textarea id="question" class="editor"
                                          name="question">
                                    {!! old()?old('question'):$faq['question']??'' !!}</textarea>
                                    @if ($errors->has('question'))
                                        <span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('question') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('answer') ? ' has-error' : '' }}">
                                <label for="content"
                                       class="col-sm-2 col-form-label">{{ trans('langfaq.answer') }}</label>
                                <div class="col-sm-8">
                                <textarea id="answer" class="editor"
                                          name="answer">
                                    {!! old()?old('answer'):$faq['answer']??'' !!}</textarea>
                                    @if ($errors->has('answer'))
                                        <span class="help-block">
                                    <i class="fa fa-info-circle"></i>
                                    {{ $errors->first('answer') }}
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group  ">
                                <label for="status" class="col-sm-2 col-form-label">{{ trans('langfaq.status') }}</label>
                                <div class="col-sm-8">
                                <input class="input" type="checkbox" name="status"  {{ old('status',(empty($faq['status'])?0:1))?'checked':''}}>

                                </div>
                            </div>
                            <div class="form-group  ">
                                <label for="status" class="col-sm-2 col-form-label">{{ trans('langfaq.show_home') }}</label>
                                <div class="col-sm-8">
                                <input class="input" type="checkbox" name="show_home"  {{ old('show_home',(empty($faq['show_home'])?0:1))?'checked':''}}>

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
