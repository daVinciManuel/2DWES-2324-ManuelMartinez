<?php
/* session_start(); */
function logout(){
  if(isset($_COOKIE['PHPSESSID'])){
            print('<input type="submit" name="sesionDestroy" value="Cerrar sesion"/>');
            if (isset($_REQUEST["sesionDestroy"])) {
                /* session_unset(); */
              // FALTA QUE REDIRECCIONE A pe_login.php
                session_destroy();
                header('Location: ./pe_login.php');
            }
    }
  }
?>
