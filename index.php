<?php

use PHPMailer\PHPMailer\Exception;

require 'vendor\autoload.php';


$host = ''; 
$username = ''; 
$password = '';
$port = 645;

$email = new classes\Email($host, $username, $password, $port);

$subject = "E-mail de teste";
$content = "Ola, venho aqui informar que a lib de e-mail esta funcionando";
$from = ["email" => "natanael@email.com", "name" => "Natanael"]; 
$to = ["email" => "destinatario@email.com", "name" => "Destinatario"];

try {
    $email->sendEmail($subject, $content, $from, $to);
} catch(Exception $e) {
    die($e->getMessage());
}

