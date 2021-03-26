<?php

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
require 'PHPMailerAutoload.php';
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host='email-smtp.us-east-1.amazonaws.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='TLS';
$mail->Username='AKIA6MFA4A2OBCLSZHHE';
$mail->Password='BN4tFzbD6lkYpoMhAypyeeltoZaslvMX9CJEJQg8XEry';
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->setFrom('linkedinviewer3@gmail.com', $_POST['name']);
$mail->addAddress('linkedinviewer3@gmail.com');

$mail->isHTML(true);

$mail->Subject='From Submission: ';
$mail->Body="Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";

if(!$mail->send()){
   $result="something went wrong";
} else {
   $result="thanks ".$_POST['name'].$_POST['email']." for contacting us";
}

return $result;
?>

