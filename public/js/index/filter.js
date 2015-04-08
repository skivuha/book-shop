$(document).ready(function() {

    var containerWidth = $( window ).width();
    var widthMainContainer = containerWidth * 0.80;

    $(".filter-header").css("width", widthMainContainer + "px");
    $(".filter-header a").addClass("link-back");

});