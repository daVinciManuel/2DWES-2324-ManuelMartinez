<!DOCTYPE html>
<html lang="en"> <head> <title>WebComprasManuelMartinez</title> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1"><style>body{ background-color:#dd3434;}</style> </head> <body> <h1>Bienvenido a la web de compras</h1> <form action='comalcat.php' method='POST'> <label for="categoria">Nueva categoria:</label> <input type="text" id="categoria" name="categoria" required/> <input type="submit" name="enviar" value="Guardar" required/> </form> <?php if(isset($_POST['categoria'])){ require_once('connect.php'); } ?> <h3>Guardando datos...</h3> </body> </html>

<?php
/* conexionBBDD(); */
  require_once('connect.php');
/*----------------------------*/ 
  /* incremento del id */
  $stmt = $conn->query("SELECT ID_CATEGORIA FROM CATEGORIA ORDER BY ID_CATEGORIA DESC LIMIT 1");
  $user = $stmt->fetch();
  $user = $user[0];
  if(strlen($user)<1){
    $id = 'c001';
  }else{
    $id_number = strval(substr($user,-3)+1);
    while(strlen($id_number)<3){$id_number = '0'.$id_number;}
    $id = 'c'.$id_number;
  }
  /*----------------------------*/ 
  /* insercion de campos a la tabla */
  $categoria = $_POST['categoria']; 
  $consulta = $conn->prepare('INSERT INTO CATEGORIA(ID_CATEGORIA,NOMBRE)VALUES(:ID,:NOMBRE)');
  $consulta->bindParam(':ID',$id);
  $consulta->bindParam(':NOMBRE',$categoria);
  $consulta->execute();
/* if($consulta->execute()){ */
  /* echo  */
/* } */


/* EJEMPLO CONEXION PDO */
function conexionBBDD(){
	$servername = "localhost";
	$username = "root";
	$password = "root1234";
	$dbname = "COMPRASWEB";
	$conn = new PDO("mysql:host=$servername;dbname=".$dbname,$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "Conectado";
	return $conn;
}

/* EJEMPLO SELECT */
function select($sentencia){
	global $conn;
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql = $sentencia;
	$stmt = $conn -> prepare($sql);
	$stmt -> execute();
	$stmt -> setFetchMode(PDO::FETCH_ASSOC);
	return $stmt -> fetchAll();
}
?>
