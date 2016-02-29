// Coockie Functions //
function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    } else
        var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "");
}
// Coockie Functions //


jQuery(function($) {
  // Accessibility Widget //
  var tmp_link = $('#tmp-link').attr('data-link');
  var lc = tmp_link+"/css/a11y-contrast.css";
  var ld = tmp_link+"/css/a11y-desaturate.css";
  var lf = tmp_link+"/css/a11y-fontsize.css";

  if (readCookie('a11y-high-contrast')) {
      $('body').addClass('contrast');
      $('head').append($("<link id='highContrastStylesheet' rel='stylesheet' type='text/css' href="+lc+" >"));
      $('#accessibility-contrast').attr('aria-checked', true).addClass('active');
  };

  $('.toggle-contrast').on('click', function () {
      if (!$(this).hasClass('active')) {
          $('body').addClass('contrast');
          $('head').append($("<link id='highContrastStylesheet' rel='stylesheet' type='text/css' href="+lc+" >"));
          $(this).attr('aria-checked', true).addClass('active');
          createCookie('a11y-high-contrast', '1');
          return false;
      } else {
          $('#highContrastStylesheet').remove();
          $('body').removeClass('contrast');
          $(this).removeAttr('aria-checked').removeClass('active');
          eraseCookie('a11y-high-contrast');
          return false;
      }
  });

  if (readCookie('a11y-desaturated')) {
      $('body').addClass('desaturated');
      $('head').append($("<link id='desaturateStylesheet' rel='stylesheet' type='text/css' href="+ld+" >"));
      $('#accessibility-grayscale').attr('aria-checked', true).addClass('active');
  };

  $('.toggle-grayscale').on('click', function () {
      if (!$(this).hasClass('active')) {
          $('head').append($("<link id='desaturateStylesheet' rel='stylesheet' type='text/css' href="+ld+" >"));
          $('body').addClass('desaturated');
          $(this).attr('aria-checked', true).addClass('active');
          createCookie('a11y-desaturated', '1');
          return false;
      } else {
          $('#desaturateStylesheet').remove();
          $('body').removeClass('desaturated');
          $(this).removeAttr('aria-checked').removeClass('active');
          eraseCookie('a11y-desaturated');
          return false;
      }
  });


  var statementActive = false;
  var oldFocus = document;
  var statementFunction = function (e) {
      // e.preventDefault();
      $('.toggle-statement').toggleClass('statement-active');
      $('#accessibility-statement-content').toggleClass('statement-active');
      if ($('.toggle-statement').hasClass('statement-active')) {
          statementActive = true;
          $('#darklight').fadeIn();
          oldFocus = $(":focus");
          $('#accessibility-statement-content .statement-textarea').focus();
      } else {
          statementActive = false;
          $('#darklight').fadeOut();
          $(oldFocus).focus();
      }
  }
  
  $('.toggle-statement').click(statementFunction);
  $('#darklight').click(statementFunction);
  $(document).keydown(function (e) {
      if (statementActive && e.which == 27) {
          statementFunction(e);
      }
  });

  $('#accessibility-mode').click(function (e) {
      e.preventDefault();
      $(this).toggleClass('active');
      if ($(this).hasClass('active')) {
          $('#accessibility-widget').animate({
              right: '0px'
          });
          $(this).animate({
              right: '0px',
              opacity: 1,
              paddingLeft: '9px',
              paddingRight: '9px'
          });
      } else {
          $('#accessibility-widget').animate({
              right: '-42px'
          });
          $(this).animate({
              right: '-10px',
              opacity: 0.8,
              paddingLeft: '5px',
              paddingRight: '5px'
          });
      }
  });
  // Accessibility Widget //

  // foundation initialization //
  $(document).foundation();

  // $(document).foundation('section').foundation('orbit', {
  //   animation: 'fade',
  //   timer_speed: 5000,
  //   pause_on_hover: true,
  //   resume_on_mouseout: true,
  //   bullets: false,
  //   variable_height: false
  // });

  // back to top scroll
  var offset = 220;
  var duration = 500;
  $(window).scroll(function() {
      if ($(this).scrollTop() > offset) {
          $('#back-to-top').fadeIn(duration);
      } else {
          $('#back-to-top').fadeOut(duration);
      }
  });

  $('#back-to-top').click(function(event) {
      event.preventDefault();
      $('html, body').animate({scrollTop: 0}, duration);
      return false;
  });

  $('#accessibility-links ul li a').focus(function(){
    $(this).parent().addClass('access-focus');
  });
  $('#accessibility-links ul li a').blur(function(){
    $(this).parent().removeClass('access-focus');
  });

  // using responsiveslider
  $('.rsslides').responsiveSlides({
    auto: true,
    pager: true,
    nav: true,
    pauseControls: true,
    speed: 500,
    namespace: 'rslides',
  });

});