<?php

$string1 = 'This is my essay. I\'m going to be talking about php.';
// $string2 = 'This is my essay. I will be talking about the subject php.';
$string2 = 'My essay is about php. I\'m going to be talking about everything we do with php.';

similar_text($string1, $string2, $result);
echo 'The similarity between is, ' . $result;

echo '<br/>';

$string = 'This is an example string.';
$string_length = strlen($string);

echo $string_length;

?>