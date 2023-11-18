<?php 
//Fungsi Pengurangan (Substraction) bilangan bulat
function substraction(int $angka1, int $angka2): int {
    return $angka1 - $angka2;
}

$total = substraction(20, 30);
echo $total . PHP_EOL;
var_dump($total);


?>