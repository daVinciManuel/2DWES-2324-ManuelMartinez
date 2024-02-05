<?php
/* ME FALTA HACER EL CIERRE DE SESION  */
session_start();
require('connect.php');
include('./fn.php');
  if(!isset($_COOKIE['PHPSESSID'])){
    header("Location:./pe_login.php");
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
        height: 100vh;
        font-size: 20px;
      }
    </style>
  </head>
  <body>
<?php
/* include('pe_logout.php'); */
/* logout(); */
?>

<?php
echo '<form action="./pe_logout.php" method="POST" name="logout"><input type="submit" name="logout" value="Logout"></input></form>';
?>
<!-- <a href="./pe_logout.php">Cerrar sesion</a> -->
  <h1>*alta pedido*</h1>
<!-- Desplegable con productos en stock -->
<!-- (bd.table.row) pedidos.products.quantityInStock > 0 -->
  <form action='pe_altaped.php' method='POST'>
<label for='products'>Seleccione un artículo</label>
    <select id='product' name='product'>
    <option value='null'>Seleccione una opción</option>
    <?php
    $stmt = $conn->query("SELECT productName FROM products WHERE quantityInStock > 0;");
    $stmt->execute();
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
<?php
    // leer los datos del formulario
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $producto = $_POST['product'];
      $cantidad = $_POST['number'];
      echo '<br>';
      $stmt = $conn->query('SELECT quantityInStock as "maxCant" FROM products WHERE productName="'. $producto .'";');
      $maxCant = $stmt->fetch();
      $maxCant = $maxCant[0];
      $isAvailable = false;
      if($maxCant < $cantidad){
?>
        <h2>Lo sentimos solo nos quedan: <?php echo $maxCant; ?> unidades del <?php echo $producto; ?> </h2>

<?php
      }else{
        $isAvailable = true;
?>
        <h2>Disfrute de su pedido</h2>
<?php
      }
    }

?>
  </body>
</html>
