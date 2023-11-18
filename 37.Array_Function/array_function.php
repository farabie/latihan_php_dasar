<?php 

$array1 = [10, 7, 12, 1, 8, 3];
$map = [
    "firstName" => "Muhammad",
    "lastName"=> "Farabie",
];

//Mengambil semua keys milik array/array association
var_dump(array_keys($map));

//Mengambil semua values milik array/array association
var_dump(array_values($map));

//Mengubah semua data array dengan callback
var_dump(array_map(fn($array1) => $array1 *2 , $array1));

//Mengurutkan array
sort($array1);
var_dump($array1);

sort($map);
var_dump($map);

//Mengurutkan array terbalik
rsort($map);
var_dump($map);

rsort($array1);
var_dump($array1);

//Mengubah posisi data di array secara random
shuffle($array1);
var_dump($array1);
?>