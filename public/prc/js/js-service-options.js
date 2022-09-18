/*var services = service_option_ajax.services;
var repairs = service_option_ajax.repairs;
var warranties = service_option_ajax.warranties;
var symbol = service_option_ajax.price_symbol;*/
jQuery(function ($) {
 var timeTableBack = {
  init: function () {
   timeTableBack.selectService();
   timeTableBack.addEdit();
   timeTableBack.serviceChange();
   timeTableBack.editTime();
   timeTableBack.deleteTime();
   timeTableBack.selectTime();
  },
  selectService: function () {
   $('.add-service').on('click', function () {
    console.log($(this).attr('current'));
    var elem = $(document).find($(this).attr('current'));
    var service_id = $(this).parents('.modal-content').find('.select-service').val();
    var doctor_id = $(this).parents('.modal-content').find('.select-doctor').val();
    elem.find('.service').val(service_id);
    elem.find('.doctor').val(doctor_id);
    elem.removeClass('add').addClass('edit');
    elem.find('.append-service').html(services[service_id] + '-' + doctors[doctor_id]);
    $('.modal').modal('hide');
    $('.add-service').removeAttr('current');
   })
  },
  addEdit: function () {
   $(document).on('click', '.open-add-service', function () {
    $('.add-service').attr('current', '#' + $(this).data('parent'));
   });
   $(document).on('click', '.open-edit-service', function () {
    var cur_ser_id = $(this).parents('td').find('.service').val();
    var cur_doc_id = $(this).parents('td').find('.doctor').val();
    console.log(cur_ser_id + ',' + cur_doc_id);
    var select_service = $('#modal-edit-service').find('.select-service');
    var select_doctor = $('#modal-edit-service').find('.select-doctor');
    var docs = services_with_doctors[cur_ser_id];
    var options = '';
    $.each(docs, function (i, k) {
     options += '<option value="' + i + '">' + k + '</option>';
    })
    select_service.val(cur_ser_id);
    select_doctor.html(options);
    select_doctor.val(cur_doc_id);

    $('.add-service').attr('current', '#' + $(this).data('parent'));
   });
   $(document).on('click', '.open-delete-service', function (e) {
    e.preventDefault();
    $(this).parents('td').find('.append-service').html('');
    $(this).parents('td').find('.service').val('');
    $(this).parents('td').find('.doctor').val('');
    $(this).parents('td').removeClass('edit').addClass('add');
   })
  },
  serviceChange: function () {
   $('.select-service').on('change', function () {
    var service_id = $(this).val();
    var docs = services_with_doctors[service_id];
    var options = '';
    $.each(docs, function (i, k) {
     options += '<option value="' + i + '">' + k + '</option>';
    })
    $(this).parents('p').find('.select-doctor').html(options);
   })
  },
  editTime: function () {
   $(document).on('click', '.edit-time', function () {
    var start = $(this).attr('start');
    var end = $(this).attr('end');
    var current = $(this).attr('current');
    $('#modal-edit-time').find('#edit-start-time').val(start);
    $('#modal-edit-time').find('#edit-end-time').val(end);
    $('.save-edit-time').attr('current', current);
   });
   $('.save-edit-time').on('click', function () {
    var start = $('#edit-start-time').val();
    var end = $('#edit-end-time').val();
    var parent = $(this).attr('current');
    $(parent).find('input').val(start + '.00 - ' + end + '.00');
    $(parent).find('.line-time').html(start + '.00 - ' + end + '.00');
    $(parent).find('a').attr('start', start);
    $(parent).find('a').attr('end', end);
    $('.modal').modal('hide');
   })
  },
  deleteTime: function () {
   $(document).on('click', 'a.delete-time', function (e) {
    e.preventDefault();
    $(this).parents('tr').fadeOut().remove();
   })
  },
  selectTime: function () {
   var tr_id = $('.choose-repair-table tbody tr').length;
   $('.add-new-repair').on('click', function () {
    tr_id++;
    var repair_id = $('#select-repair').val();
    var price = $('#price-repair').val();

    var tr = '<tr>';
    tr += '<td><input type="hidden" name="repair[repair' + tr_id + '][id]" value="' + repair_id + '"><input type="hidden" name="repair[repair' + tr_id + '][price]" value="' + price + '"></td>';
    tr += '<td><p>' + repairs[repair_id] + '</p></td>';
    tr += '<td><p>' + symbol + price + '</p></td>';
    tr += '<td><a href="#" title="Delete" class="delete-time"><i class="zmdi zmdi-delete"></i></a></td>';
    tr += '</tr>';
    $('.choose-repair-table tbody').append(tr);
    $('#modal-add-repair').modal('hide');
   });
   var tw_id = $('.choose-warranty-table tbody tr').length;
   $('.add-new-warranty').on('click', function () {
    tw_id++;
    var warranty_id = $('#select-warranty').val();

    var tr = '<tr>';
    tr += '<td><input type="hidden" name="warranties[]" value="' + warranty_id + '"></td>';
    tr += '<td><p>' + warranties[warranty_id] + '</p></td>';
    tr += '<td></td>';
    tr += '<td><a href="#" title="Delete" class="delete-time"><i class="zmdi zmdi-delete"></i></a></td>';
    tr += '</tr>';
    $('.choose-warranty-table tbody').append(tr);
    $('#modal-add-warranty').modal('hide');
   });
   var te_id = $('.choose-add-extras tbody tr').length;
   $('.add-new-extras').on('click', function () {
    te_id++;
    var repair_id = $('#select-extras').val();

    var price = $('#price-extras').val();
    var tr = '<tr>';
    tr += '<td><input type="hidden" name="extras[extras' + te_id + '][id]" value="' + repair_id + '"><input type="hidden" name="extras[extras' + te_id + '][price]" value="' + price + '"></td>';
    tr += '<td><p>' + repairs[repair_id] + '</p></td>';
    tr += '<td><p>' + symbol + price + '</p></td>';
    tr += '<td><a href="#" title="Delete" class="delete-time"><i class="zmdi zmdi-delete"></i></a></td>';
    tr += '</tr>';
    $('.choose-add-extras tbody').append(tr);
    $('#modal-add-addition').modal('hide');
   });
  },
 }
 //if ($('.time-table').length > 0) {
 timeTableBack.init()
 //}
 var timeTableFront = {
  init: function () {
   timeTableFront.filter();
  },
  filter: function () {
   $('.item-service').on('click', function () {
    $(this).siblings('.item-service').removeClass('active');
    $(this).addClass('active');
    var service_id = $(this).data('service-id');
    if (service_id != 'all') {
     $('label.current-service').html($(this).html());
     $('.time-table-front .data-tr').each(function () {
      var count_service = $(this).find('.' + service_id).length;
      //console.log(count_service.length);
      if (count_service < 1) {
       $(this).addClass('hide').removeClass('show');
      } else {
       $(this).addClass('show').removeClass('hide');
      }
     })

     $('.for-filter').each(function () {
      if (!$(this).hasClass(service_id)) {
       $(this).find('.data-td').hide();
      } else {
       $(this).find('.data-td').show();
      }
     })
    } else {
     $('.data-tr').removeClass('hide').addClass('show');
     $('.data-td').show();
    }
    $('.time-table-front .data-tr.show').each(function (i, e) {
     if (i % 2 == 0) {
      $(this).css('background', '#fff');
     } else {
      $(this).css('background', '#fafafa');
     }
    })
   })
  }
 }
 if ($('.time-table-front').length > 0) {
  timeTableFront.init();
 }
 var appointment = {
  init: function () {
   appointment.datetimePicker();
   appointment.changeService();
   appointment.submitAppointment();
  },
  datetimePicker: function () {
   if ($('.datepicker').length > 0) {
    $('.datepicker').FRDateTimePicker({
     //format: 'dddd DD MMMM YYYY - HH:mm',
     format: 'MM/DD/YYYY',
     clearButton: true,
     //currentDate: new Date(),
     weekStart: 1,
     time: false,
     minDate: new Date(),
     disabledDays: [7]
    });
    $('.datepicker').on('change', function () {
     if ($('.select-time').length > 0) {
      $('.select-time').find('.col-sm-6').css('display', 'block');
      $('.date-field').removeClass('col-sm-12').addClass('col-sm-6');
     }
     var select_time = $('.appointment-time');
     select_time.attr('disabled', 'disabled');
     var time = $(this).val().split('/');
     var sm = time[0], sd = time[1], sy = time[2];
     var day = new Date();
     var y = day.getFullYear(),
      m = day.getMonth() + 1,
      d = day.getDate(),
      h = day.getHours();
     //console.log(h+','+d+','+m+','+y);
     //console.log(time);
     select_time.removeAttr('disabled');
     var options = '<option disabled="disabled">Select Time</option>';
     var i = 8;
     if (sd == d) {
      i = h + 1;
     }
     if ((sd < d && sm > m) || sd > d) {
      i = 8;
     }

     for (i; i < 24; i++) {
      options += '<option value="' + i + ':00">' + i + ':00</option><option value="' + i + ':30">' + i + ':30</option>';
     }
     select_time.html(options);
    })
   }
  },
  changeService: function () {
   $('.appointment-service').on('change', function () {
    if ($('.appointment-doctor').length == 0) {
     $(this).parents('.service-field').removeClass('col-sm-12').addClass('col-sm-6');
     $(this).parents('.select-service-doctor').append('<div class="col-sm-6"><select name="appointment-doctor" class="appointment-doctor"></select></div>');
    }
    var service_id = $(this).val();
    var docs = services_with_doctors[service_id];
    var options = '<option disabled="disabled">Select Doctor</option>';
    $.each(docs, function (i, k) {
     options += '<option value="' + i + '">' + k + '</option>';
    })
    $(document).find('.appointment-doctor').html(options);
   });
  },
  validateEmail: function (email) {
   var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   return re.test(String(email).toLowerCase());
  },
  validatePhone: function (phone) {
   var ten = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
   var ele = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{5})$/;

   return ele.test(phone) || ten.test(phone);
  },
  submitAppointment: function () {
   $('.make-appointment').on('click', function () {
    var $this = $(this);
    var send = true;
    var customer_name = $('.customer-name');
    var customer_phone = $('.customer-phone');
    var customer_email = $('.customer-email');
    var appointment_service = $('.appointment-service');
    var appointment_doctor = $('.appointment-doctor');
    var appointment_date = $('.appointment-date');
    var appointment_time = $('.appointment-top');

    if (customer_name.val() === "") {
     customer_name.addClass('error');
     send = false;
    } else {
     customer_name.removeClass('error');
    }
    if (customer_phone.val() === "") {
     customer_phone.addClass('error');
     send = false;
    } else {
     customer_phone.removeClass('error');
    }
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if ((customer_email.val() === "" || re.test(customer_email.val()) === false) && customer_email.length > 0) {
     customer_email.addClass('error');
     send = false;
    } else {
     customer_email.removeClass('error');
    }
    if (appointment_service.val() === "") {
     appointment_service.addClass('error');
     send = false;
    } else {
     appointment_service.removeClass('error');
    }
    if (appointment_doctor.val() === "" && appointment_doctor.length > 0) {
     appointment_doctor.addClass('error');
     send = false;
    } else {
     appointment_doctor.removeClass('error');
    }
    if (appointment_date.val() === "") {
     appointment_date.addClass('error');
     send = false;
    } else {
     appointment_date.removeClass('error');
    }
    if (appointment_time.val() === "" && appointment_time.length > 0) {
     appointment_time.addClass('error');
     send = false;
    } else {
     appointment_time.removeClass('error');
    }
    if (send) {
     var form_data = {};
     form_data['customer-name'] = customer_name.val();
     form_data['customer-phone'] = customer_phone.val();
     form_data['appointment-service'] = appointment_service.val();
     form_data['appointment-date'] = appointment_date.val();
     form_data['customer-email'] = typeof  customer_email.val() != typeof undefined ? customer_email.val() : '';
     form_data['doctor-name'] = typeof $('.doctor-name').val() != typeof undefined ? $('.doctor-name').val() : '';
     form_data['service-name'] = typeof $('.service-name').val() != typeof undefined ? $('.service-name').val() : '';
     form_data['appointment-time'] = typeof appointment_time.val() != typeof undefined ? appointment_time.val() : '';
     form_data['appointment-doctor'] = typeof  appointment_doctor.val() != typeof undefined ? appointment_doctor.val() : '';
     form_data['appointment-message'] = typeof $('.appointment-message').val() != typeof undefined ? $('.appointment-message').val() : '';
     $('.appointment-notice').html('<i class="fa fa-cog fa-spin"></i>');
     $this.attr('disabled', 'disabled');
     console.log(form_data);
     $.ajax({
      url: appointment_ajax.ajax_url,
      type: 'post',
      data: {
       action: 'make_appointment',
       nonce: appointment_ajax.nonce,
       data: form_data,
      },
      error: function (response) {

      },
      success: function (response) {
       if (response.data.code == 200) {
        $this.removeAttr('disabled');
        $('.appointment-notice').html('Appointment request send successfully. Please check your e-mail!').css('margin-top', '10px');
        setTimeout(function () {
         $('.appointment-notice').html('').css('margin-top', '0px');
         $('#reset-appointment').trigger('click');
        }, 5000)
       }
      }
     })
    }
   })
  },
  validate: function (name) {
   $('.appointment-notice').html('Please insert valid ' + name.replace('-', ' ')).css('margin-top', '10px');
  }
 }
 appointment.init();
})
