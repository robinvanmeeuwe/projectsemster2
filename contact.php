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

<form name="contactform" method="post" action="./send_form_email.php">

<div class="wrapper">
<div class="content">
</div>

<h1>Parking</h1>
<div id="parking-alert" class="alert alert-warning hidden" role="alert">
  The selected parking garage has no more space remaining.
</div>
<select id="mapfrmselect" class="form-select form-select-sm" aria-label=".form-select-sm example" onchange="switchmarker()";>
  <option selected="selected" value="0">Select parkingspot</option>
  <option value="1">Parkeergarage Zuidpark [1,6 KM]</option>
  <option value="2">Parkeerplaats Spaklerweg [2,2 KM]</option>
</select>
<script>
function switchmarker() {
  if(mapfrmselect.value == 0) {
    document.getElementById("mapparkval").src = "";
    document.getElementById("mapparkval").style.height = "0px";
    document.getElementById("parking-alert").classList = "hidden";
  } else if(mapfrmselect.value == 1) {
    document.getElementById("mapparkval").src = "https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJW-lzCdwLxkcRVIMMqyzWKsg&destination=place_id:ChIJ6eske84LxkcRk1st00qFxEo&key=AIzaSyCok4HQJq-Ez2y72eUAzWTtpeFMT6Bmea4";
    document.getElementById("mapparkval").style.height = "450px";
    document.getElementById("parking-alert").classList = "alert alert-warning";
  } else if(mapfrmselect.value == 2)  {
    document.getElementById("mapparkval").src = "https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJW-lzCdwLxkcRVIMMqyzWKsg&destination=place_id:ChIJve-N6eYLxkcRcEiIgby2_LQ&key=AIzaSyCok4HQJq-Ez2y72eUAzWTtpeFMT6Bmea4";
    document.getElementById("mapparkval").style.height = "450px";
    document.getElementById("parking-alert").classList = "hidden";
  } else if(mapfrmselect.value == 3)  {
    document.getElementById("mapparkval").src = "https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJW-lzCdwLxkcRVIMMqyzWKsg&destination=place_id:ChIJve-N6eYLxkcRcEiIgby2_LQ&key=AIzaSyCok4HQJq-Ez2y72eUAzWTtpeFMT6Bmea4";
    document.getElementById("mapparkval").style.height = "450px";
    document.getElementById("parking-alert").classList = "hidden";
  } else if(mapfrmselect.value == 4)  {
    document.getElementById("mapparkval").src = "https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJW-lzCdwLxkcRVIMMqyzWKsg&destination=place_id:ChIJve-N6eYLxkcRcEiIgby2_LQ&key=AIzaSyCok4HQJq-Ez2y72eUAzWTtpeFMT6Bmea4";
    document.getElementById("mapparkval").style.height = "450px";
    document.getElementById("parking-alert").classList = "hidden";
  }
}
</script>
<iframe id="mapparkval" width="600" height="0" style="border:0" loading="lazy" allowfullscreen src=""></iframe> 

<hr>

<div class="form">


<div class="inner-form">
<h1>LET'S TALK</h1>
<p>Phone: 020 226 31 22</p>
<p>Email: info@georgemarina.nl</p>


</div>

<div class="top-form">

  <div class="inner-form">
  <div class="label" for="first_name">Name*</div>    
  <input  type="text" placeholder="Your Name" name="name" maxlength="50" size="30" required>
  </div>

</div>


<div class="middle-form">

<div class="inner-form">
  <div class="label" for="email">E-mail address</div>    
  <input  type="email" placeholder="Your E-mail addres" name="email" maxlength="50" size="30" required>
  </div>

</div>

<div class="bottom-form">

  <div class="inner-form">
  <div class="label" for="message">Message*</div>    
  <textarea  placeholder="How can we help you today?" name="comment" maxlength="1000" cols="25" rows="6" required></textarea>
  </div>

</div>

<input class="btn" type="submit" value="Send message">

</div>
</div>
</form>

<script src="./js/main.js"></script>

</body>
</html>