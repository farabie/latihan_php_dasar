<?php
/* 
Buatlah sebuah fungsi yang menerima dua parameter, 
sebuah array, dan sebuah callback function.
*/
function applyCallback($array, $callback)
{
    $result = [];
    foreach ($array as $value) {
        $result[] = $callback($value);
    }
    return $result;
}

$numbers = [1, 2, 3, 4, 5];
$square = function ($n) {
    return $n * $n;
};

$result = applyCallback($numbers, $square);
print_r($result); // Output: [1, 4, 9, 16, 25]
