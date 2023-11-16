<?php 
//Menampilkan angka ganjil dan menjumlahkannya

$angka_ganjil =  [1, 3, 5, 7, 9, 11, 13, 15];

$total = 0;

foreach($angka_ganjil as $angka) {
    $total += $angka;
}

echo "Jumlah total angka ganjil: $total" . PHP_EOL;


?>