<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Bingo!</h1>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post"></form>
        <input type="button" name="btn" value="Extraer bola">
        <?php
            require('bingoFunc.php');
            
            $carton1 = array(1,2,1,2,1,2,1,2,1,2,1,2,1,2,1);
            rellenarCarton($carton1);
            echo 'carton[1]',$carton1[1];
            echo 'carton[1]',$carton1[2];
        ?>
    </main>

</body>

</html>
