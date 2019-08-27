<?php

$pass = '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';

require_once "sendgrid/sendgrid-php.php";

$sendgrid = new SendGrid($pass);
$email = new SendGrid\Email();

$email
    ->addTo('chandankroy92@gmail.com')
    ->setFromName('Chandan Git Portfolio')
    ->setFrom('noreply@gitportfolio.com')
    ->setSubject('Git Portfolio Request')
    ->setText('')
    ->setHtml('<p>Name: '.$_POST['name'].'</p><p>Email: '.$_POST['email'].'</p><p>Message: '.$_POST['message'].'</p>');

$response = $sendgrid->send($email);
echo $response->body['message'];