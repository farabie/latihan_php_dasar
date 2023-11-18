<?php

function hitungKemunculanKarakter($string)
{
    $kemunculan = array();

    // Menghitung kemunculan setiap karakter
    for ($i = 0; $i < strlen($string); $i++) {
        $karakter = $string[$i];
        if (isset($kemunculan[$karakter])) {
            $kemunculan[$karakter]++;
        } else {
            $kemunculan[$karakter] = 1;
        }
    }

    return $kemunculan;
}

// Contoh penggunaan
$string = "programming";

$hasilKemunculan = hitungKemunculanKarakter($string);

// Menampilkan hasil
echo "String: $string <br>";
echo "Hasil kemunculan karakter: <pre>";
print_r($hasilKemunculan);
echo "</pre>";
