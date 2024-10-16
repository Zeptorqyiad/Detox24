<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Получаем данные из формы
	$name = $_POST['name'];
	$telephone = $_POST['telephone'];
	$message = $_POST['message'];

	// Настраиваем получателя письма
	$to = "Zeptorqyiad99@gmail.com";  // Укажите ваш реальный email
	$subject = "Запрос с формы на сайте";
	$body = "Имя: $name\nТелефон: $telephone\nСообщение: $message";

	// Указываем заголовки письма
	$headers = "From: info@detox-24.ru\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

	// Отправляем письмо
	if (mail($to, $subject, $body, $headers)) {
		echo "success";  // Возвращаем 'success' в случае успешной отправки
	} else {
		echo "error";  // Возвращаем 'error' в случае ошибки
	}
}
