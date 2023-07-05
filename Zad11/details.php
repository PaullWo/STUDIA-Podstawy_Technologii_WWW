<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZBANY</title>
    <link rel="shortcut icon" href="tlo1.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
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
        <h1>Dzbany</h1>
        <?php include("powitanie.php");?>
    </header>
    <article>
        <h4 class="dolny_pasek">SZCZEGÓŁY O DZBANIE</h4>
        <div class="szczegoly">
        <div class="scroll_szczegoly">
        <?php
            $conn = new mysqli("localhost", "root", "", "dzbanyv2dbpw");
            //Generowanie szczegółów o dzbanie
            if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $sql = "SELECT idKategorii, k.nazwa AS nazwaKat, d.nazwa, obrazek, d.opis, pojemnosc,
            wysokosc FROM dzbany d, kategorie k WHERE d.id=$id AND idKategorii=k.id";
            //echo $sql;
            $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_object();
                    echo "<div class='szczegoly_kolumny'>";

                    /*POLUBIENIA*/
                    $idUzytkownika = $_SESSION["id"];
                    $sql = "SELECT id FROM ulubione WHERE idDzbana = $id AND idUzytkownika =$idUzytkownika";
                    $added = $conn->query($sql)->num_rows > 0;
                    $text = $added ? "polubione.png" : "odlubione.png";
                    echo "<img class='fav' data-dzban='$id' src='$text'>";

                    echo "<p class='paragraf2'><b>Nazwa: </b>{$row->nazwa}</p>
                    <p class='p1'><b>Nazwa kategorii: </b><a href='index.php?idKat={$row->idKategorii}' class='przyciski'>{$row->nazwaKat}</a>
                    <p class='paragraf2'><b>Obrazek: </b><img src='obrazki/{$row->obrazek}' class='img_szczegoly'></p>
                    <p class='p1'><b>Opis: </b>{$row->opis}</p>
                    <p class='paragraf2'><b>Pojemnosc: </b>{$row->pojemnosc}</p>
                    <p class='p1'><b>Wysokosc: </b>{$row->wysokosc}</p><hr></div>
                    <div class='paragraf2'>
                    <h4>RECENZJE</h4>";
                    //Wyliczenie średniej ocen
                    $sql = "SELECT AVG(ocena) AS srednia FROM recenzje WHERE idDzbana=$id";
                    $result = $conn->query($sql);
                    $srednia = $result->fetch_object()->srednia;
                    echo "<p>Średnia ocena: $srednia</p>";
                }else {
                    echo "Nie ma takiego dzbana!";
                }
            }else{
                echo "Wystąpił błąd!";
            }
        ?>
    <!--Lista recenzji-->
        <?php
            $sql = "SELECT nick, ocena, tresc, data FROM recenzje WHERE idDzbana=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<ol>";
                while($row = $result->fetch_object()){
                    echo "<li>Nick: {$row->nick}, ocena: {$row->ocena}, treść: {$row->tresc}, data: {$row->data}</li>";
                }
                echo "</ol>";
            }
            $conn->close(); 
        ?>
        </div>
        <!--Dodawanie recenzji-->
        <h4>Dodaj recenzję:</h4>
        <div class="nadformularz">
        <form action="insertReview.php" class="recenzje_formularz">
            <?php
                echo "<input type='hidden' name='id_dzbana' value='{$id}'>";
            ?>
            <label for="ocena">Ocena:</label>
            <select name="ocena" id="ocena">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br>
            <label for="recenzja">Treść recenzji:</label><br>
            <textarea name="recenzja" id="recenzja" cols="30" rows="10">Wpisz recenzję.</textarea><br>
            <input type="submit" value="Dodaj recenzję" class='przyciski'>
        </form>
        </div>
        </div>
        </div>
        <div class="dolny_pasek">
        <a href="index.php" class='przyciski'>Wróc do strony głównej</a>
        </div>
    </article>
    <footer>
        <?php include("stopka.php"); ?>
    </footer>
    </div>
    <script src="script.js"></script>
    <script src="skrypt_zgloszenia.js"></script>
</body>
</html>