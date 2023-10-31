<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alumnos1.txt table</title>
</head>
<body>
    <h1>Tablita de alumnos1.txt</h1>
<?php
$f = fopen('alumnos1.txt','r');
if($f){
    $i = 1;
    foreach(file('alumnos1.txt') as $line){
        echo '<p>'.$i.'. '. $line. '</p>';
        $i++;
    // gracias ayman askdjfas        
        echo substr($line, 0,60);
    }
    
}
?>
</body>
</html>