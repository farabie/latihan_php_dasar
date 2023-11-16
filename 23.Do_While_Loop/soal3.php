<?php 
//Menampilkan deret angka genap dari 2 hingga 10

$counter = 2;

do{
    if($counter % 2== 0) {
        echo "Angka Genap ke $counter" . PHP_EOL;
    }
    $counter++;
}while($counter <= 10);

?>