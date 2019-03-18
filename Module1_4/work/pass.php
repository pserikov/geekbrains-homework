<!DOCTYPE html>
<html>
<head>
	<?php
		include "header.php";
	?> 
	
	<script type="text/javascript">

		function write(text) {
			document.getElementById("info").innerHTML = text;
		}

		function hide(id) {
			document.getElementById(id).style.display = "none";
		}

		function generatePass() {
			var symbols = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdifghijklmnopqrstuvwxyz";
			var pass = "";
			var num = +document.getElementById("userAnswer").value;
			for(i = 0; i < num; i++){
				var n = parseInt(Math.random() * symbols.length);
				pass = pass + symbols[n];
			}
			write("Сгенерированный пароль:<br>" + pass);
			hide("button");
			hide("userAnswer");
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

			<h1>Генератор паролей</h1>
		
			<div class="box">

				<p id="info">Генерируем пароль, состоящий из цифр и латинских букв в верхнем и нижнем регистрах.<br>Введите количество символов пароля:</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onclick="generatePass();" id="button">Генерировать!</a>

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