<?php 

function sum(int $first, int $second) {
    return $first + $second;
}

//Kalau melakukan return maka dia bisa menyimpan ke dalam variable
$total = sum(10, 20);
var_dump($total);

$total = sum(20, 20);
var_dump($total);


// function sum(int $angka1, int $angka2) {
//     echo "$angka1 + $angka2 = " . ($angka1 + $angka2) . PHP_EOL;
// }
// $total = sum(20, 20);
// //Kalau tidak Menggunakan return maka function yang dimasukan
// //Kedalam varible maka akan menghasilkan null
// var_dump($total);

?>