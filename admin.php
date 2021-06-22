<?php
    include("./connect_db_admintparking.php");

    $sql = "SELECT * FROM `parkeerplaatsen`";

    $result = mysqli_query($conn, $sql);

    $records = "";
    $recordsedit = "";
    while ($record = mysqli_fetch_assoc($result)) {
    $records .= "<option value=" . $record["ID"] . ">" . $record["Naam"] . " " . $record["Afstand"] . " KM <font color=red>" . $record["Beschikbaarheid"] . "</font></option>";
    $recordsedit .= "<tr><th scope='row'>" . $record["ID"] .  "</th><td>"  . $record["Naam"] .  "</th><td>"  . $record["Afstand"] .  "</th><td>"  . $record["Beschikbaarheid"] . "</td>
    <td><a href='./nietbeschikbaar.php?id="  .   $record["ID"]    . "'><img src='./img/ico/check.png' alt='Ja'></a></td>
    <td><a href='./welbeschikbaar.php?id="  .   $record["ID"]    . "'><img src='./img/ico/cross.png' alt='Nee'></a></td>
    <td><a href='./deleteparking.php?id="  .   $record["ID"]    . "'><img src='./img/ico/b_drop.png' alt='Nee'></a></td></tr>";
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="./css/main.css" media="screen" />
    <link rel="shortcut icon" type="image/x-icon" href="Place for your Title Picture" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>George Hollywood | Contact</title>
</head>
<body>

<div class="wrapper">
<div class="content">


<h1>Parking</h1>
<!-- <div id="parking-alert" class="alert alert-warning hidden" role="alert">
  The selected parking garage has no more space remaining.
</div> -->
<select id="mapfrmselect" class="form-select form-select-sm" aria-label=".form-select-sm example" onchange="switchmarker()";>
  <option selected="selected" value="0">Select parkingspot</option>
  <!-- <option value="1">Parkeergarage Zuidpark [1,6 KM]</option>
  <option value="2">Parkeerplaats Spaklerweg [2,2 KM]</option> -->
  <?php
    echo $records;
  ?>
</select>
<script>
function switchmarker() {
  if(mapfrmselect.value == 0) {
    document.getElementById("mapparkval").src = "";
    document.getElementById("mapparkval").style.height = "0px";
  } else if(mapfrmselect.value == 1) {
    document.getElementById("mapparkval").src = "https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJW-lzCdwLxkcRVIMMqyzWKsg&destination=place_id:ChIJ6eske84LxkcRk1st00qFxEo&key=AIzaSyCok4HQJq-Ez2y72eUAzWTtpeFMT6Bmea4";
    document.getElementById("mapparkval").style.height = "450px";
  } else if(mapfrmselect.value == 2)  {
    document.getElementById("mapparkval").src = "https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJW-lzCdwLxkcRVIMMqyzWKsg&destination=place_id:ChIJve-N6eYLxkcRcEiIgby2_LQ&key=AIzaSyCok4HQJq-Ez2y72eUAzWTtpeFMT6Bmea4";
    document.getElementById("mapparkval").style.height = "450px";
  } else if(mapfrmselect.value == 3)  {
    document.getElementById("mapparkval").src = "https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJW-lzCdwLxkcRVIMMqyzWKsg&destination=place_id:ChIJve-N6eYLxkcRcEiIgby2_LQ&key=AIzaSyCok4HQJq-Ez2y72eUAzWTtpeFMT6Bmea4";
    document.getElementById("mapparkval").style.height = "450px";
  } else if(mapfrmselect.value == 4)  {
    document.getElementById("mapparkval").src = "https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJW-lzCdwLxkcRVIMMqyzWKsg&destination=place_id:ChIJve-N6eYLxkcRcEiIgby2_LQ&key=AIzaSyCok4HQJq-Ez2y72eUAzWTtpeFMT6Bmea4";
    document.getElementById("mapparkval").style.height = "450px";
  }
}
</script>
<iframe id="mapparkval" width="600" height="0" style="border:0" loading="lazy" allowfullscreen src=""></iframe> 

<hr>

        <div class="row">
            <div class="col-12">

            </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            
        </div>
            <div class="col-6"></div>
        </div>
        <div class="row">
        <div class="col-12">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Plaats</th>
      <th scope="col">Afstand</th>
      <th scope="col">Beschikbaar?</th>
      <th scope="col">Ja</th>
      <th scope="col">Nee</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
      <?php
    echo $recordsedit;
      ?>
  </tbody>
</table>

<form action="./addparking.php" method="post">
  <label for="Naam"">Naam:</label><br>
  <input type="text" id="Naam" name="Naam" value="Parkeergarage"><br>
  <label for="Afstand">Afstand:</label><br>
  <input type="text" id="Afstand" name="Afstand"><br><br>
  <label for="Map">Kaart URL:</label><br>
  <input type="text" id="Map" name="Map"><br><br>
  <input class="btn btn-primary type="submit" value="Submit">
</form> 
</div>
</div>