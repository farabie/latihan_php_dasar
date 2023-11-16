<?php 
//Menampilkan angka genap dari 2 hingga 12

$counter = 2;

while($counter <= 20) {
    if($counter % 2 == 0) {
        echo "Angka genap ke-$counter" . PHP_EOL;
    }
    $counter++;
}



?>