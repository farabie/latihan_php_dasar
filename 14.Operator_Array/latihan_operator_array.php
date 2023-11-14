<?php 

//Array Indexing
$month =  ["Januari", "Februari", "Maret"];
echo $month[1] . PHP_EOL;

//Array Associative
$mahasiswa = [
    "nama" => "John",
    "umur" => 25,
];
echo "Nama: {$mahasiswa['nama']}, Umur: {$mahasiswa['umur']}" . PHP_EOL;

//Operasi Array
$angka = [1, 2, 3, 4, 5];

$angka[6] += 6;
var_dump($angka);
unset($angka[2]);
var_dump($angka);

//Penggunaan Foreach
$buah =  ["Apel", "Jeruk", "Pisang", "Mangga"];
foreach($buah as $buahs) {
    echo $buahs . PHP_EOL;
}

//Operasi Array Associative
$mobil = [
    "merk" => "Toyota",
    "tahun" => 2020,
];

$mobil["merk_baru"] = "Honda";
$mobil["tahun_baru"] = 2018;

var_dump($mobil);
?>