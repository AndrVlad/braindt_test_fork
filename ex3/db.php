				<!-- Подключение к БД, проверка подключения и запрос -->

<?php

	$link = mysqli_connect('localhost', 'root', '', 'braindt_1');

		if (mysqli_connect_errno()) {
			echo "Ошибка подключения. Код ошибки - ", mysqli_connect_errno(), mysqli_connect_error();
			exit();
		}

	mysqli_query($link, "SET NAMES 'utf8'"); // сделал запрос для задания кодировки на случай, если в сервере установлена другая.

	


 ?>