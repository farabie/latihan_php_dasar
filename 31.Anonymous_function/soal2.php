<?php 

//Daftar Bilangan bulat gunakan anonymous function

$numbers = [1, 2, 3, 4, 5];

$squareNumbers = array_map(function($x) {
    return $x ** 2;
}, $numbers);

print_r($squareNumbers);

?>