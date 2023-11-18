<?php

/* 
Buatlah fungsi bernama jumlah_karakter yang menerima satu
parameter berupa string dan satu parameter berupa integer.
*/
//Hitung jumlah karakter dalam sebuah string
function cekJumlahKarakter(string $karakter,): int {
    return strlen($karakter);
}


$hasil = cekJumlahKarakter("Perjalanan Jauh");
echo $hasil . PHP_EOL;
var_dump($hasil);

?>