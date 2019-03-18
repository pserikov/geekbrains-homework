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
	
<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Поиграем в загадки?</h1>
		
			<div class="box">

					<?php
						$score = 0;
						$congratulation = "";
						if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){
							$userAnswer = $_GET["userAnswer1"];
							if($userAnswer == "ель" || $userAnswer == "елка" || $userAnswer == "ёлка" || $userAnswer == "елочка"|| $userAnswer == "ёлочка"){
								$score++;
							}

							$userAnswer = $_GET["userAnswer2"];
							if($userAnswer == "лампочка" || $userAnswer == "лампа"){
								$score++;
							}

							$userAnswer = $_GET["userAnswer3"];
							if($userAnswer == "одуванчик" || $userAnswer == "цветок"){
								$score++;
							}

							if($score == 3){
								$congratulation = " Поздравляю! Вы отгадали все загадки!";
							}

							echo "Отгадано загадок: " . $score . $congratulation;
						}
					?>

				<form method="GET">
					<p>Зимой и летом одним цветом?</p>
					<input type="text" name="userAnswer1">

					<p>Висит груша, нельзя скушать?</p>
					<input type="text" name="userAnswer2">

					<p>На зеленой хрупкой ножке вырос шарик у дорожки?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>

			</div>

		</div>
	</div>
</div>

</div>
	<?php 
	include "footer.php";
	?>

</body>
</html>