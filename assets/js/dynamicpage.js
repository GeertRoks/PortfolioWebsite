// $(function() {
//
//     var newHash      = "",
//         $mainContent = $("#content-inner"),
//         $pageWrap    = $("#page-wrap"),
//         baseHeight   = 0,
//         $el;
//
//     $pageWrap.height($pageWrap.height());
//     baseHeight = $pageWrap.height() - $mainContent.height();
//
//     $("nav").delegate("a", "click", function() {
//         window.location.hash = $(this).attr("href");
//         return false;
//     });
//
//     $(window).bind('hashchange', function(){
//
//         newHash = window.location.hash.substring(1);
//
//         if (newHash) {
//             $mainContent
//                 .find("#about")
//                 .fadeOut(200, function() {
//                     $mainContent.hide().load(newHash + " #about", function() {
//                         $mainContent.fadeIn(200, function() {
//                             $pageWrap.animate({
//                                 height: baseHeight + $mainContent.height() + "px"
//                             });
//                         });
//                         $("nav a").removeClass("selectednav");
//                         $("nav a[href='"+newHash+"']").addClass("selectednav");
//                     });
//                 });
//         };
//
//     });
//
//     $(window).trigger('hashchange');
//
// });

$(document).ready(function(){
  //set trigger and container values
  var trigger = $('header a'),
      container = $('#content_inner');

  //fire on click
  trigger.on('click', function(){
    //set $this for reuse. Set target from data attribute
    var $this = $(this),
        target = $this.data('target');

    scrollContent();

    //Load target into page
    container.load(target + '.php');

    //stop normal link behavoir
    return false;
  });
});
