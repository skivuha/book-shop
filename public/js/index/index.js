$(document).ready(function() {
    var containerWidth = $( window ).width();
    var widthMainContainer = containerWidth * 0.80;
    var withImgContainer = widthMainContainer * 0.25;

    $(".navbar-fixed-top").css("width", widthMainContainer + "px");
    $(".img-container").css("width", widthMainContainer + "px");
    $(".img-books").css("width", withImgContainer + "px");
    $(".cart").css("width", (withImgContainer / 0.25 * 0.28) + "px");
    $(".img-books img").css("width", withImgContainer + "px");

    $('#container').css("width",  widthMainContainer + "px");


    $("input[type=submit]").addClass("btn btn-primary");

    $("#lang-filter").on("click", function() {
        $("#author-filter-ul").fadeOut();
        $("#lang-filter-ul").fadeIn();

    })

    $("#author-filter").on("click", function() {
        $("#lang-filter-ul").fadeOut();
        $("#author-filter-ul").fadeIn();

    })

    $('select').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        var link = window.location.href;
        $.ajax({
            url: "./book-shop/account/index",
            type: "POST",
            data: {"link": link, "lang": valueSelected},
            success: function(data){
                window.location = link;
            }
        });



    });


});
