'use strict';
var CAY = window.CAY || {};

(function($) {

  CAY.Helpers = {
    // Example Function
    windowHeightMatch: function() {
      var wH = $(window).height();
      $('.heightmatch').css('height', wH);
    },
    testFunction: function() {
      // Do stuff here
    },

    scrollHome: function(elem) {
      $('html,body').animate({
        scrollTop: $("#main-content-section").offset().top},
        'slow');
    },

    scrollBand: function(elem) {
      $('html,body').animate({
        scrollTop: $("#band-horizon-section").offset().top},
        'slow');
    },
    

  scrollTour: function(elem) {
    $('html,body').animate({
      scrollTop: $("#band-tour-section").offset().top},
      'slow');
  },

  scrollNews: function(elem) {
    $('html,body').animate({
      scrollTop: $("#band-news-section").offset().top},
      'slow');
  },

  scrollMusic: function(elem) {
    $('html,body').animate({
      scrollTop: $("#band-media-section").offset().top},
      'slow');
  },

  stickyHeader: function(elem) {
    var header = $(document).scrollTop();
    var headerHeight = $(".header").outerHeight();
    if (header > headerHeight) {
      $(".header").addClass("fixed");
    } else {
      $(".header").removeClass("fixed");
    }
  },

  headerInView: function(elem) {
    var header = $(document).scrollTop();
    var headerHeight = $(".header").outerHeight();
    var firstSection = $(".main-container section:nth-of-type(1)").outerHeight();
    if (header > headerHeight) {
      $(".header").addClass("fixed");
    } else {
      $(".header").removeClass("fixed");
    }
    if (header > firstSection) {
      $(".header").addClass("in-view");
    } else {
      $(".header").removeClass("in-view");
    }
  },
  
  slickStuff: function(elem) {

    elem.slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1
    });

  },

  instaFunction: function(elem) {

    var feed = new Instafeed({
      get: 'user',
      // tagName: 'awesome',
      clientId: '16085375'
  });
  feed.run();

  }
  
};
  
})(jQuery);
