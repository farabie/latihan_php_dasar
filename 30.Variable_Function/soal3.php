<?php

//Validasi Input Dinamis
function validasiInput($nilai, $batasBawah, $batasAtas, $validasi)
{
    $isValid = $validasi($nilai);
    return $isValid && $nilai >= $batasBawah && $nilai <= $batasAtas;
}

// Fungsi Validasi Bilangan Genap
$validasiGenap = function ($nilai) {
    return $nilai % 2 == 0;
};

// Contoh penggunaan
$nilai = 14;
$batasBawah = 10;
$batasAtas = 20;

if (validasiInput($nilai, $batasBawah, $batasAtas, $validasiGenap)) {
    echo "$nilai adalah bilangan genap dalam rentang $batasBawah-$batasAtas" . PHP_EOL;
} else {
    echo "$nilai tidak memenuhi kriteria" . PHP_EOL;
}

?>