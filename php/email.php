
<?php
session_cache_limiter( 'nocache' );
$subject = $_REQUEST['subject']; // Subject of your email
$to = "support@themerole.com";  //Recipient's E-mail

$headers  = 'MIME-Version: 1.0' . "
";
$headers .= "From: " . $_REQUEST['name'].'<'.$_REQUEST['email'] .'>'. "
"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "
";

$message  = 'Name: ' . $_REQUEST['name'] . "<br>";
$message .= 'Company: ' . $_REQUEST['company'] . "<br>";
$message .= $_REQUEST['message'];

if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
	// header('Location: ../index.html');
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>
