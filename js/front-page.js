jQuery(document).ready(function($){

  $(window).load(function(){
    setTimeout(() => {
      $('.front-page__landing-page-slogan-innovation').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 500);
    setTimeout(() => {
      $('.front-page__landing-page-slogan-community').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 800);
    setTimeout(() => {
      $('.front-page__landing-page-slogan-legacy').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 1100);
    setTimeout(() => {
      $('.front-page__landing-page-slogan-view-projects').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 1400);
  });


  (function scrollReveal() {
    window.sr = ScrollReveal();
    let frontPageScrollReveal = {
      duration: 900,
      distance: '100px',
      easing: 'ease-in-out',
      scale: 1,
      reset: false,
      viewFactor: 0.5
    }
    sr.reveal('.front-page__content-image', frontPageScrollReveal);
    sr.reveal('.front-page__content-description-header', frontPageScrollReveal);
    sr.reveal('.front-page__content-description-detail', frontPageScrollReveal);
    sr.reveal('.front-page__content-description-link', frontPageScrollReveal);
  })();

})