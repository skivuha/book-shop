$(document).ready(function() {

    var containerWidth = $( window ).width();
    var widthMainContainer = containerWidth * 0.80;

    $("#filter-header").css("width", widthMainContainer + "px");
    $('#container').css("width",  widthMainContainer + "px");

});