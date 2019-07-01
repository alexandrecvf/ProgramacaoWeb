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
              border: 2px solid black;
              padding: 8px;
              text-align: center;
              font-weight: bold;
            }
        </style>
    </head>
    <body>
        
        <table style="width:100%">
          <caption>Tabuada</caption>
          <tr>
              <td>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "$i x 1 = " . $i*1 ;
                        echo "<br>";
                    }
                ?>
              </td>
              <td>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "$i x 2 = " . $i*2 ;
                        echo "<br>";
                    }
                ?>
              </td>
              <td>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "$i x 3 = " . $i*3 ;
                        echo "<br>";
                    }
                ?>
              </td>
              <td>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "$i x 4 = " . $i*4 ;
                        echo "<br>";
                    }
                ?>
              </td>
              <td>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "$i x 5 = " . $i*5 ;
                        echo "<br>";
                    }
                ?>
              </td>
          </tr>
          <tr>
              <td>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "$i x 6 = " . $i*6 ;
                        echo "<br>";
                    }
                ?>
              </td>
              <td>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "$i x 7 = " . $i*7 ;
                        echo "<br>";
                    }
                ?>
              </td>
              <td>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "$i x 8 = " . $i*8 ;
                        echo "<br>";
                    }
                ?>
              </td>
              <td>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "$i x 9 = " . $i*9 ;
                        echo "<br>";
                    }
                ?>
              </td>
              <td>
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "$i x 10 = " . $i*10 ;
                        echo "<br>";
                    }
                ?>
              </td>
          </tr>
            
        </table>
    </body>
</html>