<?php
    include "07.php";
    
    $tabela = $_POST['dep'];

    if($tabela == 'departamento'){
        $codDepto = $_POST['codDepto'];

        $sql = "delete from departamento where codDepto = " . $codDepto;   
    }elseif($tabela == 'dependente'){
        $nome = $_POST['nome'];

        $sql = "delete from dependente where nome = '" . $nome . "'";  
    }elseif($tabela == 'empregado'){
        $codEmp = $_POST['codEmp'];

        $sql = "delete from empregado where codEmp = " . $codEmp;  
    }elseif($tabela == 'trabalhaem'){
        $horas = $_POST['horas'];

        $sql = "delete from trabalhaem where horas = " . $horas; 
    }

    
    //echo $sql;
    if(mysqli_query($conn, $sql)){
        echo "<p>Registro deletado com sucesso !</p>";
    }else{
        echo "<p>Erro ".mysqli_error($conn)."</p>";
    }
?>