<?php
//Menampilkan angka 1 sampai 20 dan gunakan break jika angka ditampilkan sama dengan 15
$counter = 1;

for ($counter; $counter <= 20; $counter++) {
    if ($counter == 15) {
        break;
    }
    echo "Angka Ke-$counter" . PHP_EOL;
}
