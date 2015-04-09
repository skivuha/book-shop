$(document).ready( function() {

    var containerWidth = $( window ).width();
    var widthMainContainer = containerWidth * 0.80;
    $(".container-body").css("width", widthMainContainer + "px");

    $(".glyphicon-plus, .glyphicon-minus").on("click", function() {
        var numberValue = $(this).parent().parent().find("span").text(); // число
        var span = $(this).parent().parent().find(".number"); //span
        var nameClickableImg = $(this).attr("class"); //nameClickableImg
        var price = $(this).parent().parent().find(".price");
        var id = span.attr("name");
        
        if (nameClickableImg.indexOf('plus') + 1){
                price.text((parseFloat(price.text()) + parseFloat(price.text()) /  parseInt(numberValue)).toFixed(2) );
                var count = parseInt(numberValue) + 1;
                $(span).html(' ' + count + ' ');

                $.ajax({
                    url: './book-shop/order/changeCount/' + id + '/plus',
                    method: 'GET'
                }).then(function(data) {
                    //console.log(data);
                });


        }
        else
        {
            if (numberValue > 1){
                price.text((parseFloat(price.text()) - parseFloat(price.text()) /  parseInt(numberValue)).toFixed(2));
                var count = parseInt(numberValue)
                    - 1;
                $(span).html(' ' + count + ' ');
                $.ajax({
                    url: './book-shop/order/changeCount/' + id + '/minus',
                    method: 'GET'
                }).then(function(data) {
                    //console.log(data);
                });
            }
        }

        changeValue();



    })


    $(".glyphicon-trash").on("click", function() {
        $(this).parent().parent().remove();
        var id =  $(this).attr("name");
        changeValue();

        $.ajax({
            url: './book-shop/order/removeCart/' + id,
            method: 'GET'
        }).then(function(data) {
            //console.log(data);
        });

    })

    function changeValue()
    {
        var tableDataPrices = $(".price");
        var totalPrice = 0;
        $.each(tableDataPrices, function () {
            totalPrice += parseFloat($(this).html());
        })

        $("#amount").text(totalPrice.toFixed(2));
        if ( 0 == totalPrice ){
            $("input[type=submit]").fadeOut();
        }
        var count = $(".number");
        var totalCount = 0;

        $.each(count, function () {
            totalCount += parseInt($(this).html());
        })

        $(".cart a").html('(' + totalCount + ')' + ' item(-s) - $' + totalPrice.toFixed(2) );
    }


})
