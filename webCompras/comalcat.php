<?php
/* conexionBBDD(); */
  require_once('connect.php');
/*----------------------------*/ $categoria = $_POST['categoria']; $consulta = $conn->prepare('INSERT INTO CATEGORIA(ID_CATEGORIA,NOMBRE)VALUES(:ID_CATEGORIA,:NOMBRE)')
$consulta->bindParam(':ID_CATEGORIA','c001');
$consulta->bindParam(':NOMBRE',$categoria);

if($consulta->execute()){
  echo '<html><head><style>body{ background-color:#dd3434;}</style></head><body><h1>Guardando datos...</h1></body></html>';
}


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
