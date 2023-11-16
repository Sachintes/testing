<?php
$name = $_POST ['name'];
$name = $_POST ['email'];
$name = $_POST ['message'];
$to = "sachintnm001@gmail.com"
$subject = "Mail from website";

$headers = "From: ".$name. "\r\n" .
    "CC: Sachin@thenightmarketer.com";

$txt = "You have received an e-mail from ".$name ."\r\nEmail: " .$email ."\r\nMessage: " . $message;

if($email!:NULL){
    mail($to, $subject, $txt, $header);
}
    header ('Location:thankyou.html')
?>
