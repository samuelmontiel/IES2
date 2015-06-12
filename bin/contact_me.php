<?php

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'smontiel61@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = $name; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = $message;
$headers = "smontiel61@gmail.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>