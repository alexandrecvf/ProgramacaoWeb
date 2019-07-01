<html>
<html>
<head>
	<title>Projeto</title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
		}

		tr:nth-child(even){
			background-color: lightgray;
		}

		body{
			text-align: center;
		}

	</style>
</head>
<body>
	<?php

	echo "<a href = 'exercicio01.php'>Departamento</a>" . " | ";
	echo "<a href = 'exercicio01_2.php'>Dependente</a>" . " | ";
	echo "<a href = 'exercicio01_3.php'>Empregado</a>" . " | ";
	echo "<a href = 'exercicio01_5.php'>Projeto</a>" . " | ";
	echo "<a href = 'exercicio01_4.php'>Trabalha em</a>";

	echo "<h2>Projeto</h2>";

	include "index.php";

	$sql = "SELECT * FROM projeto";
	$resultados = mysqli_query($conn, $sql);

	$campos = mysqli_fetch_fields($resultados);
	echo "<table border='1'>";
	echo "<tr>";
	foreach ($campos as $v) {
        echo "<th>$v->name</th>";
	}
	echo "</tr>";

	if(mysqli_num_rows($resultados) > 0){
		while ($linha = mysqli_fetch_assoc($resultados)) {
			echo "<tr>";
			echo "<td>" . $linha['codProj'] . "</td>";
			echo "<td>" . $linha['titulo'] . "</td>";
			echo "<td>" . $linha['codDepto']  . "</td>";
		}
	}else{
		echo "<p>Zero Resultados!</p>";
	}
	echo "</tr>";

	mysqli_close($conn);

	?>
</body>
</html>

