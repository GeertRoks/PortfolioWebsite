$( document ).ready(function() {

  if ( $( window ).width() < 820) {
    navHamburgerShow();
  } else {
    navHamburgerHide();
  }

  $( window ).resize(function() {
    if ( $( window ).width() < 820) {
      navHamburgerShow();
      $('header').css('background', 'var(--primaryColor)');
    } else {
      navHamburgerHide();
      $('header').css('background',"rgba(" + primaryColor.r + "," + primaryColor.g + "," + primaryColor.b + "," + $(window).scrollTop()/$(window).innerHeight() +")");
    }
  });

  $( ".navHamburger" ).click(function() {
    navHamburgerExtend();
  });

  $( ".navCross" ).click(function() {
    navHamburgerCollapse();
  });

});

function navHamburgerCollapse() {
  $( ".links" ).slideToggle( "fast", function() {
    $( ".navCross" ).hide();
    $( ".navHamburger" ).show();
  });
}
function navHamburgerExtend() {
  $( ".links" ).slideToggle( "fast", function() {
    $( ".navHamburger" ).hide();
    $( ".navCross" ).show();
  });
}
function navHamburgerHide() {
  $( ".links" ).show();
  $( ".navHamburger" ).hide();
  $( ".navCross" ).hide();
}
function navHamburgerShow() {
  $(".links").hide();
  $(".navHamburger").show();
  $( ".navCross" ).hide();
}
