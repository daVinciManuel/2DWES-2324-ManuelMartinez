<?php
session_start();
require('connect.php');
  if(!isset($_COOKIE['PHPSESSID'])){
    header("Location: pe_login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alta Pedidos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <style>
      body{
      background-color: grey;
        display:grid;
        align-items:center;
        justify-content:center;
        height: 100vh
      }
    </style>
  </head>
  <body>
  <h1>*alta pedido*</h1>
<!-- Desplegable con productos en stock -->
<!-- (bd.table.row) pedidos.products.quantityInStock > 0 -->
  <form action='pe_altaped.php' method='POST'>
<label for='products'>Seleccione un artículo</label>
    <select id='products' name='products'>
    <option value='null'>Seleccione una opción</option>
    <?php
    $stmt = $conn->query("SELECT productName FROM products WHERE quantityInStock > 0;");
    $stmt-> execute();
    foreach ($stmt as $v) {
      echo "<option value='$v[productName]'>$v[productName]</option>";
    }
    ?>
    </select>
<br>
    <label for='number'>seleccione la cantidad</label>
    <input type='number' name='number' min=0 max= <?php $stmt = $conn->query("SELECT max(quantityInStock) as 'maxCant' FROM products;"); $maxCant = $stmt->fetch(); $maxCant = $maxCant[0]; echo $maxCant . ' '; ?> />
<br>
      <input type="submit" name="enviar" value="agregar al carrito"/>
  </form>
  </body>
</html>
<?php 
// leer los datos del formulario
?>
