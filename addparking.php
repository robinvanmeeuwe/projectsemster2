<?php
    // Dit zijn de benodigde gegevens voor het contact maken met de mysqlserver
    include("connect_db_admintparking.php");

    $Naam = $_POST["Naam"];
    $Afstand = $_POST["Afstand"];
    $Map = $_POST["Map"];


    $query = "INSERT INTO `parkeerplaatsen` (`id`,
                                    `Naam`,
                                    `Afstand`,
                                    `Map`)
                                    VALUES  (NULL,
                                    '$Naam',
                                    '$Afstand',
                                    '$Map');";     
    mysqli_query($conn, $query);

    header("Location: ./index.php?content=admin");
?>