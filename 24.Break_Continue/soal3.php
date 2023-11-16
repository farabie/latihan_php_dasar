<?php
//Menampilkan angka 1 sampai 10 dgn gunakan continue dan ditampilkan genap

$counter = 1;

for ($counter; $counter <= 10; $counter++) {
    if ($counter %2 != 0) {
        continue;
    }
    echo "Angka Genap Ke-$counter" . PHP_EOL;
}
