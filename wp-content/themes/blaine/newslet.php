<?php

$nome = @$_POST['nome'];
$email = @$_POST['email'];

$to      = 'matheus@mustaxe.mx';
$subject = 'Cadastro na Newsletter';
$message = 'Sr(a) '.$nome.' deseja receber informativos no e-mail: '.$email;
$headers = 'From: matheus@mustaxe.mx' . "\r\n" .
    'Reply-To: matheus@mustaxe.mx' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>