<?php
    $conn = new mysqli("localhost", "root", "", "dzbanyzad8");
    $id = $_GET["id"];
    $sql = "DELETE FROM dzbany WHERE id=$id";
    $conn->query($sql);
    $conn->close();
    header("location: index.php")
?>