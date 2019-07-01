<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $mensagem = $_POST['mensagem'];
            
        
        
            
            /* $nome = $_GET['nome'];
            $email = $_GET['email'];
            $senha = $_GET['senha']; */
        
            echo "<p>$nome</p>";
            echo "<p>$email</p>";
            echo "<p>$telefone</p>";
            echo "<p>$mensagem</p>";
            
        ?>
    </body>
</html>