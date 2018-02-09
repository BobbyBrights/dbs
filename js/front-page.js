jQuery(document).ready(function($){

  $(window).load(function(){
    setTimeout(() => {
      $('.slogan__innovation').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 500);
    setTimeout(() => {
      $('.slogan__community').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 800);
    setTimeout(() => {
      $('.slogan__legacy').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 1100);
    setTimeout(() => {
      $('.slogan__comming-soon').css({
        'bottom': '0',
        'opacity': '1',
      });
    }, 1400);
    if ($(window).width() > 1050) {
      setTimeout(() => {
        $('#desktop-logo-svg').css({
          'opacity': '1',
        });
        $('.header__contact-us').css({
          'opacity': '1',
        });
      }, 2400);
    }
    if ($(window).width() < 1050) {
      setTimeout(() => {
        $('#mobile-logo-svg').css({
          'opacity': '1',
        });
        $('.header__hamburger').css({
          'opacity': '1',
        });
      }, 2400);
    }
  });
  
  (function closeForm () {
    $('.contact-form__x-button').on('click', () => {
      $('.contact-form').css({
        'right': '-100vw',
      });
    })
  })();

  (function openForm () {
    $('.header__hamburger').on('click', () => {
      $('.contact-form').css({
        'right': '0',
      });
    })
    $('.header__contact-us > span').on('click', () => {
      $('.contact-form').css({
        'right': '0',
      });
    })

  })();

  // change form id to the one provided by the plugin
  (function redirectAfterSubmit () {
    if (window.location.href == `${window.location.protocol}//${window.location.hostname}/#wpforms-294`) {
      document.location.href="/";
    }
  })();

  (function styleOnSafari() {
    let isSafariMobile = navigator.userAgent.match(/(iPod|iPhone|iPad)/) && navigator.userAgent.match(/AppleWebKit/)

    if (isSafariMobile) {
      $('.slogans').css('bottom', '90px');
    }
  })();

  (function responsive () {
    $(window).on('resize', () => {
      if ($(window).width() < 1050) {
        $('#mobile-logo-svg').css('opacity', '1');
        $('.header__hamburger').css('opacity', '1');
      }
    })
  })();

})