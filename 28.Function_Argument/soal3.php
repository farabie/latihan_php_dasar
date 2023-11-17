<?php 

/* 
Buatlah fungsi bernama jumlah_karakter yang menerima satu
parameter berupa string dan satu parameter berupa integer.
*/

function jumlah_karakter(string $karakter, int $jmlKarakter) {
    if(is_string($karakter) && is_int($jmlKarakter)) {
        return substr($karakter,0, $jmlKarakter);
    }else {
        return "Input tidak valid";
    }
}

$hasil = jumlah_karakter("Perjalanan Jauh", 5);
echo $hasil;

?>