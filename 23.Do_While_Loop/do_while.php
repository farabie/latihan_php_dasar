<?php 
$counter = 100;

//Jadi kalau menggunakan do while dia akan mengeksekusi dulu baru ditambahkan kemudian dicek kondisi nya

do{
    echo "Hello While Loop: " . $counter . PHP_EOL;
    $counter++;
}while($counter <= 10);


?>