<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			// $nome = $_GET['nome'];
			// $email = $_GET['email'];
			// $senha = $_GET['senha'];
			echo "<p>$nome</p>";
			echo "<p>$email</p>";
			echo "<p>$senha</p>";
		?>
	</body>
</html>