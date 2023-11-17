<?php 

$array1 = [10, 20, 30, 40];

function sumAll(...$values) {
    $total = 0;

    foreach($values as $value) {
        $total += $value;
    }

    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

//ini jika yang dimasukan array
sumAll(...$array1);
//ini jika yang kita masukan bukan array
sumAll(10, 20, 30, 40)

?>