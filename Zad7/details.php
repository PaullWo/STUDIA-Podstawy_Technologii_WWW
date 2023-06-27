<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="glowny">
    <div class="details">
        <?php
            switch($_GET["id"]){
                case 1:
                    echo "<h3>Kapibara</h3>
                            <p>Rodzaj ssaka z podrodziny kapibar (Hydrochoerinae) w obrębie rodziny kawiowatych (Caviidae).<br>
                            Długość ciała (bez ogona) 1025–1340 mm, długość ogona 10–20 mm, długość tylnej stopy 200–250 mm,<br>
                             długość ucha 60–70 mm; masa ciała 35–65 kg.</p>
                            <img src=\"kapibara.jpg\">
                        ";
                    break;
                case 2:
                    echo "<h3>Bóbr</h3>
                            <p>Rodzaj ssaka z rodziny bobrowatych (Castoridae).<br>
                            Długość ciała (bez ogona) 800–900 mm, długość ogona 200–300 mm;<br>
                             masa ciała 15–20 kg (rzadko 30–40 kg).
                            </p>
                            <img src=\"bobr.jpg\">
                    ";
                    break;
                case 3:
                    echo "<h3>Bobromysz</h3>
                            <p>gatunek ssaka z podrodziny myszy (Murinae) w obrębie rodziny myszowatych (Muridae),<br>
                             występujący endemicznie na Nowej Gwinei.
                             Długość ciała (bez ogona) 175–230 mm, długość ogona 212–273 mm, długość ucha 1–5 mm,<br>
                              długość tylnej stopy 44–53 mm; masa ciała 165 g.</p>
                            <img src=\"bobromysz.jpg\">
                    ";
                    break;
                case 4:
                    echo "<h3>Kanguroszczur myszaty</h3>
                            <p>Gatunek ssaka z rodziny kanguroszczurowatych.<br>
                            Długość ciała (bez ogona) 25,9–41 cm, długość ogona 18,9–26,2 cm;<br>
                             masa ciała 0,66–1,7 kg. Częściowo chwytny ogon.<br>
                              Pysk wydłużony. Ubarwienie popielate lub brunatne z szarym<br>
                               lub białym spodem. Dobrze rozwinięta torba lęgowa osłania 4 sutki,<br>
                                otwiera się do przodu.</p>
                            <img src=\"kanguroszczur.JPG\">
                    ";
                    break;
                default:
                    echo "Wystąpił błąd!";

            }
        ?>
        <a href="index2.html">Wróć do strony głównej</a>
    </div>
    </div>
</body>
</html>