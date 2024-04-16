<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Hello World</h1>    
    <?php
    $n1 = 3;
    $n2 = 5;
    $suma = $n1 + $n2;
    $sumatorio = (($n2*$n2-1)/2) - (($n1*$n1-1)/2);
    ?>
    <table border='1'>
        <tr>
            <td><?php echo 'Numero 1: '.$n1 .'Numero 2: '.$n2; ?></td>
        </tr>
        <tr>
            <td><?php echo $n1. ' + '. $n2 . ' = '. $suma; ?></td>
        </tr>
        <tr>
            <td>
            <?php
            $total = 0;
            echo $n1;
            for($i = $n1; $i<$n2; $i++){
                echo ' + ';
                echo $i+1;
                $total+= $i;
            }
            echo ' = '. $sumatorio;
            ?>
            </td>
        </tr>
    </table>

</body>
</html>