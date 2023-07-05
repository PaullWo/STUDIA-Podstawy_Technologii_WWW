<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
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
        <h1>DZBANY</h1>
        <?php include("powitanie.php");?>
        </div>
    </header>
    <article>
        <h4 class="dolny_pasek">ULUBIONE</h4>
        <!--Generowanie tabeli z wyszukanymi dzbanami-->
        <div class="tabela_ulubione">
        <div class="scroll">
        <?php
            $idUzytkownika = $_SESSION["id"];
            $sql = "SELECT d.id, d.nazwa, d.obrazek FROM dzbany d, ulubione u WHERE u.idDzbana = d.id
            AND idUzytkownika = $idUzytkownika";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                echo "<table>";
                echo "<tr><th>Nazwa</th><th>Obrazek</th></tr>";
                while($row = $result->fetch_object()){
                    echo "<tr><td>{$row->nazwa}</td><td><a href='details.php?id={$row->id}'><img src='obrazki/{$row->obrazek}'></a></td></tr>";
                }               
                echo "</table>";
            }else{
                echo "Nie masz takich dzbanów w swojej kolekcji";
            }
            $conn->close(); 
        ?>
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
    <script src="skrypt_zgloszenia.js"></script>
</body>
</html>