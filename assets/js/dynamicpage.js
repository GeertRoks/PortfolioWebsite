let postid;

function loadContent(hash) {

  if ( $( window ).width() < 820 && $(".links").is(":visible")) {
    navHamburgerCollapse();
  }
  console.log("loadContent incoming Hash: " + hash);
  var container = $('.content');

  if (hash === "") {
    hash = 'home';
  }

$('nav ul li a').removeClass('selectednav');
  if (hash === "post") {
    $('*[data-target="projects"]').addClass("selectednav");
    console.log(postid);
    container.load('content/post.php?entry_id=' + postid);
  } else if (hash === "create") {
    window.location.pathname = 'create.php';
  } else {
    if (hash != 'home') {
      $('*[data-target=' + hash + ']').addClass("selectednav");
    }
    scrollContent();
    container.load('content/' + hash + '.php');
  }
}
$(window).on('hashchange', function() {
  loadContent(location.hash.slice(1));
});

$(document).ready(function () {
  $(document).on('click', '.post', function() {
    postid = $(this).data('id');
    window.location.hash = 'post';
    return false;
  });
  //TODO: Change pathname when published
  if ($(".content").html().length > 0 && window.location.pathname != "/Portfoliowebsite/create.php") {
     loadContent(location.hash.slice(1));
   }
});
