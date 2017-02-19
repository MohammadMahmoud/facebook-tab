$(document).ready(function () {

    "use strict";

    $('.modal').modal();
    $("#submit").click(function () {
        if ($("#post")[0].checkValidity()) {
            $("#big-button a").attr("href", "#modal");
            $.post($("#post").attr("action"),
                $("#post :input").serializeArray(),
                function (info) {
                    $("#modal p").css('display', 'block');
                    $("#modal p").html(info);
                    $(".modal-footer a").html("Close Me");

                });
            $("#submit").attr('disabled', 'disabled');

        }
    });

    $("#post").submit(function () {
        return false;
    });


});