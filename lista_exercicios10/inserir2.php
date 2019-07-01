<?php
    include "07.php";

    $tabela = $_POST['dep'];
    echo $tabela;
    if($tabela == 'departamento'){
        $codDepto = $_POST['codDepto'];
        $nome = $_POST['nome'];
        $gerente = $_POST['gerente'];
        $dataGerente = $_POST['dataGerente'];

        $sql = "insert into departamento (codDepto, nome, gerente, dataGerente) values (".$codDepto.", '".$nome."', ".$gerente.", '".$dataGerente."')";    
    }elseif($tabela == 'dependente'){
        $codEmp = $_POST['codEmp'];
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $dataNasc = $_POST['dataNasc'];
        $relacao = $_POST['relacao'];

        $sql = "insert into dependente (codEmp, nome, sexo, dataNasc, relacao) values (".$codEmp.", '".$nome."', '".$sexo."', '".$dataNasc."', '".$relacao."')";
    }elseif($tabela == 'empregado'){
        $codEmp = $_POST['codEmp'];
        $nome = $_POST['nome'];
        $dataNasc = $_POST['dataNasc'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['sexo'];
        $salario = $_POST['salario'];
        $codSuperv = $_POST['codSup'];
        $codDepto = $_POST['codDepto'];
        
        $sql = "insert into empregado (codEmp, nome, dataNasc, endereco, sexo, salario, codSuperv, codDepto) values (".$codEmp.", '".$nome."', '".$dataNasc."', '".$endereco."', '".$sexo."', ".$salario.", ".$codSuperv.", ".$codDepto.")";
    }elseif($tabela == 'trabalhaem'){
        $codEmp = $_POST['codEmp'];
        $codProj = $_POST['codProj'];
        $horas = $_POST['horas'];

        $sql = "insert into trabalhaem (codEmp, codProj, horas) values (".$codEmp.", ".$codProj.", ".$horas.")";
    }

    //echo $sql;
    if(mysqli_query($conn, $sql)){
        echo "<p>Registro inserido com sucesso !</p>";
    }else{
        echo "<p>Erro ".mysqli_error($conn)."</p>";
    }
?>