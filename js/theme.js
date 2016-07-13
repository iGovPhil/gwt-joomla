jQuery(document).ready(function($) {

  $(document).foundation();

  /** Accessibility Cookie **/
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

  /** Accessibility Widget **/
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


  /** Back to Top **/
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

  var a = $('#main-content').position().top;
  b = $('.sticky').height();
  c = a-b;
  $('#stc').click(function(event) {
    event.preventDefault();
    alert(a);
    alert(b);
    $('html, body').animate({scrollTop:c}, duration);
    return false;
  });

  var d = $('#footer').position().top;
  $('#stf').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop:d}, duration);
    return false;
  });
	
	
});
