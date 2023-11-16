<?php 

//Break digunakan untuk menghentikan seluruh perulangan

$counter = 1;

while(true) {
    echo "Hello Break: " . $counter . PHP_EOL;
    $counter++;

    if($counter > 10) {
        break;
    }
}

?>