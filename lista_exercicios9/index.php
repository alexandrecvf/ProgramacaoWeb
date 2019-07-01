<html>
    <head>
    
    </head>
    
    <body>
        <?php
            // mysqli (object oriented, procendural, mysql only)
            // PDO ()
        
            //echo '<h1> PHP com MySQL </h1>';
            // mysqli
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $bd = 'empresax';
            
            // Abrindo a conexão
            $conn = mysqli_connect($servidor, $usuario, $senha, $bd);
            //echo $conn;
            // Testando a conexão
            if($conn->connect_error){
                die('Conexão não realizada' . mysqli_connect_error());
            }
        
            // Fechando a conexão
            //mysqli_close($conn);
        ?>
    
    </body>

</html>