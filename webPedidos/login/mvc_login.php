<?php
require_once(./controller/checkCookieSession.php);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login pedidos</title>
    <style> body{ background: coral; } </style>
  </head>
  <body>
    <form method="POST" action="./controller/validateLogin.php">
      <label for="user">User:</label>
      <input type="text" name="user" required></input>
      <br>
      <label for="password">Password:</label>
      <input type="text" name="password"required></input>

      <input type="submit" name="enviar" value="Acceder"/>
    </form>

