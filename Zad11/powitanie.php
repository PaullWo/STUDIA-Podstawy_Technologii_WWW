<?php
    include("session.php");
    require("db.php");
?>
<div class="powitanie">
            <p>Witaj użytkowniku <?= $_SESSION["login"] ?>!</p>
            <div class="powitanie_przyciski">
                <a href="index.php" class='przyciski'>Strona główna</a>
                <a href="favourites.php" class='przyciski'>Ulubione</a>
                <a href="myReviews.php" class='przyciski'>Moje recenzje</a>
                <?php
                $id=$_SESSION["id"];
                    $sql="SELECT rola FROM uzytkownicy WHERE id=$id";
                    $result = $conn->query($sql);
                    $row = $result->fetch_object()->rola;
                    if($row=="admin"){
                        echo "<a href='listaZgloszen.php' class='przyciski'>Zgłoszenia</a>";
                    }
                ?>
                <a href="logout.php" class='przyciski'>Wyloguj</a>
</div>