<?php

$phpmailerConfig = [
    'debug' => 2,
    'host' => 'smtp.mailgun.org',
    'username' => 'postmaster@email',
    'password' => 'xxxx',
    'secure' => 'ssl',
    'port' => 465
];

$emailConfig = [
    'from' => 'no-reply@mg.coba.dev',
    'receiver' => 'info@amicis.co.id',
    'subject' =>'Ada Pendaftar Baru di SMK Darunnajah',
];

$mailgun = [
    'domain' => 'example.com',
    'secret' => 'xxxx',
];

$baseUrl = 'http://inasurvey.test';
