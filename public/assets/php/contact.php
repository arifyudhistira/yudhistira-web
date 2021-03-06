<?php

// Get Data From Contact Form
$full_name = trim(htmlspecialchars($_POST['full_name']));
$from = trim(htmlspecialchars($_POST['email']));
$subject = trim(htmlspecialchars($_POST['subject']));
$message = trim(htmlspecialchars($_POST['message']));

if ($full_name == '' || $from == '' || $message == '') {
    return "Error";
}

// Using PHPMailer and Exception Classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Including Required Files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Create a new PHPMailer Object
$mail = new PHPMailer();
$mail->isSMTP();

// SMTP Server Settings (You Must Replace the Following Information with Your Own Information)
$mail->Host = 'smtp.gmail.com'; // SMTP Host *
$mail->SMTPAuth = true;
$mail->Username = 'Your Username'; // SMTP Server Username *
$mail->Password = 'Your Password'; // SMTP Server Password *
$mail->SMTPSecure = 'tls'; // Security Protocol
$mail->Port = 587; // SMTP Port *
$sender_email = 'example@gmail.com'; // Sender Email Address (Your Email Address for Send Emails) *
$recipient_email = 'example@gmail.com'; // Recipient Email (Your Email Address for Get Emails) *


$mail->setFrom($sender_email, $full_name);
$mail->addAddress($recipient_email, 'Your Name');

// Email Subject
$mail->Subject = $subject;

// Email Content and Settings
$mail->isHTML(true);

$mailContent  = '<div style="font-family: \'Century Gothic\'">';
$mailContent .= "Hi Website owner <br /><br />"; // Your Name
$mailContent .= "You have a message via contact form on your website!<br /><br />";
$mailContent .= "<strong>Sender info is :</strong> <br />";
$mailContent .= "<hr style='width: 200px;margin-left: 0;' />";
$mailContent .= "<strong>Name: </strong>" . $full_name . "<br />";
$mailContent .= "<strong>Email: </strong>" . $from . "<br />";
$mailContent .= "<strong>Subject: </strong>" . $subject . "<br />";
$mailContent .= "<strong>Message: </strong>" . $message;
$mailContent .= "</div>";

$mail->Body = $mailContent;


// Send Email and Check if Sent or Not
if ($mail->send()) {
    echo 'Message has been sent';
} else {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


