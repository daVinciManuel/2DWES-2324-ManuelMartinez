<html>
<head><title>EJ1b - dec to bin converter</title></head>
<body>
    <?php
    $num = 9;

    function binaryOf($number){
        if($number == 0){
            $resto = 0;
        } else{
            $resto = "";
            while($number > 0.999){
                $resto = ($number % 2) . $resto;
                $number = $number / 2;
            }
        }
        return $resto;
        
    }
    $bin = binaryOf($num);
    print("el numero $num es el binario $bin");
    ?>
</body>
</html>