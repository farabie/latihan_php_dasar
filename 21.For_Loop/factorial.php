<?php 

function factorial($angka) {
    $factorial = 1;

    for($i = 1; $i <= $angka; $i++) {
        $factorial *= $i;
    }
    
    return $factorial;
}

$angka = 5;
$result = factorial($angka);

echo "Factorial dari $angka! adalah $result";


?>