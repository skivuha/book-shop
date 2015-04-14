$(document).ready(function() {

    $(":button").on("click", function() {
        var id = $(this).parent().find("p").children().val();
        var price = $(this).parent().parent().find(".price").text();
        price = parseFloat(price.substr(1));


        $.ajax({
            url: "./book-shop/order/add/" + id,
            type: "GET",
            success: function(response){
                var file = JSON.parse((response));
                if ( file["link"] )
                {
                      window.location = file["link"];
                }
                else
                {
                    if ( file["count"] == null )
                    {
                        count = 1;
                    }
                    else
                    {
                     var count = parseInt(file["count"]) + 1;
                    }

                    price += parseFloat(file["amount"]);
                    $(".cart a").html('(' + count + ')' + ' item(-s) - $' + price.toFixed(2) );
               }
            }
        });
    })

});
