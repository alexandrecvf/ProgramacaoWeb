<html>
    <head>
    
    </head>
    
    <body>
        <?php

            $num1 = rand(0,100);
            $num2 = rand(0,100);
            $resultado = (string) $num1 + $num2;
            
            // Tem mandar o resultado no form?
            echo "<h2> $num1 + $num2 = ? </h2>";
            echo "<form action = 'exercicio07.php' method = 'POST'> 
                    <label for = 'resposta'><input type = 'text' name = 'resp'></label><br><br>
                    
                    <input type = 'submit' value = 'Enviar'>
                    <input type = 'hidden' value = '$resultado' name = 'result'>
                </form>";
            
            if(isset($_POST['resp'])){
                $resUsu = $_POST['resp'];
            }
            if(isset($_POST['result'])){
                $resCert = $_POST['result'];
            }    
            if(isset($_POST['resp'])){
                if(strcmp($resUsu, $resCert) == 0){
                    echo "<p>Usuário: $resUsu</p>";
                    echo "<p>Resposta certa: $resCert</p>";
                    echo "<p>Resposta certa</p>";
                }else{
                    echo "<p>Usuário: $resUsu</p>";
                    echo "<p>Resposta certa: $resCert</p>";
                    echo "<p>Resposta errada</p>";
                }    
            }
            
            
        ?>
    </body>
</html>