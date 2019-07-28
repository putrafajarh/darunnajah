<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'config.php';
require 'exception.php';
require 'phpmailer.php';
require 'smtp.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = $phpmailerConfig['debug'];                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = $phpmailerConfig['host'];  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $phpmailerConfig['username'];                     // SMTP username
    $mail->Password   = $phpmailerConfig['password'];                               // SMTP password
    $mail->SMTPSecure = $phpmailerConfig['secure'];                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = $phpmailerConfig['port'];                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('no-reply@mg.coba.dev', 'No Reply');
    $mail->addAddress('info@amicis.co.id', 'Amicis Consultant');     // Add a recipient
    // $mail->addAddress('putrafajarh@gmail.com', 'Amicis Consultant');     // Add a recipient

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $body  = "Nama : " . $_POST["nama"];
    $body .= "<br> No HP : "  . $_POST["hp"];
    $body .= "<br> Email : "  . $_POST["email"];

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Ada Pendaftar Baru di SMK Darunnajah';
    $mail->Body    = $body;
    $mail->AltBody = $body;

    $mail->send();

    header('Location: https://darunnajah.inasurvey.id/?success=true');
    die();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}