<?php
	include "index.php";

	$codDepto = $_POST['codDepto'];
	$nome = $_POST['nome'];
	$gerente = $_POST['gerente'];
	$dataGerente = $_POST['dataGerente'];

	$sql = "insert into departamento (codDepto, nome, gerente, dataGerente) values (" . $codDepto. ", '". $nome ."'," . $gerente. ",'" . $dataGerente."')";

	echo $sql;

	if (mysqli_query($conn, $sql)) {
		echo "<p>Registro inserido com sucesso!</p>";
	} else {
		echo "<p>Erro:" .mysqli_error($conn) . "</p>";
	}

	mysqli_close($conn);
?>