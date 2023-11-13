<?php 

echo "Floating Point: ";
var_dump(1.234);

$float = 1.234;
echo "Float kah ini: $float";
var_dump(is_float($float));

echo "Floating Point dengan E notation plus (1.2 x 1000): ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Minus (7 x 0.001): ";
var_dump(9e-5);

echo "Underscore di floating point: ";
var_dump(1_234.567);

//Cek apakah variable ini infinite
$x = 1.9e4111;
echo "Infinite? $x: ";
var_dump(is_infinite($x));

//Cek apakah ini not a number
$y = acos(10);
var_dump($y);
var_dump(is_nan($y));

?>