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
        echo '<tr>';
        $aux = 0;
       for($i = 2; $i < 10+1 ; $i+=2){
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