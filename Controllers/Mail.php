<?php

namespace App\Controllers;


class Mail
{
	public function actionAll()
	{
		sleep (2);
		$recepient = "Rena722111@yandex.ru";
		$sitename = "industrycorp.ru";

		$name = trim($_GET["name"]);
		$phone = trim($_GET["phone"]);
		$email = trim($_GET["email"]);
		$text = trim($_GET["text"]);

		$pagetitle = "Новая заявка с сайта \"$sitename\"";
		$message = "Имя: $name \nТелефон: $phone \nEmail: $email \nText: $text";
		mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
	}
}

?>