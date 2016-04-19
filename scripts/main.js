$(document).ready(function() {

  /* Initialize Jquery WOW Plugin to reveal animations on scroll */
  new WOW().init();

  /* Initialize Jquery Knob plugin for making Knbs in Skills Section */
  $(".knob").knob();

  /* Jquery for smooth scrolling on <a> tags and clipping the URL's */
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1500);
        return false;
      }
    }
  });

  /* Jquery for revealing descriptive of desktop, mobile, heart on main page */
  /*var desStrings = "Desktop Devices,Mobile Devices,Loved by Everyone".split(",");
  var pos = 0;
  changeDesText();
  function changeDesText() {
    $('.qot-msg-des').html(desStrings[pos]);
    pos++;
    if (pos == desStrings.length) {
      pos = 0
    }
    window.setTimeout(function() { changeDesText() }, 500);
  }*/
  
  /* Jquery for Side Navigation Bar */
  $(".a2").hide();
  $(".sec-inner").click(function() {
    if($(".sec-outer").hasClass("clicked")) {
      $(".sec-outer").removeClass("clicked");
      $(".a1").show();
      $(".a2").hide();
    }
    else {
      $(".sec-outer").addClass("clicked");
      $(".a1").hide();
      $(".a2").show();
    }
  });

  /* Jquery for switching between Person and Company on hire-me page */
  $('#hire2-ico').hide();
  $('#hire1-ico').hide();
  $('#load-form').height(341);
  $('#load-form').hide();
  $('#load-done-form').hide();
  $('#hire2-form').hide();
  $('#hire1-form').hide();
  $('#hire-def-form').show();
  $('#hire2').click(function() {
    $('#hire2-ico').fadeIn();
    $('#hire1-ico').fadeOut();
    $('#hire1').removeClass('r-active');
    $('#hire2').addClass('r-active');
    $('#hire-def-form').hide();
    $('#hire1-form').hide();
    $('#hire2-form').fadeIn();
    $('#load-form').hide();
    $('#load-done-form').hide();
  });
  $('#hire1').click(function() {
    $('#hire1-ico').fadeIn();
    $('#hire2-ico').fadeOut();
    $('#hire2').removeClass('r-active');
    $('#hire1').addClass('r-active');
    $('#hire-def-form').hide();
    $('#hire2-form').hide();
    $('#hire1-form').fadeIn();
    $('#load-form').hide();
    $('#load-done-form').hide();
  });

  /* Jquery for parralax on error page */
  $( "#err-target" ).mousemove(function( event ) {
    $(".err-img").css('transform', 'translate(' + -event.pageX /20 + 'px,' + -event.pageY /20+ 'px)');
    $(".err-parallax-text").css('transform', 'translate(' + event.pageX /30 + 'px,' + event.pageY /30+ 'px)');
  });

  /* Jquery for expanding the height of skills section */
  var h_stat="collapsed";
  $('.skill-expand').click(function() {
    if(h_stat == "collapsed") {
      $('.skills-row').css("height","auto");
      $('.skill-expand').html('Show Less <i class="fa fa-chevron-up"></i>');
      h_stat="expanded";
    }
    else if(h_stat == "expanded") {
      $('.skills-row').css("height","450px");
      $('.skill-expand').html('Show More <i class="fa fa-chevron-down"></i>');
      h_stat="collapsed";
      $('html,body').animate({
        scrollTop: $("#skill").offset().top
      }, 500);
    }
  });

  
  /* Jquery for Work-Profile Pop-ups */
  $(".work-profile-1").hide();
  $(".work-profile-2").hide();
  $(".work-profile-3").hide();
  $(".full-overlay").hide();
  $(".full-overlay").click(function() {
    $(".work-profile-1").slideUp();
    $(".work-profile-2").slideUp();
    $(".work-profile-3").slideUp();
    $(".full-overlay").slideUp();
  });
  $(".cancel").click(function() {
    $(".work-profile-1").slideUp();
    $(".work-profile-2").slideUp();
    $(".work-profile-3").slideUp();
    $(".full-overlay").slideUp();
  });
  $(".work-thumb-1").click(function() {
    $(".work-profile-1").slideDown();
    $(".full-overlay").slideDown();
  });
  $(".work-thumb-2").click(function() {
    $(".work-profile-2").slideDown();
    $(".full-overlay").slideDown();
  });
  $(".work-thumb-3").click(function() {
    $(".work-profile-3").slideDown();
    $(".full-overlay").slideDown();
  });
  $(document).keydown(function(e) {
    if (e.keyCode == 27) {
      $(".work-profile-1").slideUp();
      $(".work-profile-2").slideUp();
      $(".work-profile-3").slideUp();
      $(".full-overlay").slideUp();
    }
  });

});