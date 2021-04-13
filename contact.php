<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="./css/main.css" media="screen" />
    <link rel="shortcut icon" type="image/x-icon" href="Place for your Title Picture" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>George</title>
</head>
<body>

<header id="navbar">
        <nav class="navbar-container container">
          <a href="/" class="home-link">
            <div class="navbar-logo"></div>
          </a>
          <button type="button" class="navbar-toggle" aria-label="Open navigation menu">
              <span class="icon-bar">test1</span>
              <span class="icon-bar">test2</span>
              <span class="icon-bar">test3</span>
          </button>
          <div class="navbar-menu">
            <ul class="navbar-links">
              <li class="navbar-item"><a class="navbar-link" href="./menu.php">Menu</a></li>
              <li class="navbar-item"><a class="navbar-link" href="./reserveren.php">Reserveren</a></li>
              <li class="navbar-item"><a class="navbar-link" href="./contact.php">Contact</a></li>
            </ul>
          </div>
        </nav>
    </header>



<form name="contactform" method="post" action="send_form_email.php">

<div class="wrapper">
<div class="content">
</div>

<div class="form">


<div class="inner-form">
<h1>LET'S TALK</h1>
<p>Phone: 020 226 31 22</p>
<p>Email: hello@georgemarina.nl</p>
</div>

<div class="top-form">

  <div class="inner-form">
  <div class="label" for="first_name">Name*</div>    
  <input  type="text" placeholder="Your Name" name="first_name" maxlength="50" size="30" required>
  </div>

</div>


<div class="middle-form">

<div class="inner-form">
  <div class="label" for="email">E-mail address</div>    
  <input  type="email" placeholder="Your E-mail addres" name="telephone" maxlength="10" size="30" required>
  </div>

</div>

<div class="bottom-form">

  <div class="inner-form">
  <div class="label" for="message">Message*</div>    
  <textarea  placeholder="How can we help you today?" name="comments" maxlength="1000" cols="25" rows="6" required></textarea>
  </div>

</div>

<input class="btn" type="submit" value="Send message">

</div>
</div>
</form>

<script src="./js/main.js"></script>

</body>
</html>