<?php
$email = $_POST[ 'email'];
$message = $_POST['message'];


$header = 'Form: ' . $emial . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";


$message .= "Email: " . $email ." \r\n";
$message .= "Consulta: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'jesusalejandroavila@gmail.com';
$asunto = 'Asunto del mensaje';

email($para, asunto, utf8_decode($message), $header);

header('Location:index.html')
?>