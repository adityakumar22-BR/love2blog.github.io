<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $email_from = 'adityakr06122000@gmail.com';

    $email_subject = "New form Submission";

    $email_body = "User Name : $name.\n".
                    "user email : $visitor_email.\n".
                        "user Message:$message.\n";


    $to = "adityakr06122000@gmail.com";
    $headers = "From : $email_from \r\n";
    $headers .= "Reply -To:$visitor_email\r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location : contact.html");
?>