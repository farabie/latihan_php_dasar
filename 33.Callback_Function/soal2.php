<?php 
//Membuat fungsi untuk menerima sebuah array dan callback function

function filterWithCallback($array, $callback) {
    $result = [];
    foreach($array as $value) {
        $result[] = $callback($value);
    }
    return $result;
}


$numbers = [1, 3, 4, 6, 8, 10];
$isEven = fn($n) => $n % 2 == 0;

$total = filterWithCallback($numbers, $isEven);
var_dump($total);
?>