<?php
//Menampilkan deret angka genap dari 1 hingga 9

$counter = 1;

do {
    if ($counter % 2 != 0) {
        echo "Angka Ganjil ke $counter" . PHP_EOL;
    }
    $counter++;
} while ($counter <= 10);
