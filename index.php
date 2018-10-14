<?php

require __DIR__.'/lib_ext/autoload.php'; 


use Notification\Email;

$novoEmail = new Email;
//$novoEmail->sendMail(subject: "Email de teste ", body: " <p>Mensagem do email de <b>teste</b>< /p> ", replyEmail: " aluno@gmail.com ", replyName: " Vitor ", addressEmail: " aluno@hotmail.com ", addressName: "Aluno");

var_dump($novoEmail);



