'use strict';
var CAY = window.CAY || {};


(function($) {

  CAY.closeElemDistance = '-55px';

  CAY.wW = $(window).width();
  CAY.wWi = $(window).width();

  CAY.wH = $(window).height();
  CAY.wHi = $(window).height();

  var isMenuOpen = false;

  $(window).resize(function() {
    CAY.wWi = $(window).width();
    CAY.wHi = $(window).height(); 
  });

  $(window).scroll(function() {
    CAY.sT = $(window).scrollTop();
  });


})(jQuery);
