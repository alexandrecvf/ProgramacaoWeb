<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$mensagem = $_POST['mensagem'];
			// $nome = $_GET['nome'];
			// $email = $_GET['email'];
			// $senha = $_GET['senha'];
			echo "<p>$nome</p>";
			echo "<p>$email</p>";
			echo "<p>$mensagem</p>";
		?>
	</body>
</html>