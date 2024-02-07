<?php
// user must be conteined in pedidos.customers.customerNumber (DB.Table.Row)
// password must be conteined in pedidos.customers.contactLastName (DB.Table.Row)
require_once(./validation.php);
require_once(../models/checkUserExists.php);
function loginOk() {
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['user'];
    $password = $_POST['password'];

    $user = clear($user);
    $password = clear($password);
    if(userInDB($user) > 0 && passwordInDB($password) > 0){
      return true;
    }else{return false;}
  }
}
?>
