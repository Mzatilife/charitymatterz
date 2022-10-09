<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$from = $_REQUEST['email'];
$name = $_REQUEST['name'];
$subject = $_REQUEST['subject'];
$cmessage = $_REQUEST['message'];

$mail = new PHPMailer(true);

//email confirmation
try {
	//Server settings
	$mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                     
	$mail->isSMTP();
	$mail->Host       = 'smtp.gmail.com';
	$mail->SMTPAuth   = true;
	$mail->Username   = 'projectmahala@gmail.com';
	$mail->Password   = 'jatpxeomxxghwssf';
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port       = 587;

	//Recipients
	$mail->setFrom('projectmahala@gmail.com');
	$mail->addAddress('projectmahala@gmail.com');

	$mail->isHTML(true);

	$mail->Subject = "Message from charitymatterz.org";

	$mail->Body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>
	<table style='width: 100%;'>
	<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>
	</td></tr></thead><tbody><tr>
	<td style='border:none;'><strong>Name:</strong> {$name}</td>
	<td style='border:none;'><strong>Email:</strong> {$from}</td>
	</tr>
	<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>
	<tr><td></td></tr>
	<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>
	</tbody></table>
	</body></html>";

	$send = $mail->send();
	if ($send) {
		header("Location:contact.php?result=yes");
	}else{
		header("Location:contact.php?result=no");
	}
} catch (Exception $e) {
	header("Location:contact.php?result=no");
}
