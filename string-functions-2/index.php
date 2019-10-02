<?php

$string = 'This is an example string & this is a tutorial .';
$string_word_count = str_word_count($string, 1, '&.!*');

print_r($string_word_count);

echo '<br/>';

$string = 'abcdefghijklmnop0123456789';
$string_shuffled = str_shuffle($string);

$half = substr($string_shuffled, 0, strlen($string)/2);

echo $half;

echo '<br/>';

$string = 'abcdefghijklmnop0123456789';
$string_reversed = strrev($string);

echo $string_reversed;


?>
