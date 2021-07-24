<?php

function pot($x,$y) {
  if ($y == 0) {
    return 1;
  }
  
  if ($y < 0) {
    $x = 1 / $x;
    $y = $y * -1;
  }

  $mult = $x;
  for ($i = 1; $i < $y; $i++) {
    $mult = $mult * $x;
  }
  return $mult;
} 

$num = $_POST['num'];
$pot = $_POST['pot'];

$resultado = pot($num, $pot);

echo $resultado;

?>
