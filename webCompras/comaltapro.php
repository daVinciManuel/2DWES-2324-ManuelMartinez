<html lang="en">
<head>
  <title>WebComprasManuelMartinez</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>body{ background-color:#dd3434;}</style>
</head>
<body>
  <?php require_once('connect.php'); ?>
  <h1>Bienvenido a la web de compras</h1>
  <form action='comaltapro.php' method='POST'>
  <label for="producto">Nuevo producto:</label>
  <input type="text" id="producto" name="producto" required/>
  <br>
  <select name='categorias'>
  <?php
  $stmt = $conn->query("SELECT NOMBRE FROM CATEGORIA;");
  $stmt-> execute();
  /* falta hacer el bucle con el tag <option> que muestre todas las categorias*/
  foreach ($stmt as $v) {
  /* $v = $stmt['CATEGORIA']; */
    var_dump($v);
    foreach ($v as $w) {
      echo '<option value="'.$v.'">'.$v.'</option>';
    }
  } 
  ?>
  </select>
  <input type="submit" name="enviar" value="Guardar" required/>
  </form>
</body>
</html>

<?php
/* conexionBBDD(); */
  require_once('connect.php');


?>
