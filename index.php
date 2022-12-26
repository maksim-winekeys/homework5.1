<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('tswiftmailer@mail.ru')
    ->setPassword('Q7eAtq2FDr5rTngLTKpt')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['m4ilert@yandex.ru' => 'Maksim'])
    ->setTo(['maksim@winekeys.ru'])
    ->setBody('Here is the message itself')
;

// Send the message
$result = $mailer->send($message);
