<html>
<html>
<head>
	<title>Departamento</title>
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

	echo "<h2>Departamento</h2>";

	include "index.php";

	$sql = "SELECT * FROM departamento";
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
			echo "<td>" . $linha['codDepto'] . "</td>";
			echo "<td>" . $linha['nome'] . "</td>";
			echo "<td>" . $linha['gerente'] . "</td>";
			echo "<td>" . $linha['dataGerente']  . "</td>";
		}
	}else{
		echo "<p>Zero Resultados!</p>";
	}
	echo "</tr>";

	mysqli_close($conn);

	?>
</body>
</html>

