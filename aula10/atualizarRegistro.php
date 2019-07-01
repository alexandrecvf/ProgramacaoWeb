<?php
    //inserirregistro.php
    include "index.php";

    $codDepto = $_POST['codDepto'];
    $nome = $_POST['nome'];
    $gerente = $_POST['gerente'];
    $dataGerente = $_POST['dataGerente'];

    $sql = "update departamento ";
    $sql .= "set codDepto = " . $codDepto . ", nome = '" . $nome . "', gerente = ". $gerente . ", dataGerente = '" . $dataGerente . "'";
    $sql .= " where codDepto = " . $codDepto;

		//al
    echo $sql;

    if(mysqli_query($conn, $sql)){
        echo "<p>Registro atualizado com sucesso!</p>";
    }else{
        echo "<p>Erro: ".mysqli_error($conn)."</p>";
    }

    mysqli_close($conn);
?>
