<html>
<head>
    <title>2. Bucles</title>
</head>
<body>
    <?php
    $num = 48;
    $num2 = changeBase($num,2);
    $num8 = changeBase($num,8);
    $num4 = changeBase($num,4);
    $num6 = changeBase($num,6);
    $num7 = changeBase($num,7);
    $num9 = changeBase($num,9);
    
    print("<p>Numero $num en base 8 = $num8</p>");
    print("<p>Numero $num en base 2 = $num2</p>");
    print("<p>Numero $num en base 4 = $num4</p>");
    print("<p>Numero $num en base 6 = $num6</p>");
    print("<p>Numero $num en base 6 = $num6</p>");
    print("<p>Numero $num en base 9 = $num9</p>");

//  ------------------ CAMBIO DE BASE ----------------------
    function changeBase($number, $base){
        if($number == 0){
            $resto = 0;
        } else{
            $resto = "";
            while($number > 0.999){
                $resto = ($number % $base) . $resto;
                $number = $number / $base;
            }
        }
        return $resto;
    }
    ?>
</body>
</html>