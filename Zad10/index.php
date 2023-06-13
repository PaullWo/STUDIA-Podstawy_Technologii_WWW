<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
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
        <h1>DZBANY</h1>
        <?php include("powitanie.php");?>
        </div>
    </header>
    <article>
        <div class="wyszukiwanie">
        <p>Wyszukaj po kategorii:
        <!--Generowanie listy kotwic z kategoriami-->
        <?php
            $sql = "SELECT id, nazwa FROM kategorie";
            $result = $conn->query($sql);
            echo "<a href='index.php' class='przyciski'> Wszyskie</a>";
            while($row = $result->fetch_object()){
                echo " <a href='index.php?idKat={$row->id}' class='przyciski'>{$row->nazwa}</a>";
            }         
        ?>
        </p>
        <!--Formularz wyszukujący po frazie-->
        <form>
                <label for="fraza">Wyszukaj po frazie:</label>
                <input type="text" name="fraza">
                <input type="submit" value="Wyszukaj" class='przyciski'>
        </form>
        </div>
        <!--Generowanie tabeli z wyszukanymi dzbanami-->
        <div class="tabela">
        <div class="scroll">
        <?php
            $sql = "SELECT id, nazwa, obrazek FROM dzbany";
            if(isset($_GET["idKat"])){
                $idKat = $_GET["idKat"];
                $sql .= " WHERE idKategorii = $idKat";
            }elseif(isset($_GET["fraza"])){
                $fraza = $_GET["fraza"];
                $sql .= " WHERE nazwa LIKE '%$fraza%'";
            }
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
        <a href="insertForm.php" class="przyciski">DODAWANIE DZBANA</a>
        </div>
    </article>
    <footer>
            <p>Dzbany wykonane przez: Paulina Woźnica.</p>
    </footer>
    </div>
</body>
</html>