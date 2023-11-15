<?php

$angka1 = 70;
$angka2 = 90;

$operation = "pertambahan";

switch ($operation) {
    case "+":
    case "pertambahan":
        echo "Hasil Perjumlahan = $angka1 + $angka2 = " . ($angka1 + $angka2) . PHP_EOL;
        break;
    case "-":
    case "pengurangan":
        echo "Hasil Pengurangan = $angka1 - $angka2 = " . ($angka1 - $angka2) . PHP_EOL;
        break;
    case "x":
    case "perkalian":
        echo "Hasil Perkalian = $angka1 x $angka2 = " . ($angka1 * $angka2) . PHP_EOL;
        break;
    case "/":
    case "pembagian":
        echo "Hasil Pembagian = $angka1 / $angka2 = " . ($angka1 / $angka2) . PHP_EOL;
        break;
    default:
        echo "Anda salah operasi matemmatika";
        break;
}
