<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php
            echo "<h1>PHP com MySQL - Delete</h1>";
            include "07.php";
            $codDepto = $_GET['codDepto'];
            echo "<p>Código Departamento: " . $codDepto . " </p>";
            $sql = "select * from departamento where codDepto = " . $codDepto;
            $resultados = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($resultados)>0){
                //extraindo linha por linha dos resultados
                while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
                    $codEmp = $linha[0];
                    $nome = $linha[1];
                    $gerente = $linha[2];
                    $dataGerente = $linha[3];
                }
            }else{
                echo "<p>Não foram encontrados resultados!</p>";
            }
        ?>
        
        <form action="removerregistro.php" method="POST">
            <input type="hidden" name="dep" value="departamento">
            <input type="hidden" name="codDepto" value="<?php echo $codDepto ?>">
            <p><input type="submit" value="Apagar"></p>
        </form>
    </body>

</html>