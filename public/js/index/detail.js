$(document).ready(function() {
    var containerWidth = $( window ).width();
    var widthMainContainer = containerWidth * 0.80;
    $('.container').css("width",  widthMainContainer + "px");


    $("#add").addClass("btn btn-primary");
    $("#add").attr("name", "buy");

    $("#add").on("click", function() {
        var id = $("#hidden-id").children().val();
        var price = $("#price").text();
        price = parseFloat(price.substr(1));

        $.ajax({
            url: "./book-shop/order/add/" + id,
            type: "GET",
            success: function(response){
                var file = JSON.parse((response));
                var count = parseInt(file["count"]) + 1;
                price += parseFloat(file["amount"]);
                $(".cart a").html('(' + count + ')' + ' item(-s) - $' + price.toFixed(2) );

            }
        });
    })

});

