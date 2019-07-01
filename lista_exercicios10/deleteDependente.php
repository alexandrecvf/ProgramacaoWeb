<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php
            echo "<h1>PHP com MySQL - Delete</h1>";
            include "07.php";
            $nome = $_GET['nome'];
            echo "<p>Nome Dependente: " . $nome . " </p>";
            $sql = "select * from dependente where nome = '" . $nome. "'";
            $resultados = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($resultados)>0){
                //extraindo linha por linha dos resultados
                while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
                    $codEmp = $linha[0];
                    $nome = $linha[1];
                    $sexo = $linha[2];
                    $dataNasc = $linha[3];
                    $relacao = $linha[4];
                }
            }else{
                echo "<p>Não foram encontrados resultados!</p>";
            }
        ?>
        
        <form action="removerregistro.php" method="POST">
            <input type="hidden" name="dep" value="dependente">
            <input type="hidden" name="nome" value="<?php echo $nome ?>">
            <p><input type="submit" value="Apagar"></p>
        </form>
    </body>

</html>