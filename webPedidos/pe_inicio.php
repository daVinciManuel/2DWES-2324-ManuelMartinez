<!DOCTYPE html>
<?php session_start(); require('connect.php'); ?>

<html lang="en">
  <head>
    <title>Inicio Pedidos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <style>body{background-color: grey; display:grid; align-items:center; justify-content:center; height: 100vh}</style>
  </head>
  <body>
  <h1>*menu*</h1>
    <?php
      var_dump($_SESSION);
    ?>
  </body>
</html>
