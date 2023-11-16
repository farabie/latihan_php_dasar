<?php
$suku = 8;
$angkaSebelumnya = 0;
$angkaSekarang = 1;
$counter = 1;

echo "Deret Fibonacci hingga suku ke-$suku: ";

while ($counter <= $suku) {
    echo $angkaSebelumnya . " ";

    $temp = $angkaSebelumnya + $angkaSekarang;
    $angkaSebelumnya = $angkaSekarang;
    $angkaSekarang = $temp;

    $counter++;
}
