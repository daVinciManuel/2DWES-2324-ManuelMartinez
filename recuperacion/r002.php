<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='collapse'>
        
    <?php
    // la manera rapida es con un bucle por cada fila (1, 11, 21, 31... 91; 2, 12, 22, 32... 92)
        echo '<tr>';
        $aux = 0;
       for($i = 1; $i < 10+1 ; $i++){
        for($j = 0; $j < 10; $j++){
            $finalNum = $i+10*$j;
            echo '<td>' . $finalNum . '</td>';
        }
            echo '</tr><tr>';
       }
        echo '</tr>';
    ?>
    </table>
</body>
</html>