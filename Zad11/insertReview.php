<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include("session.php");
    require("db.php");
    //Dodawanie recenzji
    $sql = "INSERT INTO `recenzje` (`idDzbana`, `nick`, `ocena`, `tresc`) VALUES ('{$_GET["id_dzbana"]}','{$_SESSION["login"]}','{$_GET["ocena"]}','{$_GET["recenzja"]}');";
    $result = $conn->query($sql);
    $conn->close(); 
    header('Location: '.$_SERVER['HTTP_REFERER']);
?> 
</body>
</html>
