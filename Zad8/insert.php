<?php
    $conn = new mysqli("localhost", "root", "", "dzbanyzad8");
    $nazwa = $_POST["nazwa"];
    $opis = $_POST["opis"];
    $pojemnosc = $_POST["pojemnosc"];
    $wysokosc = $_POST["wysokosc"];
    $sql = "INSERT INTO dzbany (nazwa, opis, pojemnosc, wysokosc) VALUES ('$nazwa',
    '$opis', $pojemnosc, $wysokosc)";
    $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>