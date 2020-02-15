	<!-- Скрипт добавления введенного города в таблицу -->

<?php 

require("db.php"); // подключаюсь к БД

	$name = $_POST['city']; // получил POST запрос

	// сделал проверку на наличие символов в POST запросе, для избежания добавления пустых значений в БД

		if (!empty($name)) { 

		$query = "INSERT INTO `cities` SET name = '$name'";
	  	mysqli_query($link, $query);
	    
		}

		header("Location: index.php"); // редирект обратно на основную страницу

 ?>