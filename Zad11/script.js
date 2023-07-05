$(document).ready(function () {
    $(".fav").on("click", function () {
        const akapit = $(this);
        $.post("changeFav.php", {idDzbana: "'" + akapit.data("dzban") + "'"}, function (data) {
            if (data == "sukces") {
                akapit.attr("src",akapit.attr("src")=="polubione.png"?"odlubione.png":"polubione.png");
            }
        });
    });
});

