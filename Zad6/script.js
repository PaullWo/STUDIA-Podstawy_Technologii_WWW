$(document).ready(function(){
    //alert("Strona załadowana!");
    $("#powitanie").delay(3000).slideUp();
    //pokaz/ukryj
    $("#pokazukryj").click(function(){
        $("#potrawydiv").toggle();
    });
    //zmienianie stylu
    $("#czcionka").click(function(){
        let kolor=$("#kolory").val();
        $(".paragrafy").css("color",kolor);
    });
    $("#tlo").click(function(){
        let kolor=$("#kolory").val();
        $(".paragrafy").css("background-color",kolor);
    });
    //zmienianie klasy zyczen
    $("#button_wielkanoc").click(function(){
        $("#zyczenia").removeClass();
        $("#zyczenia").addClass("wielkanoc");
    });
    $("#button_wigilia").click(function(){
        $("#zyczenia").removeClass();
        $("#zyczenia").addClass("wigilia");
    });
    //dodawanie tekstu po kliknieciu entera
    $("#tekst").on("keydown",function(e){
        let klawisz=e.which;
        if(klawisz==13){
            $("#paragraf_tekst").text($("#tekst").val());
        }
    });
    //lista todo
    $("#dodaj_zrobic").click(function(){
        $("#lista").append(`<li>${$("#lista_zrobic").val()}</li>`);
    });
    //mini galeria
    $(".male").on("click", "img", function(){
        $("#duzy").attr("src",$(this).attr("src"));
    });

});