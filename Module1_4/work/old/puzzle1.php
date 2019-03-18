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

			<h1>Игра в загадки</h1>
		
			<div class="box">

				<?php
					$score = 0;
					$congratulation = "";

					$userAnswer = $_GET["userAnswer1"];
					if($userAnswer == "сон" || $userAnswer == "сновидение"){
						$score++;
					}

					$userAnswer = $_GET["userAnswer2"];
					if($userAnswer == "морской" || $userAnswer == "укус акулы"){
						$score++;
					}

					$userAnswer = $_GET["userAnswer3"];
					if($userAnswer == "шахматный" || $userAnswer == "мертвый"){
						$score++;
					}

					if($score == 3){
						$congratulation = " Поздравляю! Вы отгадали все загадки!";
					}

					echo "Отгадано загадок: " . $score . $congratulation;
				?>

				<form method="GET">
					<p>Что можно увидеть с закрытыми глазами?</p>
					<input type="text" name="userAnswer1">

					<p>Какой болезнью никто не болеет на суше?</p>
					<input type="text" name="userAnswer2">

					<p>Какой конь не ест овса?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">>
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