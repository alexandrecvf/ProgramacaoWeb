<?php
    //removerregistro.php
    include "index.php";

    $codDepto = $_POST['codDepto'];

    $sql = "delete from departamento";
    $sql .= " where codDepto = " . $codDepto;

		//al
    echo $sql;

    if(mysqli_query($conn, $sql)){
        echo "<p>Registro removido com sucesso!</p>";
    }else{
        echo "<p>Erro: ".mysqli_error($conn)."</p>";
    }

    mysqli_close($conn);
?>

<p><a href="consultas.php">Consultas</a></p>