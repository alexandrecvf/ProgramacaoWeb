<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php

    echo "<h1>PHP com MySQL - Update</h1>";
    include "index.php";
    $codDepto = $_GET['codDepto'];
    echo "<p>Codigo Departamento: " . $codDepto . "</p>";

    $sql = "select * from departamento where codDepto = " . $codDepto;

    $resultados = mysqli_query($conn, $sql);

    if(mysqli_num_rows($resultados)>0){
        //extraindo linha por linha dos resultados
        while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
            $codDepto = $linha[0];
            $nome = $linha[1];
            $gerente = $linha[2];
            $dataGerente = $linha[3];
        }
    }else{
        echo "<p>Não foram encontrados resultados!</p>";
    }

?>
<form action="atualizarregistro.php" method="post">
<p><label for="codDepto">Código Departamento: </label><input id="codDepto" type="number" name="codDepto" value="<?php echo $codDepto; ?>"></p>
<p><label for="nome">Nome Departamento: </label><input id="nome" type="text" name="nome" value="<?php echo $nome; ?>"></p>
<p><label for="gerente">Gerente Departamento: </label><input id="gerente" type="number" name="gerente" value="<?php echo $gerente; ?>"></p>
<p><label for="dataGerente">Data Gerente: </label><input id="dataGerente" type="date" name="dataGerente" value="<?php echo $dataGerente; ?>"></p>
<p><input type="submit" value="Atualizar"><input type="reset" value="Limpar"></p>
</form>
</body>
</html>
