<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="exercicio05.php" method="post">
            <p><input type="text" name="nome" placeholder="Seu nome" size="40"></p>
            <p><input type="text" name="valor1" placeholder="Valor 1" size="40"></p>
            <p><input type="text" name="valor2" placeholder="Valor 2" size="40"></p>
            <p><input type="text" name="valor3" placeholder="Valor 3" size="40"></p>
            <input id="botao" type="submit" name="enviar" value="Ok">
        </form>
        
        <?php
        
            if(isset($_POST['nome'])){
                $nome = $_POST['nome'];
            }
        
            if(isset($_POST['valor1'])){
                $valor1 = $_POST['valor1'];
            }
        
            if(isset($_POST['valor2'])){
                $valor2 = $_POST['valor2'];
            }
        
            if(isset($_POST['valor3'])){
                $valor3 = $_POST['valor3'];
            }
            
            if(isset($valor1) && isset($valor2) && isset($valor3) && isset($nome)){
                echo "<h1 style='color: rgb(" . $valor1 . "," . $valor2 . "," . $valor3 . ")'>$nome</h1>";
            }
            
        ?>
    </body>
</html>