<?php
//Penyaringan Array Dinamis
function filterArray($array, $filterFunction)
{
    return array_filter($array, $filterFunction);
}

// Fungsi Filter untuk Angka Ganjil
$filterGanjil = function ($nilai) {
    return $nilai % 2 != 0;
};

// Fungsi Filter untuk Angka Genap
$filterGenap = function($nilai) {
    return $nilai %2 == 0;
};

// Contoh penggunaan
$angkaArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$angkaGanjil = filterArray($angkaArray, $filterGanjil);
$angkaGenap = filterArray($angkaArray, $filterGenap);

echo "Angka Ganjil dalam Array: " . implode(', ', $angkaGanjil) . PHP_EOL;
echo "Angka Genap dalam Array: " . implode(', ', $angkaGenap) . PHP_EOL;

?>