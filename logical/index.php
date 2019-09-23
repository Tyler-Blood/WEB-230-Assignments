<?php

$number1 = 10;

if ($number1 >= 10) {
  echo 'True.';
}

echo '<br/>';

$number1 = 654;
$upper = 1000;
$lower = 500;

if ($number1 >= $lower && $number1 <= $upper) {
  echo 'Ok.';
}

echo '<br/>';

$number1 = 999.999;
$upper = 1000;
$lower = 500;

if ($number1 >= $lower && $number1 <= $upper) {
  echo 'Ok.';
}

echo '<br/>';

$number1 = 10500;
$upper = 1000;
$lower = 500;

if ($number1 >= $lower && $number1 <= $upper) {
  echo 'Ok.';
}

echo '<br/>';

$number1 = 10500;
$upper = 1000;
$lower = 500;

if ($number1 >= $lower && $number1 <= $upper) {
  echo 'Ok!';
} else {
  echo 'Number must be between ' . $lower . ' and ' . $upper . ', inclusive';
}

echo '<br/>';

$number = 500;
$canbe1 = 2;
$canbe2 = 4;

if ($number == $canbe1 || $number == $canbe2){
  echo 'Ok.';
} else {
  echo 'Not ok.';
}

echo '<br/>';

$number = 10;
$canbe1 = 2;
$canbe3 = 4;

if (!($number == $canbe1) && !($number == $canbe2)){
  echo 'Ok.';
} else {
  echo 'Not ok.';
}

?>