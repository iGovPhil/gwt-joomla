jQuery(function($) {
  // foundation initialization
  $(document).foundation();
  $(document).foundation('section').foundation('orbit', {
    animation: 'fade',
    timer_speed: 5000,
    pause_on_hover: true,
    resume_on_mouseout: true,
    bullets: false,
    variable_height: false
  });

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
});