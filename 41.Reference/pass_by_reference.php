<?php 

function decrement(int &$value) {
    $value--;
}

$counter = 10;
decrement($counter);

echo $counter . PHP_EOL

?>