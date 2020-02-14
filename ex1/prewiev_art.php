					
					<!-- Страница превью-вида статьи -->

<?php 


require_once("data_art.php"); // подключаю файл с ресурсами статьи

// обрезаю текст по заданию при помощи функции mb_substr + добавляю ссылку в виде троеточия

$articlePreview = mb_substr($articleText, 0, 200)."<a href = $articleLink>...</a>";


 ?>

 	<!-- HTML вид страницы -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Preview</title>
	<link rel="stylesheet" href="assets/css/style.css"> 

</head>
<body>

	<div class="body">

		<div class="site_content">

			<div class="article">

				<!-- Вывожу обрезанную запись в теге <p> -->
				
		 <p><?php echo $articlePreview; ?></p>

		 	</div>
		
		</div>

	</div>
	
</body>
</html>



