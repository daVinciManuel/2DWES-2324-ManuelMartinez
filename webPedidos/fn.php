<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alta Pedidos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <style>
      body{
        background-color: grey;
        display:grid;
        align-items:center;
        justify-content:center;
        height: 100vh;
        font-size: 20px;
      }
    </style>
  </head>
  <body>
<?php
require('./connect.php');


echo "hello world";
echo '<br>';
function getProductNames(){
  $conn = connect();
/* require('./connect.php'); */
  $stmt = $conn->query("SELECT productName FROM products;");
  $maxCant = $stmt->fetchAll(PDO::FETCH_UNIQUE);
  $nombres = array();
  foreach ($maxCant as $key => $v) {
    array_push($nombres,$key);
  }
  return $nombres;
}
function getProductName($n){
  $conn = connect();
  $limit = "LIMIT $n";
  $stmt = $conn->query("SELECT productName FROM products $limit;");
  $maxCant = $stmt->fetchAll(PDO::FETCH_UNIQUE);
  $nombres = array();
  foreach ($maxCant as $key => $v) {
    array_push($nombres,$key);
  }
  if($n == 1 ){
    $nombre = $nombres[0];
    return $nombre;
  }else{
    return $nombres;
  }
}
function getFecha(){
  $conn = connect();

      $fecha = getDate();
      $y = $fecha["year"];
      $m = $fecha["mon"];
      $d = $fecha["mday"];
      $formatFecha = $y . '-' . $m . '-' . $d;
      return $formatFecha;
}
function quantityOf($productName){
  $conn = connect();
    $stmt = $conn->query('SELECT quantityInStock as "maxCant" FROM products WHERE productName="'. $productName .'";');
    $maxCant = $stmt->fetch();
    $maxCant = $maxCant[0];
    if(!($maxCant>0)){
      return -1;
    }else{
      return $maxCant;
    }
    
}

function isAvailable($productName,$quantity) {
    $maxCant = quantityOf($productName);
    if($maxCant < $quantity){
      return false;
      /* return "Lo sentimos solo nos quedan: <?php echo $maxCant; ?> unidades del <?php echo $productName; ?> "; */
    }else{
      /* return "Disfrute de su pedido"; */
      return true;
    }
}
// --------------- FUNCION AGREGAR AL CARRITO ---------------
function addProduct($productName, $quantity){
  $conn = connect();
  $pedido; // array con la forma pedido[0][productName], pedido[0][productQuantity] pedido[1][productName], pedido[1][productQuantity]
  $cookie_name = "carrito";
  $cookie_value = $pedido;
  if(!isset($_COOKIE[$cookie_name])){
    $pedido[0]["name"] = $productName;
    $pedido[0]["quantity"] = $quantity;
    setCookie($cookie_name,$cookie_value,time() + 86400 * 5, "/");
  }else{
    // debo acceder al array pedido dentro de la cookie carrito
    // para agregarle un elemento mas
    $nextIndex = count($pedido);
    $pedido[$nextIndex]["name"] = $productName;
    $pedido[$nextIndex]["quantity"] = $quantity;
  }
}

?>
</body>
</html>
