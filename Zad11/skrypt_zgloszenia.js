$(document).ready(function () {
    $(".button_zgloszenie").on("click", function () {
        const akapit = $(this);
        $.post("zgloszenie.php",{tresc: "'" + $("#tresc_zgloszenia").val() + "'"},function (data) {
            if (data == "sukces") {
                $("#tresc_zgloszenia").val("Wysłano zgłoszenie!");
            }
        });
    });
});

