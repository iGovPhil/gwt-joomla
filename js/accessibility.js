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
    // createCookie(name, "", -1);
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
      $('#is_normal_contrast').attr('id', 'is_high_contrast').attr('aria-checked', true).addClass('active');
      // $('.a11y-toolbar ul li a i').addClass('icon-white');
  };

  $('.toggle-contrast').on('click', function () {
      if ($(this).attr('id') == "is_normal_contrast") {
          $('head').append($("<link id='highContrastStylesheet' rel='stylesheet' type='text/css' href="+lc+" >"));
          $('body').addClass('contrast');
          $(this).attr('id', 'is_high_contrast').attr('aria-checked', true).addClass('active');
          // $(this).parent().parent().find('i').addClass('icon-white');
          createCookie('a11y-high-contrast', '1');
          return false;
      } else {
          $('#highContrastStylesheet').remove();
          $('body').removeClass('contrast');
          $(this).attr('id', 'is_normal_contrast').removeAttr('aria-checked').removeClass('active');
          // $(this).parent().parent().find('i').removeClass('icon-white');
          eraseCookie('a11y-high-contrast');
          return false;
      }
  });

  if (readCookie('a11y-desaturated')) {
      $('body').addClass('desaturated');
      $('head').append($("<link id='DesaturateStylesheet' rel='stylesheet' type='text/css' href="+ld+" >"));
      $('#is_normal_color').attr('id', 'is_grayscale').attr('aria-checked', true).addClass('active');
  };

  $('.toggle-grayscale').on('click', function () {
      if ($(this).attr('id') == "is_normal_color") {
          $('head').append($("<link id='DesaturateStylesheet' rel='stylesheet' type='text/css' href="+ld+" >"));
          $('body').addClass('desaturated');
          $(this).attr('id', 'is_grayscale').attr('aria-checked', true).addClass('active');
          createCookie('a11y-desaturated', '1');
          return false;
      } else {
          $('#DesaturateStylesheet').remove();
          $('body').removeClass('desaturated');
          $(this).attr('id', 'is_normal_color').removeAttr('aria-checked').removeClass('active');
          eraseCookie('a11y-desaturated');
          return false;
      }
  });

  if (readCookie('a11y-larger-fontsize')) {
      // $('head').append($("<link id='FontSizeStylesheet' rel='stylesheet' type='text/css' href="+lf+" />"));
      $('body').addClass('fontsize');
      $('#is_normal_fontsize').attr('id', 'is_large_fontsize').attr('aria-checked', true).addClass('active');
  }

  $('.toggle-fontsize').on('click', function () {
      if ($(this).attr('id') == "is_normal_fontsize") {
          // $('head').append($("<link id='FontSizeStylesheet' rel='stylesheet' type='text/css' href="+lf+" />"));
          $('body').addClass('fontsize');
          $(this).attr('id', 'is_large_fontsize').attr('aria-checked', true).addClass('active');
          createCookie('a11y-larger-fontsize', '1');
          return false;
      } else {
          // $('#FontSizeStylesheet').remove();
          $('body').removeClass('fontsize');
          $(this).attr('id', 'is_normal_fontsize').removeAttr('aria-checked').removeClass('active');
          eraseCookie('a11y-larger-fontsize');
          return false;
      }
  });

});