<?php

$to = 'jeanpierre.assedi05@gmail.com';
$message = ''; // Initialize message variable

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

if($_POST) {

   $name = trim(stripslashes($_POST['name']));
   $email = trim(stripslashes($_POST['email']));
   $subject = trim(stripslashes($_POST['subject']));
   $contact_message = trim(stripslashes($_POST['message']));

   if ($subject == '') { $subject = "Contact Form Submission"; }

   $message .= "Email from: " . $name . "<br />";
   $message .= "Email address: " . $email . "<br />";
   $message .= "Message: <br />";
   $message .= nl2br($contact_message);
   $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

   $from =  $name . " <" . $email . ">";

   $headers = "From: " . $from . "\r\n";
   $headers .= "Reply-To: ". $email . "\r\n";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   ini_set("SMTP", "votre_host_SMTP");
ini_set("smtp_port", "votre_port_SMTP");


if ($mail_sent) { 
    echo "OK"; 
} else { 
    echo "Echec d'envoi, s'il vous plaît réessayer."; 
}

}

?>

