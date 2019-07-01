<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $date = $_POST['date'];
            date_default_timezone_set('America/Sao_Paulo'); 
            $dataAtual = date('Y-m-d');
            $data_inicio = new DateTime($date);
            $data_fim = new DateTime($dataAtual);

            // Resgata diferença entre as datas
            $dateInterval = $data_inicio->diff($data_fim);
        
            echo "<p>$date</p>";
            echo "<p>$dataAtual</p>";
            echo $dateInterval->days;
        
        ?>
    </body>
</html>