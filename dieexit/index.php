<?php

// echo 'Hello ';
// die('ERROR. PAGE HAS ENDED.'); // or exit();
// echo ' World';

@mysqli_connect('localhost', 'root', '') or die('Could not connect to database.');

echo 'Connected!';

?>