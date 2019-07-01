<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
            }
            tr, td{
                border: 1px solid;
                padding: 10px;
            }
            tr:nth-child(even){
                background: lightgray;
            }
        </style>
    </head>
    
    <body>
        <a href="ex01-1.php">Departamento</a>
        
        <a href="ex01-2.php">Dependente</a>
        
        <a href="ex01-3.php">Empregado</a>
        
        <a href="ex01-4.php">Trabalha em</a>
        
        <h3>DEPARTAMENTO</h3>
        
        <table>
            <?php
                include "07.php";
                $sql = 'select * from departamento';
                $resultado = mysqli_query($conn, $sql);
            
                $campos = mysqli_fetch_fields($resultado);
                echo "<tr>";
                foreach($campos as $v){
                    echo "<td>$v->name</td>";
                }
                echo "</tr>";
            
                if(mysqli_num_rows($resultado) > 0){
                    while($linha = mysqli_fetch_assoc($resultado)){
                        echo "<tr><td>". $linha['codDepto']. "</td><td>" . $linha['nome'] . "</td><td>" . $linha['gerente'] . "</td><td>" . $linha['dataGerente'] . "</td><td><a href = 'update.php?codDepto=". $linha['codDepto'] ."'>ATT</a></td><td><a href='delete.php?codDepto=". $linha['codDepto'] . "'>DEL</a></td></tr>";
                        
                    }
                }
            ?>
        </table>
        <form action="inserir.php" method="POST">
            <input type="hidden" value="dep" name="dep">
            <input type="submit" value="INSERIR" >
        </form>
        
    </body>

</html>