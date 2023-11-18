<?php

function gantiSubstring($inputString, $substring, $pengganti)
{
    $pos = strpos($inputString, $substring);

    if ($pos !== false) {
        $inputString = substr_replace($inputString, $pengganti, $pos, strlen($substring));
        return gantiSubstring($inputString, $substring, $pengganti);
    }

    return $inputString;
}

// Contoh penggunaan
$stringAwal = "PHP sangat PHP";
$substring = "PHP";
$pengganti = "JavaScript";

echo "String Awal: $stringAwal \n";
echo "Substring yang akan diganti: $substring \n";
echo "String Pengganti: $pengganti \n";

$hasil = gantiSubstring($stringAwal, $substring, $pengganti);
echo "Hasil setelah penggantian: $hasil";
