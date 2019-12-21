const primaryColor = {
  r: 186,
  g: 82,
  b: 64
}
const lightAccent = {
  r: 209,
  g: 160,
  b: 57
}
const lightColor = {
  r: 240,
  g: 234,
  b: 214
}

$(window).scroll(function () {
    $('#mainphoto').css('opacity', 1 - $(window).scrollTop() / ($(window).innerHeight() * 0.9));
    if ( $( window ).width() < 820) {
      $('header').css('background', 'var(--primaryColor)');
    } else {
      $('header').css('background',"rgba(" + primaryColor.r + "," + primaryColor.g + "," + primaryColor.b + "," + $(window).scrollTop()/$(window).innerHeight() +")");
    }

    if($(window).scrollTop()/$(window).innerHeight() <= 0.30 ) {
      $(".selectednav").css({color: "var(--lightColor)"});
    } else {
      $(".selectednav").removeAttr('style');
    }
});

$('#arrowdown').on('click', function(){
  scrollContent();
});

window.scrollContent = function() {
    $('html, body').animate({
      scrollTop: $('.wrapperContent').offset().top
    }, 500);
}
