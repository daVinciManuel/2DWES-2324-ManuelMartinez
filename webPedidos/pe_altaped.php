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
  <form action='pe_inicio.php' method='POST'>
    <select id='products' name='products'>
    <option value='null'>Seleccione una opción</option>
    <?php
    $stmt = $conn->query("SELECT productName FROM products WHERE quantityInStock > 0;");
    $stmt-> execute();
    /* falta hacer el bucle con el tag <option> que muestre todas las categorias*/
    foreach ($stmt as $v) {
      echo "<option value='$v[productName]'>$v[productName]</option>";
    }
    ?>
    </select>
  </form>
  </body>
</html>
