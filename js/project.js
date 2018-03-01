jQuery(document).ready(function($){

  (function singleProjectSlick () {
    if ( $(window).width() < 1050 ) {
      $('.single-project__images-carousel').slick({
        dots: false,
        arrows: false,
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 1,
      });
    } else {
      $('.single-project__images-carousel').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 6000,
      });
    }
  })();

})