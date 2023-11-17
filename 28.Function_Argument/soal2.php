<?php 
//Tampilkan info dengan paramater string dan int

function tampilkan_info(string $name, int $age = 23) {
    echo "Name: $name, Age: $age" . PHP_EOL;
}

tampilkan_info("Abie");


?>