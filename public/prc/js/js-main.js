;(function ($) {

 "use strict";

 /* ===================
  Page reload
  ===================== */
 var scroll_top;
 var window_height;
 var window_width;
 var scroll_status = '';
 var lastScrollTop = 0;
 $(window).on('load', function () {
  $(".cms-loader").fadeOut("slow");
  window_width = $(window).width();
  scroll_top = $(window).scrollTop();
  window_height = $(window).height();
  tekhfixers_col_offset();
  tekhfixers_item_sameheight();
  tekhfixers_header_sticky();
  tekhfixers_menu_mobile();
  tekhfixers_rtl();
  tekhfixers_scroll_to_top();
  tekhfixers_career_modal_responsive();
 });
 $(window).on('resize', function () {
  window_width = $(window).width();
  tekhfixers_col_offset();
  tekhfixers_item_sameheight();
  tekhfixers_header_sticky();
  tekhfixers_menu_mobile();
  tekhfixers_career_modal_responsive();
 });

 $(window).on('scroll', function () {
  scroll_top = $(window).scrollTop();
  window_height = $(window).height();
  window_width = $(window).width();
  if (scroll_top < lastScrollTop) {
   scroll_status = 'up';
  } else {
   scroll_status = 'down';
  }
  lastScrollTop = scroll_top;
  tekhfixers_header_sticky();
  tekhfixers_scroll_to_top();
 });

 $(document).ready(function () {

  /* =================
   Menu Dropdown
   =================== */
  var $menu = $('.main-navigation');
  $menu.find('ul.sub-menu > li').each(function () {
   var $submenu = $(this).find('>ul');
   if ($submenu.length == 1) {
    $(this).hover(function () {
     if ($submenu.offset().left + $submenu.width() > $(window).width()) {
      $submenu.addClass('back');
     } else if ($submenu.offset().left < 0) {
      $submenu.addClass('back');
     }
    }, function () {
     $submenu.removeClass('back');
    });
   }
  });
  $('#pagetitle').parent().find('.header-layout1 #headroom').addClass('offset-down-on');
  /* =================
   Menu Mobile
   =================== */
  $(".btn-nav-mobile.open-menu").on('click', function () {
   $(this).toggleClass('opened');
   $('#site-navigation').toggleClass('navigation-open');
  })

  /* ===================
   Search Toggle
   ===================== */
  $('.h-btn-form').on('click', function (e) {
   e.preventDefault();
   $('.cms-modal-contact-form').removeClass('remove').toggleClass('open');
  });
  $('.cms-close').on('click', function (e) {
   e.preventDefault();
   $(this).parent().addClass('remove').removeClass('open');
   $(this).parents('.cms-modal').addClass('remove').removeClass('open');
  });
  $(document).on('click', function (e) {
   if (e.target.className == 'cms-modal cms-modal-contact-form open')
    $('.cms-modal-contact-form').removeClass('open').addClass('remove');
  });

  /* Video 16:9 */
  $('.entry-video iframe').each(function () {
   var v_width = $(this).width();

   v_width = v_width / (16 / 9);
   $(this).attr('height', v_width + 35);
  });
  /* Images Light Box - Gallery:True */
  $('.images-light-box').each(function () {
   $(this).magnificPopup({
    delegate: 'a.light-box',
    type: 'image',
    gallery: {
     enabled: true
    },
    mainClass: 'mfp-fade',
   });
  });

  $('.image-light-box').each(function () {
   $(this).magnificPopup({
    delegate: 'a.light-box',
    type: 'image',
    gallery: {
     enabled: false
    },
    mainClass: 'mfp-fade',
   });
  });

  /* Video Light Box */
  $('.cms-video-button, .btn-video').magnificPopup({
   type: 'iframe',
   mainClass: 'mfp-fade',
   removalDelay: 160,
   preloader: false,

   fixedContentPos: false
  });

  $(".cms-gallery-slider-wrap .slider-button").on('click', function () {
   $(this).parents('.cms-gallery-slider-wrap').toggleClass('hide-thumb');
   $(this).parents('.cms-gallery-slider-wrap').find('.thumbs').slideToggle();
  });
  $(".button-share .btn").on('click', function () {
   $(this).parent().toggleClass('opened');
  });
  $(".button-share .social-close i").on('click', function () {
   $(this).parents('.button-share').removeClass('opened');
  });
  $(".post-type-button .button-gallery").on('click', function () {
   $(".single-portfolio .cms-gallery-slider-wrap .owl-item.active .light-box").trigger("click");
  });

  /* ===================
   Theia Sticky Sidebar
   ===================== */
  var sidebarOffset = $('#headroom').outerHeight();
  // $(".sidebar-fixed").theiaStickySidebar({
  //     "containerSelector": "",
  //     "additionalMarginTop": sidebarOffset,
  //     "additionalMarginBottom": "0",
  //     "updateSidebarHeight": false,
  //     "minWidth": "768",
  //     "sidebarBehavior": "modern"
  // });
  /* =================
   WooCommerce
   =================== */
  $('.widget_product_search .search-field').find("input[type='text']").each(function (ev) {
   if (!$(this).val()) {
    $(this).attr("placeholder", "Search and Press Enter");
   }
  });
  $('.tnp-field-email').find(".tnp-email").each(function (ev) {
   if (!$(this).val()) {
    $(this).attr("placeholder", "Email Address");
   }
  });
  $('.widget_product_categories .cat-parent').append('<span class="woo-menu-toggle"><i class="zmdi zmdi-chevron-down"></i></span>');
  $('.woo-menu-toggle').on('click', function () {
   $(this).parent().find('> .children').toggleClass('woo-submenu-open');
   $(this).parent().find('> .children').slideToggle();
  });
  $('.woocommerce-cart-meta').on('click', function () {
   $(this).parent().find('.widget_shopping_cart').toggleClass('cart-open');
  });
  $('.cms-select form').append('<i class="zmdi zmdi-unfold-more"></i>');
  $('.variations select').parent().addClass('cms-select');
  $('.variations .cms-select').append('<i class="zmdi zmdi-unfold-more"></i>');

  $('.vc_tta-panel-title .vc_tta-title-text').append('<i class="vc_tta-controls-icon"></i>');

  /* Post type */
  $(".single-portfolio .trigger-gallery").on('click', function () {
   $(".single-portfolio .post-type-gallery-item:first-child() .light-box").trigger("click");
  });
  $(".open-gallery").on('click', function () {
   $(".cms-gallery-slider-wrap .owl-item.active .light-box").trigger("click");
  });

  $(document).find('.portfolio-gallery .owl-arrows-middle-big').on('click', '.owl-next', function (e) {
   var _this = $(this);
   _this.parents('.portfolio-gallery').find('.owl-arrows-hide .owl-next').trigger('click');
  });
  $(document).find('.portfolio-gallery .owl-arrows-middle-big').on('click', '.owl-prev', function (e) {
   var _this = $(this);
   _this.parents('.portfolio-gallery').find('.owl-arrows-hide .owl-prev').trigger('click');
  });

  $(".thumb .item-readmore a").on('click', function () {
   window.location.href = $(this).attr('href');
  });

  /* ====================
   Scroll To Top
   ====================== */
  $('.scroll-top').on('click', function () {
   $('html, body').animate({scrollTop: 0}, 800);
   return false;
  });

  /* =================
   Add Class
   =================== */
  $('.wpcf7-select').parent().addClass('wpcf7-menu');
  /* =================
   Row & VC Column Animation
   =================== */
  $('.vc_row.wpb_row.vc_row-fluid').each(function () {
   var vctime = 100;
   var vc_inner = $(this).children().length;
   var _vci = vc_inner - 1;
   $(this).find('> .wpb_animate_when_almost_visible').each(function (index, obj) {
    $(this).css('animation-delay', vctime + 'ms');
    if (_vci === index) {
     vctime = 100;
     _vci = _vci + vc_inner;
    } else {
     vctime = vctime + 100;
    }
   })
  });
  $('.animation-time').each(function () {
   var vctime = 100;
   var vc_inner = $(this).children().length;
   var _vci = vc_inner - 1;
   $(this).find('> .grid-item > .wpb_animate_when_almost_visible').each(function (index, obj) {
    $(this).css('animation-delay', vctime + 'ms');
    if (_vci === index) {
     vctime = 100;
     _vci = _vci + vc_inner;
    } else {
     vctime = vctime + 100;
    }
   });
  });
  $(document).on('click', '.card-header', function () {
   var _parent = $(this).parents('.grid-item');
   _parent.css('z-index', 9999);
   setTimeout(function () {
    _parent.css('z-index', 1);
   }, 800);
   setTimeout(function () {
    $('.filter-item.active').trigger('click');
   }, 400);
  });

  /* =================
   The clicked item should be in center in owl carousel
   =================== */
  var $owl_item = $('.owl-active-click');
  $owl_item.children().each(function (index) {
   $(this).attr('data-position', index);
  });
  $(document).on('click', '.owl-active-click .owl-item > div', function () {
   $owl_item.trigger('to.owl.carousel', $(this).data('position'));
  });

  /* =================
   Move Angled & Overlay for Row VC
   =================== */
  $('.entry-content > .vc_row, .post-type-content > .vc_row, .post-type-content-inner > .vc_row').each(function () {
   var _angled = $(this).find(".cms-angled-wrapper"),
    _row = _angled.parents(".wpb_column");
   _row.after(_angled.clone());
   _angled.remove();

   var _el_overlay = $(this).find(".cms-row-overlay"),
    _row_overlay = _el_overlay.parents(".wpb_column");
   _row_overlay.before(_el_overlay.clone());
   _el_overlay.remove();
   $(this).find(".cms-row-overlay").parent().addClass('vc-row-overlay');

   var _el_divider = $(this).find(".cms-divider-title"),
    _row_divider = _el_divider.parents(".wpb_column");
   _row_divider.before(_el_divider.clone());
   _el_divider.remove();
  });

  /* =================
   Multi Select
   =================== */
  $('select').each(function () {
   //$(this).niceSelect();
  });

  /* =================
   Career Modal
   =================== */
  $(document).on('click', '.item-career-apply', function (e) {
   e.preventDefault();
   $('#apply-loadding').remove();
   var _this = $(this),
    _pid = _this.attr('data-pid');
   $.ajax({
    url: main_data.ajax_url,
    type: 'POST',
    beforeSend: function () {
     $('body').append('<div id="apply-loadding" class="cms-loader"><div class="loading-spin"><div class="spinner"><div class="right-side"><div class="bar"></div></div><div class="left-side"><div class="bar"></div></div></div><div class="spinner color-2"><div class="right-side"><div class="bar"></div></div><div class="left-side"><div class="bar"></div></div></div></div></div>');
    },
    data: {
     action: 'show_career_apply_form',
     pid: _pid
    }
   })
    .done(function (data) {
     if (data.stt === 'done') {
      $('#apply-loadding').remove();
      var _stt = true;
      _this.parents('#page').append(data.layout);

      var h_form_wrap = $('.cms-career-modal-wrap').outerHeight();
      var h_form_item = $('.item-career-modal-inner').outerHeight();
      var h_form_enscroll = $('.cms-career-modal-wrap').outerHeight() - 150;
      if (h_form_item > h_form_wrap) {
       $('.item-career-modal-inner').enscroll();
       $('.item-career-modal-inner').css('height', h_form_enscroll + 'px');
      }
      $(document).on('click', '.modal-close', function (e) {
       e.preventDefault();
       $(this).parents('.cms-career-modal-wrap').remove();
      });
      $(document).on('click', '.apply-upload-cv', function (e) {
       e.preventDefault();
       var _upload = $(this);
       _upload.next().trigger('click');

      });
      $(document).on('click', '.apply-upload-cover', function (e) {
       e.preventDefault();
       var _upload_cover = $(this);
       _upload_cover.next().trigger('click');

      });
      $(document).on('change', 'input.apply-file', function (event) {
       $('.apply-error').remove();
       var _this_file = $(this);
       _this_file.prev().val('');
       var files = event.target.files;
       var size = parseInt(_this_file.attr('data-size')) * 1024;
       var size_notice = _this_file.attr('data-size-notice');
       var type = _this_file.attr('data-type').split(',');
       var type_notice = _this_file.attr('data-type-notice');
       if (!files[0]) {
        return;
       }
       var extension = files[0].name.slice((Math.max(0, files[0].name.lastIndexOf(".")) || Infinity) + 1);

       if (type.length > 0 && $.inArray(extension, type) === -1) {
        _this_file.val('');
        _this_file.after('<p class="apply-error">' + type_notice + '</p>');
        return;
       }

       if (size !== NaN && files[0].size > size) {
        _this_file.val('');
        _this_file.after('<p>' + size_notice + '</p>');
        return;
       }
       _this_file.prev().val(files[0].name);
      });
      var _check = true;
      $(document).on('click', '.apply-submit', function (e) {
       $('.apply-error').remove();
       e.preventDefault();
       var _this_submit = $(this);
       var _notice = _this_submit.attr('data-notice');
       var _form_parent = _this_submit.parents('.cms-contact-form-inner');
       var _name = _form_parent.find('.apply-field-name'),
        _cv = _form_parent.find('.apply-upload-cv-file'),
        _cover = _form_parent.find('.apply-upload-cover-file'),
        _message = _form_parent.find('.apply-message-val');
       _name.removeClass('cms-apply-error');
       _message.removeClass('cms-apply-error');
       if (_name.val() === '') {
        _name.addClass('cms-apply-error');
        _check = false;
       }
       if (_message.val() === '') {
        _message.addClass('cms-apply-error');
        _check = false;
       }
       if (_cv.val() === '') {
        _cv.after('<p class="apply-error">' + _notice + '</p>');
        _check = false;
       }
       if (_cover.val() === '') {
        _cover.after('<p class="apply-error">' + _notice + '</p>');
        _check = false;
       }
       if (_stt && _check) {
        _stt = false;
        _check = false;
        var cv_file = _cv.prop('files')[0];
        var cover_file = _cover.prop('files')[0];
        var form_data = new FormData();
        form_data.append('action', 'career_submit_form');
        form_data.append('name', _name.val());
        form_data.append('message', _message.val());
        form_data.append('cv', cv_file);
        form_data.append('cover', cover_file);
        form_data.append('post_id', _this_submit.attr('data-id'));
        $.ajax({
         type: 'POST',
         url: main_data.ajax_url,
         cache: false,
         contentType: false,
         processData: false,
         data: form_data,
         beforeSend: function () {
          $('body').append('<div id="apply-loadding" class="cms-loader"><div class="loading-spin"><div class="spinner"><div class="right-side"><div class="bar"></div></div><div class="left-side"><div class="bar"></div></div></div><div class="spinner color-2"><div class="right-side"><div class="bar"></div></div><div class="left-side"><div class="bar"></div></div></div></div></div>');
         },
         success: function (data) {
          if (data.stt === 'done') {
           $('#apply-loadding').remove();
           _this_submit.after('<p class="career-result">' + data.msg + '</p>');
          }
         },
         error: function (jqXHR, exception) {
          console.log('cant send ajax');
         },
        });
       } else {
        return;
       }
      });
     }
    })
    .fail(function () {
     $('#apply-loadding').remove();
     return false;
    })
    .always(function () {
     $('#apply-loadding').remove();
     return false;
    });
  });
 });

 /* =================
  Column Absolute
  =================== */
 function tekhfixers_col_offset() {
  var w_vc_row_lg = ($('#content').width() - 1170) / 2;
  if (window_width > 1200) {
   $('.col-offset-right > .vc_column-inner').css('padding-right', w_vc_row_lg + 'px');
   $('.col-offset-left > .vc_column-inner').css('padding-left', w_vc_row_lg + 'px');
   $('.col-offset-right > .col-offset-inner').css('padding-right', w_vc_row_lg + 'px');
   $('.col-offset-left > .col-offset-inner').css('padding-left', w_vc_row_lg + 'px');
  }
 }

 function tekhfixers_header_sticky() {
  var offsetTop = $('#site-header-wrap').outerHeight();
  var h_header = $('.fixed-height').outerHeight();
  var offsetTopAnimation = offsetTop + 200;
  if (scroll_status == 'down' && scroll_top > offsetTopAnimation) {
   $('#headroom').addClass('headroom--down').removeClass('headroom--up');
  }
  if (scroll_status == 'up' && scroll_top > offsetTopAnimation) {
   $('#headroom').addClass('headroom--up').removeClass('headroom--down');
  } else if (scroll_status == 'up' && scroll_top < offsetTopAnimation) {
   $('#headroom').removeClass('headroom--up');
  }
  if (window_width > 992) {
   $('.fixed-height').css({
    'height': h_header
   });
  }
 }

 function tekhfixers_item_sameheight() {
  $('.cms-service-carousel-layout2 .item-holder').matchHeight();
  $('.cms-timeline-carousel .owl-item').matchHeight();
  $('.cms-grid-sameheight .grid-item').matchHeight();
  $('.vc_row-o-equal-height .col-equal-height').matchHeight();
  $('.cms-timeline-carousel').each(function () {
   var h_item_timeline = $(this).find('.owl-item').height();
   var h_item_timeline_wrap = h_item_timeline * 2;
   $(this).find('.owl-stage').css('height', h_item_timeline_wrap + 'px');
   $(this).find('.owl-item:nth-child(even)').css('margin-top', h_item_timeline + 'px');
  });
 }

 function tekhfixers_menu_mobile() {
  if ($(window).width() < 991) {
   $('.main-navigation li.menu-item-has-children').append('<span class="main-menu-toggle"></span>');
   $('.main-menu-toggle').on('click', function () {
    $(this).parent().find('> .sub-menu').toggleClass('submenu-open');
    $(this).parent().find('> .sub-menu').slideToggle();
   });
  }
 }

 function tekhfixers_rtl() {
  /* =================
   RTL
   =================== */
  if ($('html').attr('dir') == 'rtl') {
   $('[data-vc-full-width="true"]').each(function (i, v) {
    $(this).css('right', $(this).css('left')).css('left', 'auto');
   });
  }
 }

 /* ====================
  Scroll To Top
  ====================== */
 function tekhfixers_scroll_to_top() {
  if (scroll_top < window_height) {
   $('.scroll-top').addClass('off').removeClass('on');
  } else {
   $('.scroll-top').removeClass('off').addClass('on');
  }
 }

 /* ====================
  Career Modal Responsive
  ====================== */
 function tekhfixers_career_modal_responsive() {
  var h_form_wrap = $('.cms-career-modal-wrap').outerHeight();
  var h_form_item = $('.item-career-modal').outerHeight();
  if (h_form_item > h_form_wrap) {
   h_form_wrap.enscroll();
  }
 }

 var theme = {
  init: function () {
   theme.testimonialCarousel();
   theme.videoPlay();
   theme.carouselDot();
   theme.carouselStretch();
   theme.tiltBlog();
   theme.removeFlex();
   theme.hoverParallax();
   theme.countDown();
   theme.isotopeGallery();
   theme.sideBarMenu();
   theme.searchHeader();
   theme.resize();
  },
  testimonialCarousel: function () {
   $('.layout2 .card-header a').on('click', function () {
    $(this).parents('.card').siblings('.card').removeClass('active');
    $(this).parents('.card').toggleClass('active');
   });

  },
  videoPlay: function () {
   //if(YouTubePopUp){
   var p = $('.tt_event_page_left p');
   $.each(p, function(i, e){
    var ltext = $(e).html();
    if(ltext == 0){
     $(e).remove();
    }
    console.log(ltext.length);
    // if(e.html() == ''){
    //  $(this).remove();
    // }
   });
   $(document).ready(function () {
    $("a.video-autoplay").YouTubePopUp();
    $("a.video-no-autoplay").YouTubePopUp({autoplay: 0}); // Disable autoplay
   })
   //}
  },
  carouselDot: function () {
   if ($('.fr-testimonial-carousel.default').length > 0) {
    setTimeout(function () {
     var margin = parseInt($('.fr-testimonial-carousel.default').find('.owl-dots').css('width').replace('px', '')) / 2;
     $('.fr-testimonial-carousel.default').find('.owl-prev').css({
      'margin-right': (30 + margin ) + 'px',
      'opacity': 1
     });
     $('.fr-testimonial-carousel.default').find('.owl-next').css({
      'margin-left': (30 + margin ) + 'px',
      'opacity': 1
     });
    }, 500)
   }
  },
  carouselStretch: function () {
   function resizeCarousel() {
    var ww = window.innerWidth;
    setTimeout(function () {
     if (ww >= 1200) {
      $('.carousel-stretch-right').css({'padding-left': ((ww - 1170) / 2) + 'px', 'opacity': 1});
     } else if (ww >= 1024 && ww <= 1200) {
      //$('.carousel-stretch-right').css({'padding' :'30px','opacity' : 1});
     } else {
      $('.carousel-stretch-right').css({'padding': '0px', 'opacity': 1});
     }
    }, 1000);
   }

   resizeCarousel();
   $(window).on('resize', function () {
    resizeCarousel();
   })
   function carouselOpacity() {
    var active = $('.fr-service-carousel-default').find('.active');
    var lactive = active.length;
    $(active).each(function () {
     $(this).addClass('op1').removeClass('op6');
    })
    $(active[lactive - 1]).addClass('op6').removeClass('op1');
    ;
   }

   carouselOpacity();
   $('.fr-service-carousel-default').on('change.owl.carousel', function () {
    carouselOpacity();
   })

  },
  tiltBlog: function () {
   $('.fr-service-carousel-default').on('change.owl.carousel', function (e) {
    $(e.target).find('.single-hentry-blog-post').tilt({perspective: 1500});
   });
   hoverTil();
   $(window).on('resize', function () {
    hoverTil();
   });
   function hoverTil() {
    if (window.innerWidth >= 768) {
     $(document).find('.single-hentry-blog-post').each(function () {
      $(this).tilt({perspective: 1500});
     });
     $(document).find('.hover-effect').each(function () {
      $(this).tilt({perspective: 1500});
     });
    } else {
     $(document).find('.single-hentry-blog-post').each(function () {
      $(this).tilt.destroy.call($(this));
     });
    }
   }
  },
  hoverParallax: function () {
   $('.vc_row').each(function () {
    var $this = $(this)
    if ($this.find('.hover-parallax').length > 0) {
     $this.mousemove(function (e) {
      parallaxIt(e, ".hover-parallax", -80, $this);
     });
    }
   })
   function parallaxIt(e, target, movement, $this) {
    //var $this = $(".vc_row");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;
    TweenMax.to(target, 1, {
     x: (relX - $this.width() / 2) / $this.width() * movement,
     y: (relY - $this.height() / 2) / $this.height() * movement
    });
   }
  },
  countDown: function () {
   if ($('.fr-count-down-container').length > 0) {
    $('.fr-count-down-container').each(function () {
     var $this = $(this);
     var div = $this;
     var timeout = $this.data('time');
     var end = new Date(timeout);
     var _second = 1000;
     var _minute = _second * 60;
     var _hour = _minute * 60;
     var _day = _hour * 24;
     var timer = setInterval(function () {
      var now = new Date();
      var distance = end - now;
      if (distance > 0) {
       var days = Math.floor(distance / _day);
       var hours = Math.floor((distance % _day) / _hour);
       var minutes = Math.floor((distance % _hour) / _minute);
       var seconds = Math.floor((distance % _minute) / _second);
       div.find('.day').html(days < 10 ? '0' + days : days);
       div.find('.hour').html(hours < 10 ? '0' + hours : hours);
       div.find('.minute').html(minutes < 10 ? '0' + minutes : minutes);
       div.find('.second').html(seconds < 10 ? '0' + seconds : seconds);
       return;
      }
      clearInterval(timer);
     }, 1000);
    })
   }
  },
  isotopeGallery: function () {
   if ($('.row.gallery-filter').length > 0) {
    var last = '';
    $('.nav-gallery-filter').on('click', 'li', function () {
     var filter = $(this).data('filter');
     $(this).siblings('li').removeClass('active');
     $(this).addClass('active');
     if (filter == '*') {
      $('.row .grid-item').attr('style', '');
      $('.row.gallery-filter').attr('style', '');
      last = '*';
      return;
     }
     $('.row.gallery-filter').imagesLoaded(function () {
      if (last == "*" && $('.row.gallery-filter').data('isotope')) {
       $('.row.gallery-filter').isotope('destroy');
      }
      last = filter;
      $('.row.gallery-filter').isotope({
       filter: filter,
       masonry: {
        columnWidth: '.col-xl-4',
       },
      });
     })
    })
   }
   if ($('.row.isotope-grid').length > 0) {

    $('.row.isotope-grid').imagesLoaded(function () {
     $('.row.isotope-grid').isotope({'filter': '*'});
    })
    $('.filter-bar').on('click', '.filter-item', function () {
     var filter = $(this).data('filter');
     $(this).siblings('.filter-item').removeClass('active');
     $(this).addClass('active');
     $('.row.isotope-grid').isotope({'filter': filter});
    })
   }
  },
  sideBarMenu: function () {
   $('.list-menu-service').each(function(){
    var li_active = $(this).find('li.active');
    if(li_active.length > 0){
     $(this).parents('.collapse').addClass('show');
    }
   });
   $('.toggle-sidebar').on('click', function (e) {
    e.preventDefault();
    $('.sidebar-menu').toggleClass('active');
    $('body').addClass('overflow');
   })
   $('.close-sidebar-menu').on('click', function (e) {
    e.preventDefault();
    $('.sidebar-menu').removeClass('active');
    $('body').removeClass('overflow');
   })
  },
  searchHeader: function () {
   $(function () {
    $('.progress-bar').each(function () {
     var bar_value = $(this).attr('aria-valuenow') + '%';
     $(this).animate({width: bar_value}, {duration: 3000, delay: 2000, easing: 'easeOutCirc'});
    });
   });
   $('.open-search').on('click', function (e) {
    e.preventDefault();
    $('.header-search').addClass('active');
    $('.search-popup .search-field').focus();
    $('body').addClass('overflow');
   });
   $('.overlay').on('click', function () {
    $('.header-search').removeClass('active');
    $('body').removeClass('overflow');
   })
  },
  removeFlex: function () {
   if (window.innerWidth <= 768) {
    $('.vc_row').removeClass('vc_row-o-content-middle').addClass('has-flex');
    $('.vc_row').removeClass('vc_row-flex').addClass('has-flex');

   } else {
    $('.vc_row.has-flex').addClass('vc_row-o-content-middle').removeClass('has-flex');
    $('.vc_row.has-flex').addClass('vc_row-flex').removeClass('has-flex');
   }
  },
  resize: function () {

   $(window).on('resize', function () {
    tekhfixers_header_sticky();
    theme.removeFlex();
   })
  }
 }
 theme.init();
 var woo = {
  init: function () {
   woo.singleProduct();
   woo.catDropdown();
   woo.changeLoopQuantity();
  },
  singleProduct: function () {
   var menu = $('.menu-item-type-taxonomy a');
   menu.each(function (i, e) {
    if ($(e).html().length == 0) {
     $(e).remove();
    }
   });
   if ($('.related.products ').length > 0) {
    $('.text-related').show();
   }
   $('#bread-add-to-cart').on('click', function (e) {
    e.preventDefault();
    $('.single_add_to_cart_button').trigger('click');
   });

   if ($('.variations_form.cart').length > 0) {
    var hidden = $('.select-colors').data('hidden');
    $('#' + hidden).parents('tr').css('display', 'none');
    $('.select-color-item').on('click', function () {
     var target = $(this).data('target');
     var value = $(this).data('value');
     var html = $(this).html();
     $('#' + target).val(value).trigger('change');
     $(this).siblings('li').removeClass('active');
     $(this).addClass('active');
     $('.list-color-select').removeClass('active');
     $('.select-colors .default').html(html);
    });
    $('.select-colors .default').on('click', function () {
     $('.list-color-select').toggleClass('active');
    });
    $('.close-select-color').on('click', function () {
     $('.list-color-select').removeClass('active');
    })
   }
   $(document).find('.reset_variations').trigger('click');
   var default_value = $('li.default').data('default');
   var default_target = $('li.default').data('target');
   $(default_target).val(default_value);
  },
  catDropdown: function () {
   $('.widget_product_categories').find('ul.children').addClass('woo-submenu-open').hide();
  },
  changeLoopQuantity: function () {
   $('.loop-plus').on('click', function () {
    var input = $(this).parents('.woocommerce-loop-quantity').find('input');
    var number = parseInt(input.val()) + 1;
    input.val(number);
    input.trigger('change');
    $(this).parents('.woocommerce-product-action').find('.ajax_add_to_cart').attr('data-quantity', number);
   })
   $('.loop-minus').on('click', function () {
    var input = $(this).parents('.woocommerce-loop-quantity').find('input');
    if (parseInt(input.val()) > 1) {
     var number = parseInt(input.val()) - 1;
     input.val(number);
     input.trigger('change');
     $(this).parents('.woocommerce-product-action').find('.ajax_add_to_cart').attr('data-quantity', number);
    }
   })

   $('.quantity-wrap .fa-angle-right').on('click', function () {
    var input = $(this).parents('.quantity-wrap').find('input');
    var number = parseInt(input.val()) + 1;
    input.val(number);
    input.trigger('change');
   })
   $('.quantity-wrap .fa-angle-left').on('click', function () {
    var input = $(this).parents('.quantity-wrap').find('input');
    if (parseInt(input.val()) > 1) {
     var number = parseInt(input.val()) - 1;
     input.val(number);
     input.trigger('change');
    }
   });
   $('input.qty').on('change', function () {
    $('button[name="update_cart"]').removeAttr('disabled');
   })
  }
 }
 woo.init();

})(jQuery);

