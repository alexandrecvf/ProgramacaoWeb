<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	
	<?php
		echo "<p>Olá, mundo!</p>";

		// Variaveis em PHP
		// Toda variável em PHP começa com um cifrão
		$nome = "Alexandre";
		$idade = 20;

		echo "<p>Nome: $nome<br>Idade: $idade</p>";

		if($idade > 18){
			echo "<p>Maior de idade.</p>";
		} else {
			echo "<p>Menor de idade.</p>";
		}

		for ($i=0; $i < 10; $i++) {
			//echo "<p>$i x 2 = " . $i*2 . "</p>";

			$num = rand(0, 100);
			echo "<p>$num</p>";
		}
	?>

	<p><?php echo "Boa tarde!"; ?></p>

	</body>
</html>