<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>DZBANY</title>
    <link rel="shortcut icon" href="tlo1.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="tlo2.jpg" class="tlo_img">
    <img src="tlo1.png" class="tlo_img2">
    <img src="tlo1.png" class="tlo_img3">
    <img src="tlo2.jpg" class="tlo_img4">
    <img src="tlo1.png" class="tlo_img5">
    <img src="tlo2.jpg" class="tlo_img6">
    <div class="glowny">
    <header>
        <h1>mini DZBANY</h1>
        <div class="powitanie">
        <h3>SZCZEGOŁY</h3>
        </div>
    </header>
    <article>
        <div class="wyszukiwanie">
        </div>
        <!--Generowanie listy z dzbanami-->
        <div class="tabela">
        <div class="szczegoly">
            <?php
                $conn = new mysqli("localhost", "root", "", "dzbanyzad8");
                $id = $_GET["id"];
                $sql = "SELECT id, nazwa, opis, pojemnosc, wysokosc FROM dzbany WHERE id=$id";
                $result = $conn->query($sql);
                $row = $result->fetch_object();
                echo "<p><b>Nazwa:</b> {$row->nazwa}</p>
                <p><b>Opis:</b> {$row->opis}</p>
                <p><b>Pojemnosc:</b> {$row->pojemnosc}</p>
                <p><b>Wysokosc:</b> {$row->wysokosc}</p>
                <img src='tlo2.jpg'>";   
                $conn->close();
            ?>
        </div>
        </div>
        <div class="dolny_pasek">
        <a href="delete.php?id=<?=$id?>" class="przyciski">USUŃ</a>
        <a href="updateForm.php?id=<?=$id?>" class="przyciski">EDYTUJ</a>
        <a href="index.php" class="przyciski">WRÓĆ DO LISTY DZBANÓW</a>
        </div>
    </article>
    <footer>
            <p>Dzbany wykonane przez: Paulina Woźnica.</p>
    </footer>
    </div>
</body>
</html>