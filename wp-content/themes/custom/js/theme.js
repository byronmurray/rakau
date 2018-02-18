jQuery.noConflict();
(function( $ ) {
  $(function() {

      $('img').removeAttr('width').removeAttr('height');



      // kick in cover height - navbar height 
      var navbar = $(".navbar");

      $(window).scroll(function() {
        if( $(this).scrollTop() > 1000 ) {
          navbar.addClass('sticky');
        } else {
          navbar.removeClass('sticky');
        }
      });

  });
})(jQuery);
