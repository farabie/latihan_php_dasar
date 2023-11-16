<?php 
//Menampilkan angka 1 sampai 10 dgn gunakan break

$counter = 1;

for($counter; $counter <= 10; $counter++) {
    if($counter == 5) {
        break;
    }
    echo "Angka Ke-$counter" . PHP_EOL;
}


?>