<?php
$angka1 = 0;
do {
    $angka2 = 0;
    do {
        echo "* ";
        $angka2++;
    } while ($angka2 <= $angka1);
    echo "\n";
    $angka1++;
} while ($angka1 < 3);
