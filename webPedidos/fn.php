<?php
$debugHTML = true;
if($debugHTML){
  echo '<!DOCTYPE html> <html lang="en"> <head> <title>Alta Pedidos</title> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1"> <link href="css/style.css" rel="stylesheet"> <style> body{ background-color: grey; display:grid; align-items:center; justify-content:center; height: 100vh; font-size: 20px; } </style> </head> <body>';
}
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
  $debug = true;
  $conn = connect();
  /* $pedido = array(); // array con la forma pedido[productName]=$quantity */
  $cookie_name = "carrito";
  if(!isset($_COOKIE[$cookie_name])){
    $pedido[$productName] = $quantity;
    $cookie_value = serialize($pedido);
    setcookie($cookie_name,$cookie_value,time() + 86400 * 5, "/");
        if(debug){ print_r($pedido); echo 'entro en el if'; }
  }else{
    // debo acceder al array pedido dentro de la cookie carrito
    // para agregarle un elemento mas

    $storedProducts = unserialize($_COOKIE['carrito']);
    $newProducts = array($productName => $quantity - 100);
    $updatedProducts = array_merge($storedProducts,$newProducts);
        if(debug){ print_r($updatedProducts); echo 'entro en el else'; }
    $cookie_value = serialize($updatedProducts);
    setcookie($cookie_name,$cookie_value,time() + 86400 * 5, "/");
  }
}
$debug = true;
if($debug){
  $producto = getProductName(20)[2];
  $cantidad = quantityOf($producto);
  addProduct($producto,$cantidad);
  echo 'hey there';
}
if ($debugHTML) { echo ' </body> </html> '; }
?>
