<html>
<head>
    <title>3. Arrays</title>
</head>
<body>
   <table border="1">
   <tr>
    <th>Indice</th>
    <th>Binario</th>
    <th>Octal</th>
   </tr> 
   <tr>
    <?php
    for($i = 0; $i < 20; $i++){
        $bin[$i] = decbin($i);
        $oct[$i] = decoct($i);
        print("<tr><td>$i</td><td>$bin[$i]</td><td>$oct[$i]</td></tr>");
    }
    ?>
   </tr>
   </table> 
</body>
</html>