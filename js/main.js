$(document).ready(function () {
    $('#show').click(function () {
        $.ajax({
            method: "GET",
            url: "ajax.php",
            data: {
                show: 1
            },
            success: function (result) {
                $('#test').html(result);
            }
        });
    });
});