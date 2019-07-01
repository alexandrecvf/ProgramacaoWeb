<html>
<html>
<head>
	<title>Trabalha em</title>
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
	echo "<p><a href = 'exercicio02.php'>Inserir</a></p>";

	echo "<a href = 'exercicio01.php'>Departamento</a>" . " | ";
	echo "<a href = 'exercicio01_2.php'>Dependente</a>" . " | ";
	echo "<a href = 'exercicio01_3.php'>Empregado</a>" . " | ";
	echo "<a href = 'exercicio01_5.php'>Projeto</a>" . " | ";
	echo "<a href = 'exercicio01_4.php'>Trabalha em</a>";

	echo "<h2>Trabalha em</h2>";

	include "index.php";

	$sql = "SELECT * FROM trabalhaem";
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
			echo "<td>" . $linha['codEmp'] . "</td>";
			echo "<td>" . $linha['codProj'] . "</td>";
			echo "<td>" . $linha['horas']  . "</td>";
		}
	}else{
		echo "<p>Zero Resultados!</p>";
	}
	echo "</tr>";

	mysqli_close($conn);

	?>
</body>
</html>

