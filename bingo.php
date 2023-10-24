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
        <div class="bombo">
            <?php
            require('funciones.php');
            if(array_key_exists('btn',$_POST)){
                dameBola();
            // }else{
                // echo '<p>.</p>';
            }
                // echo '<img src="./img/1.png"'. 'alt="1.png">';
            ?>
        </div>
        <input type="button" name="btn" value="Extraer bola">
    </main>

</body>

</html>