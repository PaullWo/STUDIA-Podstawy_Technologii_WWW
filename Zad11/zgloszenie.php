<?php
 include("session.php");
 require("db.php");
 $idUzytkownika = $_SESSION["id"];
 $tresc = $_REQUEST["tresc"];
 $sql = "INSERT INTO zgloszenia (idUzytkownika,tresc) VALUES ($idUzytkownika,$tresc)";
 if ($conn->query($sql) !== TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
 } else {
    echo "sukces";
 }
 $conn->close();
?>