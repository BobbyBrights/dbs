jQuery(document).ready(function($){

  (function slick () {
    if ( $(window).width() < 1050 ) {
      $('.project__images-carousel').slick({
        dots: false,
        arrows: false,
      });
    } else {
      $('.project__images-carousel').slick({
        dots: true,
        arrows: false,
      });
    }
  })();

 
})