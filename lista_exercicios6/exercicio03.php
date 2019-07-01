<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            table {
              font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            td, th {
              border: 1px solid black;
              padding: 8px;
            }
        </style>
    </head>
    <body>
        
        <table style="width:100%">
          <caption>Numeros</caption>
          <tr>
            <?php
                for($i = 0; $i < 15; $i++){
                    $num = rand(-100,100);
                    if($num < 0){
                        echo "<td style='background-color: indianred;'>$num</td>";
                    }else if($num > 0){
                         echo "<td style='background-color: lightblue;'>$num</td>";
                    }else{
                        echo "<td style='background-color: yellow;'>$num</td>";
                    }
                    
                }
            ?>
          </tr>
        </table>
    </body>
</html>