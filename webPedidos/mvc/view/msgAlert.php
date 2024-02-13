<?php
function phpAlert($msg) {
  echo '<script type="text/javascript"> if (window.confirm("'. $msg .'")) { window.location.href="../mvc_login.php"; };</script>';
}
