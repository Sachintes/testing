<?php
  $to = 'sachintnm001@gmail.com';
  $subject = 'Get a Quote Request From landio';
  $name = $_POST['Complete_Name'];
  $email = $_POST['Email_Address'];
  $phone = $_POST['Phone_No'];
  $language = $_POST['fav_language'];
  $vacantProperties = $_POST['Vacant_Properties'];
  $propertyLocation = $_POST['Property_Location'];

  $headers = "Reply-To: $name <$email>\r\n" .
              "Return-Path: The Sender <$email>\r\n" .
              "From: $email\r\n" .
              "Subject: landio Get A Quote\r\n" .
              "MIME-Version: 1.0\r\n" .
              "Content-type: text/html; charset=utf-8\r\n" .
              "X-Priority: 3\r\n" .
              "X-Mailer: PHP" . phpversion() . "\r\n";

  $message = "************************************************** \r\n" .
             "Request from landio Get a Quote Form!  \r\n" .
             "************************************************** \r\n" .

             "Name: " . $name . "\r\n" .
             "E-mail: " . $email . "\r\n" .
             "Phone: " . $phone . "\r\n" .
             "Preferred Consult Method: " . $language . "\r\n" .
             "Vacant Properties: " . $vacantProperties . "\r\n" .
             "Property Location: " . $propertyLocation . "\r\n";

  $mail = mail($to, $subject, $message, $headers);

  // Check if the email was sent successfully
  if ($mail) {
      echo "Email sent successfully";
  } else {
      echo "Email sending failed";
  }
?>
