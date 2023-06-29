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
        <h3>LISTA DZBANÓW</h3>
        </div>
    </header>
    <article>
        <div class="wyszukiwanie">
        </div>
        <!--Generowanie listy z dzbanami-->
        <div class="tabela">
        <div class="scroll">
            <?php
                $conn = new mysqli("localhost", "root", "", "dzbanyzad8");
                $sql = "SELECT id, nazwa FROM dzbany";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo "<ul>";
                    while($row = $result->fetch_object()) {
                        echo "<li><a href='details.php?id={$row->id}'>{$row->nazwa}</a></li>";
                       }                       
                    echo "</ul>";
                } else {
                    echo "Nie masz żadnych dzbanów w swojej kolekcji";
                }
                $conn->close();
            ?>
        </div>
        </div>
        <div class="dolny_pasek">
        <a href="insertForm.php" class="przyciski">DODAWANIE DZBANA</a>
        </div>
    </article>
    <footer>
            <p>Dzbany wykonane przez: Paulina Woźnica.</p>
    </footer>
    </div>
</body>
</html>