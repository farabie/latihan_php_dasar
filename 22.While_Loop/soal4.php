<?php

//Menampilkan bilangan ganjil dari 1 hingga 15
$counter = 1;

while ($counter <= 15) {
    if ($counter % 2 != 0) {
        echo "Angka ganjil ke-$counter" . PHP_EOL;
    }
    $counter++;
}


?>