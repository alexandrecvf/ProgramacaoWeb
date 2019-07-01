<?php
	$cidade = $_POST['city'];
	$pais = $_POST['country'];
	$dia = $_POST['day'];
	$mes = $_POST['month'];
	$ano = $_POST['year'];
	$data = $ano . "-" . $mes . "-" . $dia;
	$cor = $_POST['color'];
    $latitude = $_POST['lat'];
    $longitude = $_POST['long'];
    $distancia = $_POST['dist'];
    $idCarta = $_POST['id'];

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

    // Inserindo um novo selo
    $sql = "insert into selos (cidade, pais, data, cor, latitude, longitude, id_carta) values ('" . $cidade . "', '" . $pais . "', '" . $data . "', '" . $cor . "', '" . $latitude . "', '" . $longitude . "', " . $idCarta .")";
    mysqli_query($conn, $sql);

    // Pegando a distancia antiga
    // Dando um select na tabela de selos_cartas
    $sql = "select * from cartas where id = " . $idCarta;   
    $resultados = mysqli_query($conn, $sql);

    $distAntiga = 0;
    if(mysqli_num_rows($resultados)>0){
        while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
            $distAntiga = $linha[2];
        }
    }

    $distNova = $distancia + $distAntiga;

    // Alterando a distancia na carta
    $sql = "update cartas set distancia = " . $distNova . " where id = " . $idCarta;
    mysqli_query($conn, $sql);

    mysqli_close($conn);
?>