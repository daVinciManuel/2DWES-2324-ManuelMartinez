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
            $textoB = "AAAaaaeeeeiiioooouyuuu";
            echo $textoB;
            $textoB = strtolower($textoB);
            ?>
        </th></tr>
        <tr>
            <td>
                <?php
                echo 'a - '. substr_count($textoB,'a') . ' veces';
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo 'e - '. substr_count($textoB,'e') . ' veces';
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo 'i - '. substr_count($textoB,'i') . ' veces';
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo 'o -'. substr_count($textoB,'o') . ' veces';
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo 'u - '. substr_count($textoB,'u') . ' veces';
                ?>
            </td>
        </tr>
    </table>
</body>
</html>