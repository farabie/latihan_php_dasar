<?php

//Callback dengan parameter tambahan
function applyCallbackWithParams($array, $callback, ...$params)
{
    $result = [];
    foreach ($array as $value) {
        $result[] = $callback($value, ...$params);
    }
    return $result;
}

$numbers = [1, 2, 3, 4, 5];
$exponential = function ($n, $exp) {
    return pow($n, $exp);
};

$result = applyCallbackWithParams($numbers, $exponential, 2);
print_r($result); // Output: [1, 4, 9, 16, 25]
?>