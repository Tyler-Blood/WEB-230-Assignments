<?php

$inumber1 = 22;
$inumber2 = 8;

function add($number1, $number2) {
  echo $number1 + $number2;
}

add($inumber1, $inumber2);

echo '<br/>';

function displayDate($day, $date, $year) {
  echo $day . ' ' . $date . ' ' . $year;
}

displayDate('Monday', 31, 2019);

?>