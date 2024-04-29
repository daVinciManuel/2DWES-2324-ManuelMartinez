<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cifrado Cesar</title>
</head>
<body>
<?php
$texto = 'Hola Mundo';
$abc =     'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ ';
$cifrado = 'GHIJKLMNÑOPQRSTUVWXYZABCDEF ';
$abc = strtoupper($abc);
$cifrado = strtoupper($cifrado);
$arrayChar = str_split(strtoupper($texto));
$encryptedText = '';

foreach($arrayChar as $v){
$position = strrpos($abc,$v);
$letter = substr($cifrado,$position,1);

// print("<p>$v - $position - $letter</p>");

$encryptedText = $encryptedText . $letter;

// echo '</hr>';
// print_r($texto);
// echo '</hr>';
}
print("<h3> texto original  : $texto </h3>");
print("<h3> texto codificado: $encryptedText </h3>");
?>    

</body>
</html>