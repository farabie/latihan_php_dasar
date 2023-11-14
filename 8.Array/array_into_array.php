<?php 

$employee = [
    "name" => "Abie",
    "age" => 23,
    "blood_type" => "O",
    "address" => [
        "office" => "Jalan Panjaitan Rawa Mangun",
        "house" => "Perumahan griya Mentari",
    ]
];

var_dump($employee);
echo 'Nama saya adalah: ' .  $employee['name'] . PHP_EOL;
//Ini errror karena dalam bentuk array tidak bisa di print jadi string
// echo 'Alamat saya: ' .  $employee['address'] . PHP_EOL;

//Ini bisa karena dia sudah spesifik menyebutkan array adress dengan key office
echo 'Alamat saya kantor: ' . $employee['address']['office'] . PHP_EOL;

?>