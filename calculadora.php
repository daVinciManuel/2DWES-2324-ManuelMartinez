<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
   <h1>Calculadora</h1> 
    <?php
    function suma($a,$b){return $a+$b;}
    function resta($a,$b){return $a-$b;}
    function produc($a,$b){return $a*$b;}
    function divi($a,$b){return $a/$b;}
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    switch ($_POST["op"]){
        case "suma":
            print("El resultado de $num1 + $num2 = ".suma($num1,$num2));
            break;
        case "resta":
            print("El resultado de $num1 - $num2 = ".resta($num1,$num2));
            break;
        case "produc":
            print("El resultado de $num1 * $num2 = ".produc($num1,$num2));
            break;
        case "divi":
            print("El resultado de $num1 / $num2 = ".divi($num1,$num2));
            break;
        default:
            echo "Ha habido una equivocación.";
    }
    ?>
</body>
</html>