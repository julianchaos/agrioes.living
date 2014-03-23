<?php
$to = 'contato@oak.imb.br';
$subject = 'Contato Agriões Livings';
$message = "
Nome: {$_POST['nome']}\r\n
Email: {$_POST['email']}\r\n
Mensagem: {$_POST['mensagem']}
";

mail($to, $subject, $message);