<?php 

/* 
    Jadi dengan arrow function kita bisa langsung mengakses
    variable yang ada diluar tanpa harus menggunakan use
*/

$firstName = "Muhammad";
$lastName = "Farabie";

/* Untuk Memanggil arrow function harus menggunakan function fn() */
$name = fn() => "Hello $firstName $lastName";
echo $name() . PHP_EOL;

$angka1 = 15;
$angka2 = 30;

$sum = fn() => $angka1 * $angka2; 

echo $sum() . PHP_EOL;

?>