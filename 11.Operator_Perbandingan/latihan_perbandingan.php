<?php 

//Perbandingan Angka
$x = 12;
$y = 10;
var_dump($x > $y);

//Perbandingan string
$string1 = "farabie";
$string2 = "farabie";
var_dump($string1 == $string2);

//Perbandingan Campuran
$a = 34;
$b = 45;
var_dump($a <= $b);

//Operasi Ternary dengan Operator Perbandingan
$nilai = 70;
$lulus = $nilai > 60 ? "Lulus" : "Tidak Lulus";
var_dump($lulus);

//Perbandingan identitas
$m = 10;
$n = "10";
var_dump($m === $n);

?>