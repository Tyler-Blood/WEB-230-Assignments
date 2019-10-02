<?php

// function add($number1, $number2) {
//   $result = $number1 + $number2;
//   return $result;
// }
function add($number1) {
  return $number1 + $number1;
}

// function divide($number1, $number2){
//   $result = $number1 / $number2;
//   return $result;
// }
function divide($number1, $number2){
  return $number1 / $number2;
}

// $sum = divide(add(10, 10), add(5, 5));
$sum = divide(add(10), add(5));
echo $sum;

?>