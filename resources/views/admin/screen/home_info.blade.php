@extends('admin.layout')

@section('main')

<div class="row">

  <div class="col-md-12">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">{{ trans('store_info.admin.title') }}</h3>
      </div>

      <div class="box-body table-responsive no-padding box-primary">
       <table class="table table-hover table-bordered">
         <thead>
           <tr>
             <th>{{ trans('store_info.admin.field') }}</th>
             <th>{{ trans('store_info.admin.value') }}</th>
             <th>{{ trans('store_info.admin.status') }}</th>
           </tr>
         </thead>
         <tbody>


        <tr>
        <td>Samsung Authorized Service Centre
               <span class="input-group-btn">
                 <a data-input="sasc_image" data-preview="preview_sasc_image" data-type="store" class="btn btn-sm btn-flat btn-primary lfm">
                   <i class="fa fa-picture-o"></i> {{trans('product.admin.choose_image')}}
                 </a>
               </span>

        </td>
        <td>
            <div class="input-group">
                <input type="hidden" id="sasc_image" name="sasc_image" value="{{ $infos->sasc_image }}" class="form-control input-sm sasc_image" placeholder=""  />
            </div>
              @if ($errors->has('sasc_image'))
                  <span class="help-block">
                      {{ $errors->first('sasc_image') }}
                  </span>
              @endif
            <div id="preview_sasc_image" class="img_holder">{!! sc_image_render($infos->sasc_image,'100px', '', 'Samsung Authorized Service Centre') !!}</div>

        </td>
            <td>
                <button class="label @if ($infos->sasc_status ==1) label-success @else label-danger @endif" data-value = "{{$infos->sasc_status}}" data-name="sasc_status">
                    @if($infos->sasc_status ==1) On @else Off @endif
                </button></td>
      </tr>

      <tr>
        <td>Samsung Authorized Service Centre Link</td>
        <td><a href="#" class="fied-required editable editable-click" data-name="sasc_link" data-type="text" data-pk="" data-source="" data-url="{{ route('admin_home_info.update') }}" data-title="Samsung Authorized Service Centre Link" data-value="{{ $infos->sasc_link }}" data-original-title="" title="">{{$infos->sasc_link }}</a></td>
          <td></td>

      </tr>


 <tr>
        <td>PRC Solutions
               <span class="input-group-btn">
                 <a data-input="prc_solution_image" data-preview="preview_prc_solution_image" data-type="store" class="btn btn-sm btn-flat btn-primary lfm">
                   <i class="fa fa-picture-o"></i> {{trans('product.admin.choose_image')}}
                 </a>
               </span>

        </td>
        <td>
            <div class="input-group">
                <input type="hidden" id="prc_solution_image" name="prc_solution_image" value="{{ $infos->prc_solution_image }}" class="form-control input-sm image" placeholder=""  />
            </div>
              @if ($errors->has('prc_solution_image'))
                  <span class="help-block">
                      {{ $errors->first('prc_solution_image') }}
                  </span>
              @endif
            <div id="preview_prc_solution_image" class="img_holder">{!! sc_image_render($infos->prc_solution_image,'100px', '', 'PRC Solutions') !!}</div>

        </td>
     <td><button class="label @if($infos->prc_solution_status ==1)label-success @else label-danger @endif" data-value = "{{$infos->prc_solution_status}}" data-name="prc_solution_status">
             @if($infos->prc_solution_status ==1) On @else Off @endif
         </button></td>

 </tr>

      <tr>
        <td>PRC Solutions Link</td>
        <td><a href="#" class="fied-required editable editable-click" data-name="prc_solution_link" data-type="text" data-pk="" data-source="" data-url="{{ route('admin_home_info.update') }}" data-title="PRC Solutions Link" data-value="{{ $infos->prc_solution_link }}" data-original-title="" title="">{{$infos->prc_solution_link }}</a></td>
          <td></td>

      </tr>


 <tr>
        <td>PRC Training
               <span class="input-group-btn">
                 <a data-input="prc_training_image" data-preview="preview_prc_training_image" data-type="store" class="btn btn-sm btn-flat btn-primary lfm">
                   <i class="fa fa-picture-o"></i> {{trans('product.admin.choose_image')}}
                 </a>
               </span>

        </td>
        <td>
            <div class="input-group">
                <input type="hidden" id="prc_training_image" name="prc_training_image" value="{{ $infos->prc_training_image }}" class="form-control input-sm image" placeholder=""  />
            </div>
              @if ($errors->has('prc_training_image'))
                  <span class="help-block">
                      {{ $errors->first('prc_training_image') }}
                  </span>
              @endif
            <div id="preview_prc_training_image" class="img_holder">{!! sc_image_render($infos->prc_training_image,'100px', '', 'PRC Training') !!}</div>

        </td>
     <td><button class="label @if($infos->prc_training_status ===1)label-success @else label-danger @endif" data-value = "{{$infos->prc_training_status}}" data-name="prc_training_status">
             @if($infos->prc_training_status ===1) On @else Off @endif
         </button></td>

 </tr>

      <tr>
        <td>PRC Training Link</td>
        <td><a href="#" class="fied-required editable editable-click" data-name="prc_training_link" data-type="text" data-pk="" data-source="" data-url="{{ route('admin_home_info.update') }}" data-title="PRC Training Link" data-value="{{ $infos->prc_training_link }}" data-original-title="" title="">{{$infos->prc_training_link }}</a></td>
          <td></td>

      </tr>


 <tr>
        <td>Main-in B2B
               <span class="input-group-btn">
                 <a data-input="b2b_image" data-preview="preview_b2b_image" data-type="store" class="btn btn-sm btn-flat btn-primary lfm">
                   <i class="fa fa-picture-o"></i> {{trans('product.admin.choose_image')}}
                 </a>
               </span>

        </td>
        <td>
            <div class="input-group">
                <input type="hidden" id="b2b_image" name="b2b_image" value="{{ $infos->b2b_image }}" class="form-control input-sm image" placeholder=""  />
            </div>
              @if ($errors->has('b2b_image'))
                  <span class="help-block">
                      {{ $errors->first('b2b_image') }}
                  </span>
              @endif
            <div id="preview_b2b_image" class="img_holder">{!! sc_image_render($infos->b2b_image,'100px', '', 'Samsung Authorized Service Centre') !!}</div>

        </td>
     <td><button class="label @if($infos->b2b_status ===1)label-success @else label-danger @endif" data-value = "1" data-name="b2b_status">
             @if($infos->b2b_status ===1) On @else Off @endif
         </button></td>

 </tr>

      <tr>
        <td>Main-in B2B Link</td>
        <td><a href="#" class="fied-required editable editable-click" data-name="b2b_link" data-type="text" data-pk="" data-source="" data-url="{{ route('admin_home_info.update') }}" data-title="Main-in B2B Link" data-value="{{ $infos->b2b_link }}" data-original-title="" title="">{{$infos->b2b_link }}</a></td>
          <td></td>

      </tr>


    </tbody>
       </table>
      </div>
    </div>
  </div>

