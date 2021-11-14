<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'danielbolontoc.2001@gmail.com';

    $email_subject = "New Contact Message";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "danielbolontoc.2001@gmail.com";
    
    $headers = "From: $email_from \r\n";

    $headers .= "Replay-to: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>