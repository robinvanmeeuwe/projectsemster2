<?php

// Form input
$name = $_POST['name'];
$email = $_POST['email'];
$comment  = $_POST['comment'];

if (empty($name) || empty($email) || empty($comment)) {
  header('Location: ./index.php?content=message&alert=contact-empty');;
  header("Refresh: 3; ./index.php?content=kontakt");
} else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ./index.php?content=message&alert=email-invalid");;
    header("Refresh: 3; ./index.php?content=kontakt");
  } else {
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$headers[] = 'contact';
$headers[] .= 'From: <' . $email . '>' . "\r\n";

$to      = 'email';
$subject = 'Contact Form | George-Hollywood.org';

// The Email
$message = '
<html>
<body>
  <p>Contact Form | George-Hollywood.org</p>
  <table>
  <p>
  Contact form from George-Hollywood.org
  </p>
    <b style="color: #000000">Name</b>
    <p style="color: #000000">' . $name . '</p>
    <b style="color: #000000">Email</b>
    <p style="color: #000000">' . $email . '</p>
    <b style="color: #000000">Nachricht</b>
    <p style="color: #000000">' . $comment . '</p>
  </table>
</body>
</html>
';


mail($to, $subject, $message, implode("\r\n", $headers));
header("Location: ./index.php?content=message&alert=contact-success");
header("Refresh: 3; ./index.php?content=contact");
  }
}

?>