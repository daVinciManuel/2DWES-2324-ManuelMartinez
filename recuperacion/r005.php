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
        // inserto salto de linea cuando contador ($countColumn) sea igual al limite ($maxColumn)
        $countColumn = 0;
        $maxColumn = 4;
        $suma = 0;
        for($i = 1; $i <= 100; $i+=3){
            $countColumn++;
            echo '<td>' . $i . '</td>';
            $suma += $i;
            if($countColumn == $maxColumn){
                // muestro sumatorio y salto de linea
                echo '<td> - </td>';
                echo '<td> Suma: '. $suma .' </td>';
                echo '</tr><tr>';

                // reseteo contador y sumatorio
                $countColumn = 0;
                $suma = 0;
            }else{
                echo '<td> - </td>';
                if($i == 100){

                    echo '<td> - </td>';
                    echo '<td> - </td>';
                    echo '<td> - </td>';
                    echo '<td> - </td>';
                    echo '<td> Suma: '. $suma .' </td>';
                    echo '</tr><tr>';
                }
            }
        }
        echo '</tr>';
    ?>
    </table>
</body>
</html>