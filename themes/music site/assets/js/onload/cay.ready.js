'use strict';
jQuery.migrateMute = true;
var CAY = window.CAY || {};

(function($) {
  $(document).ready(function () {

    $('#home-link').click (function() {
      CAY.Helpers.scrollHome($(this));
  
    });
    
    $('#band-link').click (function() {
      CAY.Helpers.scrollBand($(this));
  
    });

    $('#tour-link').click (function() {
      CAY.Helpers.scrollTour($(this));
  
    });

    $('#news-link').click (function() {
      CAY.Helpers.scrollNews($(this));
  
    });

    $('#music-link').click (function() {
      CAY.Helpers.scrollMusic($(this));
    });

    CAY.Helpers.slickStuff($('.slider'));

    $('#instafeed').ready (function() {
      // CAY.Helpers.instaFunction($(this));

      var feed = new Instafeed({
        get: 'user',
        userId: '1034562639',
        clientId: '9458319684a34f8ab05e44a92e33f4c9',
        accessToken: '1034562639.9458319.c14ef0d0796e4b20a92ee4a7b458fc73'
    });
    feed.run();
      
    
      
  
    });

    $(window).scroll (function() {
      CAY.Helpers.stickyHeader($(this));
  
    });

    $(window).scroll (function() {
      CAY.Helpers.headerInView($(this));
  
    });

  
     
  });
})(jQuery);