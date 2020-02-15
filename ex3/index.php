						<!-- Главная страница -->

<?php 

require("db.php"); // подключил файл для БД

	$query = 'SELECT * FROM `cities`'; // запрос к таблице
	$city = mysqli_query($link, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cities</title>
	<link rel="stylesheet" href="assets/css.css">
</head>
<body>

	<form action="add.php" method="POST">

		<input type="text" placeholder="Введите город" name="city" required>
		<button type="submit">Добавить</button>

	</form>

	<h2>Все города</h2>

							<!-- Вывожу все города из БД -->
		
		<?php while ($town = mysqli_fetch_assoc($city)): ?>

			<p><?php echo $town['name']."<br>"; ?></p>

		<?php endwhile; ?>
		
</body>
</html>

