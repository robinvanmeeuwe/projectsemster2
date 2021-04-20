<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="./css/reserveren.css" media="screen" />
    <link rel="shortcut icon" type="image/x-icon" href="Place for your Title Picture" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>George</title>
</head>
<body>
    <div class="testbox">
      <form action="./content/thankspage.php">
        <div class="banner">
          <!-- <h1>Restaurant George Marina</h1> -->
        </div>
        <div class="item">
          <p>Volledige Naam:</p>
          <div class="name-item">
            <input type="text" name="name" placeholder="Voornaam en Achternaam" />
          </div>
        </div>
        <div class="item">
          <p>E-mail:</p>
          <input type="email" name="email"placeholder="Email"/>
        </div>
        <div class="item">
          <p>Telefoon nummer:</p>
          <input type="text" name="phone" placeholder="### ### ####"/>
        </div>
        <div class="item">
          <p>Datum:</p>
          <input type="date" name="bdate" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
   <div class="item">
          <p>Tijd:</p>
          <input type="time" name="btime" required/>
               </div>
        <div class="item">
          <p>Hoeveel mensen brengt u mee?</p>
          <input type="text" name="people"/>
        </div>
         <div class="item">
          <p>Opmerkingen:</p>
          <textarea rows="3"></textarea>
        </div>
         <div class="btn-block">
          <button type="submit" href="/">Reserveer!</button>
        </div>
      </form>
    </div>
  </body>
</html>