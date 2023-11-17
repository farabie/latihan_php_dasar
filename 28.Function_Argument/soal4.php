<?php 
/* 
Buatlah fungsi bernama jumlah_total yang menerima jumlah variabel argument 
dan mengembalikan hasil penjumlahan dari semua argument tersebut.
*/
$totals = [10, 20, 12, 17];

function jumlah_total(...$angkas) {
    $total = 0;
    foreach($angkas as $angka) {
        $total += $angka;
    }

    echo "Total " . implode(" + ", $angkas) . " = $total" . PHP_EOL;
}

jumlah_total(10, 20, 30, 40, 71);
jumlah_total(...$totals);
?>