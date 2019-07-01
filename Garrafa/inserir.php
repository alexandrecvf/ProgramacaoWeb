<?php
	$cidade = $_POST['city'];
	$pais = $_POST['country'];
	$dia = $_POST['day'];
	$mes = $_POST['month'];
	$ano = $_POST['year'];
	$data = $ano . "-" . $mes . "-" . $dia;
	$cor = $_POST['color'];
	$latitude = $_POST['lat'];
	$longitude = $_POST['lon'];

	$servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bd = 'garrafa';
    
    // Abrindo a conexão
    $conn = mysqli_connect($servidor, $usuario, $senha, $bd);
    //echo $conn;
    // Testando a conexão
    if($conn->connect_error){
        die('Conexão não realizada' . mysqli_connect_error());
    }

    // Inserindo uma nova carta
    $sql = "insert into cartas (nome, distancia) values ('carta', 0)";
    mysqli_query($conn, $sql);

    // Pegando o ID da carta
    $sql = "select * from cartas order by id desc limit 1";
    $resultados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_array($resultados, MYSQLI_NUM);
    $idCarta = $linha[0];

    // Inserindo um novo selo
    $sql = "insert into selos (cidade, pais, data, cor, latitude, longitude, id_carta) values ('" . $cidade . "', '" . $pais . "', '" . $data . "', '" . $cor . "', '" . $latitude . "', '" . $longitude . "', " . $idCarta .")";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
?>