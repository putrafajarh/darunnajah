<?php 
require 'config.php';

use Mailgun\Mailgun;

$receiver = $emailConfig['receiver'];

$body  = "Nama : " . $_POST["nama"];
$body .= "<br> No HP : "  . $_POST["hp"];
$body .= "<br> Email : "  . $_POST["email"];

$mg = Mailgun::create($mailgun['secret']);

$result = $mg->messages()->send($mailgun['domain'], [
    'from' => $emailConfig['from'],
    'to' => $receiver,
    'subject' => $emailConfig['subject'],
    'html' => $body,
]);

header('Location: ' . $baseUrl . '?success=true');