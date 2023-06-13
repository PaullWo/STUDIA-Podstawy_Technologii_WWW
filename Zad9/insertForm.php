<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h1>Dzbany</h1>
    </header>
    <article>
        <h4 class="dolny_pasek">DODAWANIE DZBANA</h4>
        <div class="nadformularz">
        <div class="formularz_dodawanie">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <p>
                <b>Nazwa: </b><input type="text" name="nazwa" id="nazwa"><br>
                <b>Kategoria: </b><select name="kategoria" id="kategoria">
                <?php
                    $conn = new mysqli("localhost", "root", "", "dzbanyv2dbpw");
                    $sql = "SELECT Id,nazwa FROM kategorie ORDER BY nazwa";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_object()){
                            echo "<option value='{$row->Id}'>{$row->nazwa}</option>";
                        }
                    }else{
                        echo "<option value=''>Brak kategorii.</option>";
                    }
                    $conn->close(); 
                ?>
                </select><br>
                <b>Obrazek: </b><input type="file" name="obrazek" id="obrazek"><br>
                <b>Opis: </b><textarea name="opis" id="opis" cols="30" rows="10"></textarea><br>
                <b>Pojemność: </b><input type="number" name="pojemnosc" id="pojemnosc"><br>
                <b>Wysokość: </b><input type="number" name="wysokosc" id="wysokosc"><br>
                <input type="submit" value="Dodaj" class="przyciski" id="dodaj">
            </p>
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