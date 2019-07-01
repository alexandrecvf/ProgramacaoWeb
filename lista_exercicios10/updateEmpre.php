<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php
            echo "<h1>PHP com MySQL - Update</h1>";
            include "07.php";
            $codEmp = $_GET['codEmp'];
            echo "<p>Código Empregado: " . $codEmp . " </p>";
            $sql = "select * from empregado where codEmp = " . $codEmp;
            $resultados = mysqli_query($conn, $sql);
            
                if(mysqli_num_rows($resultados)>0){
                    //extraindo linha por linha dos resultados
                    while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
                        $codEmp = $linha[0];
                        $nome = $linha[1];
                        $dataNasc = $linha[2];
                        $endereco = $linha[3];
                        $sexo = $linha[4];
                        $salario = $linha[5];
                        $codSup = $linha[6];
                        $codDepto = $linha[7];
                    }
                }else{
                    echo "<p>Não foram encontrados resultados!</p>";
                }
        ?>
        
        <form action="atualizarregistro.php" method="POST">
            <p><label for='codEmp'>Código Empregado:</label><input id='codEmp' type='number' name='codEmp' value='<?php echo $codEmp ?>'></p>
            <p><label for='nome'>Nome Empregado:</label><input id='nome' type='text' name='nome' value='<?php echo $nome ?>'></p>
            <p><label for='dataNasc'>Data Nascimento:</label><input id='dataNasc' type='date' name='dataNasc' value='<?php echo $dataNasc ?>'></p>
            <p><label for='endereco'>Endereço:</label><input id='endereco' type='text' name='endereco' value='<?php echo $endereco ?>'></p>
            <p><label for='sexo'>Sexo:</label><input id='sexo' type='text' name='sexo' value='<?php echo $sexo ?>'></p>
            <p><label for='salario'>Salário:</label><input id='salario' type='number' name='salario' value='<?php echo $salario ?>'></p>
            <p><label for='codSup'>Código Supervisor:</label><input id='codSup' type='number' name='codSup' value='<?php echo $codSup ?>'></p>
            <p><label for='codDepto'>Código Departamento:</label><input id='codDepto' type='number' name='codDepto' value='<?php echo $codDepto ?>'></p>
            <input type='hidden' value='empregado' name='dep'>
            <p><input type="submit" value="Atualizar"><input type="reset" value="Limpar"></p>
        </form>
    </body>

</html>