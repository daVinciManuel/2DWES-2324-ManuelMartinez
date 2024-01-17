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
    <form action='comalcat.php' method='POST'>
      <label for="categoria">Nueva categoria:</label>
      <input type="text" id="categoria" name="categoria" required/>
      <input type="submit" name="enviar" value="Guardar" required/>
    </form>
 
    <?php
      if(isset($_POST['categoria'])){
        require_once('connect.php');
      }
    ?>
  </body>
</html>
