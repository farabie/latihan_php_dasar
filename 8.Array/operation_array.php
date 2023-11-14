<?php 

$namaWargaWano = array("Kanjuro", "Momonosuke", "Raizo", "Kanjuro");

//Mengambil data sesuai dengan index
$kanjuro = $namaWargaWano[0];
echo $kanjuro . PHP_EOL;

//Mengganti value sesuai dengan index
$namaWargaWano[3] = "Penghianat";
echo "Index ke 2 dari nama warga wano adalah: " . $namaWargaWano[2];

//Menghapus data di array
unset($namaWargaWano[3]);
var_dump($namaWargaWano);

//Menambah data pada posisi belakang
$namaWargaWano[3] = "Kozuki Oden";
var_dump($namaWargaWano);

//Menghitung jumlah array
$jumlahWargaWano = count($namaWargaWano);
echo "Jumlah Warga Wano Adalah: " . $jumlahWargaWano;

?>