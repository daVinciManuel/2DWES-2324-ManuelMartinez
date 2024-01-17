<?php

	$servername = "localhost";
	$username = "root";
	$password = "root1234";
	$dbname = "COMPRASWEB";
  try{ $conn = new PDO("mysql:host=".$servername.";"."dbname=".$dbname,$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  /* echo 'yoshi'; */
  } catch(PDOException $e){
    /* echo "connection failed: ". $e->getMessage(); */
    echo $e->getMessage;
  }

?>
