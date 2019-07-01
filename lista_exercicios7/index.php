<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//mysqli (object oriented, procedural, mysql only)
	//PDO ()

	//echo "<h1>PHP com MySQL</h1>";
	//mysqli procedural
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "empresax";

	//abrindo a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $bd);

	//testando a conexão
	if($conn){
		//echo "<p>Conexão feita com  sucesso!</p>";
	} else {
		die("Conexão não realizada!" . mysqli_connect_error());
	}

	//fechando a conexão
	//mysqli_close($conn);

	?>
</body>
</html>