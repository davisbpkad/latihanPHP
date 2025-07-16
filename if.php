<?php

$number = 1; // number
$age = 20; // number

if ($number < 3) {
  echo "Sedikit";
} else if ($number < 5) {
  echo "Sedang";
} else {
  echo "Banyak";
}
// echo "Banyak"; // this line will not be executed

switch ($age) {
  case 18:
    echo "Dewasa Muda";
    break;
  case 20:
    echo "Dewasa";
    break;
  case 30:
    echo "Dewasa Tua";
    break;
  case 40:
    echo "Lansia";
    break;
  case 50:
    echo "Lansia Tua";
    break;
  case 60:
    echo "Lansia Tua Sekali";
    break;

  default:
    # code...
    echo "Lainnya";
    break;
}
