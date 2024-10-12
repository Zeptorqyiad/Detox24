<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->isHTML(true);


// Кому отправить
$mail->addAddress('Info@Detox-24.ru');
// Тема письма
$mail->Subject = 'Заявка';

// Тело письма
$body = '<h1></h1>';

if (trim(!empty($_POST['name']))) {
	$body .= '<p><strong>Имя:</strong> ' . $_POST['name'] . '</p>';
}
if (trim(!empty($_POST['telephone']))) {
	$body .= '<p><strong>Телефон:</strong> ' . $_POST['tel'] . '</p>';
}
if (trim(!empty($_POST['message']))) {
	$body .= '<p><strong>Сообщение:</strong> ' . $_POST['age'] . '</p>';
}

$mail->Body = $body;

// Отправка
if (!$mail->send()) {
	$message = 'Ошибка';
} else {
	$message = 'Данные отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
