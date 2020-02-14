	
	<!-- Файл страницы с полным текстом статьи -->

<?php 

require_once("data_art.php"); // подключаю файл с ресурсами статьи

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

				<!-- Ввожу здесь в теге <p> полный текст статье -->
				
		 <p><?php echo $articleText; ?></p>

		 	</div>
		
		</div>

	</div>
	
</body>
</html>