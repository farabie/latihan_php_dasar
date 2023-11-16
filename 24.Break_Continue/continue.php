<?php 
//Continue digunakan untuk menghentikan perulangan saat ini
//Lalu melanjutkan ke perulangan selanjutnya

//Untuk menentukan bilangan ganjil

for($counter = 0; $counter <= 100; $counter++) {
    if($counter % 2 == 0) {
        continue;
    }

    echo "Hello Continue: " . $counter . PHP_EOL;
}

?>