<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login pedidos</title>
    <style> body{ background: coral; } </style>
  </head>
  <body>
    <form method="POST" action="pe_login.php">
      <label for="user">User:</label>
      <input type="text" name="user" required></input>
      <br>
      <label for="password">Password:</label>
      <input type="text" name="password"required></input>

      <input type="submit" name="enviar" value="Acceder"/>
    </form>

<?php
// user must be conteined in pedidos.customers.customerNumber (DB.Table.Row)
// password must be conteined in pedidos.customers.contactLastName (DB.Table.Row)
if($_SERVER['REQUEST_METHOD']=='POST'){
  $user = $_POST['user'];
  $password = $_POST['password'];
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
  $user = validate($user);
  $password = validate($password);
  $selectUser = "SELECT count(customerNumber) AS 'user' FROM customers WHERE customerNumber = $user";
  $selectPass = "SELECT  count(contactLastName) AS 'password' FROM customers WHERE contactLastName = '$password'";

  $userExists = $conn->query($selectUser);
  $passwordExists = $conn->query($selectPass);
  $userExists = $userExists->fetch();
  $passwordExists = $passwordExists->fetch();
  $userExists = $userExists['user'];
  $passwordExists = $passwordExists['password'];

    if($userExists > 0 && $passwordExists > 0){
      var_dump($userExists);
      var_dump($passwordExists);
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
  }
      ?>
<?php
function phpAlert($msg) {
  echo '<script type="text/javascript"> if (window.confirm("'. $msg .'")) { window.location.href="pe_login.php"; };</script>';

}
/* falta configurar mensajes de error  */
/* NO SE HACE LA SESION */
?>
  </body>
</html>
