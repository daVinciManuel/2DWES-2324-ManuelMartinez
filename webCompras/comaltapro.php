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
  <form action='comaltapro.php' method='POST'>
  <label for="producto">Nuevo producto:</label>
  <input type="text" id="producto" name="producto" required/>
  <label for="PRECIO">Precio</label>
  <input type="text" id="PRECIO" name="PRECIO" required/>
  <br>
  <select name='categorias'>
  <?php
  $stmt = $conn->query("SELECT NOMBRE FROM CATEGORIA;");
  $stmt-> execute();
  /* falta hacer el bucle con el tag <option> que muestre todas las categorias*/
  foreach ($stmt as $v) {
    echo "<option value='$v[NOMBRE]'>$v[NOMBRE]</option>";
  }
  ?>
  </select>
  <input type="submit" name="enviar" value="Guardar" required/>
  </form>
</body>
</html>
  <?php
/*----------------------------*/ 
  /* incremento del id */
  $stmt = $conn->query("SELECT ID_PRODUCTO FROM PRODUCTO ORDER BY ID_PRODUCTO DESC LIMIT 1");
  $lastID = $stmt->fetch();
  $lastID = $lastID[0];
  if(strlen($lastID)<1){
    $id = 'c0001';
  }else{
    $id_number = strval(substr($lastID,-4)+1);
    while(strlen($id_number)<4){$id_number = '0'.$id_number;}
    $id = 'c'.$id_number;
  }
  /*----------------------------*/ 
  /* insercion de campos a la tabla */
  $categoria = $_POST['categoria']; 
  $producto = $_POST['producto'];
  $precio = $_POST['PRECIO'];
  $consulta = $conn->prepare('INSERT INTO PRODUCTO(ID_PRODUCTO,NOMBRE,PRECIO,ID_CATEGORIA)VALUES(:ID,:NOMBRE,:PRECIO,:ID_CATEGORIA)');
  $consulta->bindParam(':ID',$id);
  $consulta->bindParam(':NOMBRE',$producto);
  $consulta->bindParam(':PRECIO',$precio);
  $consulta->bindParam(':ID_CATEGORIA',$categoria);
  $consulta->execute();
  ?>
