<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            include "index.php";
            echo "<h1>PHP com MYSQL - UPDATE </h1>";
            $codEmp = $_GET['codEmp'];
            //echo "<p>Código Departamento: " . $codDepto . "</p>";
        
            $sql = "select * from empregado where codEmp = " . $codEmp;
        
            $resultados = mysqli_query($conn, $sql);
        
            if(mysqli_num_rows($resultados)>0){
                while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
                    $codEmp = $linha[0];
                    $nome = $linha[1];
                    $dataNasc = $linha[2];
                    $endereco = $linha[3];
                    $sexo = $linha[4];
                    $salario = $linha[5];
                    $codSuperv = $linha[6];
                    $codDepto = $linha[7];
                }
            }else{
                echo "<p> Não foram encontrados resultados!</p>";
            }
        ?>
        <form action="atualizarregistro.php" method="post">
            <p><label for="codEmp">Código Empregado: </label><input id="codEmp" type="number" name="codEmp" value="<?php echo $codEmp; ?>"></p>
            <p><label for="nome">Nome: </label><input id="nome" type="text" name="nome" value="<?php echo $nome; ?>"></p>
            <p><label for="dataNasc">Data Nascimento: </label><input id="dataNasc" type="date" name="dataNasc" value="<?php echo $dataNasc; ?>"></p>
            <p><label for="endereco">Endereço: </label><input id="endereco" type="text" name="endereco" value="<?php echo $endereco; ?>"></p>
            <p><label for="sexo">Sexo: </label><input id="sexo" type="text" name="sexo" value="<?php echo $sexo; ?>"></p>
            <p><label for="salario">Salário: </label><input id="salario" type="text" name="salario" value="<?php echo $salario; ?>"></p>
            <p><label for="codSuperv">Código Supervisor: </label><input id="codSuperv" type="number" name="codSuperv" value="<?php echo $codSuperv; ?>"></p>
            <p><label for="codDepto">Código Departamento: </label><input id="codDepto" type="number" name="codDepto" value="<?php echo $codDepto; ?>"></p>
            <p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
            <p><input type="hidden" value="empregado" name="tabela"></p>
        </form>
        
        <?php
            mysqli_close($conn);
        ?>
    </body>
</html>