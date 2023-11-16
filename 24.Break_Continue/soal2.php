<?php
//Menampilkan angka 1 sampai 10 dgn gunakan continue

$counter = 1;

for ($counter; $counter <= 10; $counter++) {
    if ($counter == 5) {
        continue;
    }
    echo "Angka Ke-$counter" . PHP_EOL;
}
