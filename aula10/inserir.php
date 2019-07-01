<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<?php
		echo "<h1>PHP com MySQL - Inserção</h1>";
		include "index.php";
	?>

	<form action="inserirRegistro.php" method="post">
		<p><label for="codDepto">Código Departamento: </label> <input id="codDepto" type="number" name="codDepto" value=""></p>
		<p><label for="nome">Nome Departamento: </label> <input id="nome" type="text" name="nome" value=""></p>
		<p><label for="gerente">Gerente Departamento: </label> <input id="gerente" type="number" name="gerente" value=""></p>
		<p><label for="dataGerente">Data Gerente: </label> <input id="dataGerente" type="date" name="dataGerente" value=""></p>
		<p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
	</form>
</body>
</html>
