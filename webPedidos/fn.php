<?php
function selectProductos(){

    $stmt = $conn->query("SELECT productName FROM products WHERE quantityInStock > 0;");
    $stmt->execute();
    foreach ($stmt as $v) {
      echo "<option value='$v[productName]'>$v[productName]</option>";
    }
    $arr=$stmt[0][productName];
    return $arr;
}
function getFecha(){

      $fecha = getDate();
      $y = $fecha["year"];
      $m = $fecha["mon"];
      $d = $fecha["mday"];
      $formatFecha = $y . '-' . $m . '-' . $d;
      return $formatFecha;
}
function addProduct($productName, $quantity){
  $pedido; // array con la forma pedido[0][productName], pedido[0][productQuantity] pedido[1][productName], pedido[1][productQuantity]
  $cookie_name = "carrito";
  $cookie_value = $pedido;
  if(!isset($_COOKIE[$cookie_name])){
    $pedido[0]["name"] = $productName;
    $pedido[0]["quantity"] = $quantity;
    setCookie($cookie_name,$cookie_value,time() + 86400 * 5, "/");
  }else{
    // debo accede al array pedido dentro de la cookie carrito
    // para agregarle un elemento mas
    $nextIndex = count($pedido);
    $pedido[$nextIndex]["name"] = $productName;
    $pedido[$nextIndex]["quantity"] = $quantity;
  }
}



?>
