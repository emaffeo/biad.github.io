<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "maffeo.ezequiel@gmail.com";
$subject = "Envíado desde la Web";
$txt ="Nombre = ". $name . "\r\n  Email = " . $email . "\r\n Asunto =" . $subject . "\r\n Mensaje =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: mkt@nagari.ar";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
