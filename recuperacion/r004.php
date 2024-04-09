<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        
    <?php
        echo '<tr>';
        $countColumn = 0;
        for($i = 5; $i < 100; $i+=3){
            $countColumn++;
            echo '<td>' . $i . '</td>';
            
            if($countColumn == 3){
                echo '</tr><tr>';
                $countColumn = 0;
            }else{
                echo '<td> - </td>';
            }
        }
        echo '</tr>';
    ?>
    </table>
</body>
</html>