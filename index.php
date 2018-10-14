<?php

require __DIR__.'/lib_ext/autoload.php'; 

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Subject", "<p>Mensagem <b>test HTML</b></p>", "mail@outlook.com", "Name", "mail@gmail.com ", "Name");

var_dump($novoEmail);



