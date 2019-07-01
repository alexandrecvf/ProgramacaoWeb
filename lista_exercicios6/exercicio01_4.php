<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $line1 = $_POST['line1'];
            $line2 = $_POST['line2'];
            $state = $_POST['state'];
            $postcode = $_POST['postcode'];
            $country = $_POST['country'];
            
        
        
            
            /* $nome = $_GET['nome'];
            $email = $_GET['email'];
            $senha = $_GET['senha']; */
        
            echo "<p>$line1</p>";
            echo "<p>$line2</p>";
            echo "<p>$state</p>";
            echo "<p>$postcode</p>";
            echo "<p>$country</p>";
            
        ?>
    </body>
</html>