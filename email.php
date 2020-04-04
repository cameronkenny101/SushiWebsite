<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "Dublin Sushi Contact Form";
    $email_subject = "New Form Submit";
    $email_body = "User Name : $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "cameron.kenny1@ucdconnect.ie";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
?>
