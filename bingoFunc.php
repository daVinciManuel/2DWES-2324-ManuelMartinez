<?php
/* $carton2 = array(); */
$carton1 = array();

function rellenarCarton(&$arr){
  $numeros = array();
  for($i=1; $i < 60+1; $i++){
    $numeros[$i] = $i;
  }
  for($i=0;$i<15; $i++){
    $r = random_int(1,60);
    $arr[$i] = 0;
    unset($numeros[$r]);
  }
}
/* ajustar paso de numeros a array*/
$debug = true;
if ($debug) {
  echo '<html><head></head><body>';
  rellenarCarton($carton1);
  print_r($carton1);
  foreach ($carton1 as $key => $value) {
    echo '<p>','[', $key, ']: ', $carton1[$key], '...','</p>';
  }
}
  /* echo 'say something'; */
?>
