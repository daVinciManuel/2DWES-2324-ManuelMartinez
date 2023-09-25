<html>
<head>
    <title></title>
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
        for($i = 0; $i < 20; $i++){
            $indice[$i] = $i+1;
            
            print("<tr><td>$indice[$i]</td><td>$impar[$i]</td><td></td> </tr>");
        }

        ?>
    </table>
</body>
</html>