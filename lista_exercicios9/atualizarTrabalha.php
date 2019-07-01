<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            include "index.php";
            echo "<h1>PHP com MYSQL - UPDATE </h1>";
            $horas = $_GET['horas'];
            //echo "<p>Código Departamento: " . $codDepto . "</p>";
        
            $sql = "select * from trabalhaem where horas = " . $horas;
        
            $resultados = mysqli_query($conn, $sql);
        
            if(mysqli_num_rows($resultados)>0){
                while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
                    $codEmp = $linha[0];
                    $codProj = $linha[1];
                    $horas = $linha[2];
                }
            }else{
                echo "<p> Não foram encontrados resultados!</p>";
            }
        ?>
        <form action="atualizarregistro.php" method="post">
            <p><label for="codEmp">Código Empregado: </label><input id="codEmp" type="number" name="codEmp" value="<?php echo $codEmp; ?>"></p>
            <p><label for="codProj">Código Projeto: </label><input id="codProj" type="number" name="codProj" value="<?php echo $codProj; ?>"></p>
            <p><label for="horas">Horas: </label><input id="horas" type="number" name="horas" value="<?php echo $horas; ?>"></p>
            <p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
            <p><input type="hidden" value="trabalha" name="tabela"></p>
        </form>
        
        <?php
            mysqli_close($conn);
        ?>
    </body>
</html>