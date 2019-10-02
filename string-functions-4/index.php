<?php

$string = ' This is an example string. ';
$string_trimmed = trim($string);

echo $string_trimmed;

echo '<br/>';

$string = 'This is a <img src="image.jpg">.';
$string_slashes = htmlentities(addslashes($string));

echo stripslashes($string_slashes);

?>