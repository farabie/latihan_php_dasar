<?php 
//Cek Genap Ganjil

$cekGenapGanjil = function ($angka1) {
    if($angka1 % 2 == 0) {
        return "Genap";
    }else {
        return "Ganjil";
    }
};

$cek = $cekGenapGanjil(15);
echo $cek;

?>