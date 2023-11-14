<?php 

//Penugasaan Nilai
$angka = 0;
echo "Angka : " . ($angka += 15) . PHP_EOL;

//Operasi Penugasan
$total = 100;
$total += 20;
$total -= 5;

echo "Total: " . $total . PHP_EOL;

//Operasi Gabungan
$x = 10;
$y = 20;
echo "Operasi Gabungan: " . (($y + 3) * $x) . PHP_EOL;

//Penugasan String
$namaBuah = "Jeruk ";
$namaBuah2 = "Apel";
echo "Penugasan String = " . $namaBuah .= $namaBuah2 . PHP_EOL;
?>