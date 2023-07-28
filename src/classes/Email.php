<?php

namespace classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


class Email extends PHPMailer
{
    public function __construct($host, $username, $password, $port)
    {
        $this->Host = $host;
        $this->Username = $username;
        $this->Password = $password;
        $this->Port = $port;
        $this->isSMTP();
        $this->SMTPAuth = true;
    }

    public function sendEmail($subject, $content, $from, $to)
    {
        //Recipients
        $this->setFrom($from['email'], $from['name']);
        $this->addAddress($to['email'], $to['name']);     //Add a recipient

        //Content
        $this->isHTML(true);                                  //Set email format to HTML
        $this->Subject = $subject;
        $this->Body    = $content;

        $this->send();
        echo 'Message has been sent';
    }
}
