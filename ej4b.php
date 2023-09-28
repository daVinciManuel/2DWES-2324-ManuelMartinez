<html>
<head>
    <title>EJ4B - Tabla Multiplicar</title>
</head>
<body>
    <?php
    $num = 8;
    for($i = 1; $i < 11; $i++){
        $multiplo = $num * $i;
        print("<p>$num x $i = $multiplo</p>");
    }
    ?>
</body>
</html>