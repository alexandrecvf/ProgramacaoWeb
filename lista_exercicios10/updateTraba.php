<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php
            echo "<h1>PHP com MySQL - Update</h1>";
            include "07.php";
            $horas = $_GET['horas'];
            echo "<p>Código Projeto: " . $horas . " </p>";
            $sql = "select * from trabalhaem where horas = " . $horas;
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
        
        <form action="atualizarregistro.php" method="POST">
            <p><label for='codEmp'>Código Empregado:</label><input id='codEmp' type='number' name='codEmp' value='<?php echo $codEmp ?>'></p>
            <p><label for='codProj'>Código Projeto:</label><input id='codProj' type='number' name='codProj' value='<?php echo $codProj ?>'></p>
            <p><label for='horas'>Horas:</label><input id='horas' type='number' name='horas' value='<?php echo $horas ?>'></p>
            <input type='hidden' value='trabalhaem' name='dep'>
            <p><input type="submit" value="Atualizar"><input type="reset" value="Limpar"></p>
        </form>
    </body>

</html>