<?php

// Email configuration
// $to = "support@t2v.com.bd";
// $to = "info@t2v.com.bd";
$to = "info@t2v.com.bd";
$subject = "T2V - Contact Form";

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
    echo "No arguments Provided!";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$body = "Name: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@t2v.com.bd\n";
$headers .= "Reply-To: $email_address";
mail($to,$subject,$body,$headers);
return true;

?>
