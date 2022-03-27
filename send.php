<?php
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);


$fromMail = 'foxjil@mail.ru';
$fromName = 'https://foxjil.github.io/batasheva.io/index.html';


$emailTo = 'foxjil@mail.ru';
$subject = 'Форма обратной связи на php';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";


$body = "Получено письмо с сайта https://foxjil.github.io/batasheva.io/ \n Имя: $name\n E-mail: $email\nСообщение: $message";


?>