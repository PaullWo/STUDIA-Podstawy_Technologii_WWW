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
            <h1>DZBANY</h1>
            <?php include("powitanie.php");?>
        </header>
        <article>
            <h4 class="dolny_pasek">RECENZJE</h4>
            <div class="mojerecenzje">
                <div class="scroll_mojerecenzje">
                    <?php
                        $sql = "SELECT z.tresc,u.login,z.data FROM zgloszenia z,uzytkownicy u WHERE u.id=z.idUzytkownika";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_object()){
                                echo "<div>";
                                echo "<p>Użytkownik: $row->login, <b>treść: $row->tresc</b>, data: $row->data</p>";
                                echo "</div>";
                            }
                        }else{
                            echo "<div>Brak recenzji.</div>";
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