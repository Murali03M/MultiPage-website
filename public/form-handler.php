<?php

$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='murlee@techo.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n".
                       "User Name: $name.\n".
                       "User Email: $email.\n".
                       "User subject: $subject.\n".
                       "User Message: $message.\n".
$to = 'murali732000@gmail.com';
$headers = "From : $email_from \r\n";
$headers .="Reply_to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers)
header("Location:contact.html");
?> 