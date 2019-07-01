<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            include "index.php";
            echo "<h1>PHP com MYSQL - UPDATE </h1>";
            $nome = $_GET['nome'];
            //echo "<p>Código Departamento: " . $codDepto . "</p>";
        
            $sql = "select * from dependente where nome = '" . $nome . "'";
        
            $resultados = mysqli_query($conn, $sql);
        
            if(mysqli_num_rows($resultados)>0){
                while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
                    $codEmp = $linha[0];
                    $nome = $linha[1];
                    $sexo = $linha[2];
                    $dataNasc = $linha[3];
                    $relacao = $linha[4];
                }
            }else{
                echo "<p> Não foram encontrados resultados!</p>";
            }
        ?>
        <form action="atualizarregistro.php" method="post">
            <p><label for="codEmp">Código Empregado: </label><input id="codEmp" type="number" name="codEmp" value="<?php echo $codEmp; ?>"></p>
            <p><label for="nome">Nome: </label><input id="nome" type="text" name="nome" value="<?php echo $nome; ?>"></p>
            <p><label for="sexo">Sexo: </label><input id="sexo" type="text" name="sexo" value="<?php echo $sexo; ?>"></p>
            <p><label for="dataNasc">Data Nascimento: </label><input id="dataNasc" type="date" name="dataNasc" value="<?php echo $dataNasc; ?>"></p>
            <p><label for="relacao">Relação: </label><input id="relacao" type="text" name="relacao" value="<?php echo $relacao; ?>"></p>
            <p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
            <p><input type="hidden" value="dependente" name="tabela"></p>
        </form>
        
        <?php
            mysqli_close($conn);
        ?>
    </body>
</html>