<?php 
$arrayNumber1 = [1, 2, 3];
$arrayNumber2 = [7, 9, 11];

//Kalau mengabungkan dengan array biasa maka dia akan mengambil array yang pertama
$arrayNumber3 = $arrayNumber1 + $arrayNumber2;
var_dump($arrayNumber3);

//Ini juga berlaku untuk string array
$arrayName1 = ["Abie", "Farel", "Laroa"];
$arrayName2 = ["Lals", "Luffy", "Zoro"];

$arrayName3 = $arrayName1 + $arrayName2;
var_dump($arrayName3);

$pegawai1 = [
    "firstName" => "Luffy",
];

$pegawai2 = [
    "lastName" => "Taro",
];

$array1 = [
    "name" => "abie"
];
$array2 = [
    "name" => "abie"
];
$array3 = [
    "name" => "abie",
    "address" => "Bengkulu"
];
//Union
var_dump($pegawai1 + $pegawai2);
//Equality (True jika $variable1 dan $variable memiliki key value sama)
var_dump($array1 == $array2);
//Identify (True jika $variable1 dan $variable memiliki key value sama dan posisi sama)
var_dump($array1 === $array3);
//Inequality (True jika $variable1 dan $variable tidak sama)
var_dump($array1 != $array3);
//Inequality (True jika $variable1 dan $variable tidak sama)
var_dump($array1 <> $array2);
//Nonidentify (True jika $variable1 dan $variable tidak identik)
var_dump($array1 !== $array2);
?>