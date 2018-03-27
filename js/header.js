
// Open Nav Menu 
function openMenu() {
  document.getElementById('menu-overlay').style.width = '100%';
  document.documentElement.style.overflow = 'hidden';    
  document.getElementById('menu-close-wrapper').style.opacity = '1';
  document.getElementById('menu-content').style.opacity = '1';  
}
// Close Nav Menu
function closeMenu() {
  document.getElementById('menu-overlay').style.width = '0%';
  document.getElementById('menu-close-wrapper').style.opacity = '0';  
  document.getElementById('menu-content').style.opacity = '0';
  document.documentElement.style.overflow = '';  
}

jQuery(document).ready(function($) {
  let windowSize = window.innerWidth;

  // Loader
  let top;
  if (windowSize > 1025) {
    top = '-40px';
  } else {
    top = '-35px';
  }

    // Loader Animation set on interval of .5s until window loads
    function loaderAnimation() {
      $('#loader-d, #loader-b, #loader-s').css({'transition': 'none', 'top': '0'});
      setTimeout(function() {
        $('#loader-d').css({'transition': 'top 0.5s ease-in-out', 'top': `${top}`});
        setTimeout(function() {
          $('#loader-b').css({'transition': 'top 0.5s ease-in-out', 'top': `${top}`});
          setTimeout(function() {
            $('#loader-s').css({'transition': 'top 0.5s ease-in-out', 'top': `${top}`});
          }, 500);
        }, 500);
      }, 500);
    }      
    let interval = setInterval(loaderAnimation, 2000);
    // On window load, play animation once and fade out
    $(window).on('load', function() {
      alert('loaded');
      clearInterval(interval);
      loaderAnimation();
      setTimeout(function() {
        $('#loader').fadeOut();      
      }, 1500);
    });


  // Sticky Header
  // Keep track of scroll up or down
  let lastScroll = 0;
  $(window).scroll(function(e) {
    let st = $(this).scrollTop();
    if (window.scrollY > 100) {
      if (st > lastScroll) {
        $('header').css('top', '-110px');   
      } else {
        $('header').css('top', 0);
      }
      lastScroll = st;
    }
  });
});