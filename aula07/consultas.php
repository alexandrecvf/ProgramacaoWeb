<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//mysqli (object oriented, procedural, mysql only)
	//PDO ()

	echo "<h1>PHP com MySQL - Consultas</h1>";

	include "index.php";

	$sql = "SELECT * FROM departamento";
	$resultados = mysqli_query($conn, $sql);

	if(mysqli_num_rows($resultados) > 0){
		//extraindo linha por linha dos resultados
		// while ($linha = mysqli_fetch_array($resultados, MYSQLI_ASSOC))
		while ($linha = mysqli_fetch_assoc($resultados)) {
			echo "<p>" . $linha['codDepto'] . " - " . $linha['nome'] . " - " . $linha['gerente'] . " - " . $linha['dataGerente']  . "</p>";
		}
	}else{
		echo "<p>Zero Resultados!</p>";
	}

	mysqli_close($conn);



	?>
</body>
</html>