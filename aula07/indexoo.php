<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//mysqli (object oriented, procedural, mysql only)
	//PDO ()

	echo "<h1>PHP com MySQL</h1>";
	//mysql object oriented
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "empresax";

	//abrindo a conexão
	$conn = new mysqli($servidor, $usuario, $senha, $bd);

	//testando a conexão
	if($conn->connect_error){
		die("Conexão não realizada!" . $conn->connect_error);
	} else {
		echo "<p>Conexão feita com  sucesso!</p>";
	}

	//fechando a conexão
	$conn->close();




	?>
</body>
</html>