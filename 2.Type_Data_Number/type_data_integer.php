<?php 
$angka1 = (int) 100;
echo "integer variable: " . $angka1 . PHP_EOL;
echo "Integer: ";
var_dump(100);

//Mengecek apakah variable tersebut integer
echo "Apakah variable $angka1 ini integer: ";
var_dump(is_int($angka1));

$long = 76.76;
echo "apakah $long merupakan long:";
var_dump(is_long($long));

echo "integer variable: " . $angka1 . PHP_EOL;
echo "Decimal: ";
var_dump(1234);

echo "Octal: ";
var_dump(01234);

echo "Hexadecimal: ";
var_dump(0x1A);

echo "Binary: ";
var_dump(0b11111);

echo "Underscore di Number: ";
var_dump(1_234_567);

?>