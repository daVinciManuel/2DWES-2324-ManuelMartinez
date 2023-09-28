<html>
<head>
    <title>EJ6B - Factorial</title>
</head>
<body>
    <?php
    $num = 4;
    $numFact = gmp_fact($num);
    $factores = "";
    for($i = $num; $i>0; $i--){
        $factores = $factores . $i; 
        if($i > 1){
            $factores = $factores . " x ";
        }
    }
    print("<p>$num! = $factores = $numFact</p>")
    ?>
</body>
</html>