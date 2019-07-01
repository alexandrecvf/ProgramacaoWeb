<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style>
            body{
                text-align: center;
            }
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            td, th {
              border: 1px solid black;
              text-align: left;
              padding: 8px;
            }

            tr:nth-child(even) {
              background-color: #dddddd;
            }
        </style>
    </head>
    
    <body>
       
        <a href="departamento.php">Departamento</a>
        |
        <a href="dependente.php">Dependente</a>
        |
        <a href="empregado.php">Empregado</a>
        |
        <a href="projeto.php">Projeto</a>
        |
        <a href="trabalha.php">Trabalha em</a>
        
         <?php
            include "index.php";
           
            $sql = 'select * from projeto';
            $resultados = mysqli_query($conn, $sql);
        ?>
        
        <h2>Projeto</h2>

        <table>
          <tr>
            <?php
                $campos = mysqli_fetch_fields($resultados);
                foreach($campos as $v){
                    echo "<th>$v->name</th>";
                }
                echo "<th>Atualizar</th>";
            ?>
          </tr>
          <?php
            while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
                echo "<tr>";
                $qtd = mysqli_num_fields($resultados);
                for($i=0; $i < $qtd; $i++){
                    echo "<td>$linha[$i]</td>";
                    if($i == $qtd-1){
                        echo "<td><a href='atualizarProjeto.php?codProj=" . $linha[0] . "'><i class='far fa-edit'></i></a></td>";
                    }
                }
                echo "</tr>";
            }  
          ?>
        </table>

        <?php mysqli_close($conn); ?>
    
    </body>

</html>