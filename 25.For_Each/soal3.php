<?php 
//Menampilkan nama kota dengan kondisi jika ada bandung maka break

$cities = ["Jakarta", "Surabaya", "Bandung", "Yogyakarta"];

foreach ($cities as $city){
    if($city == "Bandung") {
        break;
    }
    echo "Kota Kota yang ada di indonesia: " . $city . PHP_EOL;
}

?>