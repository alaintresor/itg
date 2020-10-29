<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->From = "$_POST('contactEmail')";
$mail->FromName = "$_POST('contactName')";

$mail->addAddress('informationtechgeneration@gmail.com');

//Provide file path and name of the attachments
// $mail->addAttachment("file.txt", "File.txt");        
// $mail->addAttachment("images/profile.png"); //Filename is optional

// $mail->isHTML(true);

$mail->Subject = "$_POST('contactSubject')";
$mail->Body = "$_POST('contactMessage')";
$mail->AltBody = "This is the plain text version of the email content";

// try {
//     $mail->send();
//     echo "Message has been sent successfully";
// } catch (Exception $e) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// }
if ($mail->send()) {
	echo 'OK';
} else {
	echo $mail->ErrorInfo;
}
