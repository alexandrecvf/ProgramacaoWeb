<h1>INDEX.PHP</h1>
<?php
    session_start(); // Inicializando uma sessão
    $nome = "Informatica";
    echo $nome . "<br>";
    
    $_SESSION['nome'] = "tecnologia";

    echo $_SESSION['nome'] . "<br>";

?>
<a href="index2.php">INDEX 2</a>