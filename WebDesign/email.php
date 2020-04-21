<?php
    $name = $_POST['name']; // Stores name array from html into name variable
    $visitor_email = $_POST['email']; // Stores user email array from html into visitor_email variable
    $message = $_POST['message']; // Stores message array from html into message variable

    $email_from = "Dublin Sushi"; // Arranges website owner info for when they recieve email
    $email_subject = "New Form Submit";
    $email_body = "User Name : $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "cameron.kenny1@ucdconnect.ie"; // email address to be sent to
    $headers = "From: $email_from \r\n"; // email formatting
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
?>
