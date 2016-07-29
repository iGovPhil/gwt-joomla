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
    }return null;
}

function eraseCookie(name){ createCookie(name, ""); }



  /** Orbit-Play-Pause **/

(function($, Foundation){
  
/** **/

    Foundation.Orbit.defaults.controls = true;
    Foundation.Orbit.defaults.controlClass = 'orbit-button-controls';
    Foundation.Orbit.defaults.controlPauseText = 'Pause';
    Foundation.Orbit.defaults.controlPlayText = 'Play';
    Foundation.Orbit.defaults.timerDelay = '1000';
    Foundation.Orbit.prototype.initControls = function(){
        var _this = this;
        var statusElement = document.createElement("button");
        var buttonControl = document.createElement("span");
        if(this.options.accessible){
            var srText = document.createElement("span");
            $(srText).addClass('show-for-sr').text(this.options.controlPauseText);
            $(statusElement).append(srText);
        }
        $(buttonControl).addClass('orbit-button-text');
        $(statusElement).addClass(this.options.controlClass).append(buttonControl).attr('title', this.options.controlPlayText);
        $(this.$element).prepend(statusElement);
        if(this.options.autoPlay){
            this.controlPlay();
        }

        this.$button = this.$element.find('.' + this.options.controlClass);

        this.$button.on('click.zf.orbit', function () {
            _this.options.pauseOnHover = false;
            _this.$element.off('mouseenter.zf.orbit');
            _this.$element.off('mouseleave.zf.orbit');
            if(_this.options.autoPlay){
                _this.options.autoPlay = false;
                _this.controlPause();
            }
            else{
                _this.options.autoPlay = true;
                _this.controlPlay();
            }
        });
    }
    Foundation.Orbit.prototype.controlPause = function(){
        this.timer.restart();
        this.timer.pause();
        this.$wrapper = this.$element.find('.' + this.options.controlClass);
        this.$wrapper.attr('title', this.options.controlPlayText);
        this.$buttonText = this.$element.find('.' + this.options.controlClass + ' .orbit-button-text');
        this.$srText = this.$element.find('.' + this.options.controlClass + ' .show-for-sr');
        if(this.options.accessible){
            $(this.$srText).text(this.options.controlPlayText);
        }
        // $(this.$buttonText).html("▶︎");
        $(this.$buttonText).html("<i class='fa fa-play' aria-hidden='true'></i>");
    }
    Foundation.Orbit.prototype.controlPlay = function(){
        this.timer.restart();
        this.timer.start();
        this.$wrapper = this.$element.find('.' + this.options.controlClass);
        this.$wrapper.attr('title', this.options.controlPauseText);
        this.$buttonText = this.$element.find('.' + this.options.controlClass + ' .orbit-button-text');
        this.$srText = this.$element.find('.' + this.options.controlClass + ' .show-for-sr');
        if(this.options.accessible){
            $(this.$srText).text(this.options.controlPauseText);
        }
        // $(this.$buttonText).html("&#10073;&#10073;&nbsp;");
        $(this.$buttonText).html("<i class='fa fa-pause' aria-hidden='true'></i>");
    }
    $('[data-orbit]').on('init.zf.orbit', function(e){
        $(e.target).foundation('initControls');
    });


/** **/


  jQuery(document).ready(function($) {
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

})(jQuery, Foundation);


$(document).foundation();