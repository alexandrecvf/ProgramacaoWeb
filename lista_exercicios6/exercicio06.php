<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="exercicio06.php" method="post">
            <p><input type="text" name="nome" placeholder="Seu nome" size="40"></p>
            <p><label for="pedra">Pedra <input type="radio" name="escolha" value="pedra"></label></p>
            <p><label for="papel">Papel <input type="radio" name="escolha" value="papel"></label></p>
            <p><label for="tesoura">Tesoura <input type="radio" name="escolha" value="tesoura"></label></p>
            <input id="botao" type="submit" name="enviar" value="Jogar">
        </form>
        
        <?php
        
            if(isset($_POST['nome'])){
                $nome = $_POST['nome'];
            }
        
            if(isset($_POST['escolha'])){
                $escolha = $_POST['escolha'];
            }
        
            if(isset($escolha)){
                    echo "<p> Você escolheu: " . $escolha . "</p>";
            }
            
            if(isset($escolha)){
                $escolhaPc = rand(1,3);
            
                if($escolhaPc == 1){
                   echo "<p> O computador escolheu: pedra </p>"; 
                }else if($escolhaPc == 2){
                    echo "<p> O computador escolheu: papel </p>"; 
                }else{
                    echo "<p> O computador escolheu: tesoura </p>"; 
                }
            }
            
            if(isset($nome) && isset($escolha)){
                if($escolha == "pedra"){
                    if($escolhaPc == 1){
                        echo "Empate";
                    }else if($escolhaPc == 2){
                        echo "Computador ganhou";
                    }else{
                        echo "Você ganhou";
                    }
                }elseif($escolha == "papel"){
                    if($escolhaPc == 1){
                        echo "Você ganhou";
                    }else if($escolhaPc == 2){
                        echo "Empate";
                    }else{
                        echo "Computador ganhou";
                    }
                }else{
                  if($escolhaPc == 1){
                        echo "Computador ganhou";
                    }else if($escolhaPc == 2){
                        echo "Você ganhou";
                    }else{
                        echo "Empate";
                    }  
                }
            }
            
        ?>
    </body>
</html>