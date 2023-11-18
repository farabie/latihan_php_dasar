<?php 

function sum(int $angka1, int $angka2): int {
    return $angka1 + $angka2;
}

$total = sum(20, 20);
echo $total . PHP_EOL;
var_dump($total);

function getValue($value) {
    if($value >= 80) {
        return "A";
    }else if($value >= 70) {
        return "B";
    }else if($value >= 60) {
        return "C";
    }else if ($value >= 50) {
        return "D";
    }else {
        return "E";
    }
}

$total = getValue(75);
echo $total . PHP_EOL;
var_dump($total);

?>