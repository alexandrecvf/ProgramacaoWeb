<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$data = $_POST['data'];
			
			$intervalo = $data - "2019-04-08";

			echo "<p>$nome</p>";
			echo "<p>$email</p>";
			echo "<p>$data</p>";
			echo "<p>$intervalo</p>";
		?>
	</body>
</html>