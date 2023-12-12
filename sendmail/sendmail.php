<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('en', 'phpmailer/language/');
$mail->isHTML(true);

$mail->isSMTP(); // Send using SMTP
$mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'sachintnm001@gmail.com'; // SMTP username (email)
$mail->Password = 'hzoxzpjrakqywoax'; // SMTP password (email password)
$mail->Port = 587;
$mail->SMTPSecure = 'TLS';

// From SMTP username (email)
$mail->setFrom('sachintnm001@gmail.com', 'sachinsagar test');
// To...
$mail->addAddress('sachinsagarmishra@gmail.com');
// Subject
$mail->Subject = 'Subject Here';

// Body
$body = '<h1>Hi! It\'s Code Only!</h1>';

if (!empty($_POST['name'])) {
    $body .= "<p>Name: <strong>" . $_POST['name'] . "</strong></p>";
}

if (!empty($_POST['email'])) {
    $body .= "<p>E-mail: <strong>" . $_POST['email'] . "</strong></p>";
}

if (!empty($_POST['message'])) {
    $body .= "<p>Message: <strong>" . $_POST['message'] . "</strong></p>";
}

if (!empty($_POST['like'])) {
    $body .= "<p>Do you like Code Only? <strong>" . $_POST['like'] . "</strong></p>";
}

if (!empty($_POST['thebest'])) {
    $body .= "<strong><a href='https://www.youtube.com/@codeonly'>Code Only</a> the best channel in the world!</strong>";
}

// Add-File
$mail->Body = $body;

// Sending
$mail->send();
$mail->smtpClose();
?>
