<?php

$angka1 = 70;
$angka2 = 90;
$operator = "%";


$calculator = $operator == "+" ? "Hasil Perjumlahan dari $angka1 + $angka2 = " . $angka1 + $angka2 : 
($operator == "-" ? "Hasil Pengurangan dari $angka1 - $angka2 =" . $angka1 - $angka2 :
($operator == "x" ? "Hasil Perkalian dari $angka1 x $angka2 =" . $angka1 * $angka2 : 
($operator == "/" ? "Hasil Pembagian dari $angka1 / $angka2 =" . $angka1 / $angka2 
: "Bukan Operator")));

echo $calculator;
