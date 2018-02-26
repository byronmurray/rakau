jQuery.noConflict();
(function( $ ) {
  $(function() {

      $('img').removeAttr('width').removeAttr('height');

      // Scroll back to top
      window.onscroll = function() {
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

        if(scrollTop >= 1000) {
            document.getElementById('back-to-top').style.visibility="visible"
        } else {
            document.getElementById('back-to-top').style.visibility="hidden";
        }
      };

      // scoll backtotop
      $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
      });

      // -------------------------------------------------------------

      // kick in cover height - navbar height
      var navbar = $(".navbar");

      $(window).scroll(function() {
        if( $(this).scrollTop() > 1000 ) {
          navbar.addClass('sticky');
        } else {
          navbar.removeClass('sticky');
        }
      });



      // nav menu toggle button
      $('.navbar__icon').click(function() {
        $('.navbar__icon').toggleClass('active');
        $('.menu-main-menu-container').toggleClass('menu-show');
      });





      //smooth scrolling
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });



      // Move dots to div for navbar
      $( ".slick-dots" ).appendTo(".services__navbar");


      // Animates
      var $blocks = $('.animBlock.notViewed');
      var $window = $(window);

      $window.on('scroll', function(e){
        $blocks.each(function(i,elem){
          if($(this).hasClass('viewed'))
            return;

          isScrolledIntoView($(this));
        });
      });


      $blocks.each(function(i,elem){
        if($(this).hasClass('viewed'))
          return;

        isScrolledIntoView($(this));
      });


      function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemOffset = 0;

        if(elem.data('offset') != undefined) {
          elemOffset = elem.data('offset');
        }
        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        if(elemOffset != 0) { // custom offset is updated based on scrolling direction
          if(docViewTop - elemTop >= 0) {
            // scrolling up from bottom
            elemTop = $(elem).offset().top + elemOffset;
          } else {
            // scrolling down from top
            elemBottom = elemTop + $(elem).height() - elemOffset
          }
        }

        if((elemBottom <= docViewBottom) && (elemTop >= docViewTop)) {
          // once an element is visible exchange the classes
          $(elem).removeClass('notViewed').addClass('viewed');

          var animElemsLeft = $('.animBlock.notViewed').length;
          if(animElemsLeft == 0){
            // with no animated elements left debind the scroll event
            $(window).off('scroll');
          }
        }
      }




  });
})(jQuery);
