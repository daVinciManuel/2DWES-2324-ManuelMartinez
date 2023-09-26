<html>
<head>
    <title>2. Arrays</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Indice</th>
            <th>Valor</th>
            <th>Suma</th>
        </tr>
        <?php
        $aux = 1;
        $i = 0;
        while($i < 20){
            $impar[$i] = $aux;
            $i++;
            $aux += 2;
        }
        $sumatorio = 0;
        for($i = 0; $i < 20; $i++){
            $sumatorio = $impar[$i] + $sumatorio;
            $suma[$i] = $sumatorio;
        }
        for($i = 0; $i < 20; $i++){
            $indice[$i] = $i;
            
            print("<tr><td>$indice[$i]</td><td>$impar[$i]</td><td>$suma[$i]</td> </tr>");
        }
        ?>
        <tr>
            <th colspan="3">
            media filas pares
            </th>
        </tr>
        <tr>
            <?php
            $sumaPares = 0;
            $sumaImpar = 0;
            for($i = 0; $i < 20; $i++){
               if($i % 2 == 0){
                $sumaPares += $impar[$i] + $suma[$i];
               }else{
                $sumaImpar += $impar[$i] + $suma[$i]; 
               } 
            }
            print("<th colspan=\"3\">$sumaPares</th>");
            ?>
        </tr>
        <tr>
        <th colspan="3">media filas impares</th>
        </tr>
        <tr>
            <th colspan="3">
                <?php
                    print("$sumaImpar")
                ?>
            </th>
        </tr>
    </table>
</body>
</html>