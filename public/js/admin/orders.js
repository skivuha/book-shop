$(document).ready(function() {
    var containerWidth = $(window).width();
    var widthMainContainer = containerWidth * 0.80;
    $("#body-container").css("width", widthMainContainer + "px");
    $("#border").css("width", widthMainContainer - 50 + "px");

    $('.select-status').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var idStatus = this.value;
        var idOrder = $(this).attr("name");
        console.log(idStatus);
        console.log(idOrder);
             $.ajax({
             url: "./book-shop/admin/changeStatus",
             type: "POST",
             data: {"idStatus": idStatus, "idOrder": idOrder},
             success: function(data){

             }
        });
    });
})
