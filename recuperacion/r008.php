<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='collapse'>
        <tr><th>
            <?php
            $texto = "En un lugar de la mancha";
            $textoB = "AAAaaaeeeeoooouyuuu";
            echo $textoB;
            $textoB = strtolower($textoB);
            ?>
        </th></tr>
        <?php
           $countA = substr_count($textoB,'a');
           $countE = substr_count($textoB,'e');
           $countI = substr_count($textoB,'i');
           $countO = substr_count($textoB,'o');
           $countU = substr_count($textoB,'u');
           
           if($countA > 0){

        ?>
            <tr>
                <td>
                    <?php
                    echo 'a - '. $countA . ' veces';
                    ?>
                </td>
            </tr>
        <?php
            }
           if($countE > 0){

        ?>
            <tr>
                <td>
                    <?php
                    echo 'e - '. $countE . ' veces';
                    ?>
                </td>
            </tr>
        <?php
            }
           if($countI > 0){

        ?>
            <tr>
                <td>
                    <?php
                    echo 'i - '. $countI . ' veces';
                    ?>
                </td>
            </tr>
        <?php
            }
           if($countO > 0){

        ?>
            <tr>
                <td>
                    <?php
                    echo 'o - '. $countO . ' veces';
                    ?>
                </td>
            </tr>
        <?php
            }
           if($countU > 0){

        ?>
            <tr>
                <td>
                    <?php
                    echo 'u - '. $countU . ' veces';
                    ?>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>