</div>


@endsection


@push('styles')
<!-- Ediable -->
<link rel="stylesheet" href="{{ asset('admin/plugin/bootstrap-editable.css')}}">
<style type="text/css">
  #maintain_content img{
    max-width: 100%;
  }
</style>
@endpush

@push('scripts')
<!-- Ediable -->
<script src="{{ asset('admin/plugin/bootstrap-editable.min.js')}}"></script>

<script type="text/javascript">
  // Editable
$(document).ready(function() {

       $.fn.editable.defaults.mode = 'inline';
      $.fn.editable.defaults.params = function (params) {
        params._token = "{{ csrf_token() }}";
        return params;
      };
        $('.fied-required').editable({
        validate: function(value) {
            if (value == '') {
                return '{{  trans('admin.not_empty') }}';
            }
        },
        success: function(data) {
          if(data.error == 0){
            alertJs('success', '{{ trans('admin.msg_change_success') }}');
          } else {
            alertJs('error', data.msg);
          }
      }
    });
});
</script>


  <script type="text/javascript">

    {!! $script_sort??'' !!}

  </script>

<script type="text/javascript">
{{-- sweetalert2 --}}
var selectedRows = function () {
    var selected = [];
    $('.grid-row-checkbox:checked').each(function(){
        selected.push($(this).data('id'));
    });

    return selected;
}

