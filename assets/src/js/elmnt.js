$(document).ready(function(){

  // the menu
  $(".navmobile").html($(".navmain").html());
  $(".navmobile-trigger").click(function(){
    if ($(".navmobile ul").hasClass("expanded")) {
      $(".navmobile ul.expanded").removeClass("expanded").slideUp(250);
      $(this).removeClass("open");
    } else {
      $(".navmobile ul").addClass("expanded").slideDown(250);
      $(this).addClass("open");
    }
  });

  // move the meta info on blog pages
  // blog-excerpt__meta -> blog-excerpt__meta--mobile
  $(".blog-excerpt__meta--mobile").html($(".blog-excerpt__meta").html());

  // animated scroll on anchor link hits
  $('.button__all-design').click(function(){
    $('#design').animatescroll({scrollSpeed:1000,easing:'easeInOutCubic'});
  });
  $('.button__all-illustration').click(function(){
    $('#illustration').animatescroll({scrollSpeed:1000,easing:'easeInOutCubic'});
  });

});
