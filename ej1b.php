<html>
    <head><title>EJ1b - dec to bin converter</title></head>
    <body>
        <?php
        for($i = 12; $i>-1; $i--){
            
            $bin = binaryOf($i);
            print("<p>El numero $i es el binario $bin</p>");
        }
        // $num = 9;
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

    ?>
</body>
</html>