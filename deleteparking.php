<?php
    include("connect_db_admintparking.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM `parkeerplaatsen` WHERE `parkeerplaatsen`.`id` = $id";

    mysqli_query($conn, $sql);

    header("Location: ./index.php?content=admin");
?>