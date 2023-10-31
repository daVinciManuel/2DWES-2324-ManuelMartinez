<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario1.php xd</title>
    <style>
        body{
            background: #4c4a7f;
            color: #fafafa;
        }
    </style>
</head>
<body>
   <h1>Introduce datos:</h1> 
   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <label for="name">Nombre:</label>
    <input type="text" name="name">
    <br>
    <label for="apellido1">Apellido1:</label>
    <input type="text" name="apellido1">
    <br>
    <label for="apellido2">Apellido2:</label>
    <input type="text" name="apellido2">
    <br>
    <label for="fnac">Fecha de Nacimiento:</label>
    <input type="text" name="fnac">
    <br>
    <label for="localidad">Localidad:</label>
    <input type="text" name="localidad">
    <br>
    <input type="submit" value="Enviar">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo '<p>'.$_POST['name'].'</p>'; 
    $f1=fopen("fichero.txt","w+");
    fwrite($f1,trim($_POST['name']));
    while(ftell($f1) < 40){
        fwrite($f1," ");
    }
    fwrite($f1,trim($_POST['apellido1']));
    while(ftell($f1) < 81){
        fwrite($f1," ");
    }
    fwrite($f1,trim($_POST['apellido2']));
    while(ftell($f1) < 123){
        fwrite($f1," ");
    }
    fwrite($f1,trim($_POST['fnac']));
    while(ftell($f1) < 133){
        fwrite($f1," ");
    }
    fwrite($f1,trim($_POST['localidad']));
    while(ftell($f1) < 160){
        fwrite($f1," ");
    }

    echo 'numero de caracteres: '.ftell($f1);
} 
?>
</body>
</html>