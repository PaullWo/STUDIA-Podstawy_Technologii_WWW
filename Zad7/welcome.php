<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="glowny">
    <div class="details">
    <?php
    echo "<p style=\"color:{$_POST["kolory"]}\">Witaj {$_POST["imie"]} {$_POST["nazwisko"]}!</p>"
    ?>
    <a href="index.html">Wróć do strony głównej</a>
    </div>
    </div>
</body>
</html>