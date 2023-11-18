<?php 

function cetakAngka($n) {
    if($n > 0) {
        cetakAngka($n -1);
        echo $n . " ";
    }
}

$n = 5;
echo "Cetak angka dari 1 hingga $n: ";
cetakAngka($n);

?>