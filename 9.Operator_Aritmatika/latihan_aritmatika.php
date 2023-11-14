<?php
$a = 10;
$b = 5;

//Pertambahan dan Pengurangan
echo "$a + $b = " . ($a + $b) . PHP_EOL;
echo "$a - $b = " . ($a - $b) . PHP_EOL;

$x = 8;
$y = 2;
//Perkalian dan Pembagian
echo "$x * $y = " . ($x * $y) . PHP_EOL;
echo "$x / $y = " . ($x / $y) . PHP_EOL;

$m = 4;
$n = 3;
//Pangkat dan Modulos
echo "$m * $n = " . ($m ** $n) . PHP_EOL;
echo "$m / $n = " . ($m % $n) . PHP_EOL;

//Gabungan Operator
$p = 7;
$q = 2;
$r = 5;

echo "($p + $q) * $r = " . (($p + $q) * $r) . PHP_EOL;
echo "$p + ($q * $r) = " . ($p + ($q * $r)) . PHP_EOL;