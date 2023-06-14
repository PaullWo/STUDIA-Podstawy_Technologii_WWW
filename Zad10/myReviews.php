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
    <?php
        include("session.php");
        require("db.php");
    ?>
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
            <h4 class="dolny_pasek">RECENZJE</h4>
            <div class="mojerecenzje">
                <div class="scroll_mojerecenzje">
                    <?php
                        $sql = "SELECT ocena, tresc, data, d.id AS idDzbana, nazwa FROM recenzje r, dzbany d WHERE d.id = idDzbana AND nick = '{$_SESSION["login"]}'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_object()){
                                echo "<div>";
                                echo "<p><a href='details.php?id={$row->idDzbana}' class='arecenzje'>{$row->nazwa}</a>, ocena: {$row->ocena}, treść: {$row->tresc}, data: {$row->data}</p>";
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
            <p>Dzbany wykonane przez: Paulina Woźnica.</p>
    </footer>
    </div>
</body>
</html>