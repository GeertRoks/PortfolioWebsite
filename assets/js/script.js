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

let scrollposition;

window.addEventListener('scroll', function(e) {
  scrollposition = window.scrollY;
  document.getElementsByTagName('header')[0].style.backgroundColor = "rgba(" + primaryColor.r + "," + primaryColor.g + "," + primaryColor.b + "," + scrollposition/window.innerHeight +")";
  if (document.getElementsByClassName('selectednav')[0])
    document.getElementsByClassName('selectednav')[0].style.backgroundColor = 'rgba(' + lightAccent.r + ', ' + lightAccent.g + ', ' + lightAccent.b + ', ' + scrollposition/window.innerHeight + ')';

});

$('#arrowdown').on('click', function(){
  scrollContent();
});

window.scrollContent = function() {
    $('html, body').animate({
      scrollTop: $('#content').offset().top
    }, 500);
}
