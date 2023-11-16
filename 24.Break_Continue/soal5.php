<?php
//Menampilkan angka 1 sampai 20 gunakan continue jika habis dibagi 3

$counter = 1;

for ($counter; $counter <= 20; $counter++) {
    if ($counter % 3 == 0) {
        continue;
    }
    echo "Angka abis dibagi 3 adlah = $counter" . PHP_EOL;
}
