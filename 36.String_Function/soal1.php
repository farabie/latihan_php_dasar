<?php

$name = "Abie";

// Menghitung panjang karakter tanpa menggunakan strlen()
function hitungPanjangString($string)
{
    $panjang = 0;
    while (isset($string[$panjang])) {
        $panjang++;
    }
    return $panjang;
}

// Menampilkan hasil
echo "Panjang karakter menggunakan strlen(): " . strlen($name) . "\n";
echo "Panjang karakter tanpa menggunakan strlen(): " . hitungPanjangString($name);
