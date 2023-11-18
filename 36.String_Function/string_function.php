<?php 

//Menggabungkan array menjadi string
var_dump(join(" ", [1, 2, 3, 4, 5]));
var_dump(implode("-", ["Abie", "Apel", "Anggur"]));

//Memecah String Menjadi array
var_dump(explode(" ", "Farabie"));

//Mengubah string menjadi lowercase
var_dump(strtolower("Muhammad Farabie"));

//Mengubah string menjadi uppercase
var_dump(strtoupper("Muhammad Farabie"));

//Mengambil sebagian string
var_dump(substr("Muhammad Farabie", 2, 5));

//Menghapus whitespace
var_dump(trim("     Farabie    "));
?>