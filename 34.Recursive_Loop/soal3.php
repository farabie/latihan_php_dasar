<?php 
//Function Pangkat
function pangkat($x, $y) {
    if($y == 0) {
        return 1;
    }else {
        return $x * pangkat($x, $y -1);
    }
}

$x = 2;
$y = 5;

echo "Hasil dari $x^$y adalah: " . pangkat($x, $y) . PHP_EOL;
?>