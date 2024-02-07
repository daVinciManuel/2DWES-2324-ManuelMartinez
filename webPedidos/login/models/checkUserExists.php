<?php
require_once(../db/conection.php);
function userInDB($user) {
  $selectUser = "SELECT count(customerNumber) AS 'user' FROM customers WHERE customerNumber = $user";
  $userExists = $conn->query($selectUser);
  $userExists = $userExists->fetch();
  $userExists = $userExists['user'];
  return $userExists;
}
    if($userExists > 0 && $passwordExists > 0){
      /* var_dump($userExists); */
      /* var_dump($passwordExists); */
      session_start();
      $_SESSION["user"] = $user;
      $_SESSION["password"] = $password;
      header("Location: pe_inicio.php");
      exit();
    }elseif($userExists > 0){
    /* login fail: try again*/
      var_dump($userExists);
      /* echo "<p>Login fail: try again later</p>"; */
      phpAlert("Login fail. Intente de nuevo");
    }else{

      phpAlert("Has olvidado la contraseña?");
    }
function passwordInDB($password) {
  $selectPassword = "SELECT  count(contactLastName) AS 'password' FROM customers WHERE contactLastName = '$password'";
  $passwordExists = $conn->query($selectPassword);
  $passwordExists = $passwordExists->fetch();
  $passwordExists = $passwordExists['password'];
  return $passwordExists;
}
?>
