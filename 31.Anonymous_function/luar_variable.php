<?php
//Mengakses variable Luar

$firstName = "Abie";
$lastName = "Farabie";

$sayHello = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHello();

$angka1 = 15;
$angka2 = 30;

$sum = function () use($angka1, $angka2) {
    echo "$angka1 + $angka2 = " . ($angka1 + $angka2) . PHP_EOL;
};

$substractive = function () use ($angka1, $angka2) {
    return $angka1 - $angka2;
};

$sum();

$total = $substractive();
echo $total;