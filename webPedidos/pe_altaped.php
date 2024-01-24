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
  </body>
</html>
