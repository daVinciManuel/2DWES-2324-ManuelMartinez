<?php
  if(isset($_COOKIE['PHPSESSID'])){
    session_unset();
    session_destroy();
  setCookie('PHPSESSID','',-3600);
  }
?>
