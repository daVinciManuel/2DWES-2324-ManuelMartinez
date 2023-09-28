<html>
<head>
    <title>EJ4B - Tabla Multiplicar</title>
</head>
<body>
    <table border="4" border-collapse="collapse">

    <?php
    $num = 8;
    for($i = 1; $i < 11; $i++){
        $multiplo = $num * $i;
        print("<tr><td>$num x $i</td><td>$multiplo</td></p>");
    }
    ?>

    </table>
</body>
</html>