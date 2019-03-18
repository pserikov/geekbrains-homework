<!DOCTYPE html>
<html>
<head>
	<?php
		include "header.php";
	?> 

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

			<p>В этом мне помогает IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>Я познакомился с основами программирования и верстки web-сайтов на интерактивном курсе по основам программирования в рамках курса <a href="https://geekbrains.ru/professions/python_developer"><b>"Программист Python"</b></a> и разместил здесь первые написанные мною программы:<br><br>
			<a href="puzzle.php">Загадки</a>
			<a href="guess.php">Угадай число</a>
			<a href="pass.php">Генератор паролей</a>
			</p>
		</div>
	</div>
</div>
<?php 
	include "footer.php";
?>
	
</body>
</html>