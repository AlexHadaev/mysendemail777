<?php

$recepient = "alex.hadaev@n3wnormal.com, hadaev.alex@outlook.com, ";
$recepient .= $_POST["email"];
$email = $_POST["message"];
//kivashchenko@gmail.com, ivashchenkate@gmail.com, kate.ivashchenko@n3wnormal.com, alex.fil@n3wnormal.com, afil@uptopcorp.com
$pagetitle = "Email";
$message = "$email";
$headers  = "Content-type: text/html; charset=windows-1251 \r\n";
$headers .= "From: От кого письмо <from@example.com>\r\n";
$headers .= "Reply-To: reply-to@example.com\r\n";
mail($recepient, $pagetitle, $message, $headers);
?>