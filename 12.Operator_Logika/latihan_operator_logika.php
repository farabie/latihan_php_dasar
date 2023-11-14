<?php 
//Operator Logika AND
$x = 10;
$y = 15;
var_dump($x > 5 && $y < 10 );

//Operator Logika OR
$a = 10;
$b = 12;
$result = ($a % 2 == 0) || ($b % 2 != 0);
var_dump($result);

//Operator Logika NOT
$nilai = 0;
var_dump($nilai != 0);

//Kombinasi Operator Logika
$p = 1;
$q = 17;
$r = 20;

$logika = ($p > 5) && ($q < 10 || $r == 20);
var_dump($logika);

//Operasi Ternary dengan Operator Logika
$umur = 23;
$typeUmur = ($umur >= 18) ? "Dewasa" : "Remaja";
var_dump($typeUmur);

?>