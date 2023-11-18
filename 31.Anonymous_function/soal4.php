<?php
/*Harus menerima daftar bilangan bulat
dan daftar yang hanya berisi bilangan positif*/

$numbers = [-5, 10, -8, 3, 0, 12];

//Filter untuk bilangan positif
$positiveNumbers = array_filter($numbers, function($x) {
    return $x > 0;
});

//Menampikan hasil
print_r($positiveNumbers);