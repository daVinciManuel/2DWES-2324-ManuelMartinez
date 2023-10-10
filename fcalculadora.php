<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
   <h1>Calculadora</h1> 
   <!-- htmlentities() para prevenir el xss -->
   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">

    operando1: <input type="text" name="num1"><br>
    operando2: <input type="text" name="num2"><br>

    Seleccione una operacion: <br>
    <input type="radio" name="op" value="suma"> suma <br>
    <input type="radio" name="op" value="resta"> resta <br>
    <input type="radio" name="op" value="produc"> multiplicacion <br>
    <input type="radio" name="op" value="divi"> division <br>
    <input type="submit" value="Calcular">
    <input type="reset" value="Borrar datos">
   </form>
    <?php
    // ----------------------------------- CALCULADORA --------------------------------------------------
    function suma($a,$b){return $a+$b;}
    function resta($a,$b){return $a-$b;}
    function produc($a,$b){return $a*$b;}
    function divi($a,$b){return $a/$b;}
    // this 'if' stops the execution until submit.onclick
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
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
    }
    ?>
</body>
</html>