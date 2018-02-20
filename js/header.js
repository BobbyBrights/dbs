let windowSize = window.innerWidth;

function openMenu() {
  if (windowSize > 1025) {
    document.getElementById('menu-overlay').style.width = '40%';    
  } else if (windowSize < 1025){
    document.getElementById('menu-overlay').style.width = '100%';
    document.documentElement.style.overflow = 'hidden';    
  }
  document.getElementById('menu-close-wrapper').style.opacity = '1';
  document.getElementById('menu-content').style.opacity = '1';  
}

function closeMenu() {
  if (windowSize > 1025) {
    closeForm();
    setTimeout(function() {
      document.getElementById('menu-overlay').style.width = '0%';
      document.getElementById('menu-close-wrapper').style.opacity = '0';  
      document.getElementById('menu-content').style.opacity = '0';
    }, 300);
  } else if (windowSize < 1025){
    document.getElementById('menu-overlay').style.width = '0%';
    document.getElementById('menu-close-wrapper').style.opacity = '0';  
    document.getElementById('menu-content').style.opacity = '0';
    document.documentElement.style.overflow = '';  
  }
}

function openForm() {
  if (windowSize > 1025) {
    openMenu();
    setTimeout(function() {
      document.getElementById('contact-form').style.width = '100%';
      document.documentElement.style.overflow = 'hidden';                 
      // document.getElementById('contact-form-content').style.right = '0';  
      setTimeout(function() {
        document.getElementById('contact-form-content').style.opacity = '1';        
      }, 300);
    }, 300);
  } else if (windowSize < 1025) {
  document.getElementById('contact-form').style.width = '100%';
  document.getElementById('contact-close-wrapper').style.opacity = '1';
  // document.getElementById('contact-form-content').style.right = '0'; 
  document.getElementById('contact-form-content').style.opacity = '1';  
  document.documentElement.style.overflow = 'hidden';           
  }
}

function closeForm() {
  document.getElementById('contact-form').style.width = '0%';
  document.getElementById('contact-close-wrapper').style.opacity = '0';  
  // document.getElementById('contact-form-content').style.right = '-800px';
  document.getElementById('contact-form-content').style.opacity = '0';
  document.documentElement.style.overflow = '';            
}


jQuery(document).ready(function($) {

  // Add WP Forms classes (built in CSS)for desktop layout 
  function contactFormMediaQuery() {
    if (windowSize > 1025) {
      $('.contact__first-name').addClass('wpforms-one-half wpforms-first');
      $('.contact__last-name').addClass('wpforms-one-half');
      $('.contact__email').addClass('wpforms-one-half wpforms-first');
      $('.contact__phone').addClass('wpforms-one-half');
    } else {
      $('.contact__first-name').removeClass('wpforms-one-half wpforms-first');
      $('.contact__last-name').removeClass('wpforms-one-half');
      $('.contact__email').removeClass('wpforms-one-half wpforms-first');
      $('.contact__phone').removeClass('wpforms-one-half');
    }
  }

  contactFormMediaQuery();

  $(window).resize(function() {
    contactFormMediaQuery();
  });

  // Confirmation message from WPFORMS
  if ($('.wpforms-confirmation-container-full').length) {
    document.getElementById('contact-form').style.transition = 'none';
    openForm();
    setTimeout(function() {
      document.getElementById('contact-form').style.transition = 'width 0.7s ease-in-out';      
      closeMenu();
    }, 3000);
  }
});