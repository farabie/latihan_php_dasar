<?php 

function sayHello(string $name, $function) {
    $finalName = $function($name);
    echo "Hello $finalName" . PHP_EOL;
}

function squareFun($angka):string {
    return $angka ** 2;
}
function square(int $angka, $square):void {
    $finalSquare = $square($angka);
    echo "Hasil Akhir dari Perpangkatan $finalSquare" . PHP_EOL;
}

//Untuk memasukan fungsi uppercase
//Jadi parameter kedua otomatis akan jadi function
sayHello("Abie","strtoupper");
sayHello("Abie", "strtolower");

//Atau kita bisa seperti ini memasukan function sebagai function
square(20, "squareFun")

?>