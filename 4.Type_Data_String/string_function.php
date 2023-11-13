<?php 

$description = "Ini adalah deskripsi";

//Mengetahui berapa panjang string atau karakter
echo strlen($description) . PHP_EOL;

//Mengetahui berapa banyak kata dalam string
$description1 = "Halo Dengan Siapa Disana";
echo str_word_count($description1) . PHP_EOL;

//Function untuk reverse string
$title = "Title ini adalah";
echo strrev($title) . PHP_EOL;

//Mencari kata didalam string dengan posisi di kata kedua
$tisue = "ada";

echo strpos("tisue adalah", $tisue) . PHP_EOL;

//Mengganti string 
$mouse = "Mouse";
// Kata pertama yang akan diganti kata kedua yang diganti
echo str_replace("Tikus", $mouse, "Hello Tikus");

?>