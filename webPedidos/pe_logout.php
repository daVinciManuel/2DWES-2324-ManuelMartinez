<?php
/* session_start(); */

  session_unset();
  session_destroy();
  header('Location: ./pe_login.php');
  setCookie('PHPSESSID','',-3600);








function logout(){
  if(isset($_COOKIE['PHPSESSID'])){
            print('<input type="submit" name="sesionDestroy" value="Cerrar sesion"/>');
            if (isset($_REQUEST["sesionDestroy"])) {
                session_unset();
                session_destroy();
                header('Location: ./pe_login.php');
            }
    }
  }
?>
