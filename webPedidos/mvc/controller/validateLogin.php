<?php
// user must be conteined in pedidos.customers.customerNumber (DB.Table.Row)
// password must be conteined in pedidos.customers.contactLastName (DB.Table.Row)
require_once "validation.php";
require_once "../models/checkUserExists.php";
require_once "../view/msgAlert.php";
/* require_once "./checkCookieSession.php"; */
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user = $_POST["user"];
    $password = $_POST["password"];

    $user = clearInt($user);
    $password = clear($password);
    if(userInDB($user,$password) > 0){
      session_start();
      $_SESSION["user"] = $user;
      $_SESSION["password"] = $password;
      /* header("Location: http://www.google.es"); */
      header("Location: ../../pe_inicio.php");

    }else{
      $newpass = $password;
      phpAlert("Pruebe con otro usuario o contraseña $newpass");

    }
    /* var_dump($passwod); */
  
  }
?>
