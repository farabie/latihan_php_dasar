<?php

$primas = [2, 3, 5, 7, 11, 13,  17, 19, 23];
$counter = 0;

foreach ($primas as $prima) {
    echo "Bilangan Prima Ke-" . $prima . PHP_EOL;
    $counter++;

    if ($counter == 5) {
        break;
    }
}
