<?php 
/*
    Fungsi untuk menerima sebuah array
    dan callback untuk membandingkan array yang diurutkan
    //Membandingkan array yang lengthnya paling sedikit
*/

function sortWithCallback($array, $callback) {
    usort($array, $callback);
    return $array;
}

$fruits = ["Mangga", "Apel", "Jeruk", "i"];
$lenthCompare = fn($a, $b) => strlen($a) <=> strlen($b);
$result = sortWithCallback($fruits, $lenthCompare);
print_r($result);
?>