$(document).ready(function() {
    var containerWidth = $(window).width();
    var widthMainContainer = containerWidth * 0.80;
    $("#body-container").css("width", widthMainContainer + "px");
    $("#border").css("width", widthMainContainer - 50 + "px");
})
