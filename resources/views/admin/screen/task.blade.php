@extends('admin.layout')

@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">{{ $title_description??'' }}</h2>

                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('admin_task.index') }}" class="btn  btn-flat btn-default" title="List"><i
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
                                class="col-sm-2 col-form-label">{{ trans('task.title') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="__title" name="title"
                                        value="{!! !empty($task) ? $task->title:'' !!}"
                                        class="form-control {{ '__title' }}" placeholder="Enter Title Here..." />
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

                        <div class="form-group   {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="__description"
                                class="col-sm-2 col-form-label">{{ trans('task.description') }} <span class="seo" title="SEO"><i class="fa fa-coffee" aria-hidden="true"></i></span></label>
                            <div class="col-sm-8">
                                    <textarea type="text" id="__description"
                                        name="description"
                                        class="form-control " placeholder="" />{{  !empty($task) ? $task->description:''  }}</textarea>
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

                        {{-- select user --}}
                        <div class="form-group  kind kind0 kind1  {{ $errors->has('user_id') ? ' has-error' : '' }}">
                            <label for="brand_id"
                                   class="col-sm-2 col-form-label">{{ trans('task.admin.select_user') }}</label>
                            <div class="col-sm-8">
                                <select class="form-control input-sm brand_id select2" style="width: 100%;"
                                        name="user_id">
                                    <option value="">Select User</option>
                                    @foreach ($users as $k => $v)
                                        <option value="{{ $v->id }}"
                                                {{ (!empty($task) ? $task->user_id == $v->id : 'selected:selected') ? 'selected':'' }}>
                                            {{ $v->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('user_id') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- //select user --}}
                        {{-- select type --}}
                        <div class="form-group  kind kind0 kind1  {{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="task_type"
                                   class="col-sm-2 col-form-label">{{ trans('task.admin.select_type') }}</label>
                            <div class="col-sm-8">
                                <select class="form-control input-sm brand_id select2" style="width: 100%;"
                                        name="task_type" id="taskType" >
                                    <option value="">Select Task Type</option>
                                    @foreach ($type as $k => $v)
                                        <option value="{{ $k }}"
                                                {{ (!empty($type) ? $type == $k : 'selected:selected') ? 'selected':'' }}>
                                            {{ $v }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('type') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- //select type --}}
                        {{-- select product or cat --}}
                        <div class="form-group  kind kind0 kind1  {{ $errors->has('product_cat_id') ? ' has-error' : '' }}">
                            <label for="product_cat_id"
                                   class="col-sm-2 col-form-label">{{ trans('task.admin.select_product_cat_id') }}</label>
                            <div class="col-sm-8">
                                <select class="form-control input-sm brand_id select2" style="width: 100%;"
                                        name="product_cat_id" id="prodCat">
                                    <option value="">Select Product Or Category</option>
                                   {{-- @foreach ($type as $k => $v)
                                        <option value="{{ $v }}"
                                                {{ (!empty($type) ? $type == $k : 'selected:selected') ? 'selected':'' }}>
                                            {{ $v }}
                                        </option>
                                    @endforeach--}}
                                </select>
                                @if ($errors->has('product_cat_id'))
                                    <span class="help-block">
                                    <i class="fa fa-info-circle"></i> {{ $errors->first('product_cat_id') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        {{-- //select product or cat --}}
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

    {{-- //Pjax --}}
    <script src="{{ asset('prc/js/jquery-1.12.4.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('.select2').select2()

        $('#taskType').on('change', function() {
            var typeId = $('#taskType').val();

            if(typeId === "product"){
                $('#prodCat').html('');
                $.ajax({
                    method: 'get',
                    url: '{{ $urlGetProduct ?? '' }}',
                    success: function (data) {
                        $('#prodCat').html('');
                        $.each(data,function (i,v) {
                            $('#prodCat').append('<option value="'+i+'">'+v+'</option>')
                        })
                    }
                });
            }else if(typeId === "category"){
                $('#prodCat').html('');
                $.ajax({
                    method: 'get',
                    url: '{{ $urlGetCatgory ?? '' }}',
                    success: function (data) {
                        $('#prodCat').html('');
                        $.each(data,function (i,v) {
                            $('#prodCat').append('<option value="'+i+'">'+v+'</option>')
                        })
                    }
                });
            }else{

            }

        });


});



</script>

@endpush