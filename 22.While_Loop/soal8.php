<?php
$batasAtas = 20;
echo "Angka prima dari 1 hingga $batasAtas: ";

$i = 2;

while ($i <= $batasAtas) {
    $j = 2;
    $isPrima = true;

    while ($j <= $i / 2) {
        if ($i % $j == 0) {
            $isPrima = false;
            break;
        }
        $j++;
    }

    if ($isPrima) {
        echo $i . " ";
    }

    $i++;
}
