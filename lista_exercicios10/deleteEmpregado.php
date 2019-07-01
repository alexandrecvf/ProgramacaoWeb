<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php
            echo "<h1>PHP com MySQL - Delete</h1>";
            include "07.php";
            $codEmp = $_GET['codEmp'];
            echo "<p>Código Empregado: " . $codEmp . " </p>";
            $sql = "select * from empregado where codEmp = '" . $codEmp. "'";
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
        
        <form action="removerregistro.php" method="POST">
            <input type="hidden" name="dep" value="empregado">
            <input type="hidden" name="codEmp" value="<?php echo $codEmp ?>">
            <p><input type="submit" value="Apagar"></p>
        </form>
    </body>

</html>