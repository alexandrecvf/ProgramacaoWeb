<?php

    function atualizarDepartamento() {
        include "index.php";
        $codDepto = $_POST['codDepto'];
        $nome = $_POST['nome'];
        $gerente = $_POST['gerente'];
        $dataGerente = $_POST['dataGerente'];

        $sql = "update departamento set codDepto = " . $codDepto . ", nome = '" . $nome . "', gerente = " . $gerente . ", dataGerente = '" . $dataGerente . "' where codDepto = " . $codDepto;

        //echo $sql;

        if(mysqli_query($conn, $sql)){
            echo "<p>Registro atualizado com sucesso!</p>";
        }else{
            echo "<p>Erro: " . mysqli_error($conn) . "</p>";
        }
        mysqli_close($conn);
    }
    
    function atualizarProjeto(){
        include "index.php";
        $codProj = $_POST['codProj'];
        $titulo = $_POST['titulo'];
        $codDepto = $_POST['codDepto'];   
        
        $sql = "update projeto set codProj = " . $codProj . ", titulo =  '" . $titulo . "', codDepto = " . $codDepto . " where codProj = " . $codProj;

        //echo $sql;

        if(mysqli_query($conn, $sql)){
            echo "<p>Registro inserido com sucesso!</p>";
        }else{
            echo "<p>Erro: " . mysqli_error($conn) . "</p>";
        }
        mysqli_close($conn);
    }

    function atualizarDependente(){
        include "index.php";
        $codEmp = $_POST['codEmp'];
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $dataNasc = $_POST['dataNasc'];
        $relacao = $_POST['relacao'];

        $sql = "update dependente set codEmp = " . $codEmp . ", nome =  '" . $nome . "', sexo = '" . $sexo . "', dataNasc = '" . $dataNasc . "', relacao = '" . $relacao ."' where nome = '" . $nome . "'";

        //echo $sql;

        if(mysqli_query($conn, $sql)){
            echo "<p>Registro atualizado com sucesso!</p>";
        }else{
            echo "<p>Erro: " . mysqli_error($conn) . "</p>";
        }
        mysqli_close($conn);
    }

    function atualizarEmpregado(){
        include "index.php";
        $codEmp = $_POST['codEmp'];
        $nome = $_POST['nome'];
        $dataNasc = $_POST['dataNasc'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['sexo'];
        $salario = $_POST['salario'];
        $codSuperv = $_POST['codSuperv'];
        $codDepto = $_POST['codDepto'];
        
        $sql = "update empregado set codEmp = " . $codEmp . ", nome = '" . $nome . "', dataNasc = '" . $dataNasc . "', endereco = '" . $endereco . "', sexo = '" . $sexo ."', salario = '" . $salario . "', codSuperv = " . $codSuperv . ", codDepto = " . $codDepto . " where codEmp = " . $codEmp;
        //echo $sql;

        if(mysqli_query($conn, $sql)){
            echo "<p>Registro inserido com sucesso!</p>";
        }else{
            echo "<p>Erro: " . mysqli_error($conn) . "</p>";
        }
        mysqli_close($conn);
    }

    function atualizarTrabalha(){
        include "index.php";
        $codEmp = $_POST['codEmp'];
        $codProj = $_POST['codProj'];
        $horas = $_POST['horas'];   
        
        $sql = "update trabalhaem set codEmp = " . $codEmp . ", codProj = " . $codProj . ", horas = '" . $horas . "' where horas = '" . $horas . "'";

        if(mysqli_query($conn, $sql)){
            echo "<p>Registro inserido com sucesso!</p>";
        }else{
            echo "<p>Erro: " . mysqli_error($conn) . "</p>";
        }
        mysqli_close($conn);
    }
    
    if($_POST['tabela'] == "departamento") {
        atualizarDepartamento();
    }

    if($_POST['tabela'] == "projeto") {
        atualizarProjeto();
    }

    if($_POST['tabela'] == "dependente") {
        atualizarDependente();
    }

    if($_POST['tabela'] == "empregado") {
        atualizarEmpregado();
    }

    if($_POST['tabela'] == "trabalha") {
        atualizarTrabalha();
    }
    
?>