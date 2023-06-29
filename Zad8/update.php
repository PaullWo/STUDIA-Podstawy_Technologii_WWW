<?php
    $conn = new mysqli("localhost", "root", "", "dzbanyzad8");
    $id = $_POST["id"];
    $nazwa = $_POST["nazwa"];
    $opis = $_POST["opis"];
    $pojemnosc = $_POST["pojemnosc"];
    $wysokosc = $_POST["wysokosc"];
    $sql ="UPDATE dzbany SET nazwa='$nazwa', opis='$opis', pojemnosc=$pojemnosc,
    wysokosc=$wysokosc WHERE id=$id";
    $conn->query($sql);
    $conn->close();
    header("location: details.php?id=$id")
?>