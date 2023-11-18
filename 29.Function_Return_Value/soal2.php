<?php 
/*Multiplication menerima dua angka floating point 
dan mengembalikan hasil perkalian*/

function multiplaction(float $angka1, float $angka2): float {
    return $angka1 * $angka2;
}

$total = multiplaction(10.5, 6.7);
echo $total . PHP_EOL;
var_dump($total);


?>