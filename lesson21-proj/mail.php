<?php 


	//Принимаем постовые данные
	$form_name = $_POST['form_name'];
	$name = $_POST['username'];
	$email = $_POST['email'];
	$user_message = $_POST['user_message'];

	//Тут указываем на какой ящик посылать письмо
	$to = "sergei.kundryukov1989@yandex.ru";

	//Далее идет тема письма и само сообщение
	// Тема письма
	$subject = "Заявка с моего не первого сайта";

	// Сообщение письма
	$message = "
	Форма: ".htmlspecialchars($form_name)."<br>
	Имя пользователя: ".htmlspecialchars($name)."<br>
	Email: ".htmlspecialchars($email)."<br>
	Сообщение: ".htmlspecialchars($user_message);

	// Отправляем письмо при помощи функции mail();
	$headers = "From: a-isl-less.sl <gogo@a-isl-less.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);

	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	header('Location: thanks.html');
	exit();


?>