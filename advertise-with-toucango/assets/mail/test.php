<?php

// Create the email and send the message
$to = 'kalikasubodh@gmail.com'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form: asd";
$email_body = "You have received a new mess";
$headers = "From: kalikasubodh@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: kalikasubodh@gmail.com";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
