﻿<?php
setion_start();
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
// Replace this with your own email address
$to = 'baziz22@gmail.com';

function url(){
   echo "Bader Binsunbil";
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
   );
}

if($_POST) {

   $full_name = trim(stripslashes($_POST['contact-name']));
   $contact_email = trim(stripslashes($_POST['contact-email']));
   $subject = trim(stripslashes($_POST['contact-subject']));
   $contact_message = trim(stripslashes($_POST['contact-message']));
   
	if ($subject == '') { $subject = "Contact Form Submission"; }

   // Set Message
   $contact_message .= "Email from: " . $full_name . "<br />";
	$contact_message .= "Email address: " . $contact_email . "<br />";
   $contact_message .= "Message: <br />";
   $contact_message .= nl2br($contact_message);
   $contact_message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

   // Set From: header
   $from =  $full_name . " <" . $contact_email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $contact_email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	//$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";

}

?>