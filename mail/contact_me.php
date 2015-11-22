<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
	
// Create the email and send the message
$to = 'ronald_antonio777@hotmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Confirmación ABOR'S:  $name";
$email_body = "Un nuevo asistente ha confimado su asistencia al focus group\n\n"."Detalles del asistente:\n\nNombre: $name\n\nEmail: $email_address\n\nTeléfono: $phone\n";//Message:\n$message";
$headers = "From: ronald.abernal@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>