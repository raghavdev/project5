(function ($) {
    $(document).ready(function() {
if (!("ontouchstart" in document.documentElement)) {
document.documentElement.className += " no-touch";
}
  $(".menu-mlid-9257 a").attr("href", "#");
  $("#nav-wrapper .menu-depth-1 > .menu-toggle").addClass("hidemenu");
$(".menu-mlid-9257 a").click(function(){
    $("#nav-wrapper .menu-depth-1 > .menu-toggle").addClass("hidemenu");
    $("#nav-wrapper li.menu-depth-2 ul").removeClass("hidemenu");
  });

$("#nav-wrapper ul li.menu-depth-1").mouseenter(function(){
  $(this).children(".menu-depth-2 .menu-toggle").removeClass("hidemenu");
  $(this).children(".menu-toggle").removeClass("hidemenu");
  $(this).children(".menu-toggle").addClass("showmenu");
  $(this).children(".menu-depth-1 .menu-toggle").addClass("showmenu");
});
$("#nav-wrapper ul li.menu-depth-1").mouseleave(function(){
  $(this).children(".menu-toggle").removeClass("showmenu");
  $(this).children(".menu-toggle").addClass("hidemenu");
});
});
})(jQuery);




(function ($) {
$(window).ready(function() {
    var wi = $(window).width();
    if (wi <= 1024){
            wi = wi - 330;
            $(".bigright").css('width', wi);
            }

    $(window).resize(function() {
        var wi = $(window).width();
        if (wi <= 480){
            }
        else if (wi <= 769){
            wi = wi - 330;
            $(".bigright").css('width', wi);
            }
        else if (wi <= 1024){
            wi = wi - 330;
            $(".bigright").css('width', wi);
            }
        else if (wi <= 1200){
            }
        else {
            }
    });
});
})(jQuery);
