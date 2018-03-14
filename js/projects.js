jQuery(document).ready(function($){

  (function slick () {

      $('.project__images-carousel').slick({
        dots: true,
        arrows: false,
      });
    
  })();

  (function disableProjects () {
    // console.log($('.slick-track'))
    for (let i = 0; i < $('.slick-track').length; i++) {
      // console.log($($('.project__description')[i])[0].children.length);
      if ($('.slick-track')[i].children.length == 1 || $($('.project__description')[i])[0].children.length == 0) {
        $($($('.slick-track')[i]).parentsUntil($('.all-projects'))).css("pointer-events", "none");
        // console.log($($('.slick-track')[i]).parentsUntil($('.all-projects')))
      }
    }
  })();

 
})