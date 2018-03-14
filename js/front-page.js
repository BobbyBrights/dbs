jQuery(document).ready(function($){

  $(window).load(function(){
    setTimeout(() => {
      $('.front-page__landing-page-slogan-innovation').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 3000);
    setTimeout(() => {
      $('.front-page__landing-page-slogan-community').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 3300);
    setTimeout(() => {
      $('.front-page__landing-page-slogan-legacy').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 3600);
    setTimeout(() => {
      $('.front-page__landing-page-slogan-view-projects').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 3900);
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
    let aboutPageScrollReveal = {
      duration: 900,
      distance: '30px',
      easing: 'ease-in-out',
      scale: 1,
      reset: false,
      viewFactor: 0.3
    }
    let headerFrontPageScrollReveal = {
      duration: 1200,
      distance: '0',
      delay: 2500,
      easing: 'ease-in-out',
      scale: 1,
      reset: false,
      viewFactor: 0.5
    }
    let headerScrollReveal = {
      duration: 1000,
      distance: '0',
      delay: 800,
      easing: 'ease-in-out',
      scale: 1,
      reset: false,
      viewFactor: 0.5
    }

    setTimeout(function() {
      // If home, delay and lengthen Header Logo Scrollreveal
      if (window.location.pathname == '/') {
        // sr.reveal('.header-logo', headerFrontPageScrollReveal);
        // sr.reveal('.header__hamburger', headerFrontPageScrollReveal);
        setTimeout( () => {
          $('.header-logo').css('opacity', '1');
          $('.header__hamburger').css('opacity', '1');
        }, 1000 )
      } else {
        // sr.reveal('.header-logo', headerScrollReveal);
        // sr.reveal('.header__hamburger', headerScrollReveal);  
        setTimeout( () => {
          $('.header-logo').css('opacity', '1');
          $('.header__hamburger').css('opacity', '1');
        }, 800 )      
      }

      // front page
      sr.reveal('.front-page__content-image', frontPageScrollReveal);
      sr.reveal('.front-page__content-description-header', frontPageScrollReveal);
      sr.reveal('.front-page__content-description-detail', frontPageScrollReveal);
      sr.reveal('.front-page__content-description-link', frontPageScrollReveal);

      // projects page
      sr.reveal('.project__images-carousel', frontPageScrollReveal);
      sr.reveal('.project__status', frontPageScrollReveal);
      sr.reveal('.project__title', frontPageScrollReveal);
      sr.reveal('.project__address', frontPageScrollReveal);
      sr.reveal('.project__description', frontPageScrollReveal);

      // single project page
      sr.reveal('.single-project__title', frontPageScrollReveal);
      sr.reveal('.single-project__address', frontPageScrollReveal);
      sr.reveal('.single-project__specs', frontPageScrollReveal);
      sr.reveal('.single-project__description', frontPageScrollReveal);
      sr.reveal('.single-project__featured-in-title', frontPageScrollReveal);
      sr.reveal('.single-project__featured-in-article-newspaper-name', frontPageScrollReveal);
      sr.reveal('.single-project__featured-in-article-title', frontPageScrollReveal);
      sr.reveal('.single-project__featured-in-article-date', frontPageScrollReveal);

      // about page
      sr.reveal('.about__landing-page-text', frontPageScrollReveal);
      // sr.reveal('.about__our-legacy-large-img', aboutPageScrollReveal);
      // sr.reveal('.about__our-legacy-small-img', aboutPageScrollReveal);
      // sr.reveal('.about__innovation-small-img', {
      //   duration: 900,
      //   distance: '20px',
      //   easing: 'ease-in-out',
      //   scale: 1,
      //   reset: false,
      //   viewFactor: 0.3
      // });
      // sr.reveal('.about__community-small-img', {
      //   duration: 900,
      //   distance: '20px',
      //   easing: 'ease-in-out',
      //   scale: 1,
      //   reset: false,
      //   viewFactor: 0.3
      // });
    }, 1500);    
  })();

  // Parallax for Hero images on home and about page
  (function rellax () {
    if ( window.location.pathname == '/' || window.location.pathname == '/about/' ) {
      var rellax = new Rellax('.rellax', {
        center: true
      });
    }
  })()

})