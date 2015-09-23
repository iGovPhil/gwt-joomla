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


jQuery(document).ready(function($){

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
              left: '0px'
          });
          $(this).animate({
              left: '0px',
              opacity: 1,
              paddingLeft: '9px',
              paddingRight: '9px'
          });
      } else {
          $('#accessibility-widget').animate({
              left: '-42px'
          });
          $(this).animate({
              left: '-10px',
              opacity: 0.8,
              paddingLeft: '5px',
              paddingRight: '5px'
          });
      }
  });

});