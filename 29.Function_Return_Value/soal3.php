<?php 

function square(int $angka1): int {
    return $angka1 ** 2;
}

$total = square(12);
echo $total . PHP_EOL;
var_dump($total);

?>