<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            include "index.php";
            echo "<h1>PHP com MYSQL - UPDATE </h1>";
            $codProj = $_GET['codProj'];
            //echo "<p>Código Departamento: " . $codDepto . "</p>";
        
            $sql = "select * from projeto where codProj = " . $codProj;
        
            $resultados = mysqli_query($conn, $sql);
        
            if(mysqli_num_rows($resultados)>0){
                while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
                    $codProj = $linha[0];
                    $titulo = $linha[1];
                    $codDepto = $linha[2];
                }
            }else{
                echo "<p> Não foram encontrados resultados!</p>";
            }
        ?>
        <form action="atualizarregistro.php" method="post">
            <p><label for="codProj">Código Projeto: </label><input id="codProj" type="number" name="codProj" value="<?php echo $codProj; ?>"></p>
            <p><label for="titulo">Título Projeto: </label><input id="titulo" type="text" name="titulo" value="<?php echo $titulo; ?>"></p>
            <p><label for="codDepto">Código Departamento: </label><input id="codDepto" type="number" name="codDepto" value="<?php echo $codDepto; ?>"></p>
            <p><input type="submit" value="Enviar"><input type="reset" value="Limpar"></p>
            <p><input type="hidden" value="projeto" name="tabela"></p>
        </form>
        
        <?php
            mysqli_close($conn);
        ?>
    </body>
</html>