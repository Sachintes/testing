<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $lease = $_POST["lease"];
    $vacantProperties = $_POST["vacantProperties"];
    $propertyLocation = $_POST["propertyLocation"];

    $to = "sachintnm001@gmail.com"; // Change this to your Gmail address
    $subject = "Property Lease Inquiry";

    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone No.: $phone\n";
    $message .= "Lease Consideration: $lease\n";
    $message .= "Vacant Properties: $vacantProperties\n";
    $message .= "Property Location: $propertyLocation\n";

    $headers = "From: $email";

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again later.";
    }
}
?>
