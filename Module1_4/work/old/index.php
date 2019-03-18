<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="content">
<?php 
	include "menu.php";
?>
	
	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.png">
		<div class="box_text">
			<p><b>Добрый день.</b> Меня зовут <i>Павел Сериков</i>. Я недавно начал программировать и это мой первый сайт.</p>

			<p>В этом мне помогает IT-портал <a href="https://geekbrains.ru">GeekBrains</a>.</p>

			<p>Я разместил здесь написанные мною программы в рамках курса Pyton-разработчика:
			<a href="#">Главная</a>, 
			<a href="#">Загадки</a>, 
			<a href="#">Угадайка</a>.
			</p>
		</div>
	</div>
</div>
<?php 
	include "footer.php";
?>	
</body>
</html>