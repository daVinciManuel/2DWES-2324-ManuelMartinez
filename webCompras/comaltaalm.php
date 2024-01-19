<?php require_once('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WebComprasManuelMartinez</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>body{ background-color:#dd3434;}</style>
</head>
<body>
  <h1>Bienvenido a la web de compras</h1>
  <form action='comaltaalm.php' method='POST'>
  <h3>Bienvenido a la web de compras</h2>
  <label for="almacen">Nuevo almacen:</label>
  <input type="text" id="almacen" name="almacen" required/>
  <input type="submit" name="enviar" value="Guardar" required/>
  </form>
<body>
</html>
<?php
if(isset($_POST['almacen'])){

$localidad = $_POST['almacen'];
$insert = $conn->prepare('INSERT INTO ALMACEN(LOCALIDAD)VALUES(:VALUES)');
$insert-> bindParam(':VALUES',$localidad);
$insert-> execute();
}

?>
