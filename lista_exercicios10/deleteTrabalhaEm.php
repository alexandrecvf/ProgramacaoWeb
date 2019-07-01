<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php
            echo "<h1>PHP com MySQL - Delete</h1>";
            include "07.php";
            $horas = $_GET['horas'];
            echo "<p>Código Empregado: " . $horas . " </p>";
            $sql = "select * from trabalhaEm where horas = '" . $horas. "'";
            $resultados = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($resultados)>0){
                //extraindo linha por linha dos resultados
                while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
                    $codEmp = $linha[0];
                    $codProj = $linha[1];
                    $horas = $linha[2];
                }
            }else{
                echo "<p>Não foram encontrados resultados!</p>";
            }
        ?>
        
        <form action="removerregistro.php" method="POST">
            <input type="hidden" name="dep" value="trabalhaem">
            <input type="hidden" name="horas" value="<?php echo $horas ?>">
            <p><input type="submit" value="Apagar"></p>
        </form>
    </body>

</html>