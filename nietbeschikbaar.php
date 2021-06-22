<?php
    include("connect_db_admintparking.php");

    $id = $_GET["id"];

    $sql = "UPDATE `parkeerplaatsen` SET `Beschikbaarheid` = '' WHERE `parkeerplaatsen`.`ID` = $id";

    mysqli_query($conn, $sql);

    header("Location: ./index.php?content=admin");
?>