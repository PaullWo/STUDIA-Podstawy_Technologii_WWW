<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZBANY</title>
    <link rel="shortcut icon" href="tlo1.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="tlo1.png" class="tlo_img">
    <img src="tlo1.png" class="tlo_img2">
    <img src="tlo1.png" class="tlo_img3">
    <img src="tlo1.png" class="tlo_img4">
    <img src="tlo1.png" class="tlo_img5">
    <img src="tlo1.png" class="tlo_img6">
    <div class="glowny">
    <header>
        <h1>mini DZBANY</h1>
        <div class="powitanie">
            <h3>EDYCJA</h3>
        </div>
    </header>
    <article>
        <h4 class="dolny_pasek"></h4>
        <div class="nadformularz">
        <div class="formularz_dodawanie">
        <form action="update.php" method="post">
            <?php
                $conn = new mysqli("localhost", "root", "", "dzbanyzad8");
                $id = $_GET["id"];
                $sql = "SELECT id, nazwa, opis, pojemnosc, wysokosc FROM dzbany WHERE id=$id";
                $result = $conn->query($sql);
                $row = $result->fetch_object();
            ?>
            <p>
                <input type="hidden" name="id" value="<?= $row->id ?>">
                <b>Nazwa: </b><input type="text" name="nazwa" id="nazwa" value="<?= $row->nazwa ?>"><br>
                <b>Opis: </b><textarea name="opis" id="opis" cols="25" rows="10"><?= $row->opis ?></textarea><br>
                <b>Pojemność: </b><input type="number" name="pojemnosc" id="pojemnosc" value="<?= $row->pojemnosc ?>"><br>
                <b>Wysokość: </b><input type="number" name="wysokosc" id="wysokosc" value="<?= $row->wysokosc ?>"><br>
                <input type="submit" value="Zapisz zmiany" class="przyciski" id="dodaj">
            </p>
            <?php
                $conn->close();
            ?>
        </form>
        </div>
        </div>
        <div class="dolny_pasek">
        <a href="index.php" class="przyciski">Wróc do strony głównej.</a>
        </div>
    </article>
    <footer>
            <p>Dzbany wykonane przez: Paulina Woźnica.</p>
    </footer>
                </div>
</body>
</html>