<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <style>
  table{
      border-collapse: collapse;
  }
  tr, td, th{
      border: 1px solid black;
      text-align: center;
  }
 </style>
</head>
<body>
<?php
    //mysqli (object oriented, procedural. mysql only)
    //PDO ()

    echo "<h1>PHP com MySQL - Consultas</h1>";
    include "index.php";

    $sql = "select * from departamento";
    $resultados = mysqli_query($conn, $sql);
    echo "<table>";
    echo "<tr>";
     //coletando os nomes dos campos da tabela consultada
     $campos = mysqli_fetch_fields($resultados);
     foreach($campos as $v){
         echo "<th>$v->name</th>";
     }
     echo "<th>Atualizar</th>";
     echo "<th>Remover</th>";
     echo "</tr>";

    if(mysqli_num_rows($resultados)>0){
        //extraindo linha por linha dos resultados
        while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
            $string  = "<tr>";
            $string .= "<td>" . $linha[0] . "</td>";
            $string .= "<td>" . $linha[1] . "</td>";
            $string .= "<td>" . $linha[2] . "</td>";
            $string .= "<td>" . $linha[3] . "</td>";
            $string .= "<td><a href='update.php?codDepto=" . $linha[0] . "'";
            $string .= "<i class='far fa-edit'></i></a></td>";
            $string .= "<td><a href = 'remover.php?codDepto=" . $linha[0] . "'";
            $string .= "<i class='far fa-trash-alt'></i></a></td>";
            $string .= "</tr>";

            echo $string;
        }
    }else{
        echo "<p>Zero resultados!</p>";
    }

    echo "</table>";


    mysqli_close($conn);

?>
</body>
</html>