</script>
<script>
  // Update store_info

//Logo
  $('[name="sasc_image"]').change(function(event) {
          $.ajax({
        url: '{{ route('admin_home_info.update') }}',
        type: 'POST',
        dataType: 'JSON',
        data: {"name": 'sasc_image',"value":$(this).val(),"_token": "{{ csrf_token() }}",},
      })
      .done(function(data) {
        if(data.error == 0){
          alertJs('success', '{{ trans('admin.msg_change_success') }}');
        } else {
          alertJs('error', data.msg);
        }
      });
  });
//End logo
//Logo
  $('[name="prc_solution_image"]').change(function(event) {
          $.ajax({
        url: '{{ route('admin_home_info.update') }}',
        type: 'POST',
        dataType: 'JSON',
        data: {"name": 'prc_solution_image',"value":$(this).val(),"_token": "{{ csrf_token() }}",},
      })
      .done(function(data) {
        if(data.error == 0){
          alertJs('success', '{{ trans('admin.msg_change_success') }}');
        } else {
          alertJs('error', data.msg);
        }
      });
  });
//End logo
//Logo
  $('[name="prc_training_image"]').change(function(event) {
          $.ajax({
        url: '{{ route('admin_home_info.update') }}',
        type: 'POST',
        dataType: 'JSON',
        data: {"name": 'prc_training_image',"value":$(this).val(),"_token": "{{ csrf_token() }}",},
      })
      .done(function(data) {
        if(data.error == 0){
          alertJs('success', '{{ trans('admin.msg_change_success') }}');
        } else {
          alertJs('error', data.msg);
        }
      });
  });
//End logo
//Logo
  $('[name="b2b_image"]').change(function(event) {
          $.ajax({
        url: '{{ route('admin_home_info.update') }}',
        type: 'POST',
        dataType: 'JSON',
        data: {"name": 'b2b_image',"value":$(this).val(),"_token": "{{ csrf_token() }}",},
      })
      .done(function(data) {
        if(data.error == 0){
          alertJs('success', '{{ trans('admin.msg_change_success') }}');
        } else {
          alertJs('error', data.msg);
        }
      });
  });
//End logo



  $('.label-success,.label-danger').on('click' , function(e){
      var name = $(this).data('name');
      var value = $(this).data('value');
      var newValue;
      if(value == 1){
        newValue = 0;
        console.log("1 change "+newValue);
      }else if(value == 0){
         newValue = 1;
          console.log("0 change "+newValue);
      }

      console.log(name);
      console.log(newValue);

      $.ajax({
          url: '{{ route('admin_home_info.update') }}',
          type: 'POST',
          dataType: 'JSON',
          data: {"name": name,"value":newValue,"_token": "{{ csrf_token() }}",},
      })
          .done(function(data) {
              if(data.error == 0){
                  alertJs('success', '{{ trans('admin.msg_change_success') }}');
                  window.location.reload();
              } else {
                  alertJs('error', data.msg);
              }
          });
  });

  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    }).on('ifChanged', function(e) {
    var isChecked = e.currentTarget.checked;
    isChecked = (isChecked == false)?0:1;
    var name = $(this).attr('name');
      $.ajax({
        url: '{{ route('admin_home_info.update') }}',
        type: 'POST',
        dataType: 'JSON',
        data: {"name": name,"value":isChecked,"_token": "{{ csrf_token() }}",},
      })
      .done(function(data) {
        if(data.error == 0){
          alertJs('success', '{{ trans('admin.msg_change_success') }}');
        } else {
          alertJs('error', data.msg);
        }
      });

      });

  });
  //End update store_info
</script>
@endpush
