(function ($) {
 "use strict";
 var reservation = {
  init: function () {
   reservation.printOrder();
   reservation.submitCheckout();
   reservation.submitBooking();
   reservation.changeOptionService();
   reservation.selectDevice();
  },
  printOrder: function () {
   $('.print-order').on('click', function () {
    $('.site-header').hide();
    $('.page-title-container').hide();
    $('.site-footer').hide();
    $('.col-xl-4').hide();
    $('.col-xl-12').css('flex', '100%');
    window.print();
    window.close();
    $('.site-header').show();
    $('.page-title-container').show();
    $('.site-footer').show();
    $('.col-xl-4').show();
    $('.col-xl-12').css('flex', '66.66666%');
   })
  },
  submitCheckout: function () {
   $("#country").countrySelect();
   $(document).on('click', 'button.submit-checkout-service', function (e) {
    e.preventDefault();
    var _first_name = $('#first-name'),
     _last_name = $('#last-name'),
     _email = $('#email'),
     _telephone = $('#telephone'),
     _address_1 = $('#address-1'),
     _address_2 = $('#address-2'),
     _city = $('#city'),
     _country = $('#country'),
     _post_code = $('#post-code'),
     _payment = $('input[name="pay-type"]:checked').val(),
     // _card_type = $('.card-type'),
     // _card_number = $('.card-number'),
     // _security_code = $('.security-code'),
     // _expiry_month = $('.expiry-month'),
     // _expiry_year = $('.expiry-year'),
     // _name_card = $('.name-on-card'),
     _checkout_check = true;


    if (_first_name.val() === "") {
     _first_name.addClass('error');
     _checkout_check = false;
    }
    if (_last_name.val() === "") {
     _last_name.addClass('error');
     _checkout_check = false;
    }
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (_email.val() === "" || re.test(_email.val()) === false) {
     _email.addClass('error');
     _checkout_check = false;
    }
    if (_telephone.val() === "") {
     _telephone.addClass('error');
     _checkout_check = false;
    }
    if (_address_1.val() === "") {
     _address_1.addClass('error');
     _checkout_check = false;
    }
    if (_city.val() === "") {
     _city.addClass('error');
     _checkout_check = false;
    }
    if (_country.val() === "") {
     _country.addClass('error');
     _checkout_check = false;
    }
    if (_post_code.val() === "") {
     _post_code.addClass('error');
     _checkout_check = false;
    }
    if (_payment == 'pay-on-store') {
     // if (_card_type.val() === "") {
     //  _card_type.addClass('error');
     //  _checkout_check = false;
     // }
     // if (_card_number.val() === "") {
     //  _card_number.addClass('error');
     //  _checkout_check = false;
     // }
     // if (_security_code.val() === "") {
     //  _security_code.addClass('error');
     //  _checkout_check = false;
     // }
     // if (_expiry_month.val() === "") {
     //  _expiry_month.addClass('error');
     //  _checkout_check = false;
     // }
     // if (_expiry_year.val() === "") {
     //  _expiry_year.addClass('error');
     //  _checkout_check = false;
     // }
     // if (_name_card.val() === "") {
     //  _name_card.addClass('error');
     //  _checkout_check = false;
     // }
    }

    if (_checkout_check) {
     var _new_data = order;
     _new_data['first_name'] = _first_name.val();
     _new_data['last_name'] = _last_name.val();
     _new_data['email'] = _email.val();
     _new_data['telephone'] = _telephone.val();
     _new_data['address_1'] = _address_1.val();
     _new_data['address_2'] = _address_2.val();
     _new_data['city'] = _city.val();
     _new_data['country'] = _country.val();
     _new_data['post_code'] = _post_code.val();
     _new_data['payment_method'] = _payment;
     // if (_payment == 'pay-by-card') {
     //  _new_data['card_type'] = _card_type.val();
     //  _new_data['card_number'] = _card_number.val();
     //  _new_data['security_code'] = _security_code.val();
     //  _new_data['expiry_month'] = _expiry_month.val();
     //  _new_data['expiry_year'] = _expiry_year.val();
     //  _new_data['name_on_card'] = _name_card.val();
     // }
     $.ajax({
      url: _new_data.ajax_url,
      type: 'POST',
      beforeSend: function () {
       $('.cms-loader').css('display', 'block');
      },
      data: {
       action: 'ta_checkout_handles',
       form_data: _new_data
      }
     })
      .done(function (data) {
       if (data.status === 'error') {
        $('.notification-booking .box').html(data.message).show();
       } else {
        if (data.status === 'success' && data.url !== false) {
         window.location.href = data.url;
         $('.cms-loader').css('display', 'none');
        } else {
         $('.notification-booking .box').html(data.message).show();
        }
       }
      })
      .fail(function (data) {
       return false;
      })
      .always(function (data) {
       return false;
      });
    }
   });
  },
  submitBooking: function () {
   $(document).on('click', 'button.submit-booking-service', function (e) {
    e.preventDefault();
    reservation.submitBookingHanle();
   });
  },
  submitBookingHanle: function () {
   var dataForm = $('.choose-service-repair').serializeArray();
   console.log(dataForm);
   //return;
   $.ajax({
    url: booking_form_data.ajax_url,
    type: 'POST',
    beforeSend: function () {
     $('.cms-loader').css('display', 'block');
    },
    data: {
     action: 'ta_booking_handles',
     service_id: booking_form_data.service_id,
     service_title: booking_form_data.service_title,
     device_id: booking_form_data.device_id,
     form_data: dataForm
    }
   })
    .done(function (data) {
     if (data.status === 'error') {
      $('.notification-booking .box').html('<div class="body"><p>' + data.message + '</p></div>');
      reservation.scroll();
      $('.cms-loader').css('display', 'none');
     } else {
      if (data.status === 'done' && data.url !== false) {
       window.location.href = data.url;
      } else {
       $('.notification-booking .box').html('<div class="body"><p>' + data.message + '</p></div>');
       reservation.scroll();
       $('.cms-loader').css('display', 'none');
      }
     }
    })
    .fail(function () {
     return false;
    })
    .always(function () {
     return false;
    });
  },
  changeOptionService: function () {
   if (typeof data_device != typeof undefined) {
    $('.extra-title').hide();
    var sideBar = $('.box.sidebar');
    $('.choose-service-repair input').on('change', function () {
     var sub_total = 0;
     var dataForm = $('.choose-service-repair').serializeArray();
     var extraHtml = '';
     var datas = data_device;
     $.each(dataForm, function (i, e) {
      if (e['name'] == 'repairs' || e['name'] == 'warranties') {
       sideBar.find('.' + e['name'] + ' .title').html(datas[e['name']][e['value']].title);
       sideBar.find('.' + e['name'] + ' .price').html(currency_icon + parseFloat(datas[e['name']][e['value']].price));
       if(typeof datas[e['name']][e['value']].price != typeof undefined) {
        sub_total += parseFloat(datas[e['name']][e['value']].price);
       }
      }
      if (e['name'] == 'extra') {
       $('.extra-title').show();
       extraHtml += '<p class="clear-all extra"> ' +
        '<span class="title">' + datas['extras'][e['value']].title + '</span> ' +
        '<span class="price">' + currency_icon + parseFloat(datas['extras'][e['value']].price) + '</span> ' +
        '</p>';
       if (typeof  datas['extras'][e['value']].price != typeof undefined) {
        sub_total += parseFloat(datas['extras'][e['value']].price);
       }
      }
     });
     sideBar.find('.content-extra').html(extraHtml);
     sideBar.find('.sub-total .price').html(currency_icon+parseFloat(sub_total).toFixed(2));
     var vatax = parseFloat((sub_total * vat)/100).toFixed(2);
     sideBar.find('.tax .price').html(currency_icon+vatax);
     sideBar.find('.total .price').html(currency_icon+(parseFloat(sub_total) + parseFloat(vatax)).toFixed(2));
    })
   }
  },
  selectDevice: function () {
   $('.choose-service-repair').serializeArray();
   $('.current-select').on('click', function () {
    $('.list-device').toggleClass('active');
   });
   $('.list-device li').on('click', function () {
    $('input').prop('checked',false).trigger('change');
    $(this).siblings('li').removeClass('active');
    $(this).addClass('active');
    var device_id = $(this).data('device-id');
    var html = $(this).html();
    $('.current-select').html(html);
    var current_device = $('#device').val();
    $('.device-repairs-'+current_device).removeClass('active');
    $('.device-warranties-'+current_device).removeClass('active');
    $('.device-extras-'+current_device).removeClass('active');
    $('.repairs .title').html('');
    $('.warranties .title').html('');
    $('.repairs .price').html('');
    $('.warranties .price').html('');
    $('.device-repairs-'+device_id).addClass('active');
    $('.device-warranties-'+device_id).addClass('active');
    $('.device-extras-'+device_id).addClass('active');
    $('#device').val(device_id).trigger('change');
    $('.list-device').removeClass('active');
   })
  },
  scroll: function () {
   $('.scroll-top').trigger('click');
  }
 }
 reservation.init();
}(jQuery));