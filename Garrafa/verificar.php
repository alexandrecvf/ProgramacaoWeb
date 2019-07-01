<?php
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

    // Dando um select na tabela de cartas
    $sql = "select * from cartas";   
    $resultados = mysqli_query($conn, $sql);

    $arrayIdCartas = array();
    if(mysqli_num_rows($resultados)>0){
        while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
            $id = $linha[0];
            array_push($arrayIdCartas, $id);
        }
    }

    // Sorteando uma carta
    // Definindo o número de participantes
	$sorteio = rand( 0, sizeof($arrayIdCartas)-1);

	//ID da carta sorteada
	$cartaId = $arrayIdCartas[$sorteio];

	// Dando um select na tabela de cartas
    $sql = "select * from cartas where id = " . $cartaId;   
    $resultados = mysqli_query($conn, $sql);

   	$distancia = 0;
    if(mysqli_num_rows($resultados)>0){
        while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
            $distancia = $linha[2];
        }
    }

	// Dando um select na tabela de selos_cartas
    $sql = "select * from selos where id_carta = " . $cartaId;   
    $resultados = mysqli_query($conn, $sql);

    $i = 0;
    if(mysqli_num_rows($resultados)>0){
        while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
        	$i = $i + 1;
        	$cidade = $linha[1];
            $pais = $linha[2];
            $data = $linha[3];
            $cor = $linha[4];
            $latitude = $linha[5];
            $longitude = $linha[6];
            $cartaId = $linha[7];            
        	if($i != mysqli_num_rows($resultados)){
        		echo utf8_encode($cidade) . "," . $pais . "," . $data . "," . $cor . "," . $latitude . "," . $longitude . ";";
        	}else{
        		echo utf8_encode($cidade) . "," . $pais . "," . $data . "," . $cor . "," . $latitude . "," . $longitude . ";" . $cartaId . "," . $distancia;
        	}
        }
    }

?>