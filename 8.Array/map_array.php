<?php

$crewMugiwara = [
    "captain" => "Luffy",
    "swordman" => "Zoro",
    "navigator" => "Nami",
    "shoter" => "Usop",
    "cook" => "Sanji"
];

//Mengambil value dengan key captain
echo $crewMugiwara['captain'] . PHP_EOL;

//Mengganti value
echo $crewMugiwara['navigator'] = 'Zoro';
var_dump($crewMugiwara);

//Menghapus data dengan sesuai index
unset($crewMugiwara['swordman']);
var_dump($crewMugiwara);

//Menambahkan data kedalam MAP
$crewMugiwara['doctor'] = "Chopper";
var_dump($crewMugiwara);

//Menghitung jumlah array
echo "Total Jumlah Crew Saat ini: " .  count($crewMugiwara);

$employee =  array("name" => "Farabie", "address");
