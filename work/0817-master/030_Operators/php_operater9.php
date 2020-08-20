<?php

$x = 100;
$y = &$x;

$y = 200;
echo "x = $x </br>";

echo "<hr>";

unset($x);
echo "y = $y </br>";
echo "x = $x </br>";

?>