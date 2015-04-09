$(document).ready(function() {
        var containerWidth = $( window ).width();
        var widthMainContainer = containerWidth * 0.80;
        $(".container-body").css("width", widthMainContainer + "px");

        $("#buy").attr('disabled','disabled');

    $('input:radio').change(
        function(){
            if ($(this).is(':checked')) {
                $("#buy").removeAttr('disabled');
            }
        });
});