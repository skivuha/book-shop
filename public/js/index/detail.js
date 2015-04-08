$(document).ready(function() {
    var containerWidth = $( window ).width();
    var widthMainContainer = containerWidth * 0.80;
    $('.container').css("width",  widthMainContainer + "px");


    $("input[type=submit]").addClass("btn btn-primary");
    $("input[type=submit]").attr("name", "buy");

});

