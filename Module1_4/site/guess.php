<!DOCTYPE html>
<html>
<head>
	<?php
		include "header.php";
	?> 
	
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		user = "Игрок 1";

		function readInt() {
			return document.getElementById("userAnswer").value;
		}
		
		function write(text) {
			document.getElementById("info").innerHTML = text;
		}

		function hide(id) {
			document.getElementById(id).style.display = "none";
		}

		function guess() {
			var userAnswer = readInt();
			if(userAnswer == "q"){
				write("Спасибо за игру!");
				hide("button");
				hide("userAnswer");
			} else { 
				userAnswer = parseInt(userAnswer);
				if(userAnswer == answer){
					write(user + ", поздравляю, Вы угадали!");
					hide("button");
					hide("userAnswer");
				} else if(userAnswer > answer){
					write(user + ", вы ввели слишком большое число.<br>Ход другого игрока. Введите число от 0 до 100.<br>");
					if(user == "Игрок 1"){
						user = "Игрок 2";
					} else {
						user = "Игрок 1";
					}
				} else if(userAnswer < answer){
					write(user + ", вы ввели слишком маленькое число.<br>Ход другого игрока. Введите число от 0 до 100.<br>");
					if(user == "Игрок 1"){
						user = "Игрок 2";
					} else {
						user = "Игрок 1";
					}
				}
			}
		}

	</script>
</head>
<body>

<div class="content">
	<?php 
		include "menu.php";
	?>

<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Игра <b>Угадай число</b><br>(игра для двоих игроков,<br>для выхода введите "q")</h1>
		
			<div class="box">

				<p id="info">Игрок 1, угадайте число от 0 до 100.</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onclick="guess();" id="button">Я угадал?</a>

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