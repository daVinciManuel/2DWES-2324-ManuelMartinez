<?php
require_once "../db/conection.php";
function userInDB($user,$password) {
  $conn = connect();
  /* $selectUser = "SELECT count(customerNumber) AS 'user' FROM customers WHERE customerNumber = $user AND  "; */
  $selectUser = "SELECT count(*)AS 'user' FROM customers WHERE customerNumber=$user AND contactLastName='$password';";
  $userExists = $conn->query($selectUser);
  $userExists = $userExists->fetch();
  $userExists = $userExists['user'];
  return $userExists;
}
/*
function getName($user) {
  $conn = connect();
  $selectQuery = "SELECT customerName AS 'name' FROM customers WHERE contactLastName = $user";
  $userName = $conn->query($selectQuery);
  $userName = $userName->fetch();
  $userName = userName['password'];
  return $userName;
}
 */
?>
