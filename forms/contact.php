<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

$name = $_POST['name'];
$email = $_POST['email'];

$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "contacto@mentius.com.co";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Gracias, Estaremos en contacto proximamente!";

$para = "desarrollo@mentius.com.co";


header('http://mentius.com.co/inicio.html/');



?>