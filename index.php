<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_from='dentalcare.com';
$email_subject='New Form Submission';
$email_body="User Name:$name.\n".
"User email id:$visitor_email.\n".
"User's message:$message.\n";

$to ='@gmail.com';
$headers= "From: $email_from \r\n";
$headers= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");

?>
