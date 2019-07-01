<?php
    include "07.php";
    
    $tabela = $_POST['dep'];

    if($tabela == 'departamento'){
        $codDepto = $_POST['codDepto'];
        $nome = $_POST['nome'];
        $gerente = $_POST['gerente'];
        $dataGerente = $_POST['dataGerente'];

        $sql = "update departamento set codDepto = " . $codDepto . ", nome = '" . $nome . "', gerente = " . $gerente . ", dataGerente = '" . $dataGerente . "' where codDepto = " . $codDepto;    
    }elseif($tabela == 'dependente'){
        $codEmp = $_POST['codEmp'];
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $dataNasc = $_POST['dataNasc'];
        $relacao = $_POST['relacao'];

        $sql = "update dependente set codEmp = " . $codEmp . ", nome = '" . $nome . "', sexo = '" . $sexo . "', dataNasc = '" . $dataNasc . "', relacao = '" . $relacao . "' where nome = '" . $nome . "'";  
    }elseif($tabela == 'empregado'){
        $codEmp = $_POST['codEmp'];
        $nome = $_POST['nome'];
        $dataNasc = $_POST['dataNasc'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['sexo'];
        $salario = $_POST['salario'];
        $codSup = $_POST['codSup'];
        $codDepto = $_POST['codDepto'];

        $sql = "update empregado set codEmp = " . $codEmp . ", nome = '" . $nome . "', dataNasc = '" . $dataNasc ."', endereco = '" . $endereco . "', sexo = '" . $sexo . "', salario = " . $salario . ", codSuperv = " . $codSup . ", codDepto = " . $codDepto . " where codEmp = " . $codEmp;  
        
    }elseif($tabela == 'trabalhaem'){
        $codEmp = $_POST['codEmp'];
        $codProj = $_POST['codProj'];
        $horas = $_POST['horas'];

        $sql = "update trabalhaem set codEmp = " . $codEmp . ", codProj = '" . $codProj . "', horas = " . $horas . " where horas = " . $horas; 
    }

    
    //echo $sql;
    if(mysqli_query($conn, $sql)){
        echo "<p>Registro atualizado com sucesso !</p>";
    }else{
        echo "<p>Erro ".mysqli_error($conn)."</p>";
    }
?>