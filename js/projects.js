jQuery(document).ready(function($){

  (function slick () {

      $('.project__images-carousel').slick({
        dots: true,
        arrows: false,
      });
    
  })();

  // (function disableProjects () {
    // $('.slick-track').each( function () {
    //   if ($(this)[0].children.length === 1) {
    //     $(this).parentsUntil($('.all-projects')).css("pointer-events", "none")
    //   }
    // })
    // for (let i = 0; i < $('.slick-track').length; i++) {
    //   // console.log($($('.project__description')[i])[0].children.length);
    //   if ($('.slick-track')[i].children.length == 1 || $($('.project__description')[i])[0].children.length == 0) {
    //     $($($('.slick-track')[i]).parentsUntil($('.all-projects'))).css("pointer-events", "none");
    //     // console.log($($('.slick-track')[i]).parentsUntil($('.all-projects')))
    //   }
    // }
  // })();

  // Only show slick dots if more than 1 image in carousel
  (function toggleSlickDots() {
    $('.all-projects article').each(function() {
      var imageCount = $(this).find('div.project__images-carousel').children(0).children(0).length;
      var dots = $(this).find('div.project__images-carousel').find('ul.slick-dots');
      if (imageCount <= 2) {
        $(dots).css('display', 'none');
      }
    });
  })();

  (function toggleCurrentAndPastTitle () {
    if ( $('.past-projects')[0].children.length === 0 ) {
      $('.past-projects__title').css("display", "none");
    }
    if ( $('.current-projects')[0].children.length === 0 ) {
      $('.current-projects__title').css("display", "none");
    }
  })();
 
})