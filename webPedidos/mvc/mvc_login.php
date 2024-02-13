<?php
/* require_once(); */
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login pedidos</title>
    <style> body{ background: darkslateblue; color: #fafafa;} </style>
  </head>
  <body>
    <form method="POST" action="./controller/validateLogin.php">
      <label for="user">User:</label>
      <input type="text" name="user" required></input> <br>
      <label for="password">Password:</label>
      <input type="text" name="password"required></input>

      <input type="submit" name="enviar" value="Acceder"/>
    </form>

</body>
</html>
