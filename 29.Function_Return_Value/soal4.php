<?php 

//Cek Bilangan Genap atau Ganjil
function cekGenapGanjil(int $value): string {
    if($value %2 == 0) {
        return "Genap";
    }else {
        return "Ganjil";
    }
}

$cekAngka = cekGenapGanjil(13);
echo $cekAngka . PHP_EOL;
var_dump($cekAngka);
?>