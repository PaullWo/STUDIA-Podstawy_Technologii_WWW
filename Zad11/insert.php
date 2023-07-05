<?php
    //Nazwa obrazka
    $obrazek = basename($_FILES["obrazek"]["name"]);
    move_uploaded_file($_FILES["obrazek"]["tmp_name"], "obrazki/" . $obrazek);
    $conn = new mysqli("localhost", "root", "", "dzbanyv2dbpw");
    //Dodawanie nowego dzbana
    $sql = "INSERT INTO `dzbany` (`idKategorii`, `nazwa`, `obrazek`, `opis`, `pojemnosc`, `wysokosc`) VALUES ('{$_POST["kategoria"]}','{$_POST["nazwa"]}','$obrazek','{$_POST["opis"]}','{$_POST["pojemnosc"]}','{$_POST["wysokosc"]}');";
    $result = $conn->query($sql);
    $conn->close(); 
    header('Location: index.php');
?>
