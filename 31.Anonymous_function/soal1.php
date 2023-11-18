<?php 
//Buatlah sebuah function yang menerima dua paramter dan mengembalikan hasil penjumlahan

$sum = function ($angka1, $angka2) {
    return $angka1 + $angka2;
};

$hasilPenjumlahan = $sum(2, 10);
echo "Hasil Penjumalahan = " .  $hasilPenjumlahan . PHP_EOL;


?>