<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma en binario</title>
</head>
<body>
    <?php
    $bin1 = 1000;
    $bin2 = 10;
    $dec1 = bindec($bin1);
    $dec2 = bindec($bin2);
    $sumaDec = $dec1 + $dec2;
    $sumaBin = decbin($sumaDec);

    print("<h3>Numero 1: $bin1</h3>");
    print("<h3>Numero 2: $bin2</h3>");
    print("<h3>$bin1 + $bin2 = $sumaBin en binario</h3>");
    print("<h3>$dec1 + $dec2 = $sumaDec en decimal</h3>");
    ?> 

</body>
</html>