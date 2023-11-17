<?php 

function sum(int $angka1, int $angka2) {
    $total = $angka1 + $angka2;
    echo "Total $angka1 + $angka2 = $total" . PHP_EOL;
}

sum(100, 100);
//Ini error karena function sum sudah dideklarasikan tipenya int
// sum("100", "100");
// sum(true, false);
// sum([], []);

?>