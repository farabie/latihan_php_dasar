<?php 

//Anonymous Function

$sayHello = function ($name) {
    echo "My Name is $name" . PHP_EOL;
};

$sum = function($angka1, $angka2) {
    return $angka1 + $angka2;
};

$hasilPenjumlahan = $sum(10, 20);
echo "Hasil Perjumalahan $hasilPenjumlahan" . PHP_EOL;

$sayHello("Abie");
$sayHello("Farabie");
?>