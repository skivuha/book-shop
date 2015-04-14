$(document).ready(function() {

    $('.select-discount').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var idDiscount = this.value;
        var idUser = $(this).attr("name");
        $.ajax({
            url: "./book-shop/admin/changeDiscount",
            type: "POST",
            data: {"idDiscount": idDiscount, "idUser": idUser},
            success: function(data){

            }
        });



    });
})